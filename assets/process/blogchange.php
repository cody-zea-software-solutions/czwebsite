<?php
require_once 'database.php'; // Include database connection

if (isset($_POST['id']) ) {
    $id = intval($_POST['id']); // Sanitize input
    $blogs_per_page = 3;

    $count_query = "SELECT * FROM `blogs` INNER JOIN `blog_categories` ON `blogs`.`blog_categories_bc_id` = `blog_categories`.`bc_id` ";
    if ($id != 0) {
        $count_query .= " WHERE `bc_id` = $id ";
    }
    $count_query .= " ORDER BY `blog_date` ASC ";

    // Prepare and execute SQL query
    $conn = Databases::getConnection();

    $stmt = $conn->prepare($count_query);
    $stmt->execute();
    $count = $stmt->get_result();
    $total_pages = ceil($count->num_rows / $blogs_per_page);

    if ($id != 0) {
        $stmt = $conn->prepare("SELECT * FROM `blogs` INNER JOIN `blog_categories` ON `blogs`.`blog_categories_bc_id` = `blog_categories`.`bc_id` WHERE `bc_id` = ? ORDER BY `blog_date` ASC LIMIT ? ");
        $stmt->bind_param("ii", $id,$blogs_per_page);
        $stmt->execute();
        $result = $stmt->get_result();
    } else {
        $stmt = $conn->prepare("SELECT * FROM `blogs` INNER JOIN `blog_categories` ON `blogs`.`blog_categories_bc_id` = `blog_categories`.`bc_id` ORDER BY `blog_date` ASC LIMIT ? ");
        $stmt->bind_param("i", $blogs_per_page, );
        $stmt->execute();
        $result = $stmt->get_result();
    }

    for ($x = 1; $x <= $result->num_rows; $x++) {
        $res = $result->fetch_assoc();
        $formattedDate = date('F j, Y', strtotime($res['blog_date']));
?>
        <div class="th-blog blog-single has-post-thumbnail">
            <div class="blog-img">
                <a href=""><img src="<?php echo $res['blog_img']; ?>" alt="Blog Image"></a>
            </div>
            <div class="blog-content">
                <div class="blog-meta">
                    <a href="" class="text-orange"><i class="fa-light fa-calendar"></i><?php echo $formattedDate; ?></a>
                    <a href="" class="text-orange"><i class="fa-light fa-tags"></i> <?php echo $res['bc_name']; ?></a>
                </div>
                <h3 class="blog-title"><a href=""><?php echo $res['blog_name']; ?></a>
                </h3>
                <p class="blog-text text-secondary truncate" id="blogDesc<?php echo $res['blog_id']; ?>">
                                        <?php echo $res['blog_desc']; ?>
                                    </p>
                                    <a href="javascript:void(0);" onclick="toggleReadMore(<?php echo $res['blog_id']; ?>)" id="readMoreBtn<?php echo $res['blog_id']; ?>" class="th-btn black-border th-icon th-radius">
                                        Read More <i class="fa-regular fa-arrow-left ms-2"></i>
                                    </a>
            </div>
        </div>
    <?php
    }
    ?>

    <div class="th-pagination ">
        <ul>
            <li onclick="blogPagination(0);"><a class="hand"><i class="fa-regular fa-arrow-left"></i></a></li>
            <?php
            for ($x = 1; $x <= $total_pages; $x++) {
            ?>
                <li onclick="blogPagination(<?php echo $x; ?>);"><a class="hand <?php if ($x == $id) {
                                                                                    echo "bg-orange";
                                                                                } ?>"><?php echo $x; ?></a></li>
            <?php
            }
            ?>
            <li onclick="blogPagination(2);"><a class="hand"><i class="fa-regular fa-arrow-right"></i></a></li>
        </ul>
    </div>
<?php

    $stmt->close();
} else {
?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center text-o">
                <h6>No Results</h6>
            </div>
        </div>
    </div>
<?php
}
?>