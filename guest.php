<?php
require_once "db.php"; // Include the db.php file

session_start();

$cookie_name_guest = "cz_guest_id";
$cookie_name_user = "cz_user_id";
$cookie_lifetime = time() + (365 * 24 * 60 * 60); // Store cookies for 1 year
date_default_timezone_set('Asia/Colombo');

// Check if guest ID exists in cookies

if (isset($_COOKIE[$cookie_name_guest]) && !isset($_COOKIE[$cookie_name_user])) {
    // Instruct browser to delete the cookie

    setcookie("cz_guest_id", "", time() - 3600, "/", "", true, true);  // Secure, HttpOnly cookie
    setcookie("cz_user_id", "", time() - 3600, "/", "", true, true);   // Secure, HttpOnly cookie

    session_unset();  // Clear session variables
    session_destroy();  // Destroy the session

    
} elseif (!isset($_COOKIE[$cookie_name_guest]) && isset($_COOKIE[$cookie_name_user])) {
    // Instruct browser to delete the cookie
    setcookie("cz_guest_id", "", time() - 3600, "/", "", true, true);  // Secure, HttpOnly cookie
    setcookie("cz_user_id", "", time() - 3600, "/", "", true, true);   // Secure, HttpOnly cookie

    session_unset();  // Clear session variables
    session_destroy();  // Destroy the session

    
} elseif (isset($_COOKIE[$cookie_name_guest]) && isset($_COOKIE[$cookie_name_user])) {

    $guest_id = $_COOKIE[$cookie_name_guest];
    $user_id = $_COOKIE[$cookie_name_user];

    // Use prepared statement to avoid SQL injection
    $query = "SELECT * FROM `user` WHERE `unique_code` = ? AND `user_id` = ?";
    $params = [$guest_id, $user_id];

    $u_row = Databases::Search($query, $params, "is"); // Assuming `ss` means two string parameters

    if ($u_row->num_rows == 1) {
        $_SESSION['guest_id'] = $guest_id; // Store in session
        $_SESSION['user_id'] = $user_id;  // Store in session
    } else {
        // Clear cookies and session if validation fails
        setcookie("cz_guest_id", "", time() - 3600, "/", "", true, true);  // Secure, HttpOnly cookie
        setcookie("cz_user_id", "", time() - 3600, "/", "", true, true);   // Secure, HttpOnly cookie

        session_unset();  // Clear session variables
        session_destroy();  // Destroy the session

        // Optionally, redirect to a login page or homepage
        header("Location: index.php");
        exit;
    }
} else {
    // Generate a unique guest ID
    $guest_id = hash('sha256', uniqid('', true) . mt_rand());

    // Insert new guest into database with current datetime
    $query = "INSERT INTO user (unique_code, ses_date) VALUES (?, ?)";
    $params = [$guest_id, date('Y-m-d H:i:s')]; // Store current date & time

    if (Databases::IUD($query, $params, "ss")) {
        $query = "SELECT * FROM `user` WHERE `unique_code` = ?";
        $params = [$guest_id];
        $res = Databases::Search($query, $params, "s");
        $result = $res->fetch_assoc();
        $user_id = $result['user_id'];
        $_SESSION['user_id'] = $user_id;
        // Store both guest_id and user_id in cookies for future visits
        setcookie($cookie_name_guest, $guest_id, $cookie_lifetime, "/");
        setcookie($cookie_name_user, $user_id, $cookie_lifetime, "/");
        $_SESSION['guest_id'] = $guest_id;
    } else {
        die("Error creating guest account.");
    }
}
// Close the DB connection
Databases::CloseConnection();
