<?php 
include "koneksi.php";

$makan = $_POST['menu_makan'];
$minuman = $_POST['menu_minuman'];
$dessert = $_POST['menu_dessert'];
$snack = $_POST['menu_snack'];

$sql = "INSERT INTO tbl_097 VALUES (null, '$makan', '$minuman', '$dessert', '$snack')";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil) {
    echo "Eksekusi tambah menu gagal";
} else {
    echo "Eksekusi tambah menu berhasil <br>";
    echo "<a href='data_menu.php'>Show data</a>";
}
?>