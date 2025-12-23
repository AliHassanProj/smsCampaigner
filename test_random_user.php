<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random User Test</title>
    <style>
        body { font-family: Arial; background: #eef2f5; padding: 30px; }
        table { background: #fff; border-collapse: collapse; width: 400px; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: left; }
        th { background: #ddd; }
    </style>
</head>
<body>

<?php
$users = ["Ali", "Ahmed", "Fatima", "Ayesha", "Hassan", "Zainab"];
$selected = $users[array_rand($users)];
?>

<h2>Random User Selected</h2>

<table>
    <tr>
        <th>Field</th>
        <th>Value</th>
    </tr>
    <tr>
        <td>Name</td>
        <td><?php echo $selected; ?></td>
    </tr>
    <tr>
        <td>Status</td>
        <td>Active</td>
    </tr>
</table>

</body>
</html>
