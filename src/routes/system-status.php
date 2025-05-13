<?php
function checkServer($url) {
    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 2);
    
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
    curl_close($ch);
    
    return ($httpCode >= 200 && $httpCode < 400); // Checks if response is in success range
}

$liveReactRunning = checkServer("https://opti-home-react-app.vercel.app/");
$localReactRunning = checkServer("http://localhost:5173");
$phpRunning = checkServer("http://localhost");

include("src/routes/github.php");

echo "<h2>System Status</h2>";
echo "<p>Live React App: " . ($liveReactRunning ? "✅ Running" : "❌ Offline") . "</p>";
echo "<p>Local React Server: " . ($localReactRunning ? "✅ Running" : "❌ Offline") . "</p>";
echo "<p>PHP Server: " . ($phpRunning ? "✅ Running" : "❌ Offline") . "</p>";
?>