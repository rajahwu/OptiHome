<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Dashboard</title>
    <link rel="stylesheet" href="public/styles.css">
</head>

<body>
    <header>
        <h1>Home Dashboard</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php?page=dashboard">Dashboard</a></li>
            <li><a href="index.php?page=recent-activity">Recent Activity</a></li>
            <li><a href="index.php?page=settings">Settings</a></li>
            <li><a href="index.php?page=system-status">System Status</a></li>
        </ul>
    </nav>
    <main id="content">



<?php
  $page = $_GET['page'] ?? 'dashboard';
  $file = __DIR__ . "/routes/{$page}.php";

  if (file_exists($file)) {
      require $file;
  } else {
      echo "<h1>404 - Page Not Found</h1>";
  }
?>

 </main>
    <script src="public/app.js"></script>
</body>

</html>