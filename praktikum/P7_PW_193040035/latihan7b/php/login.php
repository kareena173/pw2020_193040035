<?php
session_start();
if (isset($_SESSION['login'])) {
  header("Location: index.php");
  exit;
}

//Melakukan pengecekan apakah user sudah melakukan Login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}

//LOGIN
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

  //mencocokkan USERNAME dan PASSWORD
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);

      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
      }
      header("Location: ../index/php");
      die;
    }
  }
  $error = true;
}

require 'function.php';

//Ketika tombol login ditekan
if (isset($_POST['login'])) {
  $login = login($_POST);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

  <!-- my css -->
  <link rel="stylesheet" href="css/style.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

<div class="navbar-fixed">
    <nav class="blue sky">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo">MUHUN BUSANA</a>
        </div>
      </div>
    </nav>
  </div>

  <h3>FORM LOGIN</h3>
  <?php if (isset($login['error'])) : ?>
    <p style="color: red; font-style: italic"><?= $login['pesan']; ?></p>
  <?php endif; ?>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Username :
          <input type="text" name="username" autofocus autocomplete="off" required>
        </label>
      </li>
      <li>
        <label>
          Password :
          <input type="text" name="password" required>
        </label>
      </li>
      <li>
        <button type="submit" name="login">LOGIN</button>
      </li>
      <li>
        <a href="registrasi.php">Registrasi</a>
      </li>
    </ul>
  </form>
  <div class="registrasi">
      <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
    </div>

</body>

</html>