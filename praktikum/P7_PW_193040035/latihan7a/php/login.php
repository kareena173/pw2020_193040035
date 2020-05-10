<?php
session_start();
if (isset($_SESSION['login'])) {
  header("Location: index.php");
  exit;
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

</body>

</html>