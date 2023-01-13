
<?php include 'server.php' ?>
<?php
$query = "SELECT * FROM businessinfo";
$result = $conn->query($query);
$row = $result->fetch_assoc();

if ($row) {
    $email = $row['email'];
    $number = $row['contactnumber'];
} else {
    $email = "Not Available";
    $number = "Not Available";
}
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Yman's Kubo | Contact</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/main.css" rel="stylesheet">

        <!-- =======================================================
        * Template Name: UpConstruction - v1.0.1
        * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
    </head>

    <body>

        <!-- ======= Header ======= -->
        <?php include 'header.php' ?>
        <main id="main">

            <!-- ======= Breadcrumbs ======= -->
            <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
                <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                    <h2>Contact</h2>
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li>Contact</li>
                    </ol>

                </div>
            </div><!-- End Breadcrumbs -->

            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="row gy-4">
                        <div class="col-lg-6">
                            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-map"></i>
                                <h3>Our Address</h3>
                                <p>St. Peter Village, Isabang, Tayabas</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-lg-3 col-md-6">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <p><?= $email ?></p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-lg-3 col-md-6">
                            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-telephone"></i>
                                <h3>Call Us</h3>
                                <p><?= $number ?></p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                    <div class="row gy-4 mt-1">

                        <div class="col-lg-6 ">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1368.8857245428912!2d121.56156168101879!3d13.970892871382151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd4c403c8cb5f9%3A0x4285249a036377f1!2sYman%20Kubo%20Bambo%20Furniture!5e0!3m2!1sen!2sph!4v1657536486738!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div><!-- End Google Maps -->

                        <div class="col-lg-6">
                            <form action="message.php" method="POST">

                                <div class="php-email-form">


                                    <h3>Contact us</h3>
                                    <p>We would like to hear from you. You can schedule a visit or inquire by filling up the form below.</p>  

                                    <div class="row gy-3">

                                        <div class="col-md-12">
                                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                                        </div>

                                        <div class="col-md-12 ">
                                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                                        </div>

                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                                        </div>

                                        <div class="col-md-12">
                                            <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                                        </div>
                                        <button type="submit">Send</button> 

                                    </div>  
                                </div>
                            </form>
                        </div><!-- End Contact Form -->

                    </div>

                </div>
            </section><!-- End Contact Section -->

        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <?php include 'footer.php' ?>
        <!-- End Footer -->

        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

    </body>

</html>