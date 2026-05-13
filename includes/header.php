<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VA Photographs</title>

    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<nav>

    <div class="logo">
        <?php
        echo isset($navLogo) ? $navLogo : 'VA Photographs';
        ?>
    </div>

    <ul>

        <li><a href="index.php">Home</a></li>

        <li><a href="index.php#about">About</a></li>

        <li><a href="index.php#gallery">Gallery</a></li>

        <li><a href="booking.php">Book Session</a></li>

        <li><a href="index.php#contact">Contact</a></li>

    </ul>

</nav>

