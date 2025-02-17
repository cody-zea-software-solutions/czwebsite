<?php
session_start();
// Include your database connection file if necessary
require_once "db.php";

// Check if the ID is set in the request
if (isset($_POST['uid']) && isset($_POST['id']) && isset($_POST['tid'])) {
    $uid = $_POST['uid'];
    $id = $_POST['id'];
    $tid = $_POST['tid'];
    $total = 0;

    $result = Databases::Search("SELECT * FROM `user_has_features` WHERE `user_user_id` = '$uid' AND `features_f_id` = '$id' ");
    if ($result->num_rows != 0) {
        echo ("ara");
    } else {

        Databases::IUD("INSERT INTO `user_has_features`(`user_user_id`,`features_f_id`) VALUES ('$uid','$id');");
        $res = Databases::Search("SELECT * FROM `user_has_features` INNER JOIN `features` ON `features`.`f_id` = `user_has_features`.`features_f_id` WHERE `user_user_id` = '$uid' AND `types_type_id` = '$tid' ");
        for ($i = 1; $i <= $res->num_rows; $i++) {
            $row = $res->fetch_assoc();
            $total = $total + $row['price'];
?>
            <div class="col-6  mt-4">
                <div class="card card-margine position-relative">
                    <!-- "+" Button at Top Right -->
                    <button class="btn btn-warning position-absolute plus-btn rounded-circle d-flex justify-content-center align-items-center" onclick="removeFeatures('<?php echo $_SESSION['user_id']; ?>','<?php echo $row['f_id']; ?>','<?php echo $tid; ?>');"><img src="assets/img/remove.svg" class="img- ri"></button>

                    <!-- Card content -->
                    <div class="card-header border-0 bg-white d-flex justify-content-center align-items-center">
                        <img src="assets\img\card_img.svg" class="img-fluid" style="width: 100px;">
                    </div>
                    <div class="card-body pt-0">
                        <div class="widget-49">
                            <div class="widget-49-title-wrapper">
                                <div class="widget-49-meeting-info px-1 text-lg-center">
                                    <p class="text-dark m-0 h5 scrolling-text"><?php echo $row['f_name']; ?></p>
                                    <p class="box-text2 m-0">NZD <?php echo $row['price']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php
        }
        $formattedTotal = number_format($total, 2, '.', '');
        if ($res->num_rows == 0) {
        ?>
            <div class="col-12 mt-3">
                <img src="assets\img\working-girl.svg" class="img-fluid">
                <div class="text-center text-white h4 mt-2">Please Add Features +</div>
            </div>
        <?php
        } else {
        ?>
            <div class="col-12 mt-4">
                <div class="row pb-5">
                    <div class="col-12 px-4 d-flex justify-content-between align-items-center text-white h5 mt-4">
                        <span>Total Price :</span><span><?php echo $formattedTotal; ?></span>
                    </div>
                    <div class="col-12 text-center mt-1">
                        <button class="btn btn-lg btn-warning col-10 py-3 text-uppercase c-btn" onclick="checkout(<?php echo $formattedTotal; ?>);">Checkout</button>
                    </div>
                    <div class="col-12 text-center mt-4">
                        <button class="btn btn-lg btn-warning col-10 py-3 text-uppercase i-btn" onclick="inquiry(<?php echo $formattedTotal; ?>);">Inquiry</button>
                    </div>
                </div>
                <div class="row pb-5 d-none">
                    <div class="col-12 text-center mt-1">
                        <button class="btn btn-lg btn-warning col-10">Inquiry Now</button>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
<?php
    }
} else {
    echo "No ID provided.";
}
?>