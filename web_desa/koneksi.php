<?php
$dbhost = 'localhost';
$dbroot = 'root';
$dbpass = '';
$dbname = 'batusempe';

$db = new mysqli($dbhost, $dbroot, $dbpass, $dbname);

if ($db->connect_error) {
    die("Koneksi Database Tidak Berhasil");
}


$cari = mysqli_query($db, "SELECT SUM(jumlah_kk) FROM penduduk");
$dapat = mysqli_fetch_array($cari);

$cari1 = mysqli_query($db, "SELECT SUM(jumlah_p) FROM penduduk");
$dapat1 = mysqli_fetch_array($cari1);

$cari2 = mysqli_query($db, "SELECT SUM(jumlah_l) FROM penduduk");
$dapat2 = mysqli_fetch_array($cari2);

// jumlah penduduk
$mataoleo = mysqli_query($db, "SELECT SUM(jumlah_l+jumlah_p) FROM penduduk");
$mo = mysqli_fetch_array($mataoleo);
