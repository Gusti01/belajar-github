<?php
include '../koneksi.php';
$nama_dusun = $_POST['nama_dusun'];
$jumlah_kk = $_POST['jumlah_kk'];
$jumlah_p = $_POST['jumlah_p'];
$jumlah_l = $_POST['jumlah_l'];
if (!empty($nama_dusun) && !empty($jumlah_kk) && !empty($jumlah_p) && !empty($jumlah_l)) {
    $db->query("INSERT INTO penduduk (nama_dusun,jumlah_kk,jumlah_p,jumlah_l) VALUES ('$nama_dusun','$jumlah_kk','$jumlah_p','$jumlah_l')");
    // header('Location:buku.php');
    echo "<script> 
                alert('Data Berhasil Ditambah !!!');
                window.location = '../penduduk.php';
        </script>";
} else {
    echo "<script> 
    alert('Data Gagal Ditambahkan !!!');
    window.location = '../penduduk.php';
</script>";
}
