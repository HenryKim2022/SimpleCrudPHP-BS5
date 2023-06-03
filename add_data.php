<?php
include "conn.php";

$nama = $_POST['nameInput'];
$nrp = $_POST['nimInput'];
$alamat = $_POST['addrInput'];

mysqli_query($conn, "INSERT INTO tbl_mahasiswa VALUES('','$nama','$nrp','$alamat')");

header("location:index.php");
