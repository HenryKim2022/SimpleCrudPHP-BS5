<?php
include "conn.php";

$name = $_POST['nameInput'];
$merk = $_POST['merkInput'];
$seriesInput = $_POST['seriesInput'];
$yearInput = $_POST['yearInput'];
$fuelInput = $_POST['fuelInput'];
$priceInput = $_POST['priceInput'];
$imageInput = $_FILES['imageInput'];


// Validate file upload
if (isset($_FILES['imageInput']) && $_FILES['imageInput']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = 'uploads/'; // Directory to save uploaded images
    $fileName = $imageInput['name'];
    $filePath = $uploadDir . $name . "_" .  $fileName;

    // Move the uploaded file to the specified directory
    if (move_uploaded_file($_FILES['imageInput']['tmp_name'], $filePath)) {
        // Save the image path to the database
        $sql = "INSERT INTO tb_katalog_mobil (nama, merk, seri, tahun, b_bakar, harga, gambar) VALUES ('$name', '$merk', '$seriesInput', '$yearInput', '$fuelInput', '$priceInput', '$filePath')";

        if (mysqli_query($conn, $sql)) {
            // Image uploaded and data saved successfully
            echo "<script>
                    window.location.href = '" . $Base_Url . "';
                  </script>";
            exit();
        } else {
            echo "<script>
                    alert('Error: " . $sql . "<br>" . mysqli_error($conn) . "');
                    window.location.href = '" . $Base_Url . "';
                 </script>";
        }
    } else {
        echo "<script>
                 alert('Failed to move uploaded file.');
                 window.location.href = '" . $Base_Url . "';
              </script>";
    }
} else {
    $sql = "INSERT INTO tb_katalog_mobil (nama, merk, seri, tahun, b_bakar, harga) VALUES ('$name', '$merk', '$seriesInput', '$yearInput', '$fuelInput', '$priceInput')";
    mysqli_query($conn, $sql);

    echo "<script>
            window.location.href = '" . $Base_Url . "';
          </script>";
}

mysqli_close($conn);
