<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD MAHASISWA</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <h2>CRUD DATA MAHASISWA</h2>
    <br>
    <a href="tambah.php"> + TAMBAH DATA MAHASISWA</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NRP</th>
            <th>Alamat</th>
            <th>OPSI</th>
        </tr>
        <?php
        include "koneksi.php";
        $no = 1;
        // pastikan QUERY MYSQL MENYESUAIKAN NAMA TABEL ANDA
        $data = mysqli_query($koneksi, "SELECT * FROM tbl_mahasiswa");
        while ($d = mysqli_fetch_assoc($data)) :
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <!-- PASTIKAN yang di dalam array itu harus sama dengan nama field di tabel database -->
                <td><?php echo $d['nama_mhs']; ?></td>
                <td><?php echo $d['nrp']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id']; ?>"><i class="fas fa-edit"></i></a>
                    <a href="hapus.php?id=<?php echo $d['id']; ?>"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>

</body>

</html>