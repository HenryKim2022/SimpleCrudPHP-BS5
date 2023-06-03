<?php include "head.php" ?>

<body>
    <!-- Navbar -->
    <?php
    include("navbar.php");
    ?>


    <!-- Just some My content -->
    <div id="page" class="container-fluid pt-1">
        <div id="page-header-nav" class="clearfix"> </div>

        <div id="page-content" class="row-fluid">
            <div id="site-news-forum mt-9 pt-21">
                <h2></h2>
            </div>

            <!-- CONTENT START HERE -->
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title">Manage Data</h5>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDataModal">Add Data</button>
                </div>
                <div class="card-body">
                    <div class="table-container">

                        <table id="dataListTable" class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <td colspan="2" class="align-middle text-start">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="sortOrder" id="ascending" value="asc" checked>
                                                    <label class="form-check-label" for="ascending">Ascending</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="sortOrder" id="descending" value="desc">
                                                    <label class="form-check-label" for="descending">Descending</label>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <button id="sortButton" class="btn btn-primary">Go</button>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="col" class="align-middle text-center">No.</th>
                                    <th scope="col" class="align-middle">Name</th>
                                    <th scope="col" class="align-middle">Merk</th>
                                    <th scope="col" class="align-middle">Series</th>
                                    <th scope="col" class="align-middle">Year</th>
                                    <th scope="col" class="align-middle">Fuel</th>
                                    <th scope="col" class="align-middle">Price</th>
                                    <th scope="col" class="align-middle">Image</th>
                                    <th scope="col" class="align-middle text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                include "conn.php";
                                $i = 1; {
                                    $data = mysqli_query($conn, "SELECT * FROM tb_katalog_mobil");
                                    while ($d = mysqli_fetch_assoc($data)) :

                                ?>
                                        <tr>
                                            <th scope="row" class="align-middle text-center"><?= $i++ ?></th>
                                            <td class="align-middle text-left"><?= $d['nama']; ?></td>
                                            <td class="align-middle text-left"><?= $d['merk']; ?></td>
                                            <td class="align-middle text-left"><?= $d['seri']; ?></td>
                                            <td class="align-middle text-left"><?= $d['tahun']; ?></td>
                                            <td class="align-middle text-left"><?= $d['b_bakar']; ?></td>
                                            <td class="align-middle text-left"><?= convert2idr($d['harga']); ?></td>

                                            <td class="text-center justify-content-center align-middle">
                                                <?php if ($d['gambar']) { ?>
                                                    <img src="<?= $d['gambar']; ?>" alt="Image" width="100">
                                                <?php } else { ?>
                                                    <img src="<?= 'img/no_image.jpg' ?>" alt="Image" width="100">
                                                <?php } ?>

                                            </td>
                                            <td class="align-middle align-content-sm-between justify-content-center">
                                                <div class="d-flex align-content-sm-between justify-content-center align-middle">
                                                    <a href="#" class="view_data btn btn-sm btn-warning mr-2" id="<?= $d['id']; ?>" data-bs-toggle="modal" data-bs-target="#editDataModal"><i class="fad fa-edit"></i></a>
                                                    <a href="del_data.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-danger mr-2" onclick="return confirm('Apakah Yakin Ingin Menghapus Data?')"><i class="fad fa-trash"></i></a>
                                                    <a href="#" class="show_data btn btn-sm btn-primary mr-2" id="<?= $d['id']; ?>" data-bs-toggle="modal" data-bs-target="#showDataModal"><i class="fad fa-info"></i></a>

                                                </div>
                                            </td>
                                        </tr>

                                <?php
                                    endwhile;
                                } ?>
                            </tbody>
                        </table>


                        <script>
                            document.getElementById('sortButton').addEventListener('click', function() {
                                var table = document.getElementById('dataListTable');
                                var sortOrder = document.querySelector('input[name="sortOrder"]:checked').value;
                                var tbody = table.querySelector('tbody');
                                var rows = Array.from(tbody.getElementsByTagName('tr'));

                                rows.sort(function(a, b) {
                                    var aValue = a.cells[2].textContent;
                                    var bValue = b.cells[2].textContent;
                                    return sortOrder === 'asc' ? aValue.localeCompare(bValue) : bValue.localeCompare(aValue);
                                });

                                rows.forEach(function(row) {
                                    tbody.appendChild(row);
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>



            <!-- CONTENT END HERE -->


            <br><br><br><br><br>

            <br><br><br><br><br>
            <h2></h2>


            <!--  -->
            <!-- Add Modal -->
            <div class="modal fade" id="addDataModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <form method="post" action="add_data.php" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="nameInput" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="nameInput" name="nameInput" placeholder="Enter name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="merkInput" class="form-label">Merk</label>
                                    <input type="text" class="form-control" id="merkInput" name="merkInput" placeholder="Enter merk" required>
                                </div>
                                <div class="mb-3">
                                    <label for="seriesInput" class="form-label">Series</label>
                                    <input type="text" class="form-control" id="seriesInput" name="seriesInput" placeholder="Enter series" required>
                                </div>
                                <div class="mb-3">
                                    <label for="yearInput" class="form-label">Year</label>
                                    <input type="text" class="form-control" id="yearInput" name="yearInput" placeholder="Enter year" required>
                                </div>
                                <div class="mb-3">
                                    <label for="fuelInput" class="form-label">Fuel</label>
                                    <input type="text" class="form-control" id="fuelInput" name="fuelInput" placeholder="Enter fuel" required>
                                </div>
                                <div class="mb-3">
                                    <label for="priceInput" class="form-label">Price</label>
                                    <input type="number" class="form-control" id="priceInput" name="priceInput" placeholder="Enter price" required>
                                </div>
                                <div class="mb-3">
                                    <label for="imageInput" class="form-label">Upload Image</label>
                                    <input type="file" class="form-control" id="imageInput" name="imageInput" accept="image/*">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Edit Modal -->
            <div class="modal fade" id="editDataModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="datatoedit">


                        </div>

                    </div>
                </div>
            </div>


            <!-- ShowData Modal -->
            <div class="modal fade" id="showDataModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Data Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="datatoshow">


                        </div>

                    </div>
                </div>
            </div>


            <!-- About Modal -->
            <div class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">About Me</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="col-md-12 col-md-6 mb-4 text-center mt-3">
                                <h3 class="">
                                    <u class="cust-u">
                                        <?= $Site_Purpose ?>
                                    </u>
                                </h3>
                            </div>
                            <div class="row">
                                <!-- Group Logo  -->
                                <div class="col-xl-12 col-md-6 mb-4 justify-content-center">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-5 mr-2 Group3Logo">
                                                    <table>
                                                        <tr>
                                                            <td class="d-flex align-content-sm-between justify-content-end align-middle">
                                                                <img src="/img/logo.png" alt="SiteLogo" style="height: 42%; width: 32%">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="text-xs font-weight-bold text-uppercase mb-1 mt-1 justify-content-center" style="color:#f6503b;">
                                                                    <a>
                                                                        <b><?= $Institut_Name ?></b>
                                                                    </a>
                                                                    <div class="text-xs font-weight-lighter text-uppercase mb-1 mt-1">
                                                                        <a><i><?= $Site_Name ?></i></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>



                                                </div>
                                                <div class="col-6">
                                                    <!-- <i class="fas fa-calendar fa-2x text-gray-300"></i> -->
                                                    <div class="text-md text-green font-weight-bold text-uppercase mb-1">
                                                        <a class="text-orange">
                                                            Made By:
                                                        </a>
                                                    </div>

                                                    <div class="cust-ul pl-0 ml-4 grad-txt-2 text-md">
                                                        <span>
                                                            <i class="cust-j fad fa-laptop-code"></i>
                                                            Programmer | <i class="fa-duotone fa-arrow-right-from-arc"></i>
                                                            Hendri (1152125001)
                                                        </span>
                                                    </div>

                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ok</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>


    <?php include "footer.php" ?>

    <script type="text/javascript">
        $('.view_data').click(function() {
            var idtoedit = $(this).attr('id');
            $.ajax({
                url: 'v_wrapper.php',
                method: 'post',
                data: {
                    id: idtoedit,
                    action: "EDIT"
                },
                success: function(data) {
                    $('#datatoedit').html(data)
                    $('#editDataModal').modal('show');
                }
            })

        })
    </script>



    <script type="text/javascript">
        $('.show_data').click(function() {
            var idtoshow = $(this).attr('id');
            $.ajax({
                url: 'v_wrapper.php',
                method: 'post',
                data: {
                    id: idtoshow,
                    action: "SHOW"
                },
                success: function(data) {
                    $('#datatoshow').html(data)
                    $('#showDataModal').modal('show');
                }
            })

        })
    </script>

</body>

</html>