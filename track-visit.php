
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$data = json_decode(file_get_contents("php://input"), true);

if ($data) {
    $logFile = "visit_logs.txt";
    $logEntry = date("Y-m-d H:i:s") . " - " . json_encode($data) . "\n";

    file_put_contents($logFile, $logEntry, FILE_APPEND);
    http_response_code(200);
    echo json_encode(["status" => "success"]);
} else {
    http_response_code(400);
    echo json_encode(["status" => "error", "message" => "Invalid data"]);
}
?>
