<?php
$logFile = "visit_logs.txt";

if (!file_exists($logFile)) {
    die("No logs available.");
}

// Force download
header('Content-Type: text/plain');
header('Content-Disposition: attachment; filename="visit_logs.txt"');
readfile($logFile);
?>
