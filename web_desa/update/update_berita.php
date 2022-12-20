<?php
include '../koneksi.php';
$id_berita = $_POST['id_berita'];
$tanggal = $_POST['tanggal'];
$judul = $_POST['judul'];
$isi_berita = $_POST['isi_berita'];
$gambar = $_POST['gambar'];
if (!empty($tanggal) && !empty($judul) && !empty($isi_berita) && !empty($gambar)) {
    $db->query("UPDATE berita SET tanggal='$tanggal', judul='$judul', isi_berita='$isi_berita', gambar='$gambar' WHERE id_berita ='$id_berita'");
    echo "<script> 
    alert('Data Berhasil Diupdate !!!');
    window.location = '../berita.php';
    </script>";
} else {
    echo "<script> 
    alert('Data Gagal Diupdate !!!');
    window.location = '../berita.php';
</script>";
}
