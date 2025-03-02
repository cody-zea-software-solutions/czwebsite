<?php
require_once 'database.php'; // Include database connection

if (isset($_POST['id'])) {
    $id = intval($_POST['id']); // Sanitize input

    // Prepare and execute SQL query
    $conn = Databases::getConnection();
    $stmt = $conn->prepare("SELECT * FROM `pack` INNER JOIN `solution` ON `solution`.`sol_id`=`pack`.`solution_sol_id` WHERE `solution_sol_id` = ? ORDER BY `pack_id` ASC ");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $sol_name = $result->fetch_assoc();

    ?>

        <div class="container px-md-5">
            <div class="title-area text-center">
                <h3 class="sec-title text-o"><?php echo $sol_name['sol_name']; ?> package</h3>
                <p class="text-dark px-5"><?php echo $sol_name['sol_desc']; ?></p>
            </div>
            <div id="monthly" class="wrapper-full">
                <div class="row gy-4 justify-content-center">

                    <?php
                    $result->data_seek(0);
                    $n = 0;
                    $f_round = 0;

                    for ($x = 1; $x <= $result->num_rows; $x++) {
                        $data = $result->fetch_assoc();
                    ?>

                        <div class="col-xl-4 col-md-6">
                            <div class="price-box th-ani <?php if ($x == 2) {
                                                                echo "active orange-border";
                                                            } else {
                                                                echo "side-border";
                                                            } ?>">
                                <span class="offer-tag text-orange"><?php if ($x == 2) {
                                                                        echo "popular";
                                                                    } ?></span>
                                <div class="text-center">
                                    <h3 class="box-title"><?php echo $data['pack_name']; ?></h3>

                                    <h4 class="box-price" style="margin-bottom: 0px !important;"><span class="price-tag"></span><span class="text-orange">$<?php echo $data['pack_price']; ?></span></h4>
                                    <h5 style="margin-top: 0px !important; font-weight: 600 !important;" class="text-decoration-line-through text-o">$<?php echo $data['pack_before_price']; ?></h5>
                                    <p class="box-text2" style="padding: 0px;"><?php echo $data['pack_desc']; ?></p>
                                </div>
                                <a href="package-details.php?package_identity=<?php echo $data['pack_id']; ?>" class="th-btn style4 btn-fw th-radius th-icon">Get Started<i
                                        class="fa-regular fa-arrow-right ms-2"></i></a><br>
                                <a onclick="addToCart(<?php echo $data['pack_id']; ?>);" class="th-btn btn-fw th-radius hover" style="background-color: white !important; border: 2px solid !important;">Add To Cart<i
                                        class="fa-regular fa-arrow-right ms-2"></i></a>
                                <div class="box-content">
                                    <div class="available-list" style="padding-left: 10px !important; padding-right: 10px !important; margin: 0px !important;">

                                        <ul>
                                            <?php

                                            // Prepare and execute SQL query
                                            $query = "(SELECT * FROM `pack_features` WHERE `pack_pack_id` = ? AND `status` = 1 ORDER BY `f_id` ASC)
                                                        UNION
                                                        (SELECT * FROM `pack_features` WHERE `pack_pack_id` = ? AND `status` != 1 ORDER BY `f_id` ASC) ";
                                            $stmt = $conn->prepare($query);
                                            $stmt->bind_param("ii", $data['pack_id'], $data['pack_id']);
                                            $stmt->execute();
                                            $results = $stmt->get_result();

                                            if ($x == 1) {
                                                $part1 = floor($results->num_rows / 2);
                                                $part2 = ceil($results->num_rows / 2);
                                                $f_round = $part1;
                                            } else {
                                                $part1 = $f_round;
                                                $part2 = $results->num_rows - $part1;
                                            }

                                            for ($y = 1; $y <= $part1; $y++) {
                                                $n = $n + 1;
                                                $fet = $results->fetch_assoc();
                                                if ($fet['status'] == 1) {
                                            ?>
                                                    <li class="f-list"><?php echo $fet['f_name']; ?></li>
                                                <?php
                                                } else {
                                                ?>
                                                    <li class="nf-list unavailable"><?php echo $fet['f_name']; ?></li>
                                            <?php
                                                }
                                            }
                                            ?>
                                            <div class="d-none mb-3" id="showMoreList_<?php echo $x; ?>">
                                                <?php
                                                $n = $n + 1;
                                                for ($y = 1; $y <= $part2; $y++) {
                                                    $fet = $results->fetch_assoc();
                                                    if ($fet['status'] == 1) {
                                                ?>
                                                        <li class="f-list"><?php echo $fet['f_name']; ?></li>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <li class="nf-list unavailable"><?php echo $fet['f_name']; ?></li>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </ul>

                                    </div>
                                </div>

                                <div class="text-center text-dark mt-3">
                                    <span class="text-o fw-semibold hover" onclick="showMore(<?php echo $x; ?>);" id="showMoreBtn_<?php echo $x; ?>"><i class="bi bi-chevron-double-down h6"></i>&nbsp;More Features</span>
                                </div>
                            </div>
                        </div>

                    <?php
                    }
                    ?>

                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

            <script>
                // Initialize all popovers when the document is ready
                document.addEventListener('DOMContentLoaded', function() {
                    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
                    var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
                        return new bootstrap.Popover(popoverTriggerEl);
                    });
                });
            </script>

        </div>
    <?php
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