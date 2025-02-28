<?php
session_start();
require_once "database.php";

// Check if the request is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['id'])) {

        $id = $_POST['id'];
        $uid = $_SESSION['user_id'];

        $conn = Databases::getConnection();
        $round = Databases::Search("SELECT * FROM `cart` WHERE `user_id` = '$uid' AND `pack_id` = '$id' ");
        if ($round->num_rows == 0) {
            $stmt = $conn->prepare("INSERT INTO `cart` (user_id, pack_id) VALUES (?, ?) ; ");
            $stmt->bind_param("ii", $uid, $id);
            if ($stmt->execute()) {
                echo "success";
            } else {
                die("Something went wrong");
            }
        }else{
            die("aa");
        }
    }
} else {
    die('Invalid request method.');
}
$stmt->close();
