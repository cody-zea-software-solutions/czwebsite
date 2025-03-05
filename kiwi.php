<?php
require_once "db.php";
$s_d = Databases::Search("SELECT * FROM `solution`");
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Codyzea - KIWI</title>
    <meta name="author" content="themeholy">
    <meta name="description" content="Saor - SEO Digital Marketing Agency HTML Template">
    <meta name="keywords" content="Saor - SEO Digital Marketing Agency HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/logocz.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/logocz.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/logocz.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/logocz.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/logocz.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/logocz.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/logocz.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/logocz.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/logocz.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/logocz.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/logocz.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/logocz.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/logocz.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/logocz.png">

    <meta name="theme-color" content="#ffffff">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">


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

<body>


    <?php require_once "header.php"; ?>

    <div class="container">
        <div class="row space-extra"></div>
    </div>

    <div class="container-fluid px-md-5 py-5 px-0 ps-md-5 bg-color ">
        <div class="row mt-0 mt-md-3">
            <div class="col-lg-6 mt-3 px-md-5 ps-md-5">
                <div class="title-area mb-25 mt-n1 mt-4 text-start text-md-end text-lg-start">
                    <h1 class="sec-title text-ani-style3 text-start text-orange">Get a stunning website for less.</h1>
                </div>
                <p class="mt-n2 mb-30 fs-3 text-o fw-semibold">We'll build you an effective, affordable website that you love and that increases your sales.</p>
                <div class="info-list">
                    <div class="info-item">
                        <span class="info-icon"></span>
                        <p class="info-text">Friendly kiwi website experts & designers.</p>
                    </div>
                    <div class="info-item">
                        <span class="info-icon"></span>
                        <p class="info-text">Easy to edit, mobile friendly & secure sites.</p>
                    </div>
                    <div class="info-item">
                        <span class="info-icon"></span>
                        <p class="info-text">High quality sites with a low price tag.</p>
                    </div>
                </div>

                <div class="col-12 pb-md-5 px-md-50 mt-5 d-flex justify-content-center justify-content-md-center">
                    <a href="about.php" class="th-btn th-radius th-icon text-white fs-4">More About Us<i
                            class="fa-regular fa-arrow-right ms-2"></i></a>
                </div>
            </div>
            <div class="col-lg-6 d-flex justify-content-center align-items-center mt-5 mt-md-0">
                <div class="row">
                <img src="assets/kiwi-hero.webp" alt="" class="img-fluid pricing-image p-5 pb-0" style="background-color: #FF5C35; border-radius: 40px;">
                </div>
            </div>

        </div>
    </div>

    <div class="container mt-md-5 pt-5">
        <div class="row">
            <div class="text-center mt-3"><span class="display-4 text-dark fw-semibold">Getting an epic website has never been easier or cheaper. 🙌</span><br>
                <span class="sub-title sub-title6 style1 text-ani-style2 mt-4 d-none d-md-inline-block text-o">From a quick chat to a high converting website, we keep everything super straight forward.</span>
                <p class="d-md-none mt-4 px-3">From a quick chat to a high converting website, we keep everything super straight forward.</p>
            </div>
            <div class="col-12 pb-5 px-50 mt-4 d-flex justify-content-center">
                <a href="contact.php" class="th-btn th-radius th-icon text-white fs-4">Contact Us<i
                        class="fa-regular fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>

    <div class="container-fluid container-md mt-3 pb-5">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 px-3 mt-4 mt-md-1">
                <div class="border border-1 p-4 shadow zoom-effect">
                    <svg width="100px" height="100px" version="1.1" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" id="1954371169" data-icon-custom="true">
                        <g>
                            <path d="m31.945 41.668c-2.3047 0-4.168-1.8594-4.168-4.168 0-0.77734-0.60938-1.3906-1.3906-1.3906-0.77734 0-1.3867 0.61328-1.3867 1.3906 0 3.3594 2.3906 6.168 5.5547 6.8047v1.5273c0 0.77734 0.60937 1.3906 1.3906 1.3906 0.77734 0 1.3906-0.60938 1.3906-1.3906v-1.5273c3.168-0.64063 5.5547-3.4453 5.5547-6.8047 0-3.832-3.1094-6.9453-6.9453-6.9453-2.3047 0-4.168-1.8594-4.168-4.168 0-2.3047 1.8633-4.1641 4.168-4.1641 2.3047 0 4.1641 1.8594 4.1641 4.168 0 0.77734 0.60938 1.3906 1.3906 1.3906 0.77734-0.003906 1.3906-0.61328 1.3906-1.3906 0-3.3594-2.3906-6.168-5.5547-6.8047l-0.003907-1.5312c0-0.77734-0.60938-1.3867-1.3867-1.3867-0.77734 0-1.3906 0.60938-1.3906 1.3867v1.5273c-3.1641 0.64062-5.5547 3.4453-5.5547 6.8086 0 3.832 3.1094 6.9453 6.9453 6.9453 2.3047 0 4.168 1.8594 4.168 4.168-0.003906 2.3008-1.8633 4.1641-4.168 4.1641z"></path>
                            <path d="m48.609 41.668c-2.3047 0-4.168-1.8594-4.168-4.168 0-0.77734-0.60938-1.3906-1.3906-1.3906-0.77344 0-1.3828 0.61328-1.3828 1.3906 0 3.3594 2.3906 6.168 5.5547 6.8047v1.5273c0 0.77734 0.60938 1.3906 1.3906 1.3906 0.77734 0 1.3906-0.60938 1.3906-1.3906v-1.5273c3.168-0.64063 5.5547-3.4453 5.5547-6.8047 0-3.832-3.1094-6.9453-6.9453-6.9453-2.3047 0-4.168-1.8594-4.168-4.168 0-2.3047 1.8594-4.1641 4.1641-4.1641 2.3086 0 4.168 1.8594 4.168 4.168 0 0.77734 0.60938 1.3906 1.3906 1.3906 0.77734-0.003906 1.3867-0.61328 1.3867-1.3906 0-3.3594-2.3906-6.168-5.5547-6.8047v-1.5312c0-0.77734-0.60938-1.3867-1.3906-1.3867-0.77734 0-1.3867 0.60938-1.3867 1.3867v1.5273c-3.168 0.64062-5.5547 3.4453-5.5547 6.8047 0 3.832 3.1094 6.9453 6.9453 6.9453 2.3047 0 4.168 1.8594 4.168 4.168-0.003906 2.3047-1.8633 4.168-4.1719 4.168z"></path>
                            <path d="m65.277 41.668c-2.3047 0-4.168-1.8594-4.168-4.168 0-0.77734-0.60938-1.3906-1.3906-1.3906-0.77344 0-1.3867 0.61328-1.3867 1.3906 0 3.3594 2.3906 6.168 5.5547 6.8047v1.5273c0 0.77734 0.60938 1.3906 1.3906 1.3906 0.77734 0 1.3906-0.60938 1.3906-1.3906v-1.5273c3.168-0.64063 5.5547-3.4453 5.5547-6.8047 0-3.832-3.1094-6.9453-6.9453-6.9453-2.3047 0-4.168-1.8594-4.168-4.168 0-2.3047 1.8633-4.1641 4.168-4.1641 2.3047 0 4.168 1.8594 4.168 4.168 0 0.77734 0.60938 1.3906 1.3906 1.3906 0.77344-0.003906 1.3867-0.61328 1.3867-1.3906 0-3.3594-2.3906-6.168-5.5547-6.8047v-1.5312c0-0.77734-0.61328-1.3867-1.3906-1.3867s-1.3867 0.60938-1.3867 1.3867v1.5273c-3.168 0.64062-5.5547 3.4453-5.5547 6.8047 0 3.832 3.1094 6.9453 6.9453 6.9453 2.3047 0 4.168 1.8594 4.168 4.168-0.003907 2.3047-1.8672 4.168-4.1719 4.168z"></path>
                            <path d="m86.109 54.168v-41.668c0-0.77734-0.60938-1.3906-1.3867-1.3906h-69.445c-0.77734 0-1.3867 0.61328-1.3867 1.3906v41.668c0 0.77734 0.60938 1.3867 1.3867 1.3867h31.945v28.582l-8.75-8.75c-0.55469-0.55469-1.418-0.55469-1.9727 0-0.55469 0.55469-0.55469 1.418 0 1.9727l11.109 11.109c0.14062 0.14062 0.27734 0.22266 0.44531 0.27734 0.19531 0.11328 0.39062 0.14453 0.55469 0.14453 0.16797 0 0.35938-0.027344 0.52734-0.10938 0.16797-0.054688 0.33203-0.16797 0.44531-0.30469l11.109-11.109c0.55469-0.55469 0.55469-1.418 0-1.9727-0.55469-0.55469-1.418-0.55469-1.9727 0l-8.7188 8.7461v-28.586h34.723c0.77734 0 1.3867-0.60938 1.3867-1.3867zm-2.7773-1.3906h-66.664v-38.887h66.668z"></path>
                        </g>
                    </svg><br>
                    <span class="fs-3 fw-medium text-dark">Get your website for less</span>
                    <p class=" text-o mt-2 text-justify ">Get a high-quality website for a fraction of the cost charged by our competitors. We design smarter to make your budget go further.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 px-3 mt-4 mt-md-1 ">
                <div class="border border-1 p-4 shadow zoom-effect">
                    <svg width="100px" height="100px" version="1.1" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" id="1954371169" data-icon-custom="true">
                        <g>
                            <path d="m31.945 41.668c-2.3047 0-4.168-1.8594-4.168-4.168 0-0.77734-0.60938-1.3906-1.3906-1.3906-0.77734 0-1.3867 0.61328-1.3867 1.3906 0 3.3594 2.3906 6.168 5.5547 6.8047v1.5273c0 0.77734 0.60937 1.3906 1.3906 1.3906 0.77734 0 1.3906-0.60938 1.3906-1.3906v-1.5273c3.168-0.64063 5.5547-3.4453 5.5547-6.8047 0-3.832-3.1094-6.9453-6.9453-6.9453-2.3047 0-4.168-1.8594-4.168-4.168 0-2.3047 1.8633-4.1641 4.168-4.1641 2.3047 0 4.1641 1.8594 4.1641 4.168 0 0.77734 0.60938 1.3906 1.3906 1.3906 0.77734-0.003906 1.3906-0.61328 1.3906-1.3906 0-3.3594-2.3906-6.168-5.5547-6.8047l-0.003907-1.5312c0-0.77734-0.60938-1.3867-1.3867-1.3867-0.77734 0-1.3906 0.60938-1.3906 1.3867v1.5273c-3.1641 0.64062-5.5547 3.4453-5.5547 6.8086 0 3.832 3.1094 6.9453 6.9453 6.9453 2.3047 0 4.168 1.8594 4.168 4.168-0.003906 2.3008-1.8633 4.1641-4.168 4.1641z"></path>
                            <path d="m48.609 41.668c-2.3047 0-4.168-1.8594-4.168-4.168 0-0.77734-0.60938-1.3906-1.3906-1.3906-0.77344 0-1.3828 0.61328-1.3828 1.3906 0 3.3594 2.3906 6.168 5.5547 6.8047v1.5273c0 0.77734 0.60938 1.3906 1.3906 1.3906 0.77734 0 1.3906-0.60938 1.3906-1.3906v-1.5273c3.168-0.64063 5.5547-3.4453 5.5547-6.8047 0-3.832-3.1094-6.9453-6.9453-6.9453-2.3047 0-4.168-1.8594-4.168-4.168 0-2.3047 1.8594-4.1641 4.1641-4.1641 2.3086 0 4.168 1.8594 4.168 4.168 0 0.77734 0.60938 1.3906 1.3906 1.3906 0.77734-0.003906 1.3867-0.61328 1.3867-1.3906 0-3.3594-2.3906-6.168-5.5547-6.8047v-1.5312c0-0.77734-0.60938-1.3867-1.3906-1.3867-0.77734 0-1.3867 0.60938-1.3867 1.3867v1.5273c-3.168 0.64062-5.5547 3.4453-5.5547 6.8047 0 3.832 3.1094 6.9453 6.9453 6.9453 2.3047 0 4.168 1.8594 4.168 4.168-0.003906 2.3047-1.8633 4.168-4.1719 4.168z"></path>
                            <path d="m65.277 41.668c-2.3047 0-4.168-1.8594-4.168-4.168 0-0.77734-0.60938-1.3906-1.3906-1.3906-0.77344 0-1.3867 0.61328-1.3867 1.3906 0 3.3594 2.3906 6.168 5.5547 6.8047v1.5273c0 0.77734 0.60938 1.3906 1.3906 1.3906 0.77734 0 1.3906-0.60938 1.3906-1.3906v-1.5273c3.168-0.64063 5.5547-3.4453 5.5547-6.8047 0-3.832-3.1094-6.9453-6.9453-6.9453-2.3047 0-4.168-1.8594-4.168-4.168 0-2.3047 1.8633-4.1641 4.168-4.1641 2.3047 0 4.168 1.8594 4.168 4.168 0 0.77734 0.60938 1.3906 1.3906 1.3906 0.77344-0.003906 1.3867-0.61328 1.3867-1.3906 0-3.3594-2.3906-6.168-5.5547-6.8047v-1.5312c0-0.77734-0.61328-1.3867-1.3906-1.3867s-1.3867 0.60938-1.3867 1.3867v1.5273c-3.168 0.64062-5.5547 3.4453-5.5547 6.8047 0 3.832 3.1094 6.9453 6.9453 6.9453 2.3047 0 4.168 1.8594 4.168 4.168-0.003907 2.3047-1.8672 4.168-4.1719 4.168z"></path>
                            <path d="m86.109 54.168v-41.668c0-0.77734-0.60938-1.3906-1.3867-1.3906h-69.445c-0.77734 0-1.3867 0.61328-1.3867 1.3906v41.668c0 0.77734 0.60938 1.3867 1.3867 1.3867h31.945v28.582l-8.75-8.75c-0.55469-0.55469-1.418-0.55469-1.9727 0-0.55469 0.55469-0.55469 1.418 0 1.9727l11.109 11.109c0.14062 0.14062 0.27734 0.22266 0.44531 0.27734 0.19531 0.11328 0.39062 0.14453 0.55469 0.14453 0.16797 0 0.35938-0.027344 0.52734-0.10938 0.16797-0.054688 0.33203-0.16797 0.44531-0.30469l11.109-11.109c0.55469-0.55469 0.55469-1.418 0-1.9727-0.55469-0.55469-1.418-0.55469-1.9727 0l-8.7188 8.7461v-28.586h34.723c0.77734 0 1.3867-0.60938 1.3867-1.3867zm-2.7773-1.3906h-66.664v-38.887h66.668z"></path>
                        </g>
                    </svg><br>
                    <span class="fs-3 fw-medium text-dark">Get your website for less</span>
                    <p class=" text-o mt-2 text-justify">Get a high-quality website for a fraction of the cost charged by our competitors. We design smarter to make your budget go further.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 px-3 mt-4 mt-md-1 ">
                <div class="border border-1 p-4 shadow zoom-effect">
                    <svg width="100px" height="100px" version="1.1" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" id="1954371169" data-icon-custom="true">
                        <g>
                            <path d="m31.945 41.668c-2.3047 0-4.168-1.8594-4.168-4.168 0-0.77734-0.60938-1.3906-1.3906-1.3906-0.77734 0-1.3867 0.61328-1.3867 1.3906 0 3.3594 2.3906 6.168 5.5547 6.8047v1.5273c0 0.77734 0.60937 1.3906 1.3906 1.3906 0.77734 0 1.3906-0.60938 1.3906-1.3906v-1.5273c3.168-0.64063 5.5547-3.4453 5.5547-6.8047 0-3.832-3.1094-6.9453-6.9453-6.9453-2.3047 0-4.168-1.8594-4.168-4.168 0-2.3047 1.8633-4.1641 4.168-4.1641 2.3047 0 4.1641 1.8594 4.1641 4.168 0 0.77734 0.60938 1.3906 1.3906 1.3906 0.77734-0.003906 1.3906-0.61328 1.3906-1.3906 0-3.3594-2.3906-6.168-5.5547-6.8047l-0.003907-1.5312c0-0.77734-0.60938-1.3867-1.3867-1.3867-0.77734 0-1.3906 0.60938-1.3906 1.3867v1.5273c-3.1641 0.64062-5.5547 3.4453-5.5547 6.8086 0 3.832 3.1094 6.9453 6.9453 6.9453 2.3047 0 4.168 1.8594 4.168 4.168-0.003906 2.3008-1.8633 4.1641-4.168 4.1641z"></path>
                            <path d="m48.609 41.668c-2.3047 0-4.168-1.8594-4.168-4.168 0-0.77734-0.60938-1.3906-1.3906-1.3906-0.77344 0-1.3828 0.61328-1.3828 1.3906 0 3.3594 2.3906 6.168 5.5547 6.8047v1.5273c0 0.77734 0.60938 1.3906 1.3906 1.3906 0.77734 0 1.3906-0.60938 1.3906-1.3906v-1.5273c3.168-0.64063 5.5547-3.4453 5.5547-6.8047 0-3.832-3.1094-6.9453-6.9453-6.9453-2.3047 0-4.168-1.8594-4.168-4.168 0-2.3047 1.8594-4.1641 4.1641-4.1641 2.3086 0 4.168 1.8594 4.168 4.168 0 0.77734 0.60938 1.3906 1.3906 1.3906 0.77734-0.003906 1.3867-0.61328 1.3867-1.3906 0-3.3594-2.3906-6.168-5.5547-6.8047v-1.5312c0-0.77734-0.60938-1.3867-1.3906-1.3867-0.77734 0-1.3867 0.60938-1.3867 1.3867v1.5273c-3.168 0.64062-5.5547 3.4453-5.5547 6.8047 0 3.832 3.1094 6.9453 6.9453 6.9453 2.3047 0 4.168 1.8594 4.168 4.168-0.003906 2.3047-1.8633 4.168-4.1719 4.168z"></path>
                            <path d="m65.277 41.668c-2.3047 0-4.168-1.8594-4.168-4.168 0-0.77734-0.60938-1.3906-1.3906-1.3906-0.77344 0-1.3867 0.61328-1.3867 1.3906 0 3.3594 2.3906 6.168 5.5547 6.8047v1.5273c0 0.77734 0.60938 1.3906 1.3906 1.3906 0.77734 0 1.3906-0.60938 1.3906-1.3906v-1.5273c3.168-0.64063 5.5547-3.4453 5.5547-6.8047 0-3.832-3.1094-6.9453-6.9453-6.9453-2.3047 0-4.168-1.8594-4.168-4.168 0-2.3047 1.8633-4.1641 4.168-4.1641 2.3047 0 4.168 1.8594 4.168 4.168 0 0.77734 0.60938 1.3906 1.3906 1.3906 0.77344-0.003906 1.3867-0.61328 1.3867-1.3906 0-3.3594-2.3906-6.168-5.5547-6.8047v-1.5312c0-0.77734-0.61328-1.3867-1.3906-1.3867s-1.3867 0.60938-1.3867 1.3867v1.5273c-3.168 0.64062-5.5547 3.4453-5.5547 6.8047 0 3.832 3.1094 6.9453 6.9453 6.9453 2.3047 0 4.168 1.8594 4.168 4.168-0.003907 2.3047-1.8672 4.168-4.1719 4.168z"></path>
                            <path d="m86.109 54.168v-41.668c0-0.77734-0.60938-1.3906-1.3867-1.3906h-69.445c-0.77734 0-1.3867 0.61328-1.3867 1.3906v41.668c0 0.77734 0.60938 1.3867 1.3867 1.3867h31.945v28.582l-8.75-8.75c-0.55469-0.55469-1.418-0.55469-1.9727 0-0.55469 0.55469-0.55469 1.418 0 1.9727l11.109 11.109c0.14062 0.14062 0.27734 0.22266 0.44531 0.27734 0.19531 0.11328 0.39062 0.14453 0.55469 0.14453 0.16797 0 0.35938-0.027344 0.52734-0.10938 0.16797-0.054688 0.33203-0.16797 0.44531-0.30469l11.109-11.109c0.55469-0.55469 0.55469-1.418 0-1.9727-0.55469-0.55469-1.418-0.55469-1.9727 0l-8.7188 8.7461v-28.586h34.723c0.77734 0 1.3867-0.60938 1.3867-1.3867zm-2.7773-1.3906h-66.664v-38.887h66.668z"></path>
                        </g>
                    </svg><br>
                    <span class="fs-3 fw-medium text-dark">Get your website for less</span>
                    <p class=" text-o mt-2 text-justify">Get a high-quality website for a fraction of the cost charged by our competitors. We design smarter to make your budget go further.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5 bg-color pt-5">
        <div class="row">
            <div class="text-center mt-3"><span class="display-4 text-dark fw-semibold">Join our incredible <span class="text-orange">★★★★★</span> clients</span><br>
                <span class="sub-title sub-title6 style1 text-ani-style2 mt-4 d-none d-md-inline-block text-o px-md-5">There is a reason we have a constantly growing list of 5 star reviews on Google. Our clients love us and we love them! Check out some of our recent sites below, but remember - every site is unique, and we'll build you the site that YOU want.</span>

            </div>
        </div>
        <div class="row mt-5 mt-md-0">
            <div class="fullscreen-container">

                <div class="fullscreen-wrapper">
                    <?php for ($x = 1; $x < 10; $x++) { ?>
                        <div class="fullscreen-slide px-md-5 <?php echo $x === 1 ? 'active-slide' : ''; ?>">
                            <div class="col-12 px-md-5 bg-white rounded-3">
                                <div class="row">
                                    <div class="col-12 col-md-6 ">
                                        <img src="assets/kiwi-last.webp" class="img-fluid p-5">
                                    </div>
                                    <div class="col-12 col-md-6 px-5 mt-md-5">
                                        <h4 class="text-center text-md-start">Helping Children Thrive: Website & Branding</h4>
                                        <p class="fs-5 text-secondary fw-normal text-justify">"543 has been a great help in helping us establish our online merchandise platform. They respond willingly and in a timely manner when help is needed, and are knowledgeable of the product they offer."</p>
                                        <p class="fs-5 text-o fw-normal">★★★★★ - Emma Twigg (OLY)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 d-flex justify-content-center">
                <button class="btn bg-color rounded-circle h3 me-3" style="width: 80px; height: 80px;" onclick="navigateSlides(-1)"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                <button class="btn bg-color rounded-circle h3 ms-3" style="width: 80px; height: 80px;" onclick="navigateSlides(1)"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5 pt-md-5">
        <div class="row">
            <div class="text-center mt-3"><span class="display-4 text-dark fw-semibold">Pay however suits you.👍🏽 </span><br>
                <span class="sub-title sub-title6 style1 text-ani-style2 mt-4 d-none d-md-inline-block text-o">We want to give you the opportunity to have a stunning and effective website however it suits you best. Our low cost pricing options let you choose to pay for your site up front, or pay a simple monthly fee instead.</span>
                <p class="d-md-none mt-4 px-3">We want to give you the opportunity to have a stunning and effective websites.</p>
            </div>
        </div>
        <div class="row px-3 px-md-0">
            <div class="col-12 col-md-6">
                <div class="row">
                    <div class="col-12 px-2 px-md-5">
                        <div class="row bg-orange rounded-20 pricing-box">
                            <div class="col-12 text-center mt-5">
                                <h2 class="text-white text-decoration-underline">One Time</h2>
                                <span class="fs-5 fw-medium text-white d-none d-md-block">Make a single payment and enjoy lifetime access.</span>
                            </div>
                            <div class="col-12 text-center mt-5 mb-3">
                                <button class="btn py-4 px-5 bg-white rounded-5"><span class="text-orange fs-5">from&nbsp;</span><span class="text-orange fs-1 fw-bold">NZD 25</span><br><span class="text-orange fs-4">/Full Payment</span></button>
                            </div>
                            <div class="col-12 text-center mt-5 mb-4">
                                <ul class="list-unstyled text-center">
                                    <li class=" mb-2">
                                        <i class="bi bi-arrow-up-right-circle-fill me-2 text-white h6 fw-normal"></i>
                                        <span class=" h6 fw-normal text-white">Full access to premium features</span>
                                    </li>
                                    <li class=" mb-2">
                                        <i class="bi bi-arrow-up-right-circle-fill me-2 text-white h6 fw-normal"></i>
                                        <span class=" h6 fw-normal text-white">Priority customer support included</span>
                                    </li>
                                    <li class=" mb-2">
                                        <i class="bi bi-arrow-up-right-circle-fill me-2 text-white h6 fw-normal"></i>
                                        <span class=" h6 fw-normal text-white">Cancel anytime with no hidden fees</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="px-2 px-md-5 pt-3 pb-5 text-center">
                                <a href="contact.php" class="btn btn-dark px-5 py-3 fs-3 rounded-pill" style="background-color: #000;">Inquiry Now<i class="bi bi-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mt-4 mt-md-0">
                <div class="row">
                    <div class="col-12 px-2 px-md-5">
                        <div class="row orange-border rounded-20 pricing-box">
                            <div class="col-12 text-center mt-5">
                                <h2 class="text-dark text-decoration-underline">Monthly</h2>
                                <span class="fs-5 fw-medium text-dark d-none d-md-inline-block">Pay your full payment month by month</span>
                            </div>
                            <div class="col-12 text-center mt-5 mb-3">
                                <button class="btn py-4 px-5 bg-orange rounded-5"><span class="text-white fs-5">from&nbsp;</span><span class="text-white fs-1 fw-bold">NZD 50</span><br><span class="text-white fs-4">/Per month</span></button>
                            </div>
                            <div class="col-12 text-center mt-5 mb-4">
                                <ul class="list-unstyled text-center">
                                    <li class=" mb-2">
                                        <i class="bi bi-arrow-up-right-circle-fill me-2 text-dark h6 fw-normal"></i>
                                        <span class=" h6 fw-normal text-dark">Full access to premium features</span>
                                    </li>
                                    <li class=" mb-2">
                                        <i class="bi bi-arrow-up-right-circle-fill me-2 text-dark h6 fw-normal"></i>
                                        <span class=" h6 fw-normal text-dark">Priority customer support included</span>
                                    </li>
                                    <li class=" mb-2">
                                        <i class="bi bi-arrow-up-right-circle-fill me-2 text-dark h6 fw-normal"></i>
                                        <span class=" h6 fw-normal text-dark">Cancel anytime with no hidden fees</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="px-2 px-md-5 pt-3 pb-5 text-center">
                                <a href="contact.php" class="btn btn-dark px-5 py-3 fs-3 rounded-pill" style="background-color: #000;">Inquiry Now<i class="bi bi-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 wave-section">
                <svg class="wave-top" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="white" fill-opacity="1"
                        d="M0,160L80,170.7C160,181,320,203,480,202.7C640,203,800,181,960,170.7C1120,160,1280,160,1360,160L1440,160L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
                    </path>
                </svg>
            </div>
        </div>
        <div class="row content">
            <div class="col-12 col-md-4 col-lg-6 ">
                <img src="assets/faq1.webp" class="img-fluid">
            </div>
            <div class="col-12 col-md-8 col-lg-6 mt-5 mt-md-0 pb-5">
                <div class="row">
                    <div class="col-12">
                        <h2 class="faq-title text-white">Frequently Asked Questions</h2>
                        <div class="accordion mt-5" id="faqAccordion">

                            <!-- Question 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqHeading1">
                                    <button class="accordion-button d-flex justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true">
                                        <span>What is your service about?</span>
                                        <i class="bi bi-chevron-down ms-auto "></i>
                                    </button>
                                </h2>
                                <div id="faqCollapse1" class="accordion-collapse collapse show " aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Our service provides high-quality web solutions to help businesses grow online.
                                    </div>
                                </div>
                            </div>

                            <!-- Question 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqHeading2">
                                    <button class="accordion-button collapsed d-flex justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false">
                                        How can I contact support?
                                        <i class="bi bi-chevron-down ms-auto "></i>
                                    </button>
                                </h2>
                                <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        You can contact our support team via email at support@example.com or through our live chat.
                                    </div>
                                </div>
                            </div>

                            <!-- Question 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqHeading3">
                                    <button class="accordion-button collapsed d-flex justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false">
                                        Do you offer refunds?
                                        <i class="bi bi-chevron-down ms-auto "></i>
                                    </button>
                                </h2>
                                <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Yes, we offer a 30-day money-back guarantee on all our services.
                                    </div>
                                </div>
                            </div>

                            <!-- Question 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqHeading4">
                                    <button class="accordion-button collapsed d-flex justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false">
                                        Is customization available?
                                        <i class="bi bi-chevron-down ms-auto "></i>
                                    </button>
                                </h2>
                                <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Yes, we provide custom development solutions tailored to your business needs.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

            </div>
        </div>
    </div>

    <div class="container-fluid  mt-5 pt-md-2">
        <div class="row mt-md-5">
            <div class="text-center mt-3"><span class="display-4 text-dark fw-semibold">Get online with a few simple steps. 🚀 </span><br>
                <span class="sub-title sub-title6 style1 text-ani-style2 mt-4 d-none d-md-inline-block text-o">Everything we do is about making life easier for you. Our no fuss approach means your site can be live in weeks (or days), not months.</span>
                <p class="d-md-none mt-4 px-3">Everything we do is about making life easier for you. Our no fuss approach means your site can be live in weeks (or days), not months.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid container-md mt-md-5">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 px-3 mt-4 mt-md-1">
                <div class="border border-1 p-4 shadow zoom-effect">
                    <svg width="100px" height="100px" version="1.1" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" id="1954371169" data-icon-custom="true">
                        <g>
                            <path d="m31.945 41.668c-2.3047 0-4.168-1.8594-4.168-4.168 0-0.77734-0.60938-1.3906-1.3906-1.3906-0.77734 0-1.3867 0.61328-1.3867 1.3906 0 3.3594 2.3906 6.168 5.5547 6.8047v1.5273c0 0.77734 0.60937 1.3906 1.3906 1.3906 0.77734 0 1.3906-0.60938 1.3906-1.3906v-1.5273c3.168-0.64063 5.5547-3.4453 5.5547-6.8047 0-3.832-3.1094-6.9453-6.9453-6.9453-2.3047 0-4.168-1.8594-4.168-4.168 0-2.3047 1.8633-4.1641 4.168-4.1641 2.3047 0 4.1641 1.8594 4.1641 4.168 0 0.77734 0.60938 1.3906 1.3906 1.3906 0.77734-0.003906 1.3906-0.61328 1.3906-1.3906 0-3.3594-2.3906-6.168-5.5547-6.8047l-0.003907-1.5312c0-0.77734-0.60938-1.3867-1.3867-1.3867-0.77734 0-1.3906 0.60938-1.3906 1.3867v1.5273c-3.1641 0.64062-5.5547 3.4453-5.5547 6.8086 0 3.832 3.1094 6.9453 6.9453 6.9453 2.3047 0 4.168 1.8594 4.168 4.168-0.003906 2.3008-1.8633 4.1641-4.168 4.1641z"></path>
                            <path d="m48.609 41.668c-2.3047 0-4.168-1.8594-4.168-4.168 0-0.77734-0.60938-1.3906-1.3906-1.3906-0.77344 0-1.3828 0.61328-1.3828 1.3906 0 3.3594 2.3906 6.168 5.5547 6.8047v1.5273c0 0.77734 0.60938 1.3906 1.3906 1.3906 0.77734 0 1.3906-0.60938 1.3906-1.3906v-1.5273c3.168-0.64063 5.5547-3.4453 5.5547-6.8047 0-3.832-3.1094-6.9453-6.9453-6.9453-2.3047 0-4.168-1.8594-4.168-4.168 0-2.3047 1.8594-4.1641 4.1641-4.1641 2.3086 0 4.168 1.8594 4.168 4.168 0 0.77734 0.60938 1.3906 1.3906 1.3906 0.77734-0.003906 1.3867-0.61328 1.3867-1.3906 0-3.3594-2.3906-6.168-5.5547-6.8047v-1.5312c0-0.77734-0.60938-1.3867-1.3906-1.3867-0.77734 0-1.3867 0.60938-1.3867 1.3867v1.5273c-3.168 0.64062-5.5547 3.4453-5.5547 6.8047 0 3.832 3.1094 6.9453 6.9453 6.9453 2.3047 0 4.168 1.8594 4.168 4.168-0.003906 2.3047-1.8633 4.168-4.1719 4.168z"></path>
                            <path d="m65.277 41.668c-2.3047 0-4.168-1.8594-4.168-4.168 0-0.77734-0.60938-1.3906-1.3906-1.3906-0.77344 0-1.3867 0.61328-1.3867 1.3906 0 3.3594 2.3906 6.168 5.5547 6.8047v1.5273c0 0.77734 0.60938 1.3906 1.3906 1.3906 0.77734 0 1.3906-0.60938 1.3906-1.3906v-1.5273c3.168-0.64063 5.5547-3.4453 5.5547-6.8047 0-3.832-3.1094-6.9453-6.9453-6.9453-2.3047 0-4.168-1.8594-4.168-4.168 0-2.3047 1.8633-4.1641 4.168-4.1641 2.3047 0 4.168 1.8594 4.168 4.168 0 0.77734 0.60938 1.3906 1.3906 1.3906 0.77344-0.003906 1.3867-0.61328 1.3867-1.3906 0-3.3594-2.3906-6.168-5.5547-6.8047v-1.5312c0-0.77734-0.61328-1.3867-1.3906-1.3867s-1.3867 0.60938-1.3867 1.3867v1.5273c-3.168 0.64062-5.5547 3.4453-5.5547 6.8047 0 3.832 3.1094 6.9453 6.9453 6.9453 2.3047 0 4.168 1.8594 4.168 4.168-0.003907 2.3047-1.8672 4.168-4.1719 4.168z"></path>
                            <path d="m86.109 54.168v-41.668c0-0.77734-0.60938-1.3906-1.3867-1.3906h-69.445c-0.77734 0-1.3867 0.61328-1.3867 1.3906v41.668c0 0.77734 0.60938 1.3867 1.3867 1.3867h31.945v28.582l-8.75-8.75c-0.55469-0.55469-1.418-0.55469-1.9727 0-0.55469 0.55469-0.55469 1.418 0 1.9727l11.109 11.109c0.14062 0.14062 0.27734 0.22266 0.44531 0.27734 0.19531 0.11328 0.39062 0.14453 0.55469 0.14453 0.16797 0 0.35938-0.027344 0.52734-0.10938 0.16797-0.054688 0.33203-0.16797 0.44531-0.30469l11.109-11.109c0.55469-0.55469 0.55469-1.418 0-1.9727-0.55469-0.55469-1.418-0.55469-1.9727 0l-8.7188 8.7461v-28.586h34.723c0.77734 0 1.3867-0.60938 1.3867-1.3867zm-2.7773-1.3906h-66.664v-38.887h66.668z"></path>
                        </g>
                    </svg><br>
                    <span class="fs-3 fw-medium text-dark">Get your website for less</span>
                    <p class=" text-o mt-2 text-justify ">Get a high-quality website for a fraction of the cost charged by our competitors. We design smarter to make your budget go further.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 px-3 mt-4 mt-md-1 ">
                <div class="border border-1 p-4 shadow zoom-effect">
                    <svg width="100px" height="100px" version="1.1" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" id="1954371169" data-icon-custom="true">
                        <g>
                            <path d="m31.945 41.668c-2.3047 0-4.168-1.8594-4.168-4.168 0-0.77734-0.60938-1.3906-1.3906-1.3906-0.77734 0-1.3867 0.61328-1.3867 1.3906 0 3.3594 2.3906 6.168 5.5547 6.8047v1.5273c0 0.77734 0.60937 1.3906 1.3906 1.3906 0.77734 0 1.3906-0.60938 1.3906-1.3906v-1.5273c3.168-0.64063 5.5547-3.4453 5.5547-6.8047 0-3.832-3.1094-6.9453-6.9453-6.9453-2.3047 0-4.168-1.8594-4.168-4.168 0-2.3047 1.8633-4.1641 4.168-4.1641 2.3047 0 4.1641 1.8594 4.1641 4.168 0 0.77734 0.60938 1.3906 1.3906 1.3906 0.77734-0.003906 1.3906-0.61328 1.3906-1.3906 0-3.3594-2.3906-6.168-5.5547-6.8047l-0.003907-1.5312c0-0.77734-0.60938-1.3867-1.3867-1.3867-0.77734 0-1.3906 0.60938-1.3906 1.3867v1.5273c-3.1641 0.64062-5.5547 3.4453-5.5547 6.8086 0 3.832 3.1094 6.9453 6.9453 6.9453 2.3047 0 4.168 1.8594 4.168 4.168-0.003906 2.3008-1.8633 4.1641-4.168 4.1641z"></path>
                            <path d="m48.609 41.668c-2.3047 0-4.168-1.8594-4.168-4.168 0-0.77734-0.60938-1.3906-1.3906-1.3906-0.77344 0-1.3828 0.61328-1.3828 1.3906 0 3.3594 2.3906 6.168 5.5547 6.8047v1.5273c0 0.77734 0.60938 1.3906 1.3906 1.3906 0.77734 0 1.3906-0.60938 1.3906-1.3906v-1.5273c3.168-0.64063 5.5547-3.4453 5.5547-6.8047 0-3.832-3.1094-6.9453-6.9453-6.9453-2.3047 0-4.168-1.8594-4.168-4.168 0-2.3047 1.8594-4.1641 4.1641-4.1641 2.3086 0 4.168 1.8594 4.168 4.168 0 0.77734 0.60938 1.3906 1.3906 1.3906 0.77734-0.003906 1.3867-0.61328 1.3867-1.3906 0-3.3594-2.3906-6.168-5.5547-6.8047v-1.5312c0-0.77734-0.60938-1.3867-1.3906-1.3867-0.77734 0-1.3867 0.60938-1.3867 1.3867v1.5273c-3.168 0.64062-5.5547 3.4453-5.5547 6.8047 0 3.832 3.1094 6.9453 6.9453 6.9453 2.3047 0 4.168 1.8594 4.168 4.168-0.003906 2.3047-1.8633 4.168-4.1719 4.168z"></path>
                            <path d="m65.277 41.668c-2.3047 0-4.168-1.8594-4.168-4.168 0-0.77734-0.60938-1.3906-1.3906-1.3906-0.77344 0-1.3867 0.61328-1.3867 1.3906 0 3.3594 2.3906 6.168 5.5547 6.8047v1.5273c0 0.77734 0.60938 1.3906 1.3906 1.3906 0.77734 0 1.3906-0.60938 1.3906-1.3906v-1.5273c3.168-0.64063 5.5547-3.4453 5.5547-6.8047 0-3.832-3.1094-6.9453-6.9453-6.9453-2.3047 0-4.168-1.8594-4.168-4.168 0-2.3047 1.8633-4.1641 4.168-4.1641 2.3047 0 4.168 1.8594 4.168 4.168 0 0.77734 0.60938 1.3906 1.3906 1.3906 0.77344-0.003906 1.3867-0.61328 1.3867-1.3906 0-3.3594-2.3906-6.168-5.5547-6.8047v-1.5312c0-0.77734-0.61328-1.3867-1.3906-1.3867s-1.3867 0.60938-1.3867 1.3867v1.5273c-3.168 0.64062-5.5547 3.4453-5.5547 6.8047 0 3.832 3.1094 6.9453 6.9453 6.9453 2.3047 0 4.168 1.8594 4.168 4.168-0.003907 2.3047-1.8672 4.168-4.1719 4.168z"></path>
                            <path d="m86.109 54.168v-41.668c0-0.77734-0.60938-1.3906-1.3867-1.3906h-69.445c-0.77734 0-1.3867 0.61328-1.3867 1.3906v41.668c0 0.77734 0.60938 1.3867 1.3867 1.3867h31.945v28.582l-8.75-8.75c-0.55469-0.55469-1.418-0.55469-1.9727 0-0.55469 0.55469-0.55469 1.418 0 1.9727l11.109 11.109c0.14062 0.14062 0.27734 0.22266 0.44531 0.27734 0.19531 0.11328 0.39062 0.14453 0.55469 0.14453 0.16797 0 0.35938-0.027344 0.52734-0.10938 0.16797-0.054688 0.33203-0.16797 0.44531-0.30469l11.109-11.109c0.55469-0.55469 0.55469-1.418 0-1.9727-0.55469-0.55469-1.418-0.55469-1.9727 0l-8.7188 8.7461v-28.586h34.723c0.77734 0 1.3867-0.60938 1.3867-1.3867zm-2.7773-1.3906h-66.664v-38.887h66.668z"></path>
                        </g>
                    </svg><br>
                    <span class="fs-3 fw-medium text-dark">Get your website for less</span>
                    <p class=" text-o mt-2 text-justify">Get a high-quality website for a fraction of the cost charged by our competitors. We design smarter to make your budget go further.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 px-3 mt-4 mt-md-1">
                <div class="border border-1 p-4 shadow zoom-effect">
                    <svg width="100px" height="100px" version="1.1" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" id="1954371169" data-icon-custom="true">
                        <g>
                            <path d="m31.945 41.668c-2.3047 0-4.168-1.8594-4.168-4.168 0-0.77734-0.60938-1.3906-1.3906-1.3906-0.77734 0-1.3867 0.61328-1.3867 1.3906 0 3.3594 2.3906 6.168 5.5547 6.8047v1.5273c0 0.77734 0.60937 1.3906 1.3906 1.3906 0.77734 0 1.3906-0.60938 1.3906-1.3906v-1.5273c3.168-0.64063 5.5547-3.4453 5.5547-6.8047 0-3.832-3.1094-6.9453-6.9453-6.9453-2.3047 0-4.168-1.8594-4.168-4.168 0-2.3047 1.8633-4.1641 4.168-4.1641 2.3047 0 4.1641 1.8594 4.1641 4.168 0 0.77734 0.60938 1.3906 1.3906 1.3906 0.77734-0.003906 1.3906-0.61328 1.3906-1.3906 0-3.3594-2.3906-6.168-5.5547-6.8047l-0.003907-1.5312c0-0.77734-0.60938-1.3867-1.3867-1.3867-0.77734 0-1.3906 0.60938-1.3906 1.3867v1.5273c-3.1641 0.64062-5.5547 3.4453-5.5547 6.8086 0 3.832 3.1094 6.9453 6.9453 6.9453 2.3047 0 4.168 1.8594 4.168 4.168-0.003906 2.3008-1.8633 4.1641-4.168 4.1641z"></path>
                            <path d="m48.609 41.668c-2.3047 0-4.168-1.8594-4.168-4.168 0-0.77734-0.60938-1.3906-1.3906-1.3906-0.77344 0-1.3828 0.61328-1.3828 1.3906 0 3.3594 2.3906 6.168 5.5547 6.8047v1.5273c0 0.77734 0.60938 1.3906 1.3906 1.3906 0.77734 0 1.3906-0.60938 1.3906-1.3906v-1.5273c3.168-0.64063 5.5547-3.4453 5.5547-6.8047 0-3.832-3.1094-6.9453-6.9453-6.9453-2.3047 0-4.168-1.8594-4.168-4.168 0-2.3047 1.8594-4.1641 4.1641-4.1641 2.3086 0 4.168 1.8594 4.168 4.168 0 0.77734 0.60938 1.3906 1.3906 1.3906 0.77734-0.003906 1.3867-0.61328 1.3867-1.3906 0-3.3594-2.3906-6.168-5.5547-6.8047v-1.5312c0-0.77734-0.60938-1.3867-1.3906-1.3867-0.77734 0-1.3867 0.60938-1.3867 1.3867v1.5273c-3.168 0.64062-5.5547 3.4453-5.5547 6.8047 0 3.832 3.1094 6.9453 6.9453 6.9453 2.3047 0 4.168 1.8594 4.168 4.168-0.003906 2.3047-1.8633 4.168-4.1719 4.168z"></path>
                            <path d="m65.277 41.668c-2.3047 0-4.168-1.8594-4.168-4.168 0-0.77734-0.60938-1.3906-1.3906-1.3906-0.77344 0-1.3867 0.61328-1.3867 1.3906 0 3.3594 2.3906 6.168 5.5547 6.8047v1.5273c0 0.77734 0.60938 1.3906 1.3906 1.3906 0.77734 0 1.3906-0.60938 1.3906-1.3906v-1.5273c3.168-0.64063 5.5547-3.4453 5.5547-6.8047 0-3.832-3.1094-6.9453-6.9453-6.9453-2.3047 0-4.168-1.8594-4.168-4.168 0-2.3047 1.8633-4.1641 4.168-4.1641 2.3047 0 4.168 1.8594 4.168 4.168 0 0.77734 0.60938 1.3906 1.3906 1.3906 0.77344-0.003906 1.3867-0.61328 1.3867-1.3906 0-3.3594-2.3906-6.168-5.5547-6.8047v-1.5312c0-0.77734-0.61328-1.3867-1.3906-1.3867s-1.3867 0.60938-1.3867 1.3867v1.5273c-3.168 0.64062-5.5547 3.4453-5.5547 6.8047 0 3.832 3.1094 6.9453 6.9453 6.9453 2.3047 0 4.168 1.8594 4.168 4.168-0.003907 2.3047-1.8672 4.168-4.1719 4.168z"></path>
                            <path d="m86.109 54.168v-41.668c0-0.77734-0.60938-1.3906-1.3867-1.3906h-69.445c-0.77734 0-1.3867 0.61328-1.3867 1.3906v41.668c0 0.77734 0.60938 1.3867 1.3867 1.3867h31.945v28.582l-8.75-8.75c-0.55469-0.55469-1.418-0.55469-1.9727 0-0.55469 0.55469-0.55469 1.418 0 1.9727l11.109 11.109c0.14062 0.14062 0.27734 0.22266 0.44531 0.27734 0.19531 0.11328 0.39062 0.14453 0.55469 0.14453 0.16797 0 0.35938-0.027344 0.52734-0.10938 0.16797-0.054688 0.33203-0.16797 0.44531-0.30469l11.109-11.109c0.55469-0.55469 0.55469-1.418 0-1.9727-0.55469-0.55469-1.418-0.55469-1.9727 0l-8.7188 8.7461v-28.586h34.723c0.77734 0 1.3867-0.60938 1.3867-1.3867zm-2.7773-1.3906h-66.664v-38.887h66.668z"></path>
                        </g>
                    </svg><br>
                    <span class="fs-3 fw-medium text-dark">Get your website for less</span>
                    <p class=" text-o mt-2 text-justify">Get a high-quality website for a fraction of the cost charged by our competitors. We design smarter to make your budget go further.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 pb-5 px-50 mt-5 d-flex justify-content-center">
                <a href="contact.php" class="th-btn th-radius th-icon text-white fs-4">Contact Us<i
                        class="fa-regular fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>

    <div class="container-fluid px-md-5 mt-md-5 bg-color py-5">
        <div class="row mt-md-5">
            <div class="col-12 col-md-8 col-lg-6 mt-5">
                <span class="h3 text-center text-md-start">
                    Steering you in the right direction regardless whether you use us or not.
                </span>
                <div class="mt-4"></div>
                <span class="fs-4 text-dark text-justify">
                    Our team is always available to help out. We're committed to giving you the best advice - whether that means using 543 or someone else.
                </span>
                <p class="text-o mt-4 text-justify">
                    If you've got a question about absolutely anything design or online, don't hesitate to get in touch today. A chat is absolutely free and we'll make sure that after you talk to us you have a plan for whatever your individual situation is.
                </p>
            </div>
            <div class="col-12 col-md-4 col-lg-6 mb-5">
                <img src="assets/kiwi-last.webp" alt="" srcset="">
            </div>
        </div>
    </div>

    <script>
        let currentIndex = 0;
        const slides = document.querySelectorAll(".fullscreen-slide");

        function navigateSlides(direction) {
            slides[currentIndex].classList.remove("active-slide");
            currentIndex += direction;

            if (currentIndex < 0) currentIndex = slides.length - 1;
            if (currentIndex >= slides.length) currentIndex = 0;

            slides[currentIndex].classList.add("active-slide");
        }

        window.onload = function() {
            setInterval(function() {
                navigateSlides(1); // Moves to the next slide every 3 seconds
            }, 5000);
        };
    </script>

    <!--============================== Footer Area ==============================-->
    <?php require_once "footer.php"; ?>

    <!--********************************
			Code End  Here 
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>

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