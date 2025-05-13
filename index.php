<?php
  $reactServer = "http://localhost:3000";
  $ch = curl_init($reactServer);

  curl_setopt($ch, CURLOPT_NOBODY, true);
  curl_setopt($ch, CURLOPT_TIMEOUT, 2); // Short timeout to check if server is up

  $serverUp = curl_exec($ch) !== false;
  curl_close($ch);

  if ($serverUp) {
      header("Location: $reactServer");
  } else {
      header("Location: /home/index.html");
  }
  exit();
?>