<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Checkout</title>
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
  <div class="row">
          <div class="col-md-12">
            <h3 class="breadcrumb-header">Checkout</h3>
          </div>
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /BREADCRUMB -->

    <!-- SECTION -->
    <div class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">

          <div class="col-md-8">
            <!-- Billing Details -->
            <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 mt-5">
              <div class="card">
                <div class="card-header">
                  ALAMAT PESANANMU
                </div>
                <div class="card-body">
                  <div class="card-body">
                    <div class="form-group">
                        <label for="" class="control-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="">
                      </div>
                    <div class="form-group">
                        <label for="" class="control-label">RT/RW</label>
                        <input type="text" class="form-control" name="rt/rw" value="">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Kode Pos</label>
                        <input type="text" class="form-control" name="kodepos" value="">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Catatan Lainnya</label>
                        <input type="text" class="form-control" name="kodepos" value="">
                    </div>
                </div>
                </div>
              </div>
                <div class="card">
                    <div class="card-header">
          </div>
            @foreach($list as $produk)
          <!-- Order Details -->
         
          <div class="col-md-12 order-details">
            <div class="section-title text-center">
              <h3 class="title">Pesananmu</h3>
            </div>
            <div class="order-summary">
              <div class="order-col">
                <div><strong>PRODUK</strong></div>
              </div>
              <div class="order-products">
                <div class="order-col">
                  <div>{{$produk->nama}}</div>
                </div>
              </div>
              <div class="order-col">
                <div>Ongkir</div>
                <div><strong>GRATIS</strong></div>
              </div>
              <div class="order-col">
                <div><strong>TOTAL</strong></div>
                <div><strong class="order-total">{{$produk->harga}}</strong></div>
              </div>
            </div><div class="input-radio">
                <input type="radio" name="payment" id="payment-2">
                <label for="payment-2">
                  <span></span>
                  Pembayaran Cek
                </label>
                <div class="caption">
                  <p>Pembayaran dilakukan dengan menggunakan kertas Cek</p>
                </div>
              </div>
              <div class="input-radio">
                <input type="radio" name="payment" id="payment-3">
                <label for="payment-3">
                  <span></span>
                  COD
                </label>
                <div class="caption">
                  <p>Pembayaran dlakukan dengan cara COD</p>
                </div>
              </div>
            </div>
            <div class="input-checkbox">
              <input type="checkbox" id="terms">
              <label for="terms">
                <span></span>
                I've read and accept the <a href="#">terms & conditions</a>
              </label>
            </div>
            <a href="#" class="primary-btn order-submit">Pesan</a>
          </div>
          <!-- /Order Details -->
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
                </div>
              </div>
          @endforeach
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