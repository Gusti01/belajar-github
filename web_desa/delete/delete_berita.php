
<?php
include '../koneksi.php';
$db->query("DELETE FROM berita WHERE id_berita='$_GET[id_berita]'");
header('Location:../berita.php');
