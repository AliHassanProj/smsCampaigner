<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random Number Test</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; padding: 30px; }
        .card { background: #fff; padding: 20px; width: 300px; border-radius: 6px; }
        .even { color: green; }
        .odd { color: red; }
    </style>
</head>
<body>

<?php
$number = rand(1, 100);
$type = ($number % 2 === 0) ? "even" : "odd";
?>

<div class="card">
    <h2>Random Number</h2>
    <p>
        Number:
        <strong class="<?php echo $type; ?>">
            <?php echo $number; ?>
        </strong>
    </p>
    <p>Type: <?php echo ucfirst($type); ?></p>
</div>

</body>
</html>
