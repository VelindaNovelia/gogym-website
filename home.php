<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
    <!--  Membuat Navbar -->
    <div class="container-fluid position-relative p-0">
        <nav id="bg" class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <div>
                <a href="home.php"><img id="logo" src="img/GO GYM.png"></a>
            </div>
            <a href="" class="navbar-brand p-0">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0" id="nav-item">
                    <a href="home.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About Us</a>
                    <a href="member.php" class="nav-item nav-link">Membership</a>
                    <a href="facility.php" class="nav-item nav-link">Facility</a>
                    <a href="merchan.php" class="nav-item nav-link">Mechandise</a>
                    <a href="#footer" class="nav-item nav-link">Contact</a>
                </div>
                <?php
                session_start();
                $_SESSION['registered_user'] = false;
                if ($_SESSION['registered_user']) {
                ?>
                    <a href="logout.php" class="btn btn-info rounded-pill py-2 px-40">Logout</a>
                <?php
                } else {
                ?>
                    <a href="daftar.php" class="btn btn-info rounded-pill py-2 px-40">Sign In/Sign Up</a>
                <?php
                }
                ?>
            </div>
        </nav>

        <div class="main-banner" id="top">
            <img src="img/gambar3.jpg" style="width: 100%;" alt="" class="mb-2">

            <div class="video-overlay header-text mb-0">
                <div class="caption">
                    <h6 class="">work harder, get stronger</h6>
                    <h2>grow with <em>us</em></h2>
                    <div class="main-button scroll-to-section">
                        <a href="member.php">Become a member</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- About -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" id="c1">
                        <div class="position-relative h-100">
                            <img class="img-fluid position-absolute w-100 h-100" src="img/gim.jpg" id="img1">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp">
                        <h6 class="section-title pe-3">About Us</h6>
                        <h1 class="mb-4">Welcome to <span id="fc1">GO GYM</span></h1>
                        <div data-aos="fade-up-right" data-aos-duration="1000">
                            <p class="mb-4">Selamat datang di GO GYM, tempat di mana kebugaran
                                bertemu kesenangan! Berdiri dengan semangat untuk mempromosikan gaya hidup sehat dan aktif, GO
                                GYM adalah pusat kebugaran utama yang berdedikasi membantu individu mencapai tujuan kebugaran
                                mereka dalam lingkungan yang penuh energi dan dukungan</p>


                            <div class="row gy-2 gx-4 mb-4">
                                <div class="col-sm-6">
                                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Personal Trainer</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Merchandise</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Comfortable Facility</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Gym Community</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Membership Deals</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Service</p>
                                </div>
                            </div>
                            <a class="btn btn-warning py-3 px-5 mt-2" href="about.php">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Our Facilities -->
        <div class="container-xxl py-5">
            <div class="container" id="c2">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center px-3" id="fc1">Facility</h6>
                    <h1 class="mb-5">Our Facilities</h1>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/resepsionis.png" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="img/beban.png" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="img/cardio.jpeg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="img/yoga.png" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="img/wc.png" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="img/sauna.png" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="img/kolam.png" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <!-- Team -->
            <div class="container-xxl py-5">
                <div class="container" id="c3">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title bg-white text-center px-3" id="fc1">Personal Trainer
                        </h6>
                        <h1 class="mb-5">Meet Our Trainer</h1>
                    </div>
                    <div class="row g-4" id="s1">
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item">
                                <div data-aos="flip-up" data-aos-duration="1000">
                                    <div class="overflow-hidden">
                                        <img class="img-fluid" src="img/valen.png">
                                    </div>

                                    <div class="text-center p-4">
                                        <h5 class="mb-0" id="m2">Valencia Samuel</h5>
                                        <small>Yoga Trainer</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item">
                                <div data-aos="flip-up" data-aos-duration="1500">
                                    <div class="overflow-hidden">
                                        <img class="img-fluid" src="img/owen.png">
                                    </div>
                                    <div class="position-relative d-flex justify-content-center" id="m2">
                                    </div>
                                    <div class="text-center p-4">
                                        <h5 class="mb-0">Owen Willianto</h5>
                                        <small>Functional Fitness Trainer</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="team-item">
                                <div data-aos="flip-up" data-aos-duration="2000">
                                    <div class="overflow-hidden">
                                        <img class="img-fluid" src="img/velin.png">
                                    </div>
                                    <div class="position-relative d-flex justify-content-center" id="m2">
                                    </div>
                                    <div class="text-center p-4">
                                        <h5 class="mb-0">Velinda Novelia Candra</h5>
                                        <small>Youth Fitness Trainer</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="team-item">
                                <div data-aos="flip-up" data-aos-duration="2500">
                                    <div class="overflow-hidden">
                                        <img class="img-fluid" src="img/yemmi.png" alt="">
                                    </div>
                                    <div class="position-relative d-flex justify-content-center" id="m2">
                                    </div>
                                    <div class="text-center p-4">
                                        <h5 class="mb-0">Yemmi Agustin</h5>
                                        <small>Strength and Conditioning Trainer</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Merchandise -->
            <div class="container-xxl py-5">
                <div class="container" id="c4">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title bg-white text-center px-3" id="fc1">GO GYM</h6>
                        <h1 class="mb-5">Merchandise</h1>
                    </div>
                    <div class="row g-4" id="s2">
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item rounded pt-3">
                                <div data-aos="fade-up" data-aos-duration="1000">
                                    <div class="p-4">
                                        <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                                        <img src="img/merchan1.png" id="img2">
                                        <h5 id="t1">Tumbler Special GO GYM</h5>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-item rounded pt-3">
                                <div data-aos="fade-up" data-aos-duration="1500">
                                    <div class="p-4">
                                        <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                                        <img src="img/merchan2.png" id="img2">
                                        <h5 id="t1">T-Shirt Special GO GYM</h5>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="service-item rounded pt-3">
                                <div data-aos="fade-up" data-aos-duration="2000">
                                    <div class="p-4">
                                        <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                                        <img src="img/merchan3.png" id="img2">
                                        <h5 id="t1">Hoodie Special GO GYM</h5>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="service-item rounded pt-3">
                                <div data-aos="fade-up" data-aos-duration="2500">
                                    <div class="p-4">
                                        <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                                        <img src="img/merchan4.png" alt="" style="width: 250px;">
                                        <h5 id="t1">Tote Bag Special GO GYM</h5>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="1000">
                            <div class="d-flex justify-content-center mb-2" id="m3">
                                <a href="merchan.php" class="btn btn-sm btn-primary px-3 py-3 px-4 mt-2" id="btn2">See More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <div class="container-fluid bg-dark text-primary footer pt-5 mt-5 wow fadeIn" id="footer" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Company</h4>
                    <a class="btn btn-link" href="about.php" id="m4">About Us</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2 text-white"><i class="fa fa-map-marker-alt me-3"></i>2173004@maranatha.ac.id</p>
                    <p class="mb-2 text-white"><i class="fa fa-envelope me-3"></i>2173006@maranatha.ac.id</p>
                    <p class="mb-2 text-white"><i class="fa fa-envelope me-3"></i>2173008@maranatha.ac.id</p>
                    <p class="mb-2 text-white"><i class="fa fa-envelope me-3"></i>2173012@maranatha.ac.id</p>
                    <p class="mb-2 text-white"><i class="fa fa-envelope me-3"></i>2173008@maranatha.ac.id</p>
                    <p class="mb-2 text-white"><i class="fa fa-phone-alt me-3"></i>+123-456-7890</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Operational Hour</h4>
                    <p class="text-white">Senin-Jumat : 06:00 - 22:00 WIB</p>
                    <p class="text-white">Sabtu : 06:00 - 21:00 WIB</p>
                    <p class="text-white">Minggu : 08:00 - 20:00 WIB</p>
                    <h4 class="text-white mb-3">National Holiday</h4>
                    <p class="text-white">Senin-Jumat : 10:00 - 18:00 WIB</p>
                    <div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Location</h4>
                    <p class="text-white">Jl. Cibogo I No.9, Sukawarna, Sukajadi, Kota Bandung, Jawa Barat, 40164</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy;2023 <a class="border-bottom" href="#">GO GYM</a>, All Right Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        AOS.init();
    </script>
</body>

</html>