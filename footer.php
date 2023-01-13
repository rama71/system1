
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


<div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="resetform()"></button>
            </div>
            <form id="requestformform" method="POST" action="login.php" >

                <div class="modal-body">
                    <div class="php-email-form">
                        <div class="form-group">


                            <p><b>Username</b></p>

                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required ><br>
                            <p><b>Password</b></p>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required><br>
                            <p>Don't have an account? <a href="signup.php">Sign up</a> instead.</p>  
                        </div>

                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="resetform()">Reset</button>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>



<footer id="footer" class="footer">

    <div class="footer-content position-relative">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="footer-info">
                        <h3>Yman's Kubo</h3>
                        <p>
                            St Peter Village,  <br>
                            Isabang, Tayabas, Quezon<br><br>
                            <strong>Phone:</strong> <?= $number ?><br>
                            <strong>Email:</strong> <?= $email ?><br>
                        </p>
                        <div class="social-links d-flex mt-3">
                            <a href="https://www.facebook.com/ymanskuboandbamboofurniture/" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                        </div>
                    </div>
                </div><!-- End footer info column-->

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="projects.php">Products</a></li>
                    </ul>
                </div><!-- End footer links column-->

                <div class="col-lg-2 col-md-3 footer-links">

                </div>
            </div>
        </div>

        <div class="footer-legal text-center position-relative">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Yman's Kubo</span></strong>. All Rights Reserved
                </div>


                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
          
                </div>


            </div>
        </div>

</footer>
<script>

    function resetform() {
        document.getElementById("password").value = "";
        document.getElementById("password").value = "";
    }
</script>