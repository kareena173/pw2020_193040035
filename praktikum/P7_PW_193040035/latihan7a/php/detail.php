<?php

require 'function.php';

// mengambil id dari url
$id = $_GET['id'];

// mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
// if (!isset($_GET['id'])) {
//     header("location: ../index.php");
//     exit;
// }





// melakukan query dengan parameter id yang diambil dari url
$pakaian = query("SELECT * FROM pakaian WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Latihan 5C</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

    <!-- my css -->
    <link rel="stylesheet" href="../css/style.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div class="container">
        <div class="foto">
            <center><img width="200px" src="../assets/img/<?= $pakaian["foto"]; ?>" ; alt=""></center>
        </div>
        <div class="keterangan">
            <p><?= $pakaian["foto"]; ?></p>
            <p><?= $pakaian["harga"]; ?></p>
            <p><?= $pakaian["nama"]; ?></p>
            <p><?= $pakaian["stok"]; ?></p>
            <p><?= $pakaian["ukuran"]; ?></p>
            <p><?= $pakaian["warna"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>

</body>

</html>