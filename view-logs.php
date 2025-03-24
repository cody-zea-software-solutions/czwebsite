<?php
$logFile = "visit_logs.txt";

if (!file_exists($logFile)) {
    die("No logs available.");
}

$logs = file($logFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

echo "<h2>Visit Logs</h2>";
echo "<table border='1' cellpadding='8'>";
echo "<tr><th>Timestamp</th><th>Action</th><th>Location (IP, City, Country)</th><th>Extra Data</th></tr>";

foreach ($logs as $log) {
    $data = json_decode(substr($log, 20), true);
    if ($data) {
        $location = $data['ip'] . " - " . $data['city'] . ", " . $data['country'];
        $extraData = isset($data['scrollPercentage']) ? "Scrolled to " . $data['scrollPercentage'] . "%" : 
                     (isset($data['section']) ? "Viewed: " . $data['section'] : "-");
        
        echo "<tr>
                <td>" . htmlspecialchars(substr($log, 0, 19)) . "</td>
                <td>" . htmlspecialchars($data['action']) . "</td>
                <td>" . htmlspecialchars($location) . "</td>
                <td>" . htmlspecialchars($extraData) . "</td>
              </tr>";
    }
}
echo "</table>";
?>
