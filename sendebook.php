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
    $firstname = isset($_POST['firstname']) ? trim($_POST['firstname']) : '';
    $lastname = isset($_POST['lastname']) ? trim($_POST['lastname']) : '';
    $workEmail = isset($_POST['workEmail']) ? trim($_POST['workEmail']) : '';
    $companyName = isset($_POST['companyName']) ? trim($_POST['companyName']) : '';
    $mobileNumber = isset($_POST['mobileNumber']) ? trim($_POST['mobileNumber']) : '';
    $rbook = isset($_POST['rbook']) ? trim($_POST['rbook']) : '';
    $fullName = $firstname.' '.$lastname;

    // Validate fields (basic validation)
    if (empty($firstname) || empty($lastname) || empty($workEmail) || empty($companyName) || empty($mobileNumber) || empty($rbook)) {
        die('All fields are required.');
    }

    // Validate email format
    if (!filter_var($workEmail, FILTER_VALIDATE_EMAIL)) {
        die('Invalid email format.');
    }

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'asd@gmail.com'; // Your email
        $mail->Password   = 'bwybhghvunrrknxa'; // Your app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('asd@gmail.com', 'Cody Zea');
        $mail->addAddress('asd@gmail.com', 'Cody Zea');

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = 'Cody Zea';
        $mail->Body    = '<html>
                            <body>
                                <h2> ' . $rbook . '</h2>
                                <p><strong>Full Name:</strong> ' . $firstname .' '. $lastname . '</p>
                                <p><strong>Email:</strong> ' . $workEmail . '</p>
                                <p><strong>Mobile:</strong> ' . $mobileNumber . '</p>
                                <p><strong>Mobile:</strong> ' . $companyName . '</p>
                                
                            </body>
                          </html>';

        if ($mail->send()) {

            // Connect to the database (replace with your own database connection)
            $conn = Databases::getConnection();
            $stmt = $conn->prepare("INSERT INTO `ebook_req` (`rname`, `remail`, `rmobile`, `rworkname`, `rbook`) VALUES (?, ?, ?, ?, ?) ; ");
            $stmt->bind_param("sssss", $fullName, $workEmail, $mobileNumber, $companyName, $rbook);
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
