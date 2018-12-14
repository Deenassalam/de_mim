<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>STARK</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="../../assets/css/style.css">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url(); ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo base_url(); ?>/assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>/assets/css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">STARK</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#berita">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#galeri">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#info">Info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <!-- <a class="nav-link js-scroll-trigger" href="#contact">login</a> -->
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('Welcome/form_login') ?>"> Login </a> 
            </li>
            <li class="nav-item">
              <!-- <a class="nav-link js-scroll-trigger" href="#contact">login</a> -->
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('kegiatan/indexx') ?>">BNPB</a> 
            </li>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="profil.html">Profil</a>
    <a class="dropdown-item" href="semuabencana.html">Donasi</a>
    <a class="dropdown-item" href="riwayat.html">Riwayat</a>
    <a class="dropdown-item" href="login.html">Sign out</a>

  </div>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>STARK</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <c class="lead">Sistem Relawan Berkompetensi</c><br>
            <p class="lead">Muda dan Berkompetensi</p>
            <!-- <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a> -->
            <a class="btn btn-primary btn-xl js-scroll-trigger"href="<?php echo site_url('Relawan_controller/insertdata') ?>" role="button"> Daftarkan Dirimu Sekarang!</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="berita">
      <div class="container ">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center " style="color:white;">Berita Terkini</h2>
            <hr>
          </div>
        </div>
        <div class="row">

        <div class="col-sm-4 card" style="width: 18rem;">
          <a href="<?php echo site_url("Relawan_controller/viewberita1") ?> "><img class="card-img-top " src="<?php echo base_url(); ?>assets3/img/longsor1.jpg" alt="Card image cap"></a>
          <div class="card-body">
            <h5 class="card-title">Longsor di Purwakarta</h5>
            <p class="card-text">Rumah di Purwakarta Tertimbun Longsor, 4 Warga Tewas & 5 Luka Berat</p>
            <p class="text-right"><a href="<?php echo site_url("Relawan_controller/viewberita1") ?>" class="btn btn-warning">Baca Selengkapnya...</a></p>
          </div>
        </div>

          <div class="col-sm-4 card" style="width: 18rem;">
          <a href="Relawan_controller/viewberita2"><img class="card-img-top" src="<?php echo base_url(); ?>assets3/img/gunungagung.jpg" alt="Card image cap"></a>
          <div class="card-body">
            <h5 class="card-title">Gunung Agung Meletus</h5>
            <p class="card-text">Gunung Agung Meletus, Pengungsi Mencapai 43.358 jiwa.</p>
           <p class="text-right"><a href="<?php echo site_url("Relawan_controller/viewberita2") ?>"class="btn btn-warning">Baca Selengkapnya...</a></p>
        </div>
      </div>

          <div class="col-sm-4 card" style="width: 18rem;">
          <a href="Relawan_controller/viewberita3"><img class="card-img-top" src="<?php echo base_url(); ?>assets3/img/kebakaran1.jpg" alt="Card image cap"></a>
          <div class="card-body">
            <h5 class="card-title">Kampus Undar Jombang Terbakar</h5>
            <p class="card-text">Kebakaran hebat menimpa Gedung Rektorat Kampus Undar Jombang, Jatim.</p>
           <p class="text-right"><a href="<?php echo site_url("Relawan_controller/viewberita3") ?>"class="btn btn-warning">Baca Selengkapnya...</a></p>
        </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 card" style="width: 18rem;">
          <a href="Relawan_controller/viewberita4"><img class="card-img-top" src="<?php echo base_url(); ?>assets3/img/tsunami.jpg" alt="Card image cap"></a>
          <div class="card-body">
            <h5 class="card-title">Gempa dan Tsunami Sulteng</h5>
            <p class="card-text">Korban Gempa dan Tsumani yang melanda di Sulawesi Tengah terus bertambah. Jumlah korban meninggal 
              dunia hingga pukul 13.00 WIB mencapai 1.948 orang.</p>
            <p class="text-right"><a href="<?php echo site_url("Relawan_controller/viewberita4") ?>" class="btn btn-warning">Baca Selengkapnya...</a></p>
          </div>
        </div>

        <div class="col-sm-4 card" style="width: 18rem;">
          <a href="Relawan_controller/viewberita5"><img class="card-img-top" src="<?php echo base_url(); ?>assets3/img/banjir1.jpg" alt="Card image cap"></a>
          <div class="card-body">
            <h5 class="card-title">Banjir Bandang di Aceh</h5>
            <p class="card-text">Banjir Bandang Terjang 4 Kecamatan dan 5 desa yang dihuni 130KK dan 444 jiwa di Kabupaten Aceh Tenggara, 84 rumah rusak setelah hujan deras mengguyur.</p>
           <p class="text-right"><a href="<?php echo site_url("Relawan_controller/viewberita5") ?>" class="btn btn-warning">Baca Selengkapnya...</a></p>
          </div>
        </div>

        <div class="col-sm-4 card" style="width: 18rem;">
          <a href="Relawan_controller/viewberita6"><img class="card-img-top" src="<?php echo base_url(); ?>assets3/img/longsorbrebes.jpg" alt="Card image cap"></a>
          <div class="card-body">
            <h5 class="card-title">Tanah Longsor di Brebes</h5>
            <p class="card-text">Longsor menerjang sejumlah petani yang sedang bekerja, penyelamatan terhambat oleh kondisi tanah longsoran yang masih bergerak.</p>
           <p class="text-right"><a href="<?php echo site_url("Relawan_controller/viewberita6") ?>" class="btn btn-warning">Baca Selengkapnya...</a></p>
        </div>
        </div>
        </div>

