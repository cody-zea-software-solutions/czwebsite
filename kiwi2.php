<?php
require_once "db.php";
$s_d = Databases::Search("SELECT * FROM `solution`");
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KDPFLMB3');</script>
<!-- End Google Tag Manager -->


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2R14CV971L"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-2R14CV971L');
    </script>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Codyzea - Custom Websites Built for New Zealand Businesses – Fast, Secure & SEO-Optimized</title>
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

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KDPFLMB3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->



    <?php require_once "header.php"; ?>

    <div class="container">
        <div class="row space-extra"></div>
    </div>

    <div class="container-fluid px-md-5 py-5 px-0 ps-md-5 bg-color ">
        <div class="row mt-0 mt-md-3">
            <div class="col-lg-6 mt-3 px-md-5 ps-md-5">
                <div class="title-area mb-25 mt-n1 mt-4 text-start text-md-end text-lg-start">
                    <div class="sec-title text-ani-style3 text-start text-orange h1">Get a stunning website for less.</div>
                </div>
                <p class="mt-n2 mb-30 fs-3 text-o fw-semibold">We create affordable, high-impact websites that you’ll love and that drive more sales.</p>
                <div class="info-list">
                    <style>
                        .info-text {
                            font-size: 20px !important;
                            /* Adjust the size as needed */
                        }

                        .info-icon {
                            font-size: 20px !important;
                            /* Adjust the size as needed */
                        }
                    </style>
                    <div class="info-item">
                        <span class="info-icon"></span>
                        <p class="info-text">Experienced Kiwi web designers & developers.</p>
                    </div>
                    <div class="info-item">
                        <span class="info-icon"></span>
                        <p class="info-text">Easy-to-use, mobile-ready & fully secure.</p>
                    </div>
                    <div class="info-item">
                        <span class="info-icon"></span>
                        <p class="info-text">Premium websites without the premium price.</p>
                    </div>
                </div>

                <div class="col-12 pb-md-5 px-md-50 mt-5 d-flex justify-content-center justify-content-md-center">
                    <a href="about.php" class="th-btn th-radius th-icon text-white fs-4">Learn More<i
                            class="fa-regular fa-arrow-right ms-2"></i></a>
                </div>
            </div>
            <div class="col-lg-6 d-flex justify-content-center align-items-center mt-5 mt-md-0">
                <div class="row">
                    <img src="assets/kiwi-hero.webp" alt="" class="img-fluid pricing-image p-5 pb-0" style="background-color:#FF5C35; border-radius: 40px;">
                </div>
            </div>

        </div>
    </div>


    <div class="container mt-md-5 pt-5">
        <div class="row">
            <div class="text-center mt-3"><span class="display-4 text-dark fw-semibold">Building a top-notch website is now effortless and affordable. 🚀</span><br>
                <span class="sub-title sub-title6 style1 text-ani-style2 mt-4 d-none d-md-inline-block text-o">From a simple chat to a high-performing website, we make the process seamless.</span>
                <p class="d-md-none mt-4 px-3">From a simple chat to a high-performing website, we make the process seamless.</p>
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
                    <img src="assets/1-1.svg" width="100px" height="100px" class="mb-4" alt=""><br>
                    <span class="fs-3 fw-medium text-dark">Get your website at a great price</span>
                    <p class=" text-o mt-2 text-justify mt-3 ">Get a top-notch website without the high cost. We optimize our designs to stretch your budget further.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 px-3 mt-4 mt-md-1 ">
                <div class="border border-1 p-4 shadow zoom-effect">
                    <img src="assets/1-2.svg" width="100px" height="100px" class="mb-4" alt=""><br>
                    <span class="fs-3 fw-medium text-dark">Rank higher and boost sales</span>
                    <p class=" text-o mt-2 text-justify mt-3">With our expertise, you’ll get a faster, SEO-optimized website that not only ranks better but also converts more, all while looking amazing.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 px-3 mt-4 mt-md-1 ">
                <div class="border border-1 p-4 shadow zoom-effect">
                    <img src="assets/1-3.svg" width="100px" height="100px" class="mb-4" alt=""><br>
                    <span class="fs-3 fw-medium text-dark">Stay local</span>
                    <p class=" text-o mt-2 text-justify mt-3">We understand what matters to NZ businesses and customers. As a Kiwi company, we’ve helped countless others get online.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5 bg-color pt-5">
        <div class="row">
            <div class="text-center mt-3"><span class="display-4 text-dark fw-semibold">Join our amazing <span class="text-orange">★★★★★</span> clients</span><br>
                <span class="sub-title sub-title6 style1 text-ani-style2 mt-4 d-none d-md-inline-block text-o px-md-5">Our 5-star reviews on Google speak for themselves. Clients love us, and we cherish working with them! Browse through some of our latest sites below, and remember - each site is custom-made just for you.</span>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <img src="assets/review.svg" class="img-fluid p-2">
                                </div>
                                <div class="col-12 col-md-6 px-5 mt-md-5">
                                    <h2 class="text-center text-md-start">Highly Recommended for Professional Websites</h2>
                                    <p class="fs-5 text-secondary fw-normal text-justify">
                                        "I had a great experience with Cody Zea while building my e-commerce website. They delivered a high-quality site on time and provided excellent customer support throughout the process. I highly recommend them for anyone looking to create a professional website!"
                                    </p>
                                    <p class="fs-5 text-o fw-normal">★★★★★ - Ceynap, Auckland</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <img src="assets/review.svg" class="img-fluid p-2">
                                </div>
                                <div class="col-12 col-md-6 px-5 mt-md-5">
                                    <h2 class="text-center text-md-start">Transforming Business Growth with Expertise</h2>
                                    <p class="fs-5 text-secondary fw-normal text-justify">
                                        "Working with Cody Zea Software Solutions was a game-changer for our business. They took our vision and transformed it into a powerful digital presence. From a sleek, user-friendly website to strategic branding and digital marketing, every detail was handled with expertise and professionalism. Their team truly understands business growth and goes beyond just creating a website – they craft solutions that drive real results. Highly recommended for anyone looking to elevate their brand!"
                                    </p>
                                    <p class="fs-5 text-o fw-normal">★★★★★ - Ceylon Coir World</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <img src="assets/review.svg" class="img-fluid p-2">
                                </div>
                                <div class="col-12 col-md-6 px-5 mt-md-5">
                                    <h2 class="text-center text-md-start">Perfectly Capturing Our Artistic Vision</h2>
                                    <p class="fs-5 text-secondary fw-normal text-justify">
                                        "At Pradeepa Sangeeth Institute, we were looking for a reliable partner to help us enhance our digital presence, and Cody Zea Software Solutions exceeded our expectations. Their team created a beautifully designed website that perfectly reflects our institute’s artistic vision and cultural values."
                                    </p>
                                    <p class="fs-5 text-o fw-normal">★★★★★ - Pradeepa Sangeeth Institute</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <img src="assets/review.svg" class="img-fluid p-2">
                                </div>
                                <div class="col-12 col-md-6 px-5 mt-md-5">
                                    <h2 class="text-center text-md-start">Transforming Business Growth with Expertise</h2>
                                    <p class="fs-5 text-secondary fw-normal text-justify">
                                        "Working with Cody Zea Software Solutions was a game-changer for our business. They took our vision and transformed it into a powerful digital presence. From a sleek, user-friendly website to strategic branding and digital marketing, every detail was handled with expertise and professionalism. Their team truly understands business growth and goes beyond just creating a website – they craft solutions that drive real results. Highly recommended for anyone looking to elevate their brand!"
                                    </p>
                                    <p class="fs-5 text-o fw-normal">★★★★★ - Ceylon Coir World</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                        <div class="row">
                                <div class="col-12 col-md-6">
                                    <img src="assets/review.svg" class="img-fluid p-2">
                                </div>
                                <div class="col-12 col-md-6 px-5 mt-md-5">
                                    <h2 class="text-center text-md-start">Driving Growth in the Tourism Industry</h2>
                                    <p class="fs-5 text-secondary fw-normal text-justify">
                                        "Cody Zea Software Solutions has been instrumental in transforming our travel business. They designed a stunning, user-friendly website that makes booking seamless for our customers. Their expertise in branding and digital marketing helped us attract more travelers and stand out in the competitive tourism industry. The team is professional, innovative, and always ready to go the extra mile. If you're looking for real business growth, Cody Zea is the way to go!"
                                    </p>
                                    <p class="fs-5 text-o fw-normal">★★★★★ - Cheers Travels</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev bg-transparent text-dark border-0">
                        <span class="carousel-control-prev-icon nav-btn" aria-hidden="true" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev"></span>
                        <span class="visually-hidden text-dark">Previous</span>
                    </button>
                    <button class="carousel-control-next bg-transparent text-dark border-0">
                        <span class="carousel-control-next-icon nav-btn" aria-hidden="true" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="row mt-5 mt-md-0">
            <div class="fullscreen-container">

                <div class="fullscreen-wrapper">
                    <div class="fullscreen-slide px-md-5">
                        <div class="col-12 px-md-5 bg-white rounded-3">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <img src="assets/review.svg" class="img-fluid p-2">
                                </div>
                                <div class="col-12 col-md-6 px-5 mt-md-5">
                                    <h2 class="text-center text-md-start">Highly Recommended for Professional Websites</h2>
                                    <p class="fs-5 text-secondary fw-normal text-justify">
                                        "I had a great experience with Cody Zea while building my e-commerce website. They delivered a high-quality site on time and provided excellent customer support throughout the process. I highly recommend them for anyone looking to create a professional website!"
                                    </p>
                                    <p class="fs-5 text-o fw-normal">★★★★★ - Ceynap, Auckland</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="fullscreen-slide px-md-5">
                        <div class="col-12 px-md-5 bg-white rounded-3">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <img src="assets/review.svg" class="img-fluid p-2">
                                </div>
                                <div class="col-12 col-md-6 px-5 mt-md-5">
                                    <h2 class="text-center text-md-start">Exceptional Service and Creative Solutions</h2>
                                    <p class="fs-5 text-secondary fw-normal text-justify">
                                        "Booze Bites has had an outstanding experience working with Cody Zea Software Solutions. Their team delivered a seamless and efficient service, helping us establish our online presence with a sleek, user-friendly website. Their attention to detail, creativity, and ability to understand our brand made the process smooth and hassle-free."
                                    </p>
                                    <p class="fs-5 text-o fw-normal">★★★★★ - Booze Bites, Auckland</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="fullscreen-slide px-md-5">
                        <div class="col-12 px-md-5 bg-white rounded-3">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <img src="assets/review.svg" class="img-fluid p-2">
                                </div>
                                <div class="col-12 col-md-6 px-5 mt-md-5">
                                    <h2 class="text-center text-md-start">Perfectly Capturing Our Artistic Vision</h2>
                                    <p class="fs-5 text-secondary fw-normal text-justify">
                                        "At Pradeepa Sangeeth Institute, we were looking for a reliable partner to help us enhance our digital presence, and Cody Zea Software Solutions exceeded our expectations. Their team created a beautifully designed website that perfectly reflects our institute’s artistic vision and cultural values."
                                    </p>
                                    <p class="fs-5 text-o fw-normal">★★★★★ - Pradeepa Sangeeth Institute</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="fullscreen-slide px-md-5">
                        <div class="col-12 px-md-5 bg-white rounded-3">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <img src="assets/review.svg" class="img-fluid p-2">
                                </div>
                                <div class="col-12 col-md-6 px-5 mt-md-5">
                                    <h2 class="text-center text-md-start">Transforming Business Growth with Expertise</h2>
                                    <p class="fs-5 text-secondary fw-normal text-justify">
                                        "Working with Cody Zea Software Solutions was a game-changer for our business. They took our vision and transformed it into a powerful digital presence. From a sleek, user-friendly website to strategic branding and digital marketing, every detail was handled with expertise and professionalism. Their team truly understands business growth and goes beyond just creating a website – they craft solutions that drive real results. Highly recommended for anyone looking to elevate their brand!"
                                    </p>
                                    <p class="fs-5 text-o fw-normal">★★★★★ - Ceylon Coir World</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="fullscreen-slide px-md-5">
                        <div class="col-12 px-md-5 bg-white rounded-3">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <img src="assets/review.svg" class="img-fluid p-2">
                                </div>
                                <div class="col-12 col-md-6 px-5 mt-md-5">
                                    <h2 class="text-center text-md-start">Driving Growth in the Tourism Industry</h2>
                                    <p class="fs-5 text-secondary fw-normal text-justify">
                                        "Cody Zea Software Solutions has been instrumental in transforming our travel business. They designed a stunning, user-friendly website that makes booking seamless for our customers. Their expertise in branding and digital marketing helped us attract more travelers and stand out in the competitive tourism industry. The team is professional, innovative, and always ready to go the extra mile. If you're looking for real business growth, Cody Zea is the way to go!"
                                    </p>
                                    <p class="fs-5 text-o fw-normal">★★★★★ - Cheers Travels</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
        <div class="row mt-2 mb-5">
            <div class="col-12 d-flex justify-content-center">
                <button class="btn bg-color rounded-circle h3 me-3" style="width: 80px; height: 80px;" onclick="navigateSlides(-1)"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                <button class="btn bg-color rounded-circle h3 ms-3" style="width: 80px; height: 80px;" onclick="navigateSlides(1)"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5 pt-md-5">
        <div class="row">
            <div class="text-center mt-3"><span class="display-4 text-dark fw-semibold">Choose your preferred payment method.👍🏽 </span><br>
                <span class="sub-title sub-title6 style1 text-ani-style2 mt-4 d-none d-md-inline-block text-o">We’re here to help you create an impactful website that fits your needs. Our affordable plans allow you to either pay upfront or enjoy a flexible monthly payment option.</span>
                <p class="d-md-none mt-4 px-3">We’re here to help you create impactful websites.</p>
            </div>
        </div>

        <div class="row px-3 px-md-0 mt-5">
            <div class="col-12 col-md-6">
                <div class="row">
                    <div class="col-12 px-2 px-md-5">
                        <div class="row bg-orange rounded-20 pricing-box">
                            <div class="col-12 text-center mt-5">
                                <h2 class="text-white text-decoration-underline">One Time</h2>
                                <span class="fs-5 fw-medium text-white d-none d-md-block">Make a single payment and enjoy lifetime access.</span>
                            </div>
                            <div class="col-12 text-center mt-5 mb-3">
                                <button class="btn py-4 px-5 bg-white rounded-5"><span class="text-orange fs-5">from&nbsp;</span><span class="text-orange fs-1 fw-bold">NZD 100</span><br><span class="text-orange fs-4">/Full Payment</span></button>
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
                                        <span>🎖️ Custom Logo & Identity</span>
                                        <i class="bi bi-chevron-down ms-auto"></i>
                                    </button>
                                </h2>
                                <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        We’ll design a logo that represents your business and provide all the necessary branding assets. From business cards to promotional materials, we’ve got you covered.
                                    </div>
                                </div>
                            </div>

                            <!-- Question 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqHeading2">
                                    <button class="accordion-button collapsed d-flex justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false">
                                        🔎 SEO & Online Visibility
                                        <i class="bi bi-chevron-down ms-auto"></i>
                                    </button>
                                </h2>
                                <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        After building your site, we’ll optimize it to improve your visibility and rankings on search engines. Our goal is to help your business appear on top in search results.
                                    </div>
                                </div>
                            </div>

                            <!-- Question 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqHeading3">
                                    <button class="accordion-button collapsed d-flex justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false">
                                        🎯 Paid Ads & Campaigns
                                        <i class="bi bi-chevron-down ms-auto"></i>
                                    </button>
                                </h2>
                                <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        We’ll help you reach the right audience with targeted ads on platforms like Google, Facebook, and Instagram, driving more traffic and boosting your site’s visibility.
                                    </div>
                                </div>
                            </div>

                            <!-- Question 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqHeading4">
                                    <button class="accordion-button collapsed d-flex justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false">
                                        🌏 Hosting, Domains & Email
                                        <i class="bi bi-chevron-down ms-auto"></i>
                                    </button>
                                </h2>
                                <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        We manage your domain, hosting, and email setup, ensuring everything runs smoothly. Clients love our hassle-free, all-inclusive service to get their website up and running.
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

    <div class="container-fluid mt-5 pt-md-2">
        <div class="row mt-md-5">
            <div class="text-center mt-3"><span class="display-4 text-dark fw-semibold">Launch your website in no time. 🚀 </span><br>
                <span class="sub-title sub-title6 style1 text-ani-style2 mt-4 d-none d-md-inline-block text-o">We focus on simplicity, ensuring your site is live quickly. With our efficient process, your site can go live in days or weeks, not months.</span>
                <p class="d-md-none mt-4 px-3">We focus on simplicity, ensuring your site is live quickly. With our efficient process, your site can go live in days or weeks, not months.</p>
            </div>
        </div>
    </div>


    <div class="container-fluid container-md mt-md-5">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 px-3 mt-4 mt-md-1">
                <div class="border border-1 p-4 shadow zoom-effect">
                    <img src="assets/2-1.svg" width="100px" height="100px" class="mb-4" alt=""><br>
                    <span class="fs-3 fw-medium text-dark">Reach Out to Us</span>
                    <p class=" text-o mt-2 text-justify mt-3 ">Simply fill out our contact form, give us a call, or send an email, and our founder, Jamie Twigg, will get back to you within 24 hours to discuss your project. Want to chat right away? Schedule a time that works for you below! 📅</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 px-3 mt-4 mt-md-1 ">
                <div class="border border-1 p-4 shadow zoom-effect">
                    <img src="assets/2-2.svg" width="100px" height="100px" class="mb-4" alt=""><br>
                    <span class="fs-3 fw-medium text-dark">We Create Your Website</span>
                    <p class=" text-o mt-2 text-justify mt-3">Within two weeks (or sooner if needed), we'll present an initial homepage draft. From there, we'll refine it as many times as necessary until you're completely satisfied! ❤️</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 px-3 mt-4 mt-md-1">
                <div class="border border-1 p-4 shadow zoom-effect">
                    <img src="assets/2-3.svg" width="100px" height="100px" class="mb-4" alt=""><br>
                    <span class="fs-3 fw-medium text-dark">We Launch Your Website</span>
                    <p class=" text-o mt-2 text-justify mt-3">Once you're happy with the design, we'll add content, optimize it for SEO, make it live, secure it with an SSL certificate, and submit it to Google Search Console for indexing. Your website will be up and running in just a few weeks! 🎉</p>
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
                    Guiding you toward success, whether you choose us or not.
                </span>
                <div class="mt-4"></div>
                <span class="fs-4 text-dark text-justify">
                    Our experts are always ready to assist. We’re here to offer the best guidance, whether you go with this or another option.
                </span>
                <p class="text-o mt-4 text-justify">
                    Have questions about design or anything online? Feel free to reach out today. Our consultation is free, and we'll ensure you walk away with a clear plan tailored to your needs.
                </p>
                <div class="row">
                    <div class="col-12 pb-5 px-50 mt-1 d-flex justify-content-center">
                        <a href="contact.php" class="th-btn th-radius th-icon text-white fs-4">Contact Us<i
                                class="fa-regular fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-6 mb-5">
                <img src="assets/kiwi-last.webp" alt="" srcset="">
            </div>
        </div>
    </div>

    <div class="container bg-color">

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