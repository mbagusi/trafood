<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style3.css">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <title>Trafoo.id - Detail</title>
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

            <a class="logo me-auto me-lg-0" href="{{ url('') }}/" style="text-decoration: none; color: white;">Trafoo.id</a>

            <nav id="navbar" class="navbar order-last order-lg-0" style="margin: auto;">
                <ul>
                    <li><a class="nav-link scrollto" href="{{ url('') }}">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('list-kategori') }}">Kategori</a></li>



                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <form action="#" class="form-box f-right bi bi-search">
                <input type="text" name="Search" placeholder="    Cari..." style="border-radius: 17px;">
        </div>
        </form>

        </div>
    </header><!-- End Header -->

    <section id="features" class="features" style="color: #CDA45E; ">
        <div class="container">
            <div class="row text-center" style="margin-bottom: 20px; ">
                <h1 style="font-family: 'Poppins', sans-serif; margin-top: 100px;">Details</h1>
                <hr style="color: #CDA45E; width: 5%; margin: 0 auto; height: 3px; margin-bottom: 20px;">
            </div>
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1">

                    <h3 style="font-family: 'Poppins', sans-serif;">Klepon</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur ullam eaque repellat officia
                        autem exercitationem hic. Vero perferendis facere architecto voluptatem nemo ducimus incidunt,
                        voluptate, laboriosam dolor aut, adipisci ea?</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam voluptates cumque atque soluta
                        numquam, repudiandae impedit! Non possimus beatae, iusto quos hic reiciendis magni minus
                        laboriosam neque, voluptatum pariatur soluta?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur distinctio unde nesciunt
                        quibusdam accusantium accusamus deserunt deleniti. Error culpa voluptatibus ipsam sit? Impedit
                        blanditiis nemo ab, corrupti amet repellat ipsam.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda modi ipsa numquam itaque?
                        Ipsa, maxime sequi quisquam tempore accusamus molestiae quod vitae corrupti cum nam nihil
                        quibusdam dolore corporis quidem.</p>


                </div>
                <div class="image col-lg-6 order-1 order-lg-2">
                    <img src="assets/img/klepon.jpg" alt="" style="width: 630px; height: 450px; border-radius: 10px;">
                </div>
            </div>

        </div>
    </section><!-- End Features Section -->


    <section id="contact" class="contact">


        <div class="container" data-aos="fade-up">

            <div class="row mt-5" style="margin-bottom: 30px;">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4 style="color: #CDA45E; font-weight: bold;">Warung Koboy:</h4>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores non alias quis
                                ipsam, laudantium. </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-bicycle"></i>
                            <h4 style="color: #CDA45E; font-weight: bold;">Pesan Antar:</h4>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores non alias quis
                                ipsam, laudantium. </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-cash-coin"></i>
                            <h4 style="color: #CDA45E; font-weight: bold;">Ongkir:</h4>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores non alias quis
                                ipsam, laudantium. </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row justify-content-center">
                <div class="col-lg-1">
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Beli
                    </button>
                </div>
                <div class="col-lg-1">
                    <a href="#" class="btn btn-secondary" role="button" aria-disabled="true">Kembali</a>
                </div>

            </div>

        </div>

    </section><!-- End Contact Section -->

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
                    <a type="button" class="btn btn-success bi bi-whatsapp"
                        href="https://wa.me/081382372216?text=Haiii%2C%20Aku%20mau%20pesan%20donggg"
                        target="_blank">Hubungi</a>
                </div>
            </div>
        </div>
    </div>

    <!--<section class="toko" style="margin-top: 20px;">

        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <div class="fs-3 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-shop" viewBox="0 0 20 20">
                        <path
                            d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z">
                        </path>
                    </svg>
                    Warung Koboy
                </div>

                <div class="fs-3 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                    </svg>
                    Melayani pesan antar daerah Bandung
                </div>

                <div class="fs-3 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-truck" viewBox="0 0 16 16">
                        <path
                            d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                    </svg>
                    Ongkir sekitar 8 - 15k
                </div>
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-bottom: 20px;">
                    Beli
            </div>
        </div>
        </div>
        </div>
    </section> End About Section -->

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
                    <a type="button" class="btn btn-success bi bi-whatsapp"
                        href="https://wa.me/081382372216?text=Haiii%2C%20Aku%20mau%20pesan%20donggg"
                        target="_blank">Hubungi</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Akhir Toko-->

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



    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>



    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
</body>

</html>