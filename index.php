<?php
require('./module/modul.php');
$bundles = getData('SELECT * FROM bundles');
$portfolios = getData("SELECT * FROM portfolios");
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
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Baker
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="index.html">VK PROJECT</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About Us</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Galery</a></li>
                    <li><a class="nav-link scrollto" href="#pricing">Bundling</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container position-relative">
            <h1>Selamat datang di VK Project</h1>
            <h2>Vendor wedding organizer di Blitar Raya</h2>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6">
                        <img src="assets/img/about2.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <h3>About Us</h3>
                        <p>
                            Kami merupakan wedding organizer yang memberikan layanan jasa pembantu
                            pengantin yang berpusat pada bagian tata rias, fotografi, dan dekorasi.
                            Meningkatnya angka pernikahan di Blitar, kami mendedikasikan diri untuk
                            membantu calon pengantin dengan menjalankan perencanaan pernikahan dan
                            pengaturannya.
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <i class="bx bx-receipt"></i>
                                <h4>Layanan</h4>
                                <p>Kami menyediakan pelayanan yang terfokus pada hubungan klien
                                    dan vendor secara lebih rinci dengan memperhatikan kebutuhan yang
                                    mereka inginkan.
                                </p>
                            </div>
                            <div class="col-md-6">
                                <i class="bx bx-cube-alt"></i>
                                <h4>Jam Terbang</h4>
                                <p>Jam kerja kami yang tinggi membuktikan kami telah profesional
                                    dalam mengatur rencana-rencana peernikahan yang kreatif, sakral,
                                    dan tidak terlupakan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts section-bg">
            <div class="container">

                <div class="row counters">

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="53" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Clients</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="53" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Projects</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="424" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Hours Of Support</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Hard Workers</p>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container">

                <div class="text-center">
                    <h3>About Marriage</h3>
                    <p> O mankind! Be careful of your duty to your Lord Who created you from a single soul and from it created its mate and from them twain hath spread abroad a multitude of men and women. Be careful of your duty toward Allah in Whom ye claim (your rights) of
                        one another, and toward the wombs (that bare you). Lo! Allah hath been a watcher over you.</p>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title">
                    <h2>Galery</h2>
                    <p>
                        Berikut adalah beberapa foto-foto klien yang telah bekerja sama dengan vendor kami.
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">Dokumentasi</li>
                            <li data-filter=".filter-card">Makeup</li>
                            <li data-filter=".filter-web">Dekorasi</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">
                    <?php foreach ($portfolios as $key => $value) : ?>
                        <div class="col-lg-4 col-md-6 portfolio-item <?= $value['filter'] ?>">
                            <a href="http://localhost/wedding-organizer/views/beranda/portfolio?id=<?= $value['id'] ?>">
                                <img src="assets/img/portfolio/<?= $value['image'] ?>" class="img-fluid" alt="">
                            </a>
                            <div class="portfolio-info">
                                <h4><?= $value['title'] ?></h4>
                                <p><?= $value['subtitle'] ?></p>

                                <a href="assets/img/portfolio/<?= $value['image'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?= $value['title'] ?>"><i class="bx bx-plus"></i></a>

                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container ">

                <div class="section-title">
                    <h2>Bundling</h2>
                    <p>Berikut adalah beberapa paket untuk layanan pernikahan yang disesuaikan dengan keperluan klien.</p>
                </div>
                <div class="row">
                    <?php foreach ($bundles as $bundle) : ?>
                        <div class="col-lg-4 col-md-12 mt-4 mt-md-4">
                            <div class="box featured">
                                <h3><?= $bundle['name'] ?></h3>
                                <h4><sup>Rp</sup><?= number_format($bundle['price'], 0, ',', '.') ?></h4>
                                <ul>
                                    <?php foreach (json_decode($bundle['fasilitas']) as $key => $value) : ?>
                                        <li><?= $value ?></li>
                                    <?php endforeach; ?>
                                    <li><?= $bundle['jam_kerja'] ?> Jam Kerja</li>
                                </ul>
                                <div class="btn-wrap">
                                    <a href="http://localhost/wedding-organizer/views/beranda/bundling?id=<?= $bundle['id'] ?>" class="btn-buy">Detail></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- End Pricing Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Pemesanan</h2>
                    <p>Di bawah ini adalah pengisian data untuk melanjutkan pemesanan Anda.</p>

                    <div class="col-lg-12" align="center">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-2">
                                <input type="text" class="form-control" name="number" id="number" placeholder="Your Number" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="address" id="address" placeholder="Address" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="date" class="form-control" name="date" placeholder="Date" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="estimation" placeholder="Guest Estimation" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="bundle" id="bundle" placeholder="Your Bundling Choice" required>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>VK Project</h3>
                        <p>
                            Karanggayam, Srengat <br>
                            Blitar, 66152 <br>
                            Jawa Timur, Indonesia<br><br>
                            <strong>Phone:</strong> +62 857 5550 9166<br>
                            <strong>Email:</strong> vawziy@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="https://www.facebook.com/vawzy.uchiha?mibextid=ZbWKwL" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/vk.project_?igshid=OGQ5ZDc2ODk2ZA==" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>