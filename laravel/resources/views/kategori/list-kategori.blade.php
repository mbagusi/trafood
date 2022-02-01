<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Trafood.id - Kategori</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ url('') }}/assets/img/" rel="icon">
  <link href="{{ url('') }}/assets/img/" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="{{ url('') }}/your-path-to-fontawesome/css/all.css" rel="stylesheet">
  <link rel="preconnect" href=" {{ url('') }}/https://fonts.googleapis.com">
  <link rel="preconnect" href=" {{ url('') }}/https://fonts.gstatic.com" crossorigin>
  <link href= " {{ url('') }}/https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
  <link href=" {{ url('') }}/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href=" {{ url('') }}/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href=" {{ url('') }}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href=" {{ url('') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href=" {{ url('') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href=" {{ url('') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href=" {{ url('') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href=" {{ url('') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href=" {{ url('') }}/your-path-to-fontawesome/css/all.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href=" {{ url('') }}/assets/css/style3.css" rel="stylesheet">
  

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">


    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="{{ url('/') }}" style="text-decoration: none;">Trafoo.id</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0" style="margin: auto;">
        <ul>
          <li><a class="nav-link" href="{{ url('/') }}">Beranda</a></li>
          <li><a class="nav-link active" href="{{ url('list-kategori') }}">Kategori</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <form action="#" class="form-box f-right bi bi-search">
        <input type="text" name="Search" placeholder="    Cari..." style="border-radius: 17px;">
        <i class="bi bi-cart" style="margin-left: 10px;"></i>
    </div>
    </form>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="list">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row text-center">
        <h1 style="margin-top: 130px; font-family: 'Poppins', sans-serif;">Daftar Kategori</h1>
        <hr style="color: #CDA45E; width: 10%; margin: 0 auto; height: 3px;">
      </div>
      <div class="row" style="margin-top: 20px;">
        <div class="col">
          <div class="card">
            <img src="{{ url('') }}/assets/img/klepon.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold" style="color: black;">Makanan Ringan</h5>
              <div class="d-grid gap-2 d-md-block">
                <a class="btn btn-warning" href="index.html" role="button">Pilih</a>
               
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src=" {{ url('') }}/assets/img/karedok.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold" style="color: black;">Makanan Berat</h5>
              <div class="d-grid gap-2 d-md-block">
                <a class="btn btn-warning" href="index.html" role="button">Pilih</a>
              
              </div>
            </div>
          </div>
        </div>



      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="rekomen">
      <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
        <div class="row text-center">
          <h1 style="font-family: 'Poppins', sans-serif;">Rekomendasi Makanan</h1></b>
        </div>
        <div class="row" style="margin-top: 20px;">
          @forelse ($foods as $rekomendasi)
          <div class="col">
            <div class="card" {{$loop->iteration}}>
              <img src=" {{url('')}}/{{$rekomendasi->image}}" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title fw-bold" style="color: #CDA45E;">{{$rekomendasi->nama}}</h5>
                <p class="card-text fw-bold" style="color: #CDA45E;">Rp. {{$rekomendasi->harga}}</p>
                <div class="d-grid gap-2 d-md-block">
                  <a class="btn btn-secondary" href="{{ url('detail-makanan') }}" role="button">Detail</a>
                  <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Beli
                  </button>
                </div>
            </div>
        </div>
    </div>
    @empty
    <h4 style="text-align: center; color: white;">Data Tidak Ada...</h4>
</div>
@endforelse
</div>
</section>
    <!-- POP UP-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Beli</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
             <p> Apakah anda ingin membeli produk ini? </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <a type="button" class="btn btn-success bi bi-whatsapp" href="https://wa.me/081382372216?text=Haiii%2C%20Aku%20mau%20pesan%20donggg" target="_blank">Hubungi</a>
            </div>
          </div>
        </div>
      </div>

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container">
        <div class="row">



          <div class="container">
            <div class="copyright">
              &copy; 2021 Copyright <strong><span>Trafoo.id</span></strong>. All Rights Reserved
            </div>
            <div class="credits">

              Designed by Shosha</a>
            </div>
          </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src=" {{ url('') }}/assets/vendor/aos/aos.js"></script>
    <script src=" {{ url('') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src=" {{ url('') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src=" {{ url('') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src=" {{ url('') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src=" {{ url('') }}/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src=" {{ url('') }}/assets/js/main.js"></script>

</body>

</html>