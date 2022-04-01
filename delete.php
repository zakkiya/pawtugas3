<?php 
include "koneksi.php";

$id = $_GET['id'];
$sql = "DELETE FROM tbl_097 WHERE id_jam=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil) {
    echo "Delete Data Gagal";
}else {
    echo "Data Menu Berhasil Dihapus <br>";
    echo "<a href='data_menu.php'>Show Data</a>";
}
?>