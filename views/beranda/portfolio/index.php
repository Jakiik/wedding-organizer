<?php
session_start();
require('../../../module/modul.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $portfolio = getData("SELECT * FROM portfolios WHERE id = '$id'")[0];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Portfolio Details - Baker Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>

    <main id="main">

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <a href="http://localhost/wedding-organizer/">Kembali</a>
            <div class="container">
                <div class="row gy-4">
                    <!-- swiper -->
                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                <?php foreach (json_decode($portfolio['gallery']) as $key => $value) : ?>
                                    <div class="swiper-slide">
                                        <img src="../assets/img/portfolio/<?= $value ?>" alt="">
                                    </div>
                                <?php endforeach; ?>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <!-- end swiper -->

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Project information</h3>
                            <ul>
                                <li><strong>Category</strong>: <?= $portfolio['category'] ?></li>
                                <li><strong>Client</strong>: <?= $portfolio['client'] ?></li>
                                <li><strong>Project date</strong>: <?= $portfolio['project-date'] ?></li>
                                <li><strong>Project URL</strong>: <a href="#"><?= $portfolio['project-url'] ?></a></li>
                            </ul>
                        </div>
                        <div class="portfolio-description">
                            <h2><?= $portfolio['detail-header'] ?></h2>
                            <p><?= $portfolio['detail-paraf'] ?></p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

</body>

</html>