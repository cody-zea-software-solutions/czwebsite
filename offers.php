<?php
require_once "guest.php";
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Offers - Cody Zea</title>
    <meta name="author" content="Cody Zea Software Solutions">
    <meta name="description"
        content="Exclusive Offers from Cody Zea Software Solutions - Get the Best Deals on Web Design, Branding, Digital Marketing, and App Development Services. Limited-Time Discounts!">
    <meta name="keywords"
        content="Cody Zea, Web Design Offers, App Development Deals, Branding Discounts, Digital Marketing Packages, Software Solutions, Best Prices, Limited-Time Offers">
    <meta name="robots" content="INDEX,FOLLOW">


    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->

    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <style>
        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }

        .offer-button {
            animation: pulse 1s infinite ease-in-out;
        }
    </style>

    <!--==============================
      Google Fonts
    ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Space+Grotesk:wght@300..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-thin.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!--==============================
        All CSS File
    ============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Swiper Slider -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- imageRevealHover -->
    <link rel="stylesheet" href="assets/css/imageRevealHover.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>




    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->



    <!--********************************
           Code Start From Here 
    ******************************** -->

    <!--==============================
     Preloader
  ==============================-->
    <?php require_once "header.php" ?>

    <div class="popup-search-box d-none d-lg-block">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="What are you looking for?">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
    <div class="container-fluid space-extra2">
        <div class="row">
            <div class="col-12 col-lg-6">
                <img src="assets/offer-hero.png" class="img-fluid" alt="">
            </div>

            <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center flex-column">
                <div class="p-5 d-flex justify-content-center flex-column">
                    <span class="display-1 text-black">We Love Helping</span>
                    <span class="display-1 text-black">You Succeed</span>
                    <span class="display-6 text-orange">Special Offers Just for You</span>
                    <p class="text-black fs-4 fw-semibold">
                        Unlock exclusive deals designed to empower your business with custom software and digital
                        solutions that drive growth.
                    </p>
                    <div class="btn-group">
                        <a href="contact.php" class="th-btn blue-btn style1 th-icon th-radius fs-5">Get in Touch <i
                                class="fa-regular fa-arrow-right ms-2"></i></a>
                    </div>
                </div>

            </div>

        </div>
        <div class="conatiner-fluid">
            <img src="assets/offer-row.jpg" class="img-fluid d-lg-none d-block" alt="">
            <div class="row p-5 d-none d-lg-block"
                style="background-image: url(assets/offer-row.jpg); background-size: contain; background-position: center; min-height: 50vh; background-repeat: no-repeat;">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">

            <?php
            $couponD = Databases::Search("SELECT * FROM `offer` INNER JOIN `coupon` ON `coupon`.`c_id`=`offer`.`of_coupon` ");
            while ($coupon = $couponD->fetch_assoc()) {
                ?>

                <div class="col-12 col-lg-4 mt-5 mx-2 bg-white rounded-20 shadow"
                    data-bs-target="#couponModal<?php echo $coupon['of_id']; ?>" data-bs-toggle="modal">
                    <img src="<?php echo $coupon['of_img']; ?>" class="img-fluid rounded-20" alt="">
                    <div class="row p-3">
                        <div class="col-12 col-lg-6">
                            <div class="th-cart-coupon">
                                <div class="coupon p-3 rounded-20 text-center"
                                    style="border: 2px dashed rgb(0, 0, 0) !important;">
                                    <span
                                        class="coupon-text text-o fw-semibold mx-3 fs-4 text-uppercase"><?php echo $coupon['c_code'] ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <a onclick="claimCoupon(<?php echo $coupon['c_id']; ?>);" style="cursor: pointer;"
                                class="th-btn th-radius text-white fs-6 col-12 shadow bg-black">
                                <i class="fa-light fa-ticket"></i>&nbsp;&nbsp;Apply Savings
                            </a>
                        </div>
                    </div>

                </div>
                <!-- Modal 001 -->
        
                <?php
            }
            ;
            ?>
        </div>


    </div>

    <section class="d-flex justify-content-center">
        <div class="container mt-5 m-5">
            <div class="row bg-black rounded-20 p-2 p-lg-5">
                <div class="col-12 col-lg-4">
                    <img src="assets/conillus.png" class="img-fluid w-75" alt="CustomSoftwareIllustration">
                </div>
                <div class="col-12 col-lg-8">
                    <span class="text-white display-4">Build Software to Drive Your Business</span>
                    <p class="text-white fs-4">
                        Custom solutions that enhance efficiency and drive growth. Let's build the perfect tool for your
                        business.
                    </p>
                    <div class="text-center text-xl-start">
                        <a href="contact.php" class="th-btn style4 th-radius fs-5 bg-orange">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php
    require "footer.php"

        ?>

    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>


    <!-- Jquery -->
    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <!-- Swiper Slider -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Circle Progress -->
    <script src="assets/js/circle-progress.js"></script>
    <!-- Range Slider -->
    <script src="assets/js/jquery-ui.min.js"></script>
    <!-- Imagesloadedr -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- isotope -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- Tilt.jquery -->
    <script src="assets/js/tilt.jquery.min.js"></script>
    <!-- Nice-select -->
    <script src="assets/js/nice-select.min.js"></script>
    <!-- wow -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Particles JS -->
    <script src="assets/js/particles.min.js"></script>


    <script src="assets/js/particles-config.js"></script>

    <!-- Gsap JS -->
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/Splitetext.js"></script>
    <script src="assets/js/lenis.min.js"></script>

    <!-- imageRevealHover JS -->
    <script src="assets/js/imageRevealHover.js"></script>

    <!-- Main Js File -->
    <script src="assets/js/main.js"></script>

</body>

</html>