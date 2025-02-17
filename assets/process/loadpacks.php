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
                <h3 class="sec-title text-o"><?php echo $sol_name['sol_name'];
                                                $result->data_seek(0); ?> package</h3>
                <p class=""><?php echo $sol_name['sol_desc']; ?></p>
            </div>
            <div id="monthly" class="wrapper-full">
                <div class="row gy-4 justify-content-center">

                    <?php
                    $index = 1;
                    while ($packData = $result->fetch_assoc()) {
                        $packs[$index] = $packData['pack_id'];
                        $index++;
                    }
                    $result->data_seek(0);
                    $n = 1;

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
                                    <h4 class="box-price"><span class="text-orange">$<?php echo $data['pack_price']; ?></span><span class="duration">/Per Month</span></h4>
                                    <p class="box-text2"><?php echo $data['pack_desc']; ?></p>
                                </div>
                                <a href="pack-details.php?id=<?php echo $data['pack_id']; ?>" class="th-btn style4 btn-fw th-radius th-icon">Get Started<i
                                        class="fa-regular fa-arrow-right ms-2"></i></a>
                                <div class="box-content">
                                    <div class="available-list">

                                        <ul>
                                            <?php

                                            // Prepare and execute SQL query
                                            $stmt = $conn->prepare("SELECT * FROM `pack_features` WHERE `pack_pack_id` = ? OR `pack_pack_id` = ? OR `pack_pack_id` = ? ORDER BY `f_id` ASC ");
                                            $stmt->bind_param("iii", $packs[1], $packs[2], $packs[3]);
                                            $stmt->execute();
                                            $results = $stmt->get_result();

                                            $part1 = floor($results->num_rows / 2);
                                            $part2 = ceil($results->num_rows / 2);

                                            if ($x == 1) {

                                                for ($y = 1; $y <= $part1; $y++) {
                                                    $fet = $results->fetch_assoc();
                                                    if ($fet['pack_pack_id'] == $packs[$n]) {
                                            ?>
                                                        <li><?php echo $fet['f_name']; ?></li>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <li class="unavailable"><?php echo $fet['f_name']; ?></li>
                                                <?php
                                                    }
                                                }
                                                ?>
                                                <div class="d-none mb-3" id="showMoreList_1">
                                                    <?php
                                                    for ($y = 1; $y <= $part2; $y++) {
                                                        $fet = $results->fetch_assoc();
                                                        if ($fet['pack_pack_id'] == $packs[$n]) {
                                                    ?>
                                                            <li><?php echo $fet['f_name']; ?></li>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <li class="unavailable"><?php echo $fet['f_name']; ?></li>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                                <?php
                                            } elseif ($x == 2) {

                                                for ($y = 1; $y <= $part1; $y++) {
                                                    $fet = $results->fetch_assoc();
                                                    if ($fet['pack_pack_id'] == $packs[$n] || $fet['pack_pack_id'] == $packs[$n + 1]) {
                                                ?>
                                                        <li><?php echo $fet['f_name']; ?></li>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <li class="unavailable"><?php echo $fet['f_name']; ?></li>
                                                <?php
                                                    }
                                                }
                                                ?>
                                                <div class="d-none mb-3" id="showMoreList_2">
                                                    <?php
                                                    for ($y = 1; $y <= $part2; $y++) {
                                                        $fet = $results->fetch_assoc();
                                                        if ($fet['pack_pack_id'] == $packs[$n] || $fet['pack_pack_id'] == $packs[$n + 1]) {
                                                    ?>
                                                            <li><?php echo $fet['f_name']; ?></li>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <li class="unavailable"><?php echo $fet['f_name']; ?></li>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                                <?php

                                            } elseif ($x == 3) {

                                                for ($y = 1; $y <= $part1; $y++) {
                                                    $fet = $results->fetch_assoc();
                                                    if ($fet['pack_pack_id'] == $packs[$n] || $fet['pack_pack_id'] == $packs[$n + 1] || $fet['pack_pack_id'] == $packs[$n + 2]) {
                                                ?>
                                                        <li><?php echo $fet['f_name']; ?></li>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <li class="unavailable"><?php echo $fet['f_name']; ?></li>
                                                <?php
                                                    }
                                                }
                                                ?>
                                                <div class="d-none mb-3" id="showMoreList_3">
                                                    <?php
                                                    for ($y = 1; $y <= $part2; $y++) {
                                                        $fet = $results->fetch_assoc();
                                                        if ($fet['pack_pack_id'] == $packs[$n] || $fet['pack_pack_id'] == $packs[$n + 1] || $fet['pack_pack_id'] == $packs[$n + 2]) {
                                                    ?>
                                                            <li><?php echo $fet['f_name']; ?></li>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <li class="unavailable"><?php echo $fet['f_name']; ?></li>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            <?php

                                            }

                                            ?>
                                        </ul>

                                    </div>
                                </div>

                                <div class="text-center text-dark">
                                    <span class="text-o fw-semibold hover" onclick="showMore(<?php echo $x; ?>);" id="showMoreBtn_<?php echo $x; ?>"><i class="bi bi-chevron-double-down h6"></i>&nbsp;More Features</span>
                                </div>
                            </div>
                        </div>

                    <?php
                    }
                    ?>

                </div>
            </div>
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