<?php

include "koneksi.php";

$nama = $_POST['nama'];
$nrp = $_POST['nrp'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "INSERT INTO tbl_mahasiswa VALUES('','$nama','$nrp','$alamat')");

header("location:index.php");
