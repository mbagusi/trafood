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
          <li><a class="nav-link" href="{{ route('food.rekomendasiShow') }}">Kategori</a></li>
          <li><a class="nav-link scrollto" href="#why-us">Tentang Kami</a></li>


        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
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
              <a href=" {{ route('food.bantenShow') }}">
              <div class="icon"><i class="bi bi-geo-alt-fill"></i></div>
              <h4>Banten</h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <a href="{{ route('food.jabarShow') }}">
                <div class="icon"><i class="bi bi-geo-alt-fill"></i></div>
                <h4>Jawa Barat</h4>
                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <a href=" {{ route('food.jatengShow') }}">
                <div class="icon"><i class="bi bi-geo-alt-fill"></i></div>
                <h4>Jawa Tengah</h4>
                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <a href=" {{ route('food.jatimShow') }}">
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
   <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div>
    </div>

    <div data-aos="fade-up" style="text-align: center">
      <iframe style="border:0; width: 70%; height: 350px; border-radius: 20px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.2735402105272!2d109.24713381437269!3d-7.43495417531242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655ea49d9f9885%3A0x62be0b6159700ec9!2sInstitut%20Teknologi%20Telkom%20Purwokerto!5e0!3m2!1sid!2sid!4v1643363246179!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="container" data-aos="fade-up">

      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>Jl. DI Panjaitan No.128,
                Purwokerto Selatan, Banyumas,
                Jawa Tengah 53147</p>
            </div>

            <div class="open-hours">
              <i class="bi bi-clock"></i>
              <h4>Open Hours:</h4>
              <p>
                Senin-Sabtu:<br>
                10:00 AM - 12:00 PM
              </p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>trafood@gmail.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+62823456789</p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">

          <h5 class="text-light">Kritik dan Saran :</h5>
          @if (session()->has('pesan'))
          <div class="alert text-light">
              {{ session()->get('pesan') }}
          </div>
          @endif
          <form action="{{ route('saran.saranStore') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="nama" class="form-control text-light @error('nama') is-invalid @enderror" id="nama" placeholder="Your Name" required style="background-color: transparent;" value="{{ old('nama') }}">
                @error('nama')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control text-light @error('email') is-invalid @enderror" name="email" id="email" placeholder="Your Email" required style="background-color: transparent;" value="{{ old('email') }}">
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control text-light @error('deskripsi') is-invalid @enderror" name="deskripsi" id="deskripsi" rows="8" placeholder="Message" required style="background-color: transparent;" value="{{ old('email') }}"></textarea>
              @error('deskripsi')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn text-center text-light btn-hover" style="float: right; background-color: #CDA45E">Send</button>
          </form>

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