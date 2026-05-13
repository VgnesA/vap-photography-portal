<?php

include 'includes/db.php';

if (isset($_POST['submit'])) {

    $name = trim($_POST['name'] ?? '');

    $email = trim($_POST['email'] ?? '');

    $phone = trim($_POST['phone'] ?? '');

    $session_type = trim($_POST['session_type'] ?? '');

    $details = trim($_POST['details'] ?? '');

    $status = "Pending";

    // Basic defense-in-depth (prevents notices and reduces bad data)
    if ($name === '' || $email === '' || $phone === '' || $session_type === '') {
        echo "Please fill in all required fields.";
        exit;
    }

    $query = "INSERT INTO bookings (name, email, phone, session_type, details, status)
              VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $query);
    if ($stmt === false) {
        echo "Unable to submit booking.";
        exit;
    }

    mysqli_stmt_bind_param($stmt, "ssssss", $name, $email, $phone, $session_type, $details, $status);

    $result = mysqli_stmt_execute($stmt);

    if ($result) {

        echo "Booking Submitted Successfully!";

    } else {

        // Don’t expose DB errors to users (can leak schema/SQL details)
        echo "Booking submission failed.";
    }
}
?>


<?php
// Header/footer are shared across pages.
$navLogo = 'VA Photographs';
?>

<!-- ================= BOOKING SECTION ================= -->
<?php include 'includes/header.php'; ?>

<section id="contact">

    <h2>Book a Photography Session</h2>

    <form method="POST">
        <input type="text" name="name" placeholder="Your Name">

        <input type="email" name="email" placeholder="Your Email">

        <input type="tel" name="phone" placeholder="Phone Number">

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

        <textarea name="details" placeholder="Additional Details"></textarea>

        <button type="submit" name="submit">
            Submit Booking
        </button>

    </form>

</section>


<?php include 'includes/footer.php'; ?>