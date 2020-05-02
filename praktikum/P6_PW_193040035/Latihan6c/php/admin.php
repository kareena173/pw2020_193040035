<?php
//menghubungkan dengan file php lainnya
require 'functions.php';

//melakukan query
$pakaian = query("SELECT * FROM pakaian");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <table border="1" cellpadding="13" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Opsi</th>
      <th>Foto</th>
      <th>Nama</th>
      <th>Ukuran</th>
      <th>Warna</th>
      <th>Stok</th>
      <th>Harga</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($pakaian as $l) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href=""><button>Ubah</button></a>
          <a href="hapus.php?id=<?= $l['id'] ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
        </td>
        <td><img src="../assets/img/<?= $l['foto']; ?>" width="120"></td>
        <td><?= $l['nama']; ?></td>
        <td><?= $l['ukuran']; ?></td>
        <td><?= $l['warna']; ?></td>
        <td><?= $l['stok']; ?></td>
        <td><?= $l['harga']; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </table>
</body>

</html>