<?php
include "koneksi.php";

$id = $_POST['id_jam'];
$makan = $_POST['menu_makan'];
$minuman = $_POST['menu_minuman'];
$dessert = $_POST['menu_dessert'];
$snack = $_POST['menu_snack'];

$sql = "UPDATE tbl_097 SET menu_makan='$makan', menu_minuman='$minuman', menu_dessert='$dessert',  menu_snack='$snack' WHERE id_jam = $id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil) {
    echo "Eksekusi Update data menu gagal";
} else {
    echo "Eksekusi Update data menu berhasil <br>";
    echo "<a href='data_menu.php'> Show data</a>";
}
?>