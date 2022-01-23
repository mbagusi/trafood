<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Trafood.id - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/" rel="icon">
  <link href="assets/img/" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href= " {{ url('') }}/assets/css/style2.css" rel="stylesheet">


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

      <h1 class="logo me-auto me-lg-0"><a href= "{{ url('/') }}">Trafoo.id</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0" style="margin: auto;">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link" href="{{ url('list-kategori') }}">Kategori</a></li>
          <li><a class="nav-link scrollto" href="#why-us">Tentang Kami</a></li>


        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <form action="#" class="form-box f-right bi bi-search">
        <input type="text" name="Search" placeholder="    Cari..." style="border-radius: 17px;">
    </div>
    </form>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Selamat Datang di <span>Trafoo.id</span></h1>
          <h2>Makanan Khas Tradisional Indonesia</h2>



        </div>
      </div>
    </div>
  </section><!-- End Hero -->

 
    <!-- ======= About Section ======= -->
    <section id="place" class="place">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <h1>
            Silahkan Pilih Sesuai Daerah</h1>
            <hr style="color: #CDA45E; width: 10%; margin: 0 auto; height: 3px; margin-bottom: 60px;">
        </div>
        <div class="row justify-content-center">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <a href=" {{ url('food-banten') }}">
              <div class="icon"><i class="bi bi-geo-alt-fill"></i></div>
              <h4>Banten</h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <a href="{{ url('food-jabar') }}">
                <div class="icon"><i class="bi bi-geo-alt-fill"></i></div>
                <h4>Jawa Barat</h4>
                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <a href=" {{ url('food-jateng') }}">
                <div class="icon"><i class="bi bi-geo-alt-fill"></i></div>
                <h4>Jawa Tengah</h4>
                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <a href=" {{ url('food-jatim') }}">
                <div class="icon"><i class="bi bi-geo-alt-fill"></i></div>
                <h4>Jawa Timur</h4>
                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
              </a>
            </div>
          </div>
        </div>


      </div>
    </section><!-- End About Section -->

 <!-- ======= Why Us Section ======= -->
 <section id="why-us" class="why-us section-bg">
  <div class="container" data-aos="fade-up">

    <div class="row">
      <div class="judul text-center" style="color: #CDA45E; margin-bottom: 30px;">
        <h2 style="font-family: 'Poppins', sans-serif;">Apa itu TRAFOO.id?</h2>
      </div>

      <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-2">

        <div class="content" >
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia ex omnis assumenda incidunt cum praesentium nihil optio libero aperiam sapiente! Odit numquam eius cumque rem nulla optio unde saepe omnis.
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia ex omnis assumenda incidunt cum praesentium nihil optio libero aperiam sapiente! Odit numquam eius cumque rem nulla optio unde saepe omnis.
          </p>
        </div>

      </div>

      <div class="col-lg-5 align-items-stretch order-1 order-lg-2 " data-aos="zoom-in" data-aos-delay="150">
        <img src="assets/img/klepon.jpg" style="width: 520px; border-radius: 14px;" alt="">
      </div>
    </div>

  </div>
</section><!-- End Why Us Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title-pg">
          
          <h2 style="font-family: 'Poppins', sans-serif;">Team</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row justify-content-center">
          

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src=" {{ url('') }}/assets/img/circle-cropped.png" class="img-fluid" alt="">
              <h4>Mochammad Bagus Insan</h4>
              <span style="font-weight: bold">Product Manager</span>
              <p style="font-weight: bold">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae ipsam est autem alias, assumenda iste delectus quas officiis dolores repellendus vitae reiciendis porro minus ut maxime, omnis odit molestias consequatur?
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src=" {{ url('') }}/assets/img/kaka.png"alt="">
              <h4>Kaka Karsana Noerhafidan</h4>
              <span style="font-weight: bold">Developer</span>
              <p style="font-weight: bold">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam repellat possimus voluptate quibusdam accusantium minima eum veniam a. Quos ad ea recusandae laborum culpa. Atque accusantium animi expedita rem nam?
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p style="font-family: 'Poppins', sans-serif;">Contact Us</p>
        </div>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4 style="color: #CDA45E;">Location:</h4>
                <p>Jl. DI Panjaitan No.128,
                  Purwokerto Selatan, Banyumas,
                  Jawa Tengah 53147</p>


                <div class="open-hours">
                  <i class="bi bi-clock"></i>
                  <h4 style="color: #CDA45E;">Open Hours:</h4>
                  <p>
                    Senin-Sabtu:<br>
                    10:00 AM - 12:00 PM
                  </p>
                </div>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4 style="color: #CDA45E;">Email:</h4>
                <p>trafoo@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4 style="color: #CDA45E;">Call:</h4>
                <p>+62823456789</p>
              </div>

            </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row">



        <div class="container">
          <div class="copyright">
            &copy; 2021 Copyright <strong><span>Trafoo.id</span></strong>. All Rights Reserved
          </div>
          <div class="credits">

            Designed by Shosha|<a href="{{ url('login') }}">Login Admin </a></a>
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
  <script src=" {{ url('') }}/http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>

</body>

</html>