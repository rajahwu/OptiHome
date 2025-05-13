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
    <?php
  $route = trim($_SERVER['REQUEST_URI'], '/home/');
  if ($route === '') {
      $route = 'dashboard'; // Default page
  }
?>

    <nav>
        <ul>
            <li><a href="/home/dashboard" class="<?= ($route === 'dashboard') ? 'active' : '' ?>">Dashboard</a></li>
            <li><a href="/home/recent-activity" class="<?= ($route === 'recent-activity') ? 'active' : '' ?>">Recent
                    Activity</a></li>
            <li><a href="/home/settings" class="<?= ($route === 'settings') ? 'active' : '' ?>">Settings</a></li>
            <li><a href="/home/system-status" class="<?= ($route === 'system-status') ? 'active' : '' ?>">System
                    Status</a></li>
        </ul>
    </nav>
    <main id="content">
        <?php

  include("src/index.php");

  ?>
    </main>
    <script src="public/app.js"></script>
</body>

</html>