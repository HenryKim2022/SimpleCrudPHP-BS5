<?php include 'conn.php';
$action = "";


if (isset($_POST['action'])) {
    if ($_POST['action'] == "EDIT") {
        if (isset($_POST['id'])) {
            $idtoedit = $_POST['id'];
            $query = "SELECT * FROM tb_katalog_mobil WHERE id = $idtoedit";
            $exec = mysqli_query($conn, $query);
            $res = mysqli_fetch_assoc($exec);
        }


?>
        <form method="post" action="edit_data.php" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nameInput" class="form-label">Name</label>
                <input type="hidden" name="id" value="<?= $res['id']; ?>">
                <input type="text" class="form-control" id="nameInput" name="nameInput" placeholder="Enter name" value="<?= $res['nama'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="merkInput" class="form-label">Merk</label>
                <input type="text" class="form-control" id="merkInput" name="merkInput" placeholder="Enter merk" value="<?= $res['merk'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="seriesInput" class="form-label">Series</label>
                <input type="text" class="form-control" id="seriesInput" name="seriesInput" placeholder="Enter series" value="<?= $res['seri'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="yearInput" class="form-label">Year</label>
                <input type="text" class="form-control" id="yearInput" name="yearInput" placeholder="Enter year" value="<?= $res['tahun'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="fuelInput" class="form-label">Fuel</label>
                <input type="text" class="form-control" id="fuelInput" name="fuelInput" placeholder="Enter fuel" value="<?= $res['b_bakar'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="priceInput" class="form-label">Price</label>
                <input type="number" class="form-control" id="priceInput" name="priceInput" placeholder="Enter price" value="<?= $res['harga'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="imageInput" class="form-label">Image</label>
                <input type="file" class="form-control" id="imageInput" name="imageInput" accept="image/*" value="<?= $res['gambar'] ?>">
                <div>
                    <?php if ($res['gambar']) { ?>
                        <img src="<?= $res['gambar'] ?>" alt="Image" width="200">
                    <?php } else { ?>
                        <img src="<?= 'img/no_image.jpg' ?>" alt="No Image" width="200">
                    <?php } ?>
                </div>

            </div>

            </div>
            <div class="modal-footer">
                <button id="closemodal" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>

        <script type="text/javascript">
            $('#closemodal').click(function() {
                $('#editDataModal').modal('hide');
            });
        </script>

<?php }
} ?>


<?php
if (isset($_POST['action'])) {
    if ($_POST['action'] == "SHOW") {
        if (isset($_POST['id'])) {
            $idtoshow = $_POST['id'];
            $query = "SELECT * FROM tb_katalog_mobil WHERE id = $idtoshow";
            $exec = mysqli_query($conn, $query);
            $res = mysqli_fetch_assoc($exec);
        }


?>
        <form>
            <div class="mb-3">
                <label for="nameInput" class="form-label">Name</label>
                <input type="hidden" name="id" value="<?= $res['id']; ?>">
                <input type="text" class="form-control" id="nameInput" name="nameInput" placeholder="Enter name" value="<?= $res['nama'] ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="merkInput" class="form-label">Merk</label>
                <input type="text" class="form-control" id="merkInput" name="merkInput" placeholder="Enter merk" value="<?= $res['merk'] ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="seriesInput" class="form-label">Series</label>
                <input type="text" class="form-control" id="seriesInput" name="seriesInput" placeholder="Enter series" value="<?= $res['seri'] ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="yearInput" class="form-label">Year</label>
                <input type="text" class="form-control" id="yearInput" name="yearInput" placeholder="Enter year" value="<?= $res['tahun'] ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="fuelInput" class="form-label">Fuel</label>
                <input type="text" class="form-control" id="fuelInput" name="fuelInput" placeholder="Enter fuel" value="<?= $res['b_bakar'] ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="priceInput" class="form-label">Price</label>
                <input type="text" class="form-control" id="priceInput" name="priceInput" placeholder="Enter price" value="<?= $res['harga'] ?>" readonly>
            </div>
            <div class="mb-3">
                <label>Image</label>
                <div>
                    <?php if ($res['gambar']) { ?>
                        <img src="<?= $res['gambar'] ?>" alt="Image" width="200">
                    <?php } else { ?>
                        <img src="<?= 'img/no_image.jpg' ?>" alt="No Image" width="200">
                    <?php } ?>

                </div>
            </div>

            </div>
            <div class="modal-footer">
                <button id="closemodal" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </form>

        <script type="text/javascript">
            $('#closemodal').click(function() {
                $('#showDataModal').modal('hide');
            });
        </script>

<?php }
} ?>