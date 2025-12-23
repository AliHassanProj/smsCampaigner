<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random Message Test</title>
    <style>
        body { font-family: Arial; background: #f9f9f9; padding: 30px; }
        .box { background: #fff; padding: 20px; border-radius: 6px; width: 450px; }
        button { padding: 8px 15px; cursor: pointer; }
    </style>
</head>
<body>

<?php
date_default_timezone_set("Asia/Karachi");

$messages = [
    "Keep learning every day.",
    "Hard work always pays off.",
    "Trust Allah and move forward.",
    "Improve yourself step by step."
];

$message = $messages[array_rand($messages)];
$time = date("d M Y, h:i A");
?>

<div class="box">
    <h2>Motivational Mess123age</h2>
    <p><?php echo $message; ?></p>
    <small>Generated at: <?php echo $time; ?></small>

    <form method="post">
        <br><br>
        <button type="submit">Generate New Message</button>
    </form>
</div>

</body>
</html>
