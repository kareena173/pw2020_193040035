<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'function.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Ditambahkan!');
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
            alert('Data Gagal Ditambahkan!');
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
  <h3>FORM DATA PAKAIAN</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label for="foto">Foto :</label>
        <input type="text" name="foto" id="foto" required><br><br>
      </li>
      <li>
        <label for="harga">Harga</label>
        <input type="text" name="harga" id="harga" required><br><br>
      </li>
      <li>
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" required><br><br>
      </li>
      <li>
        <label for="stok">Stok :</label>
        <input type="text" name="stok" id="stok" required><br><br>
      </li>
      <li>
        <label for="ukuran">Ukuran :</label>
        <input type="text" name="ukuran" id="ukuran" required><br><br>
      </li>
      <li>
        <label for="warna">Warna :</label>
        <input type="text" name="warna" id="warna" required><br><br>
      </li>
      <br>
      <button type="submit" name="tambah">Tambah Data!</button>
      <button type="submit">
        <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>