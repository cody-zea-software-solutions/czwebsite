<?php
$cart_d = '';
$included_files = get_included_files();

if (!in_array(realpath('db.php'), $included_files) && !in_array(realpath('assets/process/database.php'), $included_files)) {
    require_once "db.php";
}
if (isset($_COOKIE['cz_user_id'])) {
    $cart_q = Databases::Search("SELECT * FROM `cart` INNER JOIN pack ON  pack.pack_id = cart.pack_id INNER JOIN solution ON solution.sol_id = pack.solution_sol_id WHERE `user_id` = " . $_COOKIE['cz_user_id'] . " ORDER BY `cart_id` DESC");
    if ($cart_q->num_rows != 0) {
        $cart_d = 'cart-icon';
    }
}


?>

<!--==============================
     Preloader
  ==============================-->
<div class="preloader">
    <div class="preloader-inner">
        <img src="assets/loader.svg" class="w-50 img-fluid" alt="LoaderCodyZea">
        <div class="col-12 d-flex justify-content-center">
            <div class="loader-2">
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">

<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-thin.css">

<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css">

<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css">

<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@500&display=swap" rel="stylesheet">
<!-- <div class="popup-search-box d-none d-lg-block">
    <button class="searchClose"><i class="fal fa-times"></i></button>
    <form action="#">
        <input type="text" placeholder="What are you looking for?">
        <button type="submit"><i class="fal fa-search"></i></button>
    </form>
</div> -->
<!--==============================
    Mobile Menu
  ============================== -->
