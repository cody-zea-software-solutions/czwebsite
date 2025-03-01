<?php
session_start();
require_once "database.php";

// Check if the request is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['id']) && trim($_POST['id']) != '') {

        $id = $_POST['id'];
        $uid = $_SESSION['user_id'];

        $conn = Databases::getConnection();
        $round = Databases::Search("SELECT * FROM `coupon` WHERE `c_id` = '$id' AND `c_status` = '1' ");
        if ($round->num_rows == 1) {
            $c_d = $round->fetch_assoc();

            $cc = $c_d['c_id'];

            $round2 = Databases::Search("SELECT * FROM `user_has_coupon` WHERE `user_id` = '$uid' ");
            if ($round2->num_rows == 0) {

                if ($c_d['c_type'] == 1) {
                    $isThereCouponD = Databases::Search("SELECT * FROM `coupon_offers` WHERE `coupon_id` = '" . $c_d['c_id'] . "' ");
                    if ($isThereCouponD->num_rows != 0) {
                        $isThereCoupon = $isThereCouponD->fetch_assoc();
                        $isTherePackageD = Databases::Search("SELECT * FROM `cart` WHERE `pack_id` = '" . $isThereCoupon['pack_id'] . "' AND `user_id` = '" . $uid . "' ");
                        if ($isTherePackageD->num_rows == 0) {
                            Databases::iud("INSERT INTO `cart`(`user_id`,`pack_id`) VALUES ('$uid','" . $isThereCoupon['pack_id'] . "') ");
                        }
                    }
                }

                $stmt = $conn->prepare("INSERT INTO `user_has_coupon` (user_id, coupon_id) VALUES (?, ?) ; ");
                $stmt->bind_param("ii", $uid, $cc);
                if ($stmt->execute()) {
                    echo "success";
                } else {
                    die("Something went wrong");
                }
                $stmt->close();
            } else {
                echo ("au");
            }
        } else {
            die("ex");
        }
    } else {
        echo "em";
    }
} else {
    die('Invalid request method.');
}
