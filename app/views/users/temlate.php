<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="app\views\public\css\navbar.css">
    <link rel="stylesheet" href="app\views\public\css\globals.css" />
    <link rel="stylesheet" href="app\views\public\css\style.css" />
    <link rel="stylesheet" href="app\views\public\css\styleguide.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Proxima+Nova:wght@400&display=swap" />
  <link rel="stylesheet" href="app\views\public\css\homePage.css" />
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