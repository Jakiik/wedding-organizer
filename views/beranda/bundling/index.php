<?php
session_start();
require('../../../module/modul.php');
if(!isset($_SESSION['login'])){
  header('Location: http://localhost/wedding-organizer/views/user/login');
}
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $bundle = getData("SELECT * FROM bundles WHERE id = '$id'")[0];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Baker Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <style>
    body {
      font-family: "Open Sans", sans-serif;
      color: #444444;
    }

    a {
      color: #ffc107;
      text-decoration: none;
    }

    h1,
    h2,
    h3 {
      font-family: "Raleway", sans-serif;
    }

    ul {
      padding: 0;
      list-style: none;
      color: #444444;
      text-align: center;
      line-height: 20px;
      font-size: 14px;
    }

    .container {
      background-image: url("assets/img/bundling/bundlingbg1.jpg");
      opacity: 0.7;
      /* Ubah nilai opacity sesuai kebutuhan (0.0 - 1.0) */
      height: 500px;
      width: 100%;
      background-size: cover;
      position: relative;
    }

    .content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
    }
  </style>
</head>

<body>
  <a href="http://localhost/wedding-organizer/">Kembali</a>
  <div class="">
    <h1 align="center">Perlengkapan Paket <?= $bundle['name'] ?></h1>
    <p>
    <h3 align="center">Makeup Pengantin</h3>
    <ul>
      <?php foreach (json_decode($bundle['makeup']) as $key => $value) : ?>
        <li><?= $value ?></li>
      <?php endforeach; ?>
    </ul>
    <h3 align="center">Dokumentasi</h3>
    <ul>
      <?php foreach (json_decode($bundle['dokumentasi']) as $key => $value) : ?>
        <li><?= $value ?></li>
      <?php endforeach; ?>
    </ul>

    <h3 align="center">Dekorasi</h3>
    <ul>
      <ul>
        <?php foreach (json_decode($bundle['dekorasi']) as $key => $value) : ?>
          <li><?= $value ?></li>
        <?php endforeach; ?>
      </ul>
    </ul>
    </p>
  </div>
  <a href="http://localhost/wedding-organizer/views/beranda/payment?id=<?= $bundle['id'] ?>">Pesan Sekarang</a>
</body>

</html>