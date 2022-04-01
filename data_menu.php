<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>  Form Menu Makan , Makan , Dessert, dan Snack</title>
</head>

<body>
    
    <h1 style="text-align :center">Daftar Menu Makan , Makan , Dessert, dan Snack</h1>
    <h1 style="text-align :center">Restaurant Abella Rose</h1>
    <td><button type="submit" class="btn btn-dark"><a href="form_menu.php"> <h5>Tambah Menu</h5></button></a></td>
    <br></br>
    <table <table class="table table-dark table-striped">
        <tr style="text-align :center">
            <td><b>ID JAM</b></td>
            <td><b>Menu Makan</b></td>
            <td><b>Menu Minuman</b></td>
            <td><b>Menu Dessert</b></td>
            <td><b>Menu Snack</b></td>
            <td><b>Action</b></td>
        </tr>
        <?php
        include "koneksi.php";
        $sql = "SELECT * FROM tbl_097";
        $hasil = mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_array($hasil)) {
        ?>
            <tr style="text-align: center;">
                <td><?= $row['id_jam']; ?></td>
                <td><?= $row['menu_makan']; ?></td>
                <td><?= $row['menu_minuman']; ?></td>
                <td><?= $row['menu_dessert']; ?></td>
                <td><?= $row['menu_snack']; ?></td>
                <td><button type="submit" class="btn btn-warning"><a href="form_edit.php?id=<?= $row['id_jam'] ?>"> Edit </button></a>| <button type="submit" class="btn btn-danger"><a href="delete.php?id=<?= $row['id_jam'] ?>"> Delete</button></a></td>
            </tr>
        <?php }
        ?>
        <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
    </table>
     
</body>

</html>