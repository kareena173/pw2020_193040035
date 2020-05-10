<?php
// menghubungkan dengan file php lainnya
    require 'php/function.php';
    if (isset($_GET['cari'])) {
      $keyword = $_GET['keyword'];
      $p = query("SELECT * FROM pakaian WHERE
                    foto LIKE '%$keyword%' OR
                    nama LIKE '%$keyword%' OR
                    harga LIKE '%$keyword%' OR
                    stok LIKE '%$keyword%' OR
                    ukuran LIKE '%$keyword%' OR
                    warna LIKE '%$keyword%' ");
    } else 
// melakukan query
     $p = query("SELECT * FROM pakaian")
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan6e</title>   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan6e</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!-- my css -->
      <link rel="stylesheet"  href="css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body bgcolor="pink" id="home" class="scrollspy">
   <!--navbar -->
   <div class="navbar-fixed">
    <nav class="indigo accent-1">
   <div class="container">
   <div class="nav-wrapper">
        <a href="#home" class="brand-logo">Muhun Busana</a>
        <ul class="right hide-on-med-and-down">
        <li><a href="php/admin.php">ADMIN</a></li>
            <li>
              <form action="" method="GET">
                <input type="text" name="keyword" autofocus>
                <button type="submit" name="cari">Cari!</button>
              </form>
            </li>
          <li><a href="https://www.google.com/maps/place/Kec.+Purwadadi,+Kabupaten+Subang,+Jawa+Barat/@-6.4408117,107.6143908,12z/data=!3m1!4b1!4m5!3m4!1s0x2e693ff1a7d60d21:0x6b2da51d11b2b4e7!8m2!3d-6.4435345!4d107.680727">Location</a></li>
          <li><a href="https://www.instagram.com/muhunbusanapwd/">Contact Us</a></li>
        </ul>
      </div>
      </div>
    </nav>
  </div>

  <?php if (empty($p)) : ?>
    <tr>
      <td colspan="2">
        <h2>DATA TIDAK DITEMUKAN</h2>
      </td>
    </tr>
  <?php else : ?>
     
      <?php foreach ($p as $p) : ?>
        <p class="nama">
          <a href="php/detail.php?id=<?= $p['id']; ?>">
            <?= $p["nama"]; ?>
          </a>
        </p> 
      <?php endforeach; ?>
      <?php endif; ?>
    </div>
</body>
</html>