<?php
require_once "guest.php";
$s_d = Databases::Search("SELECT * FROM `solution`");
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Codyzea - Web, Software & App Development Pricing Plans</title>
    <meta name="author" content="Cody Zea Software Solutions">
    <meta name="description"
        content="Transparent & Affordable Pricing - Explore Cody Zea Software Solutions' pricing plans for Web Design, Branding, Digital Marketing, and App Development. Choose a plan that fits your business!">
    <meta name="keywords"
        content="Cody Zea, Pricing Plans, Web Design Pricing, App Development Costs, Digital Marketing Packages, Affordable Software Solutions, Custom Pricing, Business Growth">
    <meta name="robots" content="INDEX,FOLLOW">


    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png">

    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/logocz.png">

    <meta name="theme-color" content="#ffffff">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!--==============================
      Google Fonts
    ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Space+Grotesk:wght@300..700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
    <!--==============================
        All CSS File
    ============================== -->

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
    <link rel="stylesheet" href="assets/css/style2.css">
    <link rel="stylesheet" href="assets/shop-assets/style.css">
    <link rel="stylesheet" href="assets/css/pricing-styles.css">

</head>

<body onload="triggerBtnOnload(1);">


    <?php require_once "header.php"; ?>

    <div class="container">
        <div class="row space-extra"></div>
    </div>

    <div class="container-fluid px-5 py-5 px-md-0 pe-lg-5 bg-color">
        <div class="row mt-0 mt-md-3">
            <div class="col-lg-6 order-2 order-lg-1 d-flex justify-content-center">
                <img src="assets/img/hero/hero_3_1.png" alt="" class="img-fluid pricing-image d-none d-md-flex"
                    style="width: 400px; height: 450px;">
            </div>
            <div class="col-lg-6 order-1 order-lg-2 mt-3 px-md-5 px-lg-0">
                <div class="title-area mb-25 mt-n1 mt-4 text-start text-md-end text-lg-start">
                    <span class="sub-title sub-title4 style1 text-ani-style2">Pricing</span>
                    <h2 class="sec-title text-ani-style3 text-start">Choose the Perfect Plan for Your Business Needs
                    </h2>
                </div>
                <p class="mt-n2 mb-30 d-none">Click on any of the packages below to explore <b>detailed pricing and
                        features</b>. Each package is designed to meet different business needs, ensuring you get the
                    best digital solutions for your goals.</p>
                <div class="info-list">
                    <div class="info-item">
                        <span class="info-icon"></span>
                        <p class="info-text">Offering <?php echo $s_d->num_rows; ?>+ innovative digital solutions to
                            boost business growth.</p>
                    </div>
                    <div class="info-item">
                        <span class="info-icon"></span>
                        <p class="info-text">Trusted by startups and enterprises for cutting-edge digital strategies.
                        </p>
                    </div>
                    <div class="info-item">
                        <span class="info-icon"></span>
                        <p class="info-text">Dedicated to delivering innovative strategies for long-term success.</p>
                    </div>
                </div>

                <div class="btn-group about-btn justify-content-center justify-content-md-start">
                    <a href="about.html" class="th-btn th-icon th-radius">Learn More About Us<i
                            class="fa-regular fa-arrow-right ms-2"></i></a>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5">
        <div class="col-12 position-relative overflow-hidden">
            <div class="random-svg-container">
                <img src="assets/img/a1.svg" class="random-svg">
                <img src="assets/img/a2.svg" class="random-svg">
                <img src="assets/img/a2.svg" class="random-svg d-none">
                <img src="assets/img/a3.svg" class="random-svg d-none">
                <img src="assets/img/a1.svg" class="random-svg d-none">
            </div>
        </div>
        <div class="row">
            <div class="text-center mt-3"><span class="display-4 text-dark fw-semibold">Select a Package </span><br>
                <span class="sub-title sub-title6 style1 text-ani-style2 mt-4 d-none d-md-inline-block text-o">Simply
                    click on any of the packages below to view its pricing and features.</span>
                <p class="d-md-none mt-4 px-3">Simply click on any of the packages below to view its pricing and
                    features.</p>
            </div>
            <div class="col-12 pb-5 px-50 mt-4">
                <div class="row d-flex gap-4 align-items-center justify-content-center px-0 px-md-5">
                    <?php
                    while ($sd = $s_d->fetch_assoc()) {
                        ?>
                        <button class="gradient-border-button w-auto px-3 px-md-5 py-2 py-md-3"
                            id="triggerBtn_<?php echo $sd['sol_id']; ?>"
                            onclick="triggerBtn('<?php echo $sd['sol_id']; ?>');">
                            <span><?php echo $sd['sol_name']; ?></span>
                        </button>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="resBox">

        <div class="row">

            <!--============================== Price Area  ==============================-->
            <section class="overflow-hidden space bg-color mt-4" style="padding-top: 60px !important;" id="resultsView">

            </section>
        </div>
    </div>

    <!--============================== Footer Area ==============================-->
    <?php require_once "footer.php"; ?>

    <!--********************************
            Code End  Here 
    ******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="assets/js/pricing.js"></script>
    <script src="assets/shop-assets/bootstrap.min.js"></script>
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