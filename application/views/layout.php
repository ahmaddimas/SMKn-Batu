<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>SMKN 1 BATU</title>
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/edua-icons.css">
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/animate.min.css">
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/cubeportfolio.min.css">
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/settings.css">
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootsnav.css">
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/style.css">
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/loader.css">

<link rel="icon" href="<?= base_url(); ?>assets/images/logo.png">

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
<!--Loader-->
<div class="loader">
  <div class="bouncybox">
      <div class="bouncy"></div>
    </div>
</div>

<!--Header-->
<header>
  <nav class="navbar navbar-default navbar-fixed white no-background bootsnav">
    <div class="container">
       <!-- <div class="search_btn btn_common"><i class="icon-icons185"></i></div> -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="<?= base_url(); ?>"><img src="<?= base_url(); ?>assets/images/logo.png" alt="logo" class="logo logo-display">
        <img src="<?= base_url(); ?>assets/images/logo.png" class="logo logo-scrolled" alt="">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOut">
          <li class="dropdown <?php if($main_view == 'home') echo 'active' ?>">
            <a href="<?= base_url(); ?>" >Home</a>
          </li>
          <li class="dropdown <?php if($main_view == 'profile') echo 'active' ?>">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >profile</a>
            <ul class="dropdown-menu">
              <li><a href="<?= base_url(); ?>">Visi Misi Tujuan</a></li>
              <li><a href="<?= base_url(); ?>">Sejarah Singkat</a></li>
              <li><a href="<?= base_url(); ?>">Identitas Sekolah</a></li>
              <li><a href="<?= base_url(); ?>">Struktur Organisasi</a></li>
              <li><a href="<?= base_url(); ?>">Jumlah Siswa</a></li>
              <li><a href="<?= base_url(); ?>">Keunggulan Sekolah</a></li>
              <li><a href="<?= base_url(); ?>">Peta Lokasi</a></li>
            </ul>
          </li>
          <!-- <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >paket keahlian</a>
            <ul class="dropdown-menu">
              <li><a href="event.html">Akomodasi Perhotelan</a></li>
              <li><a href="event_detail.html">Jasa Boga</a></li>
              <li><a href="event_detail.html">Tata Kecantikan Kulit dan Rambut</a></li>
              <li><a href="event_detail.html">Tata Busana</a></li>
            </ul>
          </li> -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">informasi</a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="event.html">Berita</a></li>
              <li><a href="event.html">Artikel</a></li>
              <li><a href="event.html">Galeri</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">kurikulum</a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="event.html">Organisasi</a></li>
              <li><a href="event.html">Program Kerja</a></li>
              <li><a href="event.html">Kalender Pendidikan</a></li>
              <li><a href="event.html">Pembelajaran</a></li>
              <li><a href="event.html">Penilaian</a></li>
              <li><a href="event.html">Sertifikasi</a></li>
              <li><a href="event.html">Informasi</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">humas</a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="event.html">Organisasi</a></li>
              <li><a href="event.html">Program Kerja</a></li>
              <li><a href="event.html">Prakerin</a></li>
              <li><a href="event.html">Sekolah Binaan</a></li>
              <li><a href="event.html">Unit Produksi dan Pencitraan</a></li>
              <li><a href="event.html">Pemasaran Tamatan</a></li>
              <li><a href="event.html">Informasi</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">kesiswaan</a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="event.html">Organisasi</a></li>
              <li><a href="event.html">Program Kerja</a></li>
              <li><a href="event.html">Lomba Kompetensi Siswa</a></li>
              <li><a href="event.html">Ektrakurikuler</a></li>
              <li><a href="event.html">Kegiatan Kesamaptaan</a></li>
              <li><a href="event.html">Kegiatan Osis</a></li>
              <li><a href="event.html">Kegiatan Paskibraka</a></li>
              <li><a href="event.html">Kegiatan Pramuka</a></li>
              <li><a href="event.html">Kegiatan Keagamaan</a></li>
              <li><a href="event.html">Informasi</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">sarpras</a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="event.html">Organisasi</a></li>
              <li><a href="event.html">Program Kerja</a></li>
              <li><a href="event.html">Fasilitas Sekolah</a></li>
              <li><a href="event.html">Informasi</a></li>
            </ul>
          </li>
          <!-- <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">bkk</a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="event.html">Organisasi</a></li>
              <li><a href="event.html">Info Lowongan Pekerjaan</a></li>
              <li><a href="event.html">Data Alumni</a></li>
            </ul>
          </li> -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">ppdb</a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="event.html">Info PPDB</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="<?= base_url(); ?>" >hubungi kami</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>


