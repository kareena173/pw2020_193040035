<?php

require 'function.php';

if (isset($_POST['registrasi'])) {

  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('user baru berhasil ditambahkan, silahkan login!');
            document.location.href = 'login.php';
         </script>";

  return false;
  } else {
    echo "<script>
          alert('Registrasi Gagal');
        </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REGISTRASI</title>
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

  <h3>FORM REGISTRASI</h3>
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
          <input type="password" name="password" required>
        </label>
      </li>
      <li>
        <label>
          Konfirmasi Password :
          <input type="password" name="password2" required>
        </label>
      </li>
      <li>
        <button type="submit" name="registrasi">Registrasi</button>
      </li>
    </ul>
  </form>

</body>

</html>