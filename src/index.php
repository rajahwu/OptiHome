<?php
// Define the base directory for routes
$baseDir = __DIR__ . "/routes/";

// Get requested route from the URL
$route = trim($_SERVER['REQUEST_URI'], '/home/'); // Removes `/home/` from the URL

// Default to dashboard if empty
if ($route === '') {
    $route = "dashboard";
}

// Construct file path
$file = $baseDir . $route . ".php";

// Check if the file exists and include it
if (file_exists($file)) {
    require $file;
} else {
    http_response_code(404);
    echo "<h2>404 - Page Not Found</h2>";
}
?>