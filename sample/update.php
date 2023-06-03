<?php

include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nrp = $_POST['nrp'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "UPDATE tbl_mahasiswa SET nama_mhs='$nama', nrp='$nrp', alamat='$alamat' WHERE id='$id'");

header("location:index.php");
