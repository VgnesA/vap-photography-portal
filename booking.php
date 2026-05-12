<?php

include 'includes/db.php';

if(isset($_POST['submit'])) {

    $name = $_POST['name'];

    $email = $_POST['email'];

    $phone = $_POST['phone'];

    $session_type = $_POST['session_type'];

    $details = $_POST['details'];

    $status = "Pending";

    $query = "INSERT INTO bookings
(name, email, phone, session_type, details, status)
    VALUES

    ('$name', '$email', '$phone',
'$session_type', '$details', '$status')";

    $result = mysqli_query($conn, $query);

    if($result) {

        echo "Booking Submitted Successfully!";

    } else {

        echo mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Book Session | VA Photographs</title>

    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<!-- ================= NAVBAR ================= -->

<nav>

    <div class="logo">
        LensFlow
    </div>

    <ul>

        <li><a href="index.php">Home</a></li>

        <li><a href="index.php#about">About</a></li>

        <li><a href="index.php#gallery">Gallery</a></li>

        <li><a href="booking.php">Book Session</a></li>

        <li><a href="index.php#contact">Contact</a></li>

    </ul>

</nav>

<!-- ================= BOOKING SECTION ================= -->

<section id="contact">

    <h2>Book a Photography Session</h2>

<form method="POST">
<input type="text"
       name="name"
       placeholder="Your Name">

<input type="email"
       name="email"
       placeholder="Your Email">

<input type="tel"
       name="phone"
       placeholder="Phone Number">

<select name="session_type">
            <option>
                Select Session Type
            </option>

            <option>
                Portrait Photography
            </option>

            <option>
                Automotive Photography
            </option>

            <option>
                Event Photography
            </option>

        </select>

<textarea name="details"
placeholder="Additional Details"></textarea>

<button type="submit" name="submit">
    Submit Booking
</button>        

    </form>

</section>

<!-- ================= FOOTER ================= -->

<footer>

    <p>
        © 2026 VA Photographs | Photography Booking Portal
    </p>

</footer>

</body>
</html>