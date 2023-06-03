<?php
include "conn.php";
$id = $_GET['id'];

// Get the image path from the database
$result = mysqli_query($conn, "SELECT gambar FROM tb_katalog_mobil WHERE id='$id'");
if ($row = mysqli_fetch_assoc($result)) {
    $imagePath = $row['gambar'];

    // Delete the image file
    if (unlink($imagePath)) {
        // Delete the record from the database
        mysqli_query($conn, "DELETE FROM tb_katalog_mobil WHERE id='$id'");
        echo "<script>
                window.location.href = '" . $Base_Url . "';
             </script>";
        exit();
    } else {
        mysqli_query($conn, "DELETE FROM tb_katalog_mobil WHERE id='$id'");
        echo "<script>
                window.location.href = '" . $Base_Url . "';
              </script>";
    }
} else {
    mysqli_query($conn, "DELETE FROM tb_katalog_mobil WHERE id='$id'");
    echo "<script>
            alert('Image not found in the database.');
            window.location.href = '" . $Base_Url . "';
          </script>";
}

mysqli_close($conn);
