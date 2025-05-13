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

$liveReactApp = checkServer("https://opti-home-react-app.vercel.app/");
$reactRunning = checkServer("http://localhost:5173");
$phpRunning = checkServer("http://localhost");

echo "<h2>System Status</h2>";
echo "<p>Live React App: " . ($liveReactApp ? "✅ Running" : "❌ Offline") . "</p>";
echo "<p>React Server: " . ($reactRunning ? "✅ Running" : "❌ Offline") . "</p>";
echo "<p>PHP Server: " . ($phpRunning ? "✅ Running" : "❌ Offline") . "</p>";
?>