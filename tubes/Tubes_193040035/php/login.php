<?php
session_start();
require 'function.php';

if (isset($_SESSION['login'])) {
  header("Location: index.php");
  exit;
}

//CEK COOKIE
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  //AMBIL USERNAME BERDASARKAN ID
  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);

  //CEK COOKIE dan USERNAME
  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
  }
}


//Melakukan pengecekan apakah user sudah melakukan Login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}

//login
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

    //JIKA REMEMBER ME DICENTANG
    if (isset($_POST['remember'])) {
      setcookie('username' . $row['username'], time() + 60 + 60 + 24);
      $hash = hash('sha256', $row['id']);
      setcookie('hash', $hash, time() + 60 + 60 + 24);
    }

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

// ketika tombol login ditekan
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
  <link rel="stylesheet" href="../css/style.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

<div class="navbar-fixed">
    <nav class="grey">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo">MUHUN BUSANA</a>
        </div>
      </div>
    </nav>
  </div>

  <div class="container">
    <form action="" method="POST">
      <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">Username atau Password Salah!</p>
      <?php endif; ?>
      <table>
        <tr>
          <td><label for="username">Username</label></td>
          <td>:</td>
          <td><input type="text" name="username"></td>
        </tr>
        <tr>
          <td><label for="password">Password</label></td>
          <td>:</td>
          <td><input type="password" name="password"></td>
        </tr>
      </table>
      <p>
        <label>
          <input type="checkbox" class="filled-in" checked="checked" name="remember" />
          <span>Remember me</span>
        </label>
      </p>
      <button name="submit" class="waves-effect waves-light btn">Login</button>
      <a href="../index.php" class="waves-effect waves-light btn">BACK</a>
    </form>
    <div class="registrasi">
      <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
    </div>
  </div>
</body>

</html>