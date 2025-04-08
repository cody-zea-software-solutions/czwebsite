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
    $message = isset($_POST['message']) ? sanitizeInput($_POST['message']) : '';

    // Check required
    if (empty($fullName) || empty($email) || empty($phone) || empty($message)) {
        die('All fields are required.');
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Invalid email format.');
    }

    // Length checks
    if (strlen($fullName) > 50 || strlen($email) > 500 || strlen($phone) > 50) {
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
        $mail->Subject = 'New Exclusive Offer Request';
        $mail->Body    = "<html><body>
                            <h2>Exclusive Offer Request</h2>
                            <p><strong>Name:</strong> {$fullName}</p>
                            <p><strong>Email:</strong> {$email}</p>
                            <p><strong>Phone:</strong> {$phone}</p>
                            <p><strong>Message:</strong> " . nl2br($message) . "</p>
                          </body></html>";

        if ($mail->send()) {
            $conn = Databases::getConnection();
            $stmt = $conn->prepare("INSERT INTO exclusive_offer_modal (exm_name, exm_mail, exm_mobile, exm_message) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $fullName, $email, $phone, $message);
            
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
