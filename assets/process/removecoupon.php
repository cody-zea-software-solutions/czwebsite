<?php
session_start();
require_once "database.php";

// Check if the request is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['id']) ) {

        $id = $_POST['id'];

        $conn = Databases::getConnection();
        $round = Databases::Search("SELECT * FROM `user_has_coupon` WHERE `uc_id` = '$id' ");
        if ($round->num_rows != 0 ) {
            $stmt = $conn->prepare("DELETE FROM `user_has_coupon` WHERE  `uc_id` = ? ; ");
            $stmt->bind_param("i",  $id);
            if ($stmt->execute()) {
                echo ("success");
            } else {
                die("Something went wrong");
            }
            $stmt->close();
        }
    }
} else {
    die('Invalid request method.');
}
