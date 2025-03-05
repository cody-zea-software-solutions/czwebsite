<?php
session_start();  // Start the session

// Check if the 'id' is sent via POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    // Store the 'id' in the session
    $_SESSION['blog_id'] = $_POST['id'];

    if(isset($_SESSION['blog_id'])){
        echo 'success';
    }else{
        echo 'error';
    }
}
?>