<div class="th-menu-wrapper">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="index.php"><img src="loader.svg" alt="Cody zea"></a>
        </div>

        <div class="th-mobile-menu">
            <ul>
                <li class="menu-item-has-children">
                    <a href="index.php">Home</a>
                    <!-- <ul class="sub-menu">
                        <li><a href="home-seo-agency.html">Home SEO Agency</a></li>
                        <li><a href="home-digital-agency.html">Home Digital Agency</a></li>
                        <li><a href="index.php">Home SEO Analysis Agency</a></li>
                        <li><a href="home-seo-marketing.html">Home SEO Marketing</a></li>

                    </ul> -->
                </li>
                <li><a href="pricing.php">Pricing</a></li>
                <li><a href="cart.php">Cart</a></li>

                <li><a href="solutions.php">Solutions</a></li>
                <li class="menu-item-has-children">
                    <a href="offers.php">Offers</a>
                    <ul class="sub-menu">
                        <?php
                        $offerD = Databases::Search("SELECT * FROM `offer` LIMIT 3");
                        while ($offer = $offerD->fetch_assoc()) {
                            ?>
                            <li><a href="offers.php"><?php echo $offer['of_name'] ?>
                                </a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="blog.php">Blog</a>
                    <ul class="sub-menu">
                        <?php
                        $blogD = Databases::Search("SELECT * FROM `blogs` LIMIT 2");
                        while ($blog = $blogD->fetch_assoc()) {
                            ?>
                            <li><a href="blog.php"><?php echo $blog['blog_name'] ?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>
    </div>
</div><!--==============================
    Header Area
==============================-->
<header class="th-header header-layout3 header-absolute">
    <div class="header-top header-top-color py-2">
        <div class="container th-container">
            <div class="row justify-content-center justify-content-lg-between align-items-center">
                <div class="col-auto d-none d-md-block">
                    <div class="header-links">
                        <ul>
                            <li class="d-none d-xl-inline-block text-white"><i
                                    class="fa-solid fa-location-dot text-white"></i>
                                Auckland,New Zealand</li>
                            <li><i class="fa-solid fa-phone text-white"></i><a href="tel:+163217322978"
                                    class="text-white">+64 22 356 8614</a>
                            </li>
                            <li><i class="fa-solid fa-envelope text-white"></i><a href="mailto:info@codyzea.com"
                                    class="text-white">info@codyzea.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-right">
                        <p class="title text-white">Building Tomorrow's Digital Solutions, Today.</p>
                        <div class="social-links">
                            <a href="https://web.facebook.com/profile.php?id=61570825186554" class="text-white"><i
                                    class="fab fa-facebook-f text-white"></i></a>
                            <a href="https://www.linkedin.com/search/results/all/?fetchDeterministicClustersOnly=true&heroEntityKey=urn%3Ali%3Aorganization%3A105796820&keywords=cody%20zea%20(pvt)%20ltd&origin=RICH_QUERY_SUGGESTION&position=0&searchId=14363f48-1b82-45c2-b16e-3e9ad3f7f4af&sid=.GT&spellCorrectionEnabled=false"
                                class="text-white">
                                <i class="fab fa-linkedin-in text-white"></i></a>
                            <a href="https://x.com/codyzeashehan" class="text-white"><i
                                    class="fa-brands fa-x-twitter"></i></a>
                            <a href="https://www.youtube.com/@CodyZea" class="text-white"><i
                                    class="fab fa-youtube text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper bg-white">
        <!-- Main Menu Area -->
        <div class="container th-container bg-white">
            <div class="menu-area">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="index.php"><img src="assets/img/logo.svg" alt="cody zea"
                                    class="text-b fw-semibold"></a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li><a href="index.php" class="text-black fw-semibold fs-6 hover-nav">Home</a></li>
                                <li><a href="pricing.php" class="text-black fw-semibold fs-6 hover-nav">Pricing</a></li>
                                <li class="menu-item-has-children">
                                    <a href="offers.php" class="text-black fw-semibold fs-6 hover-nav">Offers</a>
                                    <ul class="mega-menu" style="width: 1200px;">
                                        <!-- <li><a href="service.html" class="text-b fw-semibold">Service</a></li> -->
                                        <div class="row">
                                            <?php
                                            $offerD = Databases::Search("SELECT * FROM `offer` LIMIT 3");
                                            while ($offer = $offerD->fetch_assoc()) {
                                                ?>
                                                <div class="col-12 col-lg-4 d-flex" style="cursor: pointer;"
                                                    onclick="window.location.href='offers.php'">
                                                    <div class="choose-feature-wrap">
                                                        <div class="choose-feature cody-bg p-3 rounded-20">
                                                            <div class="box-icon">
                                                                <img src="assets/offers.svg" alt="Icon">
                                                            </div>
                                                            <div class="media-body">
                                                                <h3 class="cody-text fs-5"><?php echo $offer['of_name'] ?>
                                                                </h3>
                                                                <p class="cody-text"><?php echo $offer['of_desc'] ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                            ?>

                                        </div>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="solutions.php" class="text-black fw-semibold fs-6 hover-nav">Solutions</a>
                                    <ul class="mega-menu" style="width: 1200px;">
                                        <!-- <li><a href="service.html" class="text-b fw-semibold">Service</a></li> -->
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-10 col-lg-3 rounded-20 shadow-lg mx-3 mt-3"
                                                onclick="window.location.href='solution-01.php'"
                                                style="cursor: pointer;">
                                                <div class="col-12 rounded-20"
                                                    style="background-image: url(assets/solution001.webp); background-size: cover; background-position: center; min-height: 40vh;">
                                                </div>
                                                <div class="col-12 p-4">
                                                    <span class="text-black fs-4 text-orange-hover">
                                                        <i class="fa-regular fa-rocket text-orange"></i> Startup Success
                                                        Made Simple: Your All-in-One
                                                        Solution
                                                    </span>

                                                </div>

                                            </div>
                                            <div class="col-10 col-lg-3 rounded-20 shadow-lg mx-3 mt-3"
                                                onclick="window.location.href='solution-02.php'"
                                                style="cursor: pointer;">
                                                <div class="col-12 rounded-20"
                                                    style="background-image: url(assets/solu002.jpg); background-size: cover; background-position: center; min-height: 40vh;">
                                                </div>
                                                <div class="col-12 p-4">
                                                    <span class="text-black fs-4 text-orange-hover">
                                                        <i class="fa-regular fa-rocket text-orange"></i> Growth Business
                                                        Solution for Shop Owners
                                                    </span>


                                                </div>

                                            </div>
                                            <div class="col-10 col-lg-3 rounded-20 shadow-lg mx-3 mt-3"
                                                onclick="window.location.href='solution-03.php'"
                                                style="cursor: pointer;">
                                                <div class="col-12 rounded-20"
                                                    style="background-image: url(assets/hmsolbg.jpg); background-size: cover; background-position: center; min-height: 40vh;">
                                                </div>
                                                <div class="col-12 p-4">
                                                    <span class="text-black fs-4 text-orange-hover">
                                                        <i class="fa-regular fa-rocket text-orange"></i> Complete
                                                        Business Growth Solution for
                                                        Restaurants &
                                                        Motels</span>


                                                </div>

                                            </div>
                                            <div class="col-10 col-lg-3 rounded-20 shadow-lg mx-3 mt-3"
                                                onclick="window.location.href='chat-bot.php'" style="cursor: pointer;">
                                                <div class="col-12 rounded-20"
                                                    style="background-image: url(assets/hmsolbg2.jpg); background-size: cover; background-position: center; min-height: 40vh;">
                                                </div>
                                                <div class="col-12 p-4">
                                                    <span class="text-black fs-4 text-orange-hover">
                                                        <i class="fa-regular fa-rocket text-orange"></i> Boost User
                                                        Engagement by a
                                                        FREE LIVE CHATBOT</span>


                                                </div>

                                            </div>


                                        </div>
                                    </ul>
                                </li>
                                <li><a href="works.php" class="text-black fw-semibold fs-6 hover-nav">Works</a></li>

                                <li class="menu-item-has-children">
                                    <a href="blog.php" class="text-black fw-semibold fs-6 hover-nav">Blogs</a>
                                    <ul class="mega-menu" style="width: 1500px;">
                                        <!-- <li><a href="service.html" class="text-b fw-semibold">Service</a></li> -->
                                        <div class="row">
                                            <?php
                                            $blogD = Databases::Search("SELECT * FROM `blogs` LIMIT 2");
                                            while ($blog = $blogD->fetch_assoc()) {
                                                ?>
                                                <div class="col-12 col-lg-6 d-flex">
                                                    <div class="choose-feature-wrap">
                                                        <div class="choose-feature cody-bg p-3 rounded-20">
                                                            <div class="box-icon">
                                                                <img src="assets/img/icon/choose_feature_1_1.svg"
                                                                    alt="Icon">
                                                            </div>
                                                            <div class="media-body">
                                                                <h3 class="cody-text fs-5"><?php echo $blog['blog_name'] ?>
                                                                </h3>
                                                                <style>
                                                                    .cody-text {
                                                                        display: -webkit-box;
                                                                        -webkit-line-clamp: 2;
                                                                        /* Adjust the number of lines */
                                                                        -webkit-box-orient: vertical;
                                                                        overflow: hidden;
                                                                        text-overflow: ellipsis;
                                                                        max-width: 100%;
                                                                    }
                                                                </style>
                                                                <p class="cody-text"><?php echo $blog['blog_desc'] ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </ul>
                                </li>
                                <li><a href="contact.php" class="text-black fw-semibold fs-6 hover-nav">Contact Us</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="header-button">
                            <button type="button" class="th-menu-toggle d-inline-block d-lg-none"><i
                                    class="far fa-bars text-b fw-semibold text-white"></i></button>
                        </div>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-button">
                            <style>
                                .cart-icon {
                                    position: relative;
                                    display: inline-block;
                                }

                                .cart-icon::after {
                                    content: "";
                                    position: absolute;
                                    top: -10px;
                                    right: -10px;
                                    width: 20px;
                                    /* Size of the dot */
                                    height: 20px;
                                    /* Size of the dot */
                                    background-color: rgb(6, 189, 6);
                                    /* Color of the dot */
                                    border-radius: 50%;
                                    /* Make it a circle */
                                }
                            </style>
                            <a href="cart.php" class="<?php echo $cart_d; ?>"><i class="fa fa-cart-plus fs-3"
                                    aria-hidden="true"></i></a>
                            <!-- <button type="button" class="icon-btn th-radius searchBoxToggler"><i
                                    class="far fa-search text-b fw-semibold"></i></button> -->
                            <a href="contact.php#form" class="th-btn blue-btn style1 th-icon th-radius fs-5">Get A
                                Quote<i class="fa-regular fa-arrow-right ms-2"></i></a>

                        </div>
                        <!-- <div class="btn-group">
                            <a href="about.html" class="th-btn blue-btn style1 th-icon th-radius fs-5">Get Started Now<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/67cf455d16f9e2190ced40a8/1im0qdtf1';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2R14CV971L"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-2R14CV971L');
</script>