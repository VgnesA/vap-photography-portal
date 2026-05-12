<?php

$servername = "localhost";

$username = "root";

$password = "";

$database = "vap";

$conn = mysqli_connect(
    $servername,
    $username,
    $password,
    $database
);

if (!$conn) {

    die("Connection Failed");
}

?>