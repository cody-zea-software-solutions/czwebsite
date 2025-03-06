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
    $uid = isset($_POST['uid']) ? trim($_POST['uid']) : '';
    $uname = isset($_POST['uname']) ? trim($_POST['uname']) : '';
    $uemail = isset($_POST['uemail']) ? trim($_POST['uemail']) : '';
    $umobile = isset($_POST['umobile']) ? trim($_POST['umobile']) : '';
    $copid = 0;

    $query = "SELECT * FROM `cart` INNER JOIN pack ON  pack.pack_id = cart.pack_id INNER JOIN solution ON solution.sol_id = pack.solution_sol_id WHERE `user_id` = " . $uid . " ORDER BY `cart_id` DESC";
    $res = Databases::search($query);

    if($res->num_rows==0){
        die("Sorry! Your Cart is Empty.");
    }

    date_default_timezone_set('Pacific/Auckland');
    $date = date('Y-m-d H:i:s');

    // Validate fields (basic validation)
    if (empty($uid) || empty($uname) || empty($uemail) || empty($umobile)) {
        die('All fields are required.');
    }

    // Validate email format
    if (!filter_var($uemail, FILTER_VALIDATE_EMAIL)) {
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

        ob_start();
        require_once 'assets/process/quot-mail.php';
        $templateContent = ob_get_clean();

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = 'Cody Zea';
        $mail->Body    = $templateContent;

        if ($mail->send()) {

            // Connect to the database (replace with your own database connection)
            $conn = Databases::getConnection();
            $unique_id = uniqid('quot_', false);
            $stmt = $conn->prepare("INSERT INTO `quot` (qu_id,quname, qemail, `qmobile`,`qcoupon`,`qdate`,`unique_id`) VALUES (?, ?, ?, ?, ?, ?, ?) ; ");
            $stmt->bind_param("isssiss", $uid, $uname, $uemail, $umobile, $copid, $date, $unique_id);

            if ($stmt->execute()) {
                $q_id = Databases::Search("SELECT * FROM quot WHERE unique_id = '" . $unique_id . "' ");
                if ($q_id->num_rows == 1) {
                    $q_id_d = $q_id->fetch_assoc();
                    $qid = $q_id_d['qid'];

                    $cart_d = Databases::Search("SELECT * FROM cart WHERE user_id = " . $uid . "");
                    if ($cart_d->num_rows != 0) {
                        $cartInsertQ = "INSERT INTO `quot_has_packs` (`q_id`, `pack_id`) VALUES ";

                        $values = [];
                        while ($cart = $cart_d->fetch_assoc()) {
                            $values[] = "('" . $qid . "', '" . $cart['pack_id'] . "')";
                        }

                        $cartInsertQ .= implode(", ", $values); // Join the values with a comma and add them to the query

                        // Execute the query
                        if (Databases::IUD($cartInsertQ)) {
                            Databases::IUD("DELETE FROM `cart` WHERE `user_id` = '".$uid."' ");
                            echo "success";
                        }
                    }
                }
            } else {
                die("Something went wrong");
            }
        } else {
            die("Sorry, something went wrong. Please try again later.");
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        die();
    }
} else {
    die('Invalid request method.');
}
$stmt->close();
