<?php
include '../koneksi.php';
$id_penduduk = $_POST['id_penduduk'];
$nama_dusun = $_POST['nama_dusun'];
$jumlah_kk = $_POST['jumlah_kk'];
$jumlah_p = $_POST['jumlah_p'];
$jumlah_l = $_POST['jumlah_l'];
if (!empty($nama_dusun) && !empty($jumlah_kk) && !empty($jumlah_p) && !empty($jumlah_l)) {
    $db->query("UPDATE penduduk SET nama_dusun='$nama_dusun', jumlah_kk='$jumlah_kk', jumlah_p='$jumlah_p', jumlah_l='$jumlah_l' WHERE id_penduduk ='$id_penduduk'");
    echo "<script> 
    alert('Data Berhasil Diupdate !!!');
    window.location = '../penduduk.php';
    </script>";
} else {
    echo "<script> 
    alert('Data Gagal Diupdate !!!');
    window.location = '../penduduk.php';
    </script>";
}
