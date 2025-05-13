<?php
$repoOwner = $_ENV['GITHUB_USERNAME'];
$repoName = $_ENV['GITHUB_REPO'];
$token = $_ENV['GITHUB_TOKEN'];

if (!$token) {
    echo "<p style='color: red;'>GitHub token not found. Please set the GITHUB_TOKEN environment variable.</p>";
    exit;
}

$url = "https://api.github.com/repos/$repoOwner/$repoName";
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: token $token",
    "User-Agent: home-dashboard",
]);

$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response, true);

echo "<h2>GitHub Repository Info</h2>";

echo "<p><strong>Name:</strong> " . $data["name"] . "</p>";
echo "<p><strong>Description:</strong> " . $data["description"] . "</p>";
echo "<p><strong>Stars:</strong> " . $data["stargazers_count"] . "</p>";
?>