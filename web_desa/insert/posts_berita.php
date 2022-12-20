<?php
include '../koneksi.php';
$tanggal = $_POST['tanggal'];
$judul = $_POST['judul'];
$isi_berita = $_POST['isi_berita'];
$gambar = upload();
if (!empty($tanggal) && !empty($judul) && !empty($isi_berita) && !empty($gambar)) {
    $db->query("INSERT INTO berita (tanggal,judul,isi_berita,gambar) VALUES ('$tanggal','$judul','$isi_berita','$gambar')");
    echo "<script> 
                alert('Data Berhasil Ditambah !!!');
                window.location = '../berita.php';
        </script>";
} else {
    echo "<script> 
        alert('Data Gagal Ditambahkan !!!');
        window.location = '../berita.php';
    </script>";
}

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];



    // Cek Apakah Tidak Ada Gambar Yang Diupload
    if ($error === 4) {
        echo "<script>
    alert('Pilih Gambar Dulu');
    </script> ";
        return false;
    }

    // Cek Apakah Yang Diupload Gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
    alert('Yang Anda Upload Bukan Gambar !');
    </script> ";
        return false;
    }

    // Cek Jika Ukurannya Terlalu Besar
    if ($ukuranFile > 1000000) {
        echo "<script>
    alert('Ukuran Gambar Terlalu Besar !');
    </script> ";
        return false;
    }

    // Siap Upload
    move_uploaded_file($tmpName, '../img/' . $namaFile);

    return $namaFile;
}
