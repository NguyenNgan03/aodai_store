<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="app\views\public\css\navbar.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Proxima+Nova:wght@400&display=swap" />
    <link rel="stylesheet" href="app\views\public\css\homePage.css" />


    <!-- <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css' /> -->
    <!-- <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' /> -->
    <link rel="stylesheet" href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' />
    <link rel="stylesheet" href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css' />
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