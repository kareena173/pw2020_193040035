<?php
//menghubungkan dengan file php lainnya
require 'function.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $pakaian = query("SELECT * FROM pakaian WHERE
                foto LIKE '%$keyword%' OR
                harga LIKE '%$keyword%' OR
                nama LIKE '%$keyword%' OR
                stok LIKE '%$keyword%' OR
                ukuran LIKE '%$keyword%' OR
                warna LIKE '%$keyword%' ");
                
} else {
  $pakaian = query("SELECT * FROM pakaian");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="add">
    <a href="tambah.php">Tambah Data</a>
  </div>
  <form action="" method="GET">
    <input type="text" name="keyword" autofocus>
    <button type="submit" name="cari">Cari!</button>
  </form>
  <table border="1" cellpadding="13" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Opsi</th>
      <th>Foto</th>
      <th>Nama</th>
      <th>Harga</th>
      <th>warna</th>
      <th>Stok</th>
      <th>Ukuran</th>
      <th>warna</th>
    </tr>
    <?php if (empty($pakaian)) : ?>
      <tr>
        <td colspan="2">
          <h1>DATA TIDAK DITEMUKAN</h1>
        </td>
      </tr>
    <?php else : ?>
      <?php $i = 1; ?>
      <?php foreach ($pakaian as $p) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td>
            <a href="ubah.php?id=<?= $p['id'] ?>"><button>Ubah</button></a>
            <a href="hapus.php?id=<? $p['id'] ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
          </td>
          <td><img src="../assets/img/<?= $p['foto']; ?>" width="120"></td>
          <td><?= $p['foto']; ?></td>
          <td><?= $p['harga']; ?></td>
          <td><?= $p['nama']; ?></td>
          <td><?= $p['stok']; ?></td>
          <td><?= $p['ukuran']; ?></td>
          <td><?= $p['warna']; ?></td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    <?php endif; ?>
  </table>
</body>

</html>