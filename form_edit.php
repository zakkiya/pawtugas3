<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM tbl_097 WHERE id_jam = $id ";
    $hasil = mysqli_query($koneksi, $sql);

    if (!$hasil) {
        echo "query salah";
    }
    ?>


    <h1>Form Ganti Menu</h1>

    <?php
    while ($row = mysqli_fetch_array($hasil)) 
    {
    ?>
        <form  method="post" action="update.php">
            <input type="hidden" name="id_jam" value="<?php echo $row['id_jam'] ?>">
            Menu Makan : <input type="text" name="menu_makan" value="<?php echo $row['menu_makan'] ?>"> <br>
            Menu Minuman : <input type="text" name="menu_minuman" value="<?php echo $row['menu_minuman'] ?>"><br>
            Menu Dessert : <input type="text" name="menu_dessert" value="<?php echo $row['menu_dessert'] ?>"><br>
            Menu Snack : <input type="text" name="menu_snack" value="<?php echo $row['menu_snack'] ?>"><br>
            <button type="submit" class="btn btn-dark">Update</button>
            <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->-

        </form>
    <?php } ?>
</body>
</html>