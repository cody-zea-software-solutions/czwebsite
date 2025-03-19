<?php
require_once "assets/process/database.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Check if the request is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get POST data from the form
    $fullName = isset($_POST['fullName']) ? trim($_POST['fullName']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    // Validate fields (basic validation)
    if (empty($fullName) || empty($email) || empty($message)) {
        die('All fields are required.');
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Invalid email format.');
    }

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'udithanethsara079@gmail.com'; // Your email
        $mail->Password   = 'zihonwjpqzvvaaoa'; // Your app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('udithanethsara079@gmail.com', 'Cody Zea');
        $mail->addAddress('udithanethsara079@gmail.com', 'Cody Zea');

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = 'Cody Zea';
        $mail->Body    = '<html>
                            <body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KDPFLMB3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

                                <h2>Message</h2>
                                <p><strong>Full Name:</strong> ' . $fullName . '</p>
                                <p><strong>E mail:</strong> ' . $email . '</p>
                                <p><strong>Special Note:</strong> ' . nl2br($message) . '</p>
                            </body>
                          </html>';

        if ($mail->send()) {

            // Connect to the database (replace with your own database connection)
            $conn = Databases::getConnection();
            $stmt = $conn->prepare("INSERT INTO `message` (m_name, m_mail, `m_message`) VALUES (?, ?, ?) ; ");
            $stmt->bind_param("sss", $fullName, $email, $message);
            if ($stmt->execute()) {
                echo "success";
            } else {
                die("Something went wrong");
            }

        } else {
            die( "Sorry, something went wrong. Please try again later.");
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        die();
    }
} else {
    die ('Invalid request method.');
}
$stmt->close();
