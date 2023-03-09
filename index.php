<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Banking</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1>กรุณาเลือกธนาคารเช่น : <span class="typed" data-typed-items="ไทยพาณิชย์"></span></h1><br>
            <p>เมื่อทำรายการโอนเสร็จแล้วให้ส่งหลักฐานการโอนในขั้นตอนต่อไป</p>
            <p>กรุณาเลือกโอนเข้าธนาที่ต้องการให้ถูกต้อง</p><br><br>
            <form method="POST" action="controller/runBanking.php" enctype="multipart/form-data">
                <div class="form-group">

                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="Banks" id="Banks" required>
                        <option value="" disabled selected hidden>เลือกธนาคารที่ท่านต้องการชำระเงิน</option>
                        <option value="131-1-00001-6">กรุงศรีอยุธยา(131-1-00001-6)</option>
                        <option value="023-1-19265-7">กรุงไทย(023-1-19265-7)</option>
                        <option value="011-2-25379-3">กสิการไทย(011-2-25379-3)</option>
                        <option value="152-0-00001-7">กรุงเทพ(152-0-00001-7)</option>
                        <option value="045-2-35809-1">ไทยพาณิชย์(045-2-35809-1)</option>
                        <option value="238-2-11007-6">ทีเอมบีธนาชาติ(238-2-11007-6)</option>
                    </select>

                    <nav id="navbar" class="navbar nav-menu">
                        <ul>
                            <br><br>
                            <center>
                                <li><a href="#about" class="nav-link scrollto active"><i class="bi bi-arrow-right-circle-fill"></i> <span>NEXT</span></a></li>
                            </center>
                        </ul>
                    </nav>
                </div>
    </section><!-- End Hero -->


    <!-- ======= About Section ======= -->
    <section id="about" class="d-flex flex-column justify-content-center">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://th.bing.com/th/id/R.34544d1ab7057efafc466c7f6ccab26e?rik=30RHe3qgAc2r5w&pid=ImgRaw&r=0" class="img-fluid" alt="Sample image" width="1000" height="1000">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <div class="container" data-aos="zoom-in" data-aos-delay="100">
                        <center>
                            <h2>หลักฐานการชำระเงิน</h2>
                        </center><br><br>
                    </div>
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form3Example4">จำนวนเงินคุณที่ต้องชำระ</label>
                            <input type="number" id="money" name="money" class="form-control form-control-lg" placeholder="ระบุจำนวนเงินคุณที่ต้องชำระ เช่น 500" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="form-label" for="form3Example4">หลักฐานการชำระเงิน</label><br>
                            <input type="file" name="uploadfile" value="" />
                        </div>


                        <div class="text-center text-lg-start mt-4 pt-2">
                            <center><button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" name="upload">ดำเนินการต่อไป</button></center>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Welcome to Website</h3>
            <p>My name is Supphalak Maneepanpanit 644259034 64/45 Major : SoftwareEnginearing.</p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>MyFunction</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: [license-url] -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
                Designed by <a href="https://npru.ac.th/index.php" target="_blank">NPRU</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>