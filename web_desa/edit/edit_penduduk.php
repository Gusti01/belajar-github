<?php
$title = 'Berita';
include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title><?= $title; ?></title>

    <!-- Fontfaces CSS-->
    <link href="../assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../assets/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <?php
    $edit = $db->query("SELECT * FROM penduduk WHERE id_penduduk = '$_GET[id_penduduk]'");
    $e = $edit->fetch_array();

    ?>
    <div class="row d-flex justify-content-center">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-body card-block">
                    <form action="../update/update_penduduk.php" method="post" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">Nama Dusun</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="hidden" name="id_penduduk" value="<?= $e['id_penduduk']; ?>">
                                <input type="text" name="nama_dusun" value="<?= $e['nama_dusun']; ?>" placeholder="Nama Dusun..." class="form-control">

                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="" class=" form-control-label">Jumlah KK</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="" name="jumlah_kk" value="<?= $e['jumlah_kk']; ?>" placeholder="Jumlah KK..." class="form-control">

                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="" class="form-control-label">Jumlah Perempuan</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="" name="jumlah_p" value="<?= $e['jumlah_p']; ?>" placeholder="Jumlah Perempuan..." class="form-control">

                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="" class=" form-control-label">Jumlah Laki-laki</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="" name="jumlah_l" value="<?= $e['jumlah_l']; ?>" placeholder="Jumlah Laki-laki..." class="form-control">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <a href="../penduduk.php" class="btn btn-sm btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-primary">Confirm</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!-- Jquery JS-->
    <script src="../assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../assets/vendor/slick/slick.min.js">
    </script>
    <script src="../assets/vendor/wow/wow.min.js"></script>
    <script src="../assets/vendor/animsition/animsition.min.js"></script>
    <script src="../assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../assets/js/main.js"></script>

</body>

</html>