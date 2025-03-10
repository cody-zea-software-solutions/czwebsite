<?php
require_once "db.php";
$s_d = Databases::Search("SELECT * FROM `solution`");
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cody Zea: Web Development for Kiwi Businesses</title>
    <meta name="author" content="themeholy">
    <meta name="description" content="Saor - SEO Digital Marketing Agency HTML Template">
    <meta name="keywords" content="Saor - SEO Digital Marketing Agency HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png">

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

<body style="overflow-x: hidden !important;">


    <?php require_once "header.php"; ?>

    <div class="container">
        <div class="row space-extra"></div>
    </div>
    <div class="container-fluid " style="overflow-x: hidden !important;">
        <div class="row mt-5 mt-md-0 ">
            <div class="col-12 mt-5 mt-md-0 px-md-5">
                <div class="title-area mb-40 text-center">
                    <span class="sub-title sub-title2 text-ani-style2 text-orange"> Kia Ora, Nau mai, haere mai! &#128075;</span>
                    <h1 class="sec-title text-ani-style3 mt-1">Powerful Websites for Growing Kiwi Businesses.</h1>
                </div>
            </div>
            <div class="col-12">
                <div class="row d-flex justify-content-center">
                    <div class="col-auto py-2">
                        <a href="contact.php" class="th-btn th-radius th-icon text-white fs-4 me-3 shadow">Contact Us<i
                                class="fa-regular fa-arrow-right ms-2"></i></a>
                    </div>
                    <div class="col-auto py-2 d-none d-md-block">
                        <a href="solutions.php" class="th-btn th-radius style4 th-icon text-white fs-4 me-3 shadow">Our Solutions<i
                                class="fa-regular fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 position-absolute">
                <div class="row">
                    <div class="col-6 d-flex justify-content-center d-none d-md-block">
                        <img src="assets/nz-dot.png" class="img-fluid pricing-image2">
                    </div>
                    <div class="col-12 col-md-6 d-flex justify-content-center">
                        <img src="assets/nz-dot.png" class="img-fluid pricing-image">
                    </div>
                </div>
            </div>
        </div>

        <div class="row gy-5 align-items-end mt-5 px-5 ">
            <div class="col-12 d-flex d-md-none justify-content-center">
                <div class="img-box1 ps-xl-4">
                    <div class="img1 th-anim px-5">
                        <img src="assets/3d-man-2.jpg" class="img-fluid" style="border-radius: 30px;">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class=" pe-xl-4">
                    <h2 class="text-center text-md-start">Why Work With a <span class="text-orange">Kiwi Web Development</span> Team?</h2>
                    <div class="feature-list mt-5">
                        <ul>
                            <li class="text-dark fw-semibold">Local Expertise – We understand the NZ market better than offshore teams</li>
                            <li class="text-dark fw-semibold">Support When You Need It – Quick response from a local team</li>
                            <li class="text-dark fw-semibold">SEO for New Zealand – Optimized to rank high in NZ Google searches</li>
                            <li class="text-dark fw-semibold">Affordable & Transparent Pricing – No hidden costs, just quality work</li>
                        </ul>
                    </div>

                    <div class="btn-group mt-40 d-flex justify-content-center">
                        <a href="contact.php" class="th-btn th-radius th-icon text-white fs-4">Contact Us<i
                                class="fa-regular fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-30 mb-xl-0 ">
                <div class="row">
                    <div class="col-6 d-none d-md-block">
                        <div class="img-box1 ps-xl-4">
                            <div class="img1 th-anim">
                                <div class="" style="width:270px; height:453px; background-image: url('assets/nz-flag.jpg'); background-position: center; background-size: cover; background-repeat: no-repeat; border-radius: 30px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 d-none d-md-block">
                        <div class="img-box1 ps-xl-4">
                            <div class="img1 th-anim d-flex justify-content-center">
                                <div class="" style="width:270px; height:453px; background-image: url('assets/3d-man-2.jpg'); background-position: center; background-size: cover; background-repeat: no-repeat; border-radius: 30px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-end mt-md-5 px-md-5 ">
            <div class="col-12 col-md-6 mt-md-5">
                <img src="assets/choose-us.svg" class="img-fluid">
            </div>
            <div class="col-12 col-md-6 px-4 mt-md-5">
                <h2 class="text-center text-md-start">Why <span class="text-orange">Kiwis Choose Us?</span></h2>

                <div class="">
                    <p class="text-o text-justify fw-semibold fs-5"> At Cody Zea Software Solutions, we bridge innovation between Sri Lanka and <span class="text-orange">New Zealand</span>, delivering high-quality digital solutions. With extensive experience in the <span class="text-orange">Kiwi market</span>, we’ve successfully developed numerous projects tailored to local businesses.</p>
                    <p class="text-o text-justify fw-semibold fs-5"> We understand that every business is unique, which is why we offer <span class="text-orange">personalized consultations.</span> Our team can visit you in person to gather requirements and ensure your digital presence aligns perfectly with your goals.</p>
                </div>

                <div class="btn-group mt-40 d-flex justify-content-center">
                    <a href="contact.php" class="th-btn style4 th-radius th-icon text-white fs-4">Our Works<i
                            class="fa-regular fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>

        <div class="row mt-5 px-md-5">
            <div class="col-12 mt-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="title-area mb-40 text-center">
                            <span class="sub-title sub-title2 text-ani-style2">What we offer for you</span>
                            <h2 class="sec-title text-ani-style3">Smart, Affordable Web Solutions for <span class="text-orange">Kiwi Businesses.</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <img src="assets/services.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="process-item">
                                            <span class="box-number">01</span>
                                            <div class="box-content">
                                                <h3 class="box-title">Web Design</h3>
                                                <p class="box-text">We create visually stunning and user-friendly website designs that enhance engagement and improve user experience.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="process-item">
                                            <span class="box-number">02</span>
                                            <div class="box-content">
                                                <h3 class="box-title">App Development</h3>
                                                <p class="box-text">Our team builds high-performance mobile and web applications tailored to your business needs with seamless functionality.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="process-item">
                                            <span class="box-number">03</span>
                                            <div class="box-content">
                                                <h3 class="box-title">Digital Marketing</h3>
                                                <p class="box-text">We develop data-driven digital marketing strategies to boost your online presence and drive targeted traffic to your business.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="process-item">
                                            <span class="box-number">04</span>
                                            <div class="box-content">
                                                <h3 class="box-title">Custom Software Development</h3>
                                                <p class="box-text">We create tailor-made software solutions to streamline your business operations and enhance efficiency.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="process-item">
                                            <span class="box-number">05</span>
                                            <div class="box-content">
                                                <h3 class="box-title">E-Commerce Platform</h3>
                                                <p class="box-text">From storefront design to payment integration, we build robust e-commerce platforms to help you sell online effortlessly.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="process-item">
                                            <span class="box-number">06</span>
                                            <div class="box-content">
                                                <h3 class="box-title">Branding</h3>
                                                <p class="box-text">We craft compelling brand identities that make your business stand out and leave a lasting impression on your audience.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 d-none d-md-flex">
                                <img src="assets/services.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="container-fluid mt-5 " style="overflow-x: hidden !important;">
        <div class="row ">
            <div class="col-12">
                <div class="row">
                    <div class="title-area text-center text-center">
                        <span class="sub-title sub-title2 style1 text-ani-style2">What Our <span class="text-orange d-none d-md-inline">★★★★★</span> Clients Say About Us</span>
                        <h2 class="sec-title text-ani-style3">Here's What Our Fellow <span class="text-orange">Kiwis Have to Say.</span></h2>
                    </div>
                </div>
                <div class="row mt-5 mt-md-0 ">
                    <div class="col-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                            <div class="carousel-inner">
                                <div class="carousel-item active bg-color">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <img src="assets/kiwi-bird-bro.svg" class="img-fluid p-2">
                                        </div>
                                        <div class="col-12 col-md-6 px-5 mt-md-5">
                                            <h3 class="text-center text-md-start">"Highly Recommended for Professional Websites"</h3>
                                            <p class="fs-5 text-secondary fw-normal text-justify">
                                                "I had a great experience with Cody Zea while building my e-commerce website. They delivered a high-quality site on time and provided excellent customer support throughout the process. I highly recommend them for anyone looking to create a professional website!"
                                            </p>
                                            <p class="fs-5 text-o fw-normal">★★★★★ - Ceynap, Auckland</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item bg-color">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <img src="assets/kiwi-bird-bro.svg" class="img-fluid p-2">
                                        </div>
                                        <div class="col-12 col-md-6 px-5 mt-md-5">
                                            <h3 class="text-center text-md-start">"Exceptional Service and Creative Solutions"</h3>
                                            <p class="fs-5 text-secondary fw-normal text-justify">
                                                "Booze Bites has had an outstanding experience working with Cody Zea Software Solutions. Their team delivered a seamless and efficient service, helping us establish our online presence with a sleek, user-friendly website. Their attention to detail, creativity, and ability to understand our brand made the process smooth and hassle-free."
                                            </p>
                                            <p class="fs-5 text-o fw-normal">★★★★★ - Booze Bites, Auckland</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item bg-color">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <img src="assets/kiwi-bird-bro.svg" class="img-fluid p-2">
                                        </div>
                                        <div class="col-12 col-md-6 px-5 mt-md-5">
                                            <h3 class="text-center text-md-start">"Perfectly Capturing Our Artistic Vision"</h3>
                                            <p class="fs-5 text-secondary fw-normal text-justify">
                                                "At Pradeepa Sangeeth Institute, we were looking for a reliable partner to help us enhance our digital presence, and Cody Zea Software Solutions exceeded our expectations. Their team created a beautifully designed website that perfectly reflects our institute’s artistic vision and cultural values."
                                            </p>
                                            <p class="fs-5 text-o fw-normal">★★★★★ - Pradeepa Sangeeth Institute</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item bg-color">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <img src="assets/kiwi-bird-bro.svg" class="img-fluid p-2">
                                        </div>
                                        <div class="col-12 col-md-6 px-5 mt-md-5">
                                            <h3 class="text-center text-md-start">"Transforming Business Growth with Expertise"</h3>
                                            <p class="fs-5 text-secondary fw-normal text-justify">
                                                "Working with Cody Zea Software Solutions was a game-changer for our business. They took our vision and transformed it into a powerful digital presence. From a sleek, user-friendly website to strategic branding and digital marketing, every detail was handled with expertise and professionalism. Their team truly understands business growth and goes beyond just creating a website – they craft solutions that drive real results. Highly recommended for anyone looking to elevate their brand!"
                                            </p>
                                            <p class="fs-5 text-o fw-normal">★★★★★ - Ceylon Coir World</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item bg-color">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <img src="assets/kiwi-bird-bro.svg" class="img-fluid p-2">
                                        </div>
                                        <div class="col-12 col-md-6 px-5 mt-md-5">
                                            <h3 class="text-center text-md-start">"Transforming Business Growth with Expertise"</h3>
                                            <p class="fs-5 text-secondary fw-normal text-justify">
                                                "Working with Cody Zea Software Solutions was a game-changer for our business. They took our vision and transformed it into a powerful digital presence. From a sleek, user-friendly website to strategic branding and digital marketing, every detail was handled with expertise and professionalism. Their team truly understands business growth and goes beyond just creating a website – they craft solutions that drive real results. Highly recommended for anyone looking to elevate their brand!"
                                            </p>
                                            <p class="fs-5 text-o fw-normal">★★★★★ - Ceylon Coir World</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev bg-transparent text-dark border-0">
                                <span class="carousel-control-prev-icon nav-btn" aria-hidden="true" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next bg-transparent text-dark border-0">
                                <span class="carousel-control-next-icon nav-btn" aria-hidden="true" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 " style="overflow-x: hidden !important;">
        <div class="row mt-5">
            <div class="col-12 mt-5">
                <div class="title-area text-center">
                    <span class="sub-title sub-title2 style1 text-ani-style2">Questions</span>
                    <h2 class="sec-title text-ani-style3">Got <span class="text-orange">Questions?</span> We’ve Got <span class="text-orange">Answers!</span></h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-between">
            <div class="col-lg-5">
                <img src="assets/review.svg" alt="">
                <div class="row">
                    <div class="col-12 pb-5 px-50 mt-1 d-flex justify-content-center">
                        <a href="contact.php" class="th-btn style4 th-radius th-icon text-white fs-4">Contact Us<i
                                class="fa-regular fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 bg-color px-3 px-md-5 py-5" style="border-radius: 30px;">
                <div class="service-accordion-content" id="serviceAccordion">
                    <div class="accordion-item">
                        <div class="accordion-header" id="collapse-item-1">
                            <div class="accordion-button " role="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                <span class="accordion-item_info">
                                    <span class="accordion-item_wrapp">
                                        <span class="box-title">🎖️ Custom Logo & Identity</span>
                                    </span>
                                    <span class="icon"> <i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                </span>

                            </div>
                        </div>
                        <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#serviceAccordion">
                            <div class="accordion-body">
                                <p class="faq-text">We’ll design a logo that represents your business and provide all the necessary branding assets. From business cards to promotional materials, we’ve got you covered.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" id="collapse-item-2">
                            <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                <span class="accordion-item_info">
                                    <span class="accordion-item_wrapp">
                                        <span class="box-title">🔎 SEO & Online Visibility</span>
                                    </span>
                                    <span class="icon"> <i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                </span>

                            </div>
                        </div>
                        <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#serviceAccordion">
                            <div class="accordion-body">
                                <p class="faq-text">After building your site, we’ll optimize it to improve your visibility and rankings on search engines. Our goal is to help your business appear on top in search results.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" id="collapse-item-3">
                            <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                <span class="accordion-item_info">
                                    <span class="accordion-item_wrapp">
                                        <span class="box-title">🎯 Paid Ads & Campaigns</span>
                                    </span>
                                    <span class="icon"> <i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                </span>

                            </div>
                        </div>
                        <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#serviceAccordion">
                            <div class="accordion-body">
                                <p class="faq-text">We’ll help you reach the right audience with targeted ads on platforms like Google, Facebook, and Instagram, driving more traffic and boosting your site’s visibility.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" id="collapse-item-4">
                            <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                <span class="accordion-item_info">
                                    <span class="accordion-item_wrapp">
                                        <span class="box-title">🌏 Hosting, Domains & Email</span>
                                    </span>
                                    <span class="icon"> <i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                </span>

                            </div>
                        </div>
                        <div id="collapse-4" class="accordion-collapse collapse " aria-labelledby="collapse-item-4" data-bs-parent="#serviceAccordion">
                            <div class="accordion-body">
                                <p class="faq-text">We manage your domain, hosting, and email setup, ensuring everything runs smoothly. Clients love our hassle-free, all-inclusive service to get their website up and running.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <span class="h6 fw-semibold text-dark">Still got questions? <a href="contact.php">Get in touch with us!</a></span>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid px-md-5 mt-md-5 py-5 " style="overflow-x: hidden !important;">
        <div class="row mt-md-5">
            <div class="col-12">
                <div class="title-area text-center">
                    <span class="sub-title sub-title2 style1 text-ani-style2">Help & Support</span>
                    <h2 class="sec-title text-ani-style3">Everything You <span class="text-orange">Need to Know.</span></h2>
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-6 mt-5 order-2 order-md-1 px-3 px-md-2">
                <span class="h3 text-center text-md-start">
                    Empowering Your Digital Journey—With or Without Us.
                </span>
                <div class="mt-4"></div>
                <p class="fs-4 text-dark text-justify">
                    At Cody Zea, we’re here to guide you toward the <span class="text-orange">best digital solutions.</span> Whether you choose us or explore other options, our goal is to ensure you make informed decisions.</p>
                <p class="text-o mt-4 text-justify">
                    Need advice on web design, branding, or digital strategy? <a href="contact.php" class="text-decoration-underline">Get in touch today</a> and we’ll provide you with a clear roadmap to help your business thrive online.
                </p>
                <div class="row">
                    <div class="col-12 pb-5 px-50 mt-1 d-flex justify-content-center">
                        <a href="contact.php" class="th-btn th-radius th-icon text-white fs-4">Contact Us<i
                                class="fa-regular fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-6 mb-md-5 order-1 order-md-2">
                <img src="assets/kiwi-last.webp" alt="" srcset="">
            </div>
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