<?php
session_start();
require_once "database.php";

// Check if the request is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['id']) && isset($_POST['total'])) {

        $id = $_POST['id'];
        $total = $_POST['total'];
        $uid = $_SESSION['user_id'];

        $conn = Databases::getConnection();
        $round = Databases::Search("SELECT * FROM `cart` WHERE `cart_id` = '$id' ");
        if ($round->num_rows == 1) {
            $stmt = $conn->prepare("DELETE FROM `cart` WHERE  `cart_id` = ? ; ");
            $stmt->bind_param("i",  $id);
            if ($stmt->execute()) {

                $round3 = Databases::Search("SELECT * FROM `user_has_coupon` INNER JOIN coupon ON coupon.c_id=user_has_coupon.coupon_id WHERE `user_id` = '$uid'");
                if ($round3->num_rows != 0) {
                    $med = $round3->fetch_assoc();
                    $ms = $med['max_expend'];

                    $round2 = Databases::Search("SELECT SUM(`pack_price`) AS `price` FROM `cart` INNER JOIN `pack` ON `pack`.pack_id = `cart`.`pack_id` WHERE `user_id` = '$uid' ");
                    $sumd = $round2->fetch_assoc();
                    if (empty($sumd['price'])) {
                        $sum = 0;
                    } else {
                        $sum = $sumd['price'];
                    }

                    if ($sum < $ms || $sum == 0) {
                        $stmt = $conn->prepare("DELETE FROM `user_has_coupon` WHERE `user_id` = ? ; ");
                        $stmt->bind_param("i",  $uid);
                        if ($stmt->execute()) {
                            echo "success";
                        }
                    }else{
                        echo "success";
                    }
                }else{
                    echo "success";
                }
            } else {
                die("Something went wrong");
            }
            $stmt->close();
        }
    }
} else {
    die('Invalid request method.');
}
