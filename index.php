<?php
//   $reactServer = "http://localhost:5173";
//   $ch = curl_init($reactServer);

//   curl_setopt($ch, CURLOPT_NOBODY, true);
//   curl_setopt($ch, CURLOPT_TIMEOUT, 2); // Short timeout to check if server is up

//   $serverUp = curl_exec($ch) !== false;
//   curl_close($ch);

//   if ($serverUp) {
//       header("Location: $reactServer");
//       exit();
//   } else {
//       $htmlFile = __DIR__ . "/public/index.html";
//       if (file_exists($htmlFile)) {
//           header("Content-Type: text/html");
//           readfile($htmlFile);
//       } else {
//           http_response_code(404);
//           echo "<h1>404 - Home page not found</h1>";
//       }
//       exit();
//   }

//   header("Location: src/index.php");

  include("src/index.php");
?>