

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Yman's Kubo | Home</title>
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
        <?php include 'header.php' ?>


        <main id="main">
            <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
                <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                    <h2>Message</h2>
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li>Message</li>
                    </ol>

                </div>
            </div><!-- End Breadcrumbs -->

            <section id="message" class="message">
                <div class="container" data-aos="fade-up">

                    <div class="row justify-content-between gy-4">
                        <center>
                            <?php
                            // servername => localhost
                            // username => root
                            // password => empty
                            // database name => staff
                            $database = 'kubo';
                            $username = 'root';
                            $host = 'localhost';
                            $password = '';

                            $conn = new mysqli($host, $username, $password, $database);

                            // Check connection
                            if ($conn === false) {
                                die("ERROR: Could not connect. "
                                        . mysqli_connect_error());
                            }

                            $cname = $conn->real_escape_string($_POST['name']);
                            $cemail = $conn->real_escape_string($_POST['email']);
                            $cphone = $conn->real_escape_string($_POST['phone']);
                            $cmessage = $conn->real_escape_string($_POST['message']);
                            $cstatus = 'New';

                            $sql = "INSERT INTO homemessages (`name`, `email`, `phone`, `message`, `status`) VALUES ('$cname', '$cemail','$cphone','$cmessage','$cstatus')";

                            if (mysqli_query($conn, $sql)) {
                                echo "<h3>Message sent successfully. </h3><h3>We will try to reach out to you using your phone number or email</h3>";
                            } else {
                                echo "ERROR: Hush! Sorry $sql. "
                                . mysqli_error($conn);
                            }

                            // Close connection
                            mysqli_close($conn);
                            ?>
                            <br><br>
                            <a href="index.php">Go back</a>
                        </center>
                    </div>
                </div>
            </section>
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