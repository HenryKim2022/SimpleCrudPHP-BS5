<?php
include "conn.php";

$id = $_POST['id'];
$nama = $_POST['nameInput'];
$nrp = $_POST['nimInput'];
$alamat = $_POST['addrInput'];

mysqli_query($conn, "UPDATE tbl_mahasiswa SET nama_mhs='$nama', nrp='$nrp', alamat='$alamat' WHERE id='$id'");

header("location:" . $Base_Url);