<!-- 
          <div class="row">
          <div class="col-sm-12 text-center">
            <br>
            <br>
            <a class="btn btn-secondary" href="semuabencana.html" class="btn btn-success">Lihat Semua</a>
          </div>
          </div>  -->
          </div>  
    </section>
        <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Meet Our Team!</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class=" text-primary mb-3 sr-img-1"></i><img class="card-img-top" src="<?php echo base_url(); ?>assets3/img/raisha.jpg" alt="Card image cap">
              <h3 class="mb-3">Raisha Amini D.S.</h3>
              <p class="text-muted mb-0">Our templates are updated regularly so they don't break.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="text-primary mb-3 sr-icon-2"></i><img class="card-img-top" src="<?php echo base_url(); ?>assets3/img/tika.jpg" alt="Card image cap">
              <h3 class="mb-3">Aldhiyatika Amwin</h3>
              <p class="text-muted mb-0">You can use this theme as is, or you can make changes!</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="text-primary mb-3 sr-icon-3"></i><img class="card-img-top" src="<?php echo base_url(); ?>assets3/img/dewi.JPG" alt="Card image cap">
              <h3 class="mb-3">Dewi Nadhiroh</h3>
              <p class="text-muted mb-0">We update dependencies to keep things fresh.</p>
            </div>
          </div>
          <!-- <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-heart text-primary mb-3 sr-icon-4"></i>
              <h3 class="mb-3">Made with Love</h3>
              <p class="text-muted mb-0">You have to make your websites with love these days!</p>
            </div> -->
          </div>
        </div>
      </div>
    </section>

    <section id="galeri">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">At Your Service</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-gem text-primary mb-3 sr-icon-1"></i>
              <h3 class="mb-3">Sturdy Templates</h3>
              <p class="text-muted mb-0">Our templates are updated regularly so they don't break.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-paper-plane text-primary mb-3 sr-icon-2"></i>
              <h3 class="mb-3">Ready to Ship</h3>
              <p class="text-muted mb-0">You can use this theme as is, or you can make changes!</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-code text-primary mb-3 sr-icon-3"></i>
              <h3 class="mb-3">Up to Date</h3>
              <p class="text-muted mb-0">We update dependencies to keep things fresh.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-heart text-primary mb-3 sr-icon-4"></i>
              <h3 class="mb-3">Made with Love</h3>
              <p class="text-muted mb-0">You have to make your websites with love these days!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="p-0" id="info">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/1.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/2.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/4.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/6.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-dark text-white">
      <div class="container text-center">
        <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
        <a class="btn btn-light btn-xl sr-button" href="http://startbootstrap.com/template-overviews/creative/">Download Now!</a>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="my-4">
            <p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
            <p>085-456-6789</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">de-mim@gmail.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url(); ?>/assets/js/creative.min.js"></script>

  </body>

</html>
