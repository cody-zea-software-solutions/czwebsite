<?php
require_once "assets/process/database.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function sanitizeInput($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullName = isset($_POST['fullName']) ? sanitizeInput($_POST['fullName']) : '';
    $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
    $phone = isset($_POST['phone']) ? sanitizeInput($_POST['phone']) : '';
    $bn = isset($_POST['bn']) ? sanitizeInput($_POST['bn']) : '';
    $message = isset($_POST['message']) ? sanitizeInput($_POST['message']) : '';

    // Check required
    if (empty($fullName) || empty($email) || empty($phone) || empty($bn) || empty($message)) {
        die('All fields are required.');
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Invalid email format.');
    }

    // Length checks
    if (strlen($fullName) > 50 || strlen($email) > 500 || strlen($phone) > 50 || strlen($bn) > 100) {
        die('Input too long.');
    }

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'udithanethsara079@gmail.com';
        $mail->Password   = 'zihonwjpqzvvaaoa';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('udithanethsara079@gmail.com', 'Cody Zea');
        $mail->addAddress('udithanethsara079@gmail.com', 'Cody Zea');

        $mail->isHTML(true);
        $mail->Subject = 'ERP Plan';
        $mail->Body    = "<html><body>
                            <h2>ERP Plan</h2>
                            <p><strong>Name:</strong> {$fullName}</p>
                            <p><strong>Business Name:</strong> {$bn}</p>
                            <p><strong>Email:</strong> {$email}</p>
                            <p><strong>Phone:</strong> {$phone}</p>
                            <p><strong>Message:</strong> " . nl2br($message) . "</p>
                          </body></html>";

        if ($mail->send()) {

            $fm = "ERP Plan || Business Name :" . $bn . " || " . "Mobile : " . $phone . " || " . "Message : " . $message ;

            $conn = Databases::getConnection();
            $stmt = $conn->prepare("INSERT INTO `message` (m_name, m_mail, m_message) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $fullName, $email, $fm);
            
            if ($stmt->execute()) {
                echo "success";
            } else {
                die("Database error.");
            }

            $stmt->close();
        }
    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo 'Invalid request method.';
}
