<?php

include 'includes/db.php';

if(isset($_GET['delete'])) {

    $id = $_GET['delete'];

    $query = "DELETE FROM bookings
    WHERE id='$id'";

    mysqli_query($conn, $query);

    header("Location: dashboard.php");
}
if(isset($_GET['confirm'])) {

    $id = $_GET['confirm'];

    $query = "UPDATE bookings
    SET status='Confirmed'
    WHERE id='$id'";

    mysqli_query($conn, $query);

    header("Location: dashboard.php");
}

if(isset($_GET['complete'])) {

    $id = $_GET['complete'];

    $query = "UPDATE bookings
    SET status='Completed'
    WHERE id='$id'";

    mysqli_query($conn, $query);

    header("Location: dashboard.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Dashboard | VAP</title>

    <link rel="stylesheet"
          href="assets/css/style.css">

</head>

<body>

<!-- ================= NAVBAR ================= -->

<nav>

    <div class="logo">
        VAP Dashboard
    </div>

    <ul>

        <li>
            <a href="index.php">
                Home
            </a>
        </li>

        <li>
            <a href="booking.php">
                Book Session
            </a>
        </li>

        <li>
            <a href="dashboard.php">
                Dashboard
            </a>
        </li>

    </ul>

</nav>

<!-- ================= DASHBOARD ================= -->

<section id="gallery">

    <h2>
        Booking Dashboard
    </h2>

    <p>
        View all customer bookings.
    </p>

    <br><br>

    <table width="100%" border="1" cellpadding="15">

        <tr>

            <th>ID</th>

            <th>Name</th>

            <th>Email</th>

            <th>Phone</th>

            <th>Session Type</th>

            <th>Details</th>

            <th>Status</th>

            <th>Actions</th>

            <th>Delete</th>

        </tr>

<?php

$query = "SELECT * FROM bookings";

$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)) {

?>

        <tr>

            <td>
                <?php echo $row['id']; ?>
            </td>

            <td>
                <?php echo $row['name']; ?>
            </td>

            <td>
                <?php echo $row['email']; ?>
            </td>

            <td>
                <?php echo $row['phone']; ?>
            </td>

            <td>
                <?php echo $row['session_type']; ?>
            </td>

            <td>
                <?php echo $row['details']; ?>
            </td>

            <td>
                <?php echo $row['status']; ?>
            </td>
            <td>

    <a href="dashboard.php?confirm=<?php echo $row['id']; ?>">

        <button>
            Confirm
        </button>

    </a>

    <a href="dashboard.php?complete=<?php echo $row['id']; ?>">

        <button>
            Complete
        </button>

    </a>

</td>
<td>

    <a href="dashboard.php?delete=<?php echo $row['id']; ?>">

        <button>
            Delete
        </button>

    </a>

</td>



        </tr>

<?php

}

?>

    </table>

</section>

<!-- ================= FOOTER ================= -->

<footer>

    <p>
        © 2026 VAP Dashboard
    </p>

</footer>

</body>
</html>