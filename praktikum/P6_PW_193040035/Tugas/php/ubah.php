<?php
require 'function.php';

$id = $_GET['id'];
$p = query("SELECT * FROM pakaian WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Diubah!');
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
            alert('Data Gagal Diubah!');
            document.location.href = 'admin.php';
          </script>";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <h3>FORM UBAH PAKAIAN</h3>
  <form action="" method="POST">
    <input type="hidden" name="id" id="id" value="<?= $p['id']; ?>">
    <ul>
      <li>
        <label for="foto">Foto :</label>
        <input type="text" name="foto" id="foto" required value="<?= $p['foto']; ?>"><br><br>
      </li>
      <li>
        <label for="harga">Harga :</label>
        <input type="text" name="harga" id="harga" required value="<?= $p['harga']; ?>"><br><br>
      </li>
      <li>
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" required value="<?= $p['nama']; ?>"><br><br>
      </li>
      <li>
        <label for="stok">Stok :</label>
        <input type="text" name="stok" id="stok" required value="<?= $p['stok']; ?>"><br><br>
      </li>
      <li>
        <label for="ukuran">Ukuran :</label>
        <input type="text" name="ukuran" id="ukuran" required value="<?= $p['ukuran']; ?>"><br><br>
      </li>
      <li>
        <label for="warna">Warna :</label>
        <input type="text" name="warna" id="warna" required value="<?= $p['warna']; ?>"><br><br>
      </li>
      <br>
      <button type="submit" name="ubah">Ubah Data!</button>
      <button type="submit">
        <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>