<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/styles.css">
    <title>Hubnugget</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="/home/dashboard">Dashboard</a></li>
            <li><a href="/home/recent-activity">Recent Activity</a></li>
            <li><a href="/home/settings">Settings</a></li>
            <li><a href="/home/system-status" >System Status</a></li>
        </ul>
    </nav>
    <header>
        <h1>HubNugget Learning Center</h1>
        <p>Welcome to the HubNugget Learning Center! Here you can explore various learning paths and courses to enhance
            your skills.</p>
    </header>

    <?php
$learningPaths = [
    "Personal Development & Problem-Solving" => [
        "Learning How to Learn",
        "Solving Problems with Creative Thinking"
    ],
    "Language & Communication" => [
        "Grammar Mastery",
        "Effective Writing"
    ],
    "Business & Project Management" => [
        "PMI Methodology",
        "Agile Framework"
    ],
    "Technical & IT Training" => [
        "Cybersecurity Fundamentals",
        ".NET Full-Stack Development",
        "Microsoft Tools"
    ],
    "Creative & Visual Storytelling" => [
        "Photography Basics",
        "Video Editing"
    ]
];

echo "<h2>HubNugget Learning Center</h2>";
foreach ($learningPaths as $category => $courses) {
    echo "<h3>$category</h3><ul>";
    foreach ($courses as $course) {
        echo "<li><a href='#'>$course</a></li>"; // Placeholder for course pages
    }
    echo "</ul>";
}
?>
</body>

</html>