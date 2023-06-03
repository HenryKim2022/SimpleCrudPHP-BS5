<?php
include "conn.php";

// Create the database if it doesn't exist
$database_name = "mahasiswa";
$query = "CREATE DATABASE IF NOT EXISTS $database_name";
$conn->query($query);

// Select the database
$conn->select_db($database_name);

// Check if a specific table exists
$table_name = "tbl_mahasiswa";
$query = "SHOW TABLES LIKE '$table_name'";
$result = $conn->query($query);

if ($result->num_rows == 0) {
    // Table does not exist, create it
    $create_table_query = "CREATE TABLE tbl_mahasiswa (
        id INT,
        nama_mhs VARCHAR(255),
        nrp VARCHAR(20),
        alamat VARCHAR(255)
      );
    )";

    if ($conn->query($create_table_query) === TRUE) {
        // echo "<script>alert('Table created successfully!')</script>";
        // echo "window.location.href = 'page.php';";
        echo "
        if (window.confirm('Table created successfully!')) {
            window.location.href = 'index.php';
        }";
    } else {
        // echo "<script>alert('Error creating table: " . $conn->error . "')</script>";
        echo "
        if (window.confirm('Error creating table: " . $conn->error . "')) {
            window.location.href = 'index.php';
        }";
    }
} else {
    // echo "Table already exists!";
}

// Close the connection
$conn->close();
