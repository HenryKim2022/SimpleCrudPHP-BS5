<?php include 'conn.php';

if (isset($_POST['id'])) {
    $idtoedit = $_POST['id'];
    $query = "SELECT * FROM tbl_mahasiswa WHERE id = $idtoedit";
    $exec = mysqli_query($conn, $query);
    $res = mysqli_fetch_assoc($exec);
?>


    <form method="post" action="edit_data.php">
        <div class="mb-3">
            <label for="nameInput" class="form-label">Name</label>
            <input type="hidden" name="id" value="<?= $res['id']; ?>">
            <input type="text" class="form-control" id="nameInput" name="nameInput" placeholder="Enter name" value="<?= $res['nama_mhs'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="nimInput" class="form-label">Nim</label>
            <input type="text" class="form-control" id="nimInput" name="nimInput" placeholder="Enter nim" value="<?= $res['nrp'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="addrInput" class="form-label">Address</label>
            <input type="text" class="form-control" id="addrInput" name="addrInput" placeholder="Enter address" value="<?= $res['alamat'] ?>" required>
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


<?php } ?>