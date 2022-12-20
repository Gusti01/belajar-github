<?php
$title = 'Berita';
include 'koneksi.php';
include 'layout/header.php';
?>
<div class="page-wrapper">
    <!-- HEADER MOBILE-->
    <?php include 'layout/header_mobile.php';  ?>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <?php include 'layout/sidebar.php';  ?>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <?php include 'layout/header_desktop.php';  ?>
        <!-- HEADER DESKTOP-->



        <!-- MODAL -->
        <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mediumModalLabel">Form Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body card-block">
                            <form action="insert/posts_berita.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Tanggal Post</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="date" name="tanggal" placeholder="Masukkan Tanggal..." class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="" class=" form-control-label">Judul Berita</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="" name="judul" placeholder="Masukkan Judul..." class="form-control">

                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="" class="form-control-label">Isi Berita</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="" name="isi_berita" placeholder="Isi Berita..." class="form-control">

                                    </div>
                                </div>
                                <!-- <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="" class=" form-control-label">Gambar</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="" name="gambar" placeholder="Nama Gambar..." class="form-control">
                                    </div>
                                </div> -->
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input" class=" form-control-label">File Gambar</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="file-input" name="gambar" class="form-control-file">
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Confirm</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#mediumModal">
                        Tambah Data
                    </button>
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="table-responsive table--no-card m-b-30">
                                <table class="table table-borderless table-striped table-earning">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal Post</th>
                                            <th>Judul Berita</th>
                                            <th class="text-left">Isi Berita</th>
                                            <th class="text-right">Gambar</th>
                                            <th class="text-right">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = $db->query("SELECT * FROM berita");
                                        $no = 1;
                                        while ($t = $query->fetch_array()) {
                                            echo "<tr>
                                                    <td>$no</td>
                                                    <td>$t[tanggal]</td>
                                                    <td>$t[judul]</td>
                                                    <td>$t[isi_berita]</td>
                                                    <td ><img class='img-fluid' src='img/$t[gambar]'></td>
                                                    <td>
                                                        <a href='edit/edit_berita.php?id_berita=$t[id_berita]' class='btn badge badge-success' >Edit</a>
                                                        | 
                                                        <a href='delete/delete_berita.php?id_berita=$t[id_berita]' class='btn badge badge-danger'>Delete</a>
                                                    </td>
                                                </tr>";
                                            $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
    </div>

</div>


<?php
include 'layout/footer.php';
?>