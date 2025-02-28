<?php
require_once "assets/process/database.php";

// Check if the request is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get POST data from the form
    $fullName = isset($_POST['fullName']) ? trim($_POST['fullName']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
    $businessName = isset($_POST['businessName']) ? trim($_POST['businessName']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    // Validate fields (basic validation)
    if (empty($fullName) || empty($email) || empty($phone) || empty($businessName) || empty($message)) {
        die('All fields are required.');
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Invalid email format.');
    }

    // Connect to the database (replace with your own database connection)
    $conn = Databases::getConnection();
    $stmt = $conn->prepare("INSERT INTO req_visit (f_name, email, p_number, b_name, `message`) VALUES (?, ?, ?,?, ?) ; ");
    $stmt->bind_param("sssss", $fullName, $email, $phone, $businessName, $message);
    if($stmt->execute()){
        echo "success";
    }else{
        die("Something went wrong");
    }

} else {
    echo ('Invalid request method.');
}
$stmt->close();
?>