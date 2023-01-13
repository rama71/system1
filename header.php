<?php

// function to get the current page name

function PageName() {
    return substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
}

$current_page = PageName();
?>
<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.php" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>Yman's Kubo<span>.</span></h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="index.php" class=" <?= $current_page == 'index.php' ? 'active' : null ?>" >Home</a></li>
                <li><a href="about.php" class=" <?= $current_page == 'about.php' ? 'active' : null ?>" >About</a></li>
                <li><a href="projects.php" class=" <?= $current_page == 'projects.php' ? 'active' : null ?>" >Products</a></li>

                <li><a href="shop.php" class=" <?= $current_page == 'shop.php' ? 'active' : null ?>" >Shop</a></li>
                <li><a href="contact.php" class=" <?= $current_page == 'contact.php' ? 'active' : null ?>" >Contact</a></li>
                <li><a data-bs-toggle="modal" href="#login" >Login</a></li>
            </ul>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
