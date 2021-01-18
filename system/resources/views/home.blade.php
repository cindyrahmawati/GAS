<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home</title>
  <meta content="" name="ldescriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="" rel="">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Baker - v2.1.0
  * Template URL: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top bg-dark">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">GASkeunn</a></h1>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{ url ('/index')}}">Home</a></li>
          <li><a href="{{ url ('/produk')}}">Produk</a></li>
          <li><a href="{{ url ('/kategori')}}">kategori</a></li> 
          <li><a href="{{ url ('/login')}}">Login</a></li>
          <li><a href="{{ url('/registrasi') }}">Register</a></li>
          

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
      <h1>GASkeunn </h1>
      <h2>Salah satu sistem informasi penjualan online Gas Elpiji berbagai jenis dari yang 3kg - 12kg di Ketapang, Kalimantan Barat</h2>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>Gas Elpiji 3kg</h3>
            <p>
             LPG 3Kg atau sering disebut LPG Melon merupakan Liquefied Petroleum Gas yang selanjutnya disebut LPG adalah gas hidrokarbon yang dicairkan dengan tekanan untuk memudahkan penyimpanan, pengangkutan, dan penanganannya yang pada dasarnya terdiri atas propana, butana, atau campuran keduanya. Penghapusan subsidi minyak tanah ini merupakan kebijakan pemerintah untuk mengurangi pengeluaran yang berasal dari subsidi. LPG dikemas dalam 2 jenis kemasan yaitu kemasan tabung subsidi (3 kg) dan tabung non subsidi   (5,5 kg dan 12 kg).

 <div class="col-md-6">
                <i class="bx bx-microchip" aria-hidden="true"></i> 
            <div class="row">
              <div class="col-md-6">
                <i class="bx bx-money"></i>
                <h4>Harga Pangkalan</h4>
                <p>Rp.21.000</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <!-- ======= Team Section ======= -->
    <section class="team section-bg">
      <div class="container">

        <div class="row">
          @foreach($list as $item)
           <div class="col-lg-3 col-md-3 mt-4 d-flex align-items-stretch">
             <div class="member">
                <div class="member-img">
                    <a href="{{url('detail', $item->id)}}">
                       <img src="{{url("public/$item->foto")}}" alt="" class="img-fluid">
                    </div>
                <div class="member-info">
                    <h5>{{$item->nama}}</h5>
                    <span>Rp {{number_format($item->harga)}}</span>
                    </a>
                  </div>
                </div>
              </div>
          @endforeach
        </div>
        <div class="row">
          <div class="col-md-12 mt-5">
            <div class="float-right">
              {{$list->links()}}
            </div>
          </div>
       </div>

          
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Footer ======= -->
    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>GASkeunn</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a>Cindy Rahmawati</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>