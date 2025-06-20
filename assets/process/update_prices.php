<?php
require 'database.php';

header("Content-Type: application/json");

$input = json_decode(file_get_contents("php://input"), true);
if (!isset($input['rows']) || !is_array($input['rows'])) {
    http_response_code(400);
    echo json_encode("Invalid request data.");
    exit;
}

$updated = 0;

foreach ($input['rows'] as $row) {
    $pack_id = $row['pack_id'];
    $pack_price = $row['pack_price'];
    $pack_before_price = $row['pack_before_price'];

    $query = "UPDATE pack SET pack_price = ?, pack_before_price = ? WHERE pack_id = ?";
    if (Databases::IUD($query, [$pack_price, $pack_before_price, $pack_id], "ddi")) {
        $updated++;
    }
}

echo json_encode("Successfully updated $updated rows.");
?>
