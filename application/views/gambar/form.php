<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Desa Jatimakmur - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>assets/css/main.css" rel="stylesheet">

  
</head>

<body class="page-blog">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="home.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="assets/img/lambang.jpg" class="img-fluid" alt="">
        <h4 class="d-flex align-items-center">Website Resmi Desa Jatimakmur</h4>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="<?php echo base_url("home")?>" >Home</a></li>
          <li><a href="<?php echo base_url("profil")?>">Profil Desa</a></li>
          <li><a href="<?php echo base_url("suratA")?>">Surat Online</a></li>
          <li><a href="<?php echo base_url("penduduk")?>">Penduduk</a></li>
          <li><a href="<?php echo base_url("gambar")?>" class="active">Berita</a></li>
          <li><a href="<?php echo base_url("logout.php")?>">Logout</a></li>
       
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?= base_url() ?>assets/img/blog-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Berita</h2>
        <ol>
          <li><a href="home.php">Home</a></li>
          <li>Berita</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
     <!-- ======= Our Services Section ======= -->
     <section id="services-list" class="services-list">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Berita</h2>
        </div>  
      </div>
    </section><!-- End Testimonials Section -->

  

	
    <?php echo form_open("gambar/tambah", array('enctype'=>'multipart/form-data')); ?>
	<table cellpadding="8">
		<tr>
			<td>Judul</td>
			<td><input type="text" name="input_judul" value="<?php echo set_value('input_judul'); ?>"></td>
		</tr>
		<tr>
			<td>Tanggal</td>
			<td><input type="date" name="input_tanggal" value="<?php echo set_value('input_tanggal'); ?>"></td>
		</tr>
		<tr><td>Kategori</td><td>: <select name="input_kategori" value="<?php echo set_value('input_kategori'); ?>">
			<option selected="select">-=pilih=-</option>
			<option>Edukasi</option>
			<option>Politik</option>
			<option>Olahraga</option>
			<option>Teknologi</option>
			<option>Umum</option>
			</select></td></tr>
		<tr>
			<td>Autor</td>
			<td><input type="text" name="input_autor" value="<?php echo set_value('input_autor'); ?>"></td>
		</tr>
		<tr>
			<td>Deskripsi</td>
			<td><textarea type="textarea" name="input_deskripsi" value="<?php echo set_value('input_deskripsi'); ?>"></textarea></td>
		</tr>
		<tr>
			<td>Gambar</td>
			<td><input type="file" name="input_gambar"></td>
		</tr>
	</table>
		
	<hr>
	<input type="submit" name="submit" value="Simpan">
	<a href="<?php echo base_url("gambar"); ?>"><input type="button" value="Batal"></a>
<?php echo form_close(); ?>



<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

<div class="footer-content">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-5 col-md-12 footer-info">
        <a href="index.php" class="logo d-flex align-items-center">
          <span>Desa Jatimakmur</span>
        </a>
        <p>Jatimakmur adalah salah satu desa yang berada di wilayah kecamatan Nusa Penida, Kabupaten Klungkung, Provinsi Bali, Indonesia.</p>
        <div class="social-links d-flex  mt-3">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-dash"></i> <a href="<?php echo base_url("home")?>">Home</a></li>
              <li><i class="bi bi-dash"></i> <a href="<?php echo base_url("profil")?>">Profil Desa</a></a></li>
              <li><i class="bi bi-dash"></i> <a href="<?php echo base_url("suratA")?>">Surat Online</a></li>
              <li><i class="bi bi-dash"></i> <a href="<?php echo base_url("gambar")?>">Berita</a></li>
              <li><i class="bi bi-dash"></i> <a href="<?php echo base_url("penduduk")?>">Penduduk</a></li>
              
            </ul>
          </div>

      <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
        <h4>Contact Us</h4>
        <p>
          DESA Jatimakmur<br>
          Banjar Dinas Jatimakmur, Desa Jatimakmur, Nusa Penida<br>
          Kecamatan Nusa Penida Kabupaten Klungkung Provinsi Bali Kode Pos 80771<br><br>
          <strong>Phone:</strong> 081338925201<br>
          <strong>Email:</strong> info@Jatimakmur.desa.id<br>
        </p>

      </div>

    </div>
  </div>
</div>

<div class="footer-legal">
  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>Desa Jatimakmur</span></strong>.
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nova-bootstrap-business-template/ -->
      Designed by <a>Jatimakmur</a>
    </div>
  </div>
</div>
</footer><!-- End Footer -->
<!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url() ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>assets/js/main.js"></script>

</body>

</html>     

