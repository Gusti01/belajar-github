
<?php
include '../koneksi.php';
$db->query("DELETE FROM penduduk WHERE id_penduduk='$_GET[id_penduduk]'");
header('Location:../penduduk.php');
