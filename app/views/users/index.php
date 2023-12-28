<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="app\views\public\css\navbar.css">
</head>

<body>
    <?php
    include 'app\views\partials\navbar.php'
    ?>
    <?php
        echo $content;
    ?>
    <?php
    include 'app\views\partials\footer.php'
    ?>

</body>

</html>