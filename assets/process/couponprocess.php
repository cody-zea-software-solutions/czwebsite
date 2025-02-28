<?php
session_start();
require_once "database.php";

// Check if the request is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['id']) && trim($_POST['id']) != '') {

        if (isset($_POST['total']) && !empty($_POST['total'])) {
            if (is_numeric($_POST['total'])) {
                $total = $_POST['total'];

                if ($total == 0) {
                    die("ot");
                }

                $id = $_POST['id'];
                $uid = $_SESSION['user_id'];

                $conn = Databases::getConnection();
                $round = Databases::Search("SELECT * FROM `coupon` WHERE `c_code` = '$id' AND `c_status` = '1' ");
                if ($round->num_rows == 1) {
                    $c_d = $round->fetch_assoc();

                    if($total<$c_d['max_expend']){
                        die("Sorry! You have to expend minimum NZD ".$c_d['max_expend']." to claim this offer.");
                    }

                    $cc = $c_d['c_id'];

                    $round2 = Databases::Search("SELECT * FROM `user_has_coupon` WHERE `user_id` = '$uid' ");
                    if ($round2->num_rows == 0) {
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
            }
        }
    } else {
        echo "em";
    }
} else {
    die('Invalid request method.');
}
