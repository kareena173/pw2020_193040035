<?php
    // mengecek apakah ada id yang dikirimkan
    // jika tidak maka akan dikembalikan ke halaman index.php
    if (!isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';

    // mengambil id dari url
    $id = $_GET['id'];

    // melakukan query dengan parameter id yang diambil dari url
    $pakaian = query("SELECT * FROM pakaian WHERE id = $id")[0];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body bgcolor="lavender">
    <div class="container">
        <div class="gambar">
            <img width="200px" src="../assets/img/<?= $pakaian["foto"]; ?>" ; alt="">
        </div>
    <div class="keterangan">
        <p><?= $pakaian["nama"]; ?></p>
        <p><?= $pakaian["ukuran"]; ?></p>
        <p><?= $pakaian["warna"]; ?></p>
        <p><?= $pakaian["stok"]; ?></p>
        <p><?= $pakaian["harga"]; ?></p>
    </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
    
</body>
</html>