<?php include './include/koneksi.php '?>

<?php include './include/cont_fungsi.php' ?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Ruang Update</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="<?php echo url_dasar()?>./assets/img/logo.png" rel="icon">
        <link href="<?php echo url_dasar()?>./assets/img/logo.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="<?php echo url_dasar()?>./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo url_dasar()?>./assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="<?php echo url_dasar()?>./assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="<?php echo url_dasar()?>./assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="<?php echo url_dasar()?>./assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="<?php echo url_dasar()?>./assets/css/main.css" rel="stylesheet">


        
    <!-- Favicons -->
    <link href="<?php echo url_dasar()?>./assets/img/logo.png" rel="icon">
    <link href="<?php echo url_dasar()?>./assets/img/logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo url_dasar()?>./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo url_dasar()?>./assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo url_dasar()?>./assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo url_dasar()?>./assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo url_dasar()?>./assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="./assets/css/main.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>




  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo url_dasar()?>./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo url_dasar()?>./assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo url_dasar()?>./assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo url_dasar()?>./assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo url_dasar()?>./assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  
        <!-- =======================================================
    * Template Name: Impact
    * Updated: Mar 10 2023 with Bootstrap v5.2.3
    * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    </head>

    <body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex p-5 align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-center">
            <div class="col-lg-12">
                <div class="card-header container-fluid container-xl d-flex align-items-center justify-content-center">
                    
                    <a href="#" class="logo d-flex align-items-center"><img src="#" class="img-fluid" alt="">
                        <!-- Uncomment the line below if you also wish to use an image logo -->
                        <!-- <img src="assets/img/logo.png" alt=""> -->
                        <h1 style="color:coral; font-weight:bolder;">Ruang Update</h1>
                    </a>
                </div>

                <div class="card-footer container-fluid container-md d-flex align-items-center justify-content-center">
                    <nav id="navbar" class="navbar">
                        <ul>
                            <li><a href="<?php echo url_dasar()?>/index.php">Beranda</a></li>
                            <li><a href="<?php echo url_dasar()?>/berita.php">Berita</a></li>
                            <li><a href="<?php echo url_dasar()?>/puisi.php">Puisi</a></li>
                            <li><a href="<?php echo url_dasar()?>/team.php"><span>Kepengurusan</span></a></li>
                            <li><a href="<?php echo url_dasar()?>/proker.php"><span>Program Kerja</span></a></li>
                        </ul>
                    </nav>
                    </<!-- .navbar -->

                    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
                </div>
            </div>
        </div>

    </header><!-- End Header -->
    <!-- End Header -->

<body>