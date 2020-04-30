<?php
//Koneksi ke DB dan Pilih DB
$conn = mysqli_connect('localhost', 'root', '', 'pw_193040035');

//Query isi tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");


//Ubah data ke dalam bentuk array
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}


//Tampung ke variable mahasiswa
$mahasiswa = $rows;

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>

  <H3>Daftar Mahasiswa</H3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>

    <?php foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $m['id']; ?></td>
        <td><img src="img/<?= $m['gambar']; ?>" width="60"></td>
        <td><?= $m['nrp']; ?></td>
        <td><?= $m['nama']; ?></td>
        <td><?= $m['email']; ?></td>
        <td><?= $m['jurusan']; ?></td>
        <td>
          <a href="">Ubah</a> | <a href="">Hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>