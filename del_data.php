<?php
include "conn.php";

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM tbl_mahasiswa WHERE id='$id'");

header("location:index.php");