<!--Search-->
<!-- <div id="search">
  <button type="button" class="close">×</button>
  <form>
    <input type="search" value="" placeholder="Search here...."  required/>
    <button type="submit" class="btn btn_common blue">Search</button>
  </form>
</div> -->

<!--Slider-->
<?php $this->load->view($main_view); ?>

<!--FOOTER-->
<footer class="padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 footer_panel bottom25">
        <h3 class="heading bottom25">Tentang Kami<span class="divider-left"></span></h3>
        <p>We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
        <ul class="social_icon top25">
          <li><a href="#." class="facebook"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#." class="twitter"><i class="icon-twitter4"></i></a></li>
          <li><a href="#." class="dribble"><i class="icon-dribbble5"></i></a></li>
          <li><a href="#." class="instagram"><i class="icon-instagram"></i></a></li>
          <li><a href="#." class="vimo"><i class="icon-vimeo4"></i></a></li>
        </ul>
      </div>
      <div class="col-md-4 col-sm-4 footer_panel bottom25">
        <h3 class="heading bottom25">Quick Links<span class="divider-left"></span></h3>
        <ul class="links">
          <li><a href="#."><i class="icon-chevron-small-right"></i>Home</a></li>
          <li><a href="#."><i class="icon-chevron-small-right"></i>Company</a></li>
          <li><a href="#."><i class="icon-chevron-small-right"></i>Services</a></li>
          <li><a href="#."><i class="icon-chevron-small-right"></i>Our Team</a></li>
          <li><a href="#."><i class="icon-chevron-small-right"></i>Company History</a></li>
          <li><a href="#."><i class="icon-chevron-small-right"></i>Certifications</a></li>
          <li><a href="#."><i class="icon-chevron-small-right"></i>Blog</a></li>
          <li><a href="#."><i class="icon-chevron-small-right"></i>Shop</a></li>
          <li><a href="#."><i class="icon-chevron-small-right"></i>Privacy Policy</a></li>
          <li><a href="#."><i class="icon-chevron-small-right"></i>Contact Us</a></li>
        </ul>
      </div>
      <div class="col-md-4 col-sm-4 footer_panel bottom25">
        <h3 class="heading bottom25">Keep in Touch <span class="divider-left"></span></h3>
        <p class=" address"><i class="icon-map-pin"></i>198 West 21th Street Victoria 8007, Australia</p>
        <p class=" address"><i class="icon-phone"></i>(654) 332-112-222</p>
        <p class=" address"><i class="icon-mail"></i><a href="mailto:Edua@info.com">Edua@info.com</a></p>
        <img src="images/footer-map.png" alt="we are here" class="img-responsive">
      </div>
    </div>
  </div>
</footer>
<div class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <p>Copyright &copy; 2016 <a href="#.">Edua</a>. all rights reserved.</p>
      </div>
    </div>
  </div>
</div>
<!--FOOTER ends-->



<script src="<?= base_url(); ?>assets/js/jquery-2.2.3.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/js/bootsnav.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.appear.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery-countTo.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.parallax-1.1.3.js"></script>
<script src="<?= base_url(); ?>assets/js/owl.carousel.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.cubeportfolio.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.themepunch.tools.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?= base_url(); ?>assets/js/revolution.extension.layeranimation.min.js"></script>
<script src="<?= base_url(); ?>assets/js/revolution.extension.navigation.min.js"></script>
<script src="<?= base_url(); ?>assets/js/revolution.extension.parallax.min.js"></script>
<script src="<?= base_url(); ?>assets/js/revolution.extension.slideanims.min.js"></script>
<script src="<?= base_url(); ?>assets/js/revolution.extension.video.min.js"></script>
<script src="<?= base_url(); ?>assets/js/wow.min.js"></script>
<script src="<?= base_url(); ?>assets/js/functions.js"></script>

</body>
</html>
