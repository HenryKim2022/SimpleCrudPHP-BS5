<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mahasiswa";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Current Timestamp
$tz = 'Asia/Jakarta';
$dt = new DateTime("now", new DateTimeZone($tz));
$curr_timestamp = $dt->format('Y-m-d G:i:s');


// Close the connection
// $conn->close();
