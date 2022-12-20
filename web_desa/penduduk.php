<?php
$title = 'Penduduk';
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
                            <form action="insert/posts_penduduk.php" method="post" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Nama Dusun</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="nama_dusun" placeholder="Masukkan Dusun..." class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="" class=" form-control-label">Jumlah KK</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="" name="jumlah_kk" placeholder="Jumlah KK..." class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="" class="form-control-label">Jumlah Perempuan</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="" name="jumlah_p" placeholder="Jumlah Perempuan..." class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="" class=" form-control-label">Jumlah Laki-laki</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="" name="jumlah_l" placeholder="Jumlah Perempuan..." class="form-control">
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
                                            <th>Nama Dusun</th>
                                            <th>Jumlah KK</th>
                                            <th class="text-left">Jumlah Perempuan</th>
                                            <th class="text-right">Jumlah Laki-Laki</th>
                                            <th class="text-right">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = $db->query("SELECT * FROM penduduk");
                                        $no = 1;
                                        while ($t = $query->fetch_array()) {
                                            echo "<tr>
                                                    <td>$no</td>
                                                    <td>$t[nama_dusun]</td>
                                                    <td>$t[jumlah_kk]</td>
                                                    <td>$t[jumlah_p]</td>
                                                    <td>$t[jumlah_l]</td>
                                                    <td>
                                                        <a href='edit/edit_penduduk.php?id_penduduk=$t[id_penduduk]' class='badge badge-success'>Edit</a> | 
                                                        <a href='delete/delete_penduduk.php?id_penduduk=$t[id_penduduk]' class='badge badge-danger'>Delete</a>
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