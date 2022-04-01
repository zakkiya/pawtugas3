<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "zaza";

$koneksi = mysqli_connect($host, $user, $password, $dbname);

if (!$koneksi) {
    echo "koneksi gagal";
}
