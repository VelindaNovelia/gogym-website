<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
    <link rel="stylesheet" href="CSS/style3.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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
                    <a href="home.php" class="nav-item nav-link ">Home</a>
                    <a href="about.php" class="nav-item nav-link">About Us</a>
                    <a href="member.php" class="nav-item nav-link active">Membership</a>
                    <a href="facility.php" class="nav-item nav-link">Facility</a>
                    <a href="merchan.php" class="nav-item nav-link">Mechandise</a>
                    <a href="#footer" class="nav-item nav-link">Contact</a>
                </div>
                <?php
                session_start();
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

</body>
<!-- Membership -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">

            <h1 class="mb-5">Program GYM</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/Sebulan.png">
                    </div>

                    <div class="text-center p-4">
                        <h3 class="mb-0">Rp 250.000/Bulan</h3>

                        <p class="text-center">Dapatkan keuntungan membership selama 1 bulan dengan harga murah</p>
                        <div class="d-flex justify-content-center mb-2" id="btn1">

                            <a href="pembayaran.php" class="btn btn-sm btn-primary px-3">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/3Bulan.png">
                    </div>

                    <div class="text-center p-4">
                        <h3 class="mb-0">Rp 650.000/3 Bulan</h3>

                        <p class="text-center">Dapatkan keuntungan membership selama 3 bulan dengan potongan harga hingga 100.000</p>
                        <div class="d-flex justify-content-center mb-2" id="btn1">
                            <a href="pembayaran.php" class="btn btn-sm btn-primary px-3">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/Tahun.png">
                    </div>

                    <div class="text-center p-4">
                        <h3 class="mb-0">Rp 2.400.000/Tahun</h3>

                        <p class="text-center">Dapatkan keuntungan membership selama 3 bulan dengan potongan harga hingga 600.000</p>
                        <div class="d-flex justify-content-center mb-2" id="btn1">
                            <a href="pembayaran.php" class="btn btn-sm btn-primary px-3">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team -->
<div class="container-xxl py-5">
    <div class="container" id="c3">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <blockquote class="blockquote">
                <p class="h3">Personal Trainer</p>
                <p class="mb-0">Tak Kenal Maka Tak Sayang</p>
                <footer class="blockquote-footer m-2">Seseorang <cite title="Source Title"></cite></footer>
            </blockquote>
        </div>
        <div class="row g-4" id="s1">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/valen.png">
                    </div>

                    <div class="text-center p-4">
                        <h5 class="mb-0" id="m2">Valencia Samuel</h5>
                        <small>Yoga Trainer</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
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
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item">
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
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item">
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
<!-- Footer -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" id="footer" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Company</h4>
                <a class="btn btn-link" href="about.php" id="m4">About Us</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Contact</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>2173004@maranatha.ac.id</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>2173006@maranatha.ac.id</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>2173008@maranatha.ac.id</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>2173012@maranatha.ac.id</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>2173008@maranatha.ac.id</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+123-456-7890</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Operational Hour</h4>
                <p>Senin-Jumat : 06:00 - 22:00 WIB</p>
                <p>Sabtu : 06:00 - 21:00 WIB</p>
                <p>Minggu : 08:00 - 20:00 WIB</p>
                <h4 class="text-white mb-3">National Holiday</h4>
                <p>Senin-Jumat : 10:00 - 18:00 WIB</p>
                <div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Location</h4>
                <p>Jl. Cibogo I No.9, Sukawarna, Sukajadi, Kota Bandung, Jawa Barat, 40164</p>
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

</html>