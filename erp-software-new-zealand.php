<?php
require_once "assets/process/database.php";

// Capture the 'utm_term' parameter from the URL
$keyword = isset($_GET['utm_term']) ? $_GET['utm_term'] : 'default keyword';

// Default headline
$headline = "Transform the Way You Work with Custom ERP Solutions";

// Change the headline based on the keyword
if ($keyword == "web design auckland") {
    $headline = "Creative Web Design Solutions for Auckland Businesses!";
} elseif ($keyword == "website design auckland") {
    $headline = "Expert Website Design for Auckland’s Growing Businesses!";
} elseif ($keyword == "website design christchurch") {
    $headline = "Top Website Design Services for Christchurch Businesses!";
} elseif ($keyword == "web design chch") {
    $headline = "Affordable Web Design for Christchurch Companies!";
} elseif ($keyword == "digital agency auckland") {
    $headline = "Your Trusted Digital Agency in Auckland for Business Growth!";
} elseif ($keyword == "auckland web designers") {
    $headline = "Professional Auckland Web Designers for Stunning Websites!";
} elseif ($keyword == "website designers") {
    $headline = "Expert Website Designers Crafting Unique Online Experiences!";
} elseif ($keyword == "website design company") {
    $headline = "The Website Design Company That Elevates Your Brand!";
} elseif ($keyword == "website design wellington") {
    $headline = "High-Quality Website Design Services for Wellington Businesses!";
} elseif ($keyword == "web development near me") {
    $headline = "Professional Web Development Near You — Affordable & Fast!";
} elseif ($keyword == "web design new zealand") {
    $headline = "Custom Web Design Solutions for New Zealand Businesses!";
} elseif ($keyword == "website developers nz") {
    $headline = "Skilled Website Developers Serving All of New Zealand!";
} elseif ($keyword == "website developers auckland") {
    $headline = "Experienced Auckland Website Developers for Your Business!";
} else {
    // Default headline will be shown if no keyword matches
    $headline = "Transform the Way You Work with Custom ERP Solutions

";
}
?>


<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KDPFLMB3');
    </script>
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
    <title><?php echo $headline ?></title>
    <meta name="author" content="Cody Zea Software Solutions">
    <meta name="description"
        content="Need a website? Get fast, secure, and affordable web development services in NZ from Cody Zea. Book a free call today and take your business online.">
    <meta name="keywords"
        content="Web Development NZ, Website Developers Auckland, Affordable Web Design, Fast Websites NZ, Business Website NZ, Cody Zea Web Development, Custom Website Design, Web Developers Near Me, Auckland Web Design, Web Solutions NZ">
    <meta name="robots" content="INDEX,FOLLOW">




    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
      Google Fonts
    ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Space+Grotesk:wght@300..700&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!--==============================
        All CSS File
    ============================== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">
</head>

<body>
    <?php require_once "header.php"; ?>


    <div class="container-fluid space-extra2-top" data-track="Hero-wd Section">
        <div class="row">
            <div class="col-12 col-lg-7">
                <div class="d-flex justify-content-center flex-column mt-5 p-2 p-lg-5">
                    <span class="fs-5 fw-medium text-orange">Let’s Build the Right ERP for Your Business — with Cody Zea

                    </span>
                    <p class="display-4 fw-semibold text-black"><?php echo $headline ?>
                    </p>
                    <p class="text-black fs-4 font-landing fw-semibold">
                        Cody Zea builds tailored ERP systems that streamline operations, automate processes, and grow
                        with your business—no bloated features, no per-user fees, just what you need.


                    </p>

                    <ul class="list-unstyled">
                        <li class="text-black fs-5"><i class="fa-solid fa-circle-check text-success"></i>&nbsp;
                            100% Custom Modules (HR, Finance, CRM, Inventory & More)</li>
                        <li class="text-black fs-5"><i class="fa-solid fa-circle-check text-success"></i>&nbsp;
                            Multi-Branch Ready with Role-Based Access</li>
                        <li class="text-black fs-5"><i class="fa-solid fa-circle-check text-success"></i>&nbsp; Seamless
                            Mobile & Desktop Access</li>
                        <li class="text-black fs-5"><i class="fa-solid fa-circle-check text-success"></i>&nbsp;
                            Affordable, Fast Delivery – Built by a Global Team</li>

                    </ul>
                    <div class="btn-group">
                        <a href="contact.php" data-bs-target="#gfc" data-bs-toggle="modal"
                            class="th-btn blue-btn style1 th-icon th-radius fs-5">Get a Free
                            Consultation<i class="fa-regular fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5 space-extra d-flex justify-content-center">
            <div class="col-11 bg-white rounded-20 border border-2 black-border p-4 p-lg-5">
                    <span class="text-black fs-3 text-orange">Fill out the form below to claim your <span
                            class="text-orange"> USD 9,999 </span>Lifetime
                        Custom ERP Plan.
                    </span>
                    <form id="offer-form-ad">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <input type="text" class="form-control text-black" id="ef2_firstname"
                                    placeholder="Enter your Name" required>
                            </div>

                            <div class="col-12 mt-3">
                                <input type="email" class="form-control text-black" id="ef2_workEmail"
                                    placeholder="Enter your work email" required>
                            </div>

                            <div class="col-12 mt-3">
                                <input type="tel" class="form-control text-black" id="ef2_mobileNumber"
                                    placeholder="Enter your mobile number" required>
                            </div>

                            <!-- ✅ New Business Name Field -->
                            <div class="col-12 mt-3">
                                <input type="text" class="form-control text-black" id="ef2_businessName"
                                    placeholder="Enter your Business Name" required>
                            </div>

                            <div class="col-12">
                                <!-- Message -->
                                <div class="mt-3">
                                    <textarea class="form-control text-black" id="ef2_fmessage" rows="2"
                                        placeholder="Tell us what modules or processes you’d like to manage with ERP"
                                        required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-3 d-flex justify-content-center">
                            <!-- Submit Button -->
                            <div class="btn-group col-12">
                                <a class="th-btn blue-btn style1 th-icon th-radius fs-5 col-12 bg-orange" type="submit"
                                    id="ef2_thh-btn" onclick="freeConsultationEF2();">
                                    Get A Free Consultancy
                                    <i class="fa-regular fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!--Why Choose Us Section-->

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12 text-center">
                <span class="text-black display-5">Why Choose <span class="text-orange">Cody Zea Over Generic ERP
                        Solutions?</span>
                </span>
                <p class="text-black font-landing fs-4 fw-bold">
                    Generic ERP systems come with limits. Cody Zea gives you the flexibility to build exactly what your
                    business needs.


                </p>
            </div>

        </div>

    </div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-11 col-lg-5 p-3 p-lg-5 bg-color rounded-20 mt-3 mx-3">
                <span class="text-black fs-4">If you go with a generic ERP system:</span>
                <div class="col-12 d-flex justify-content-center p-2 p-lg-4">
                    <img src="assets/confused.png" class="img-fluid text-center w-50" alt="confusedperson">

                </div>
                <div class="col-12">
                    <div class="col-12 mt-2">
                        <span class="text-black fs-4">
                            <i class="fa-solid fa-circle-xmark text-danger"></i> You pay for features you never use

                        </span>

                    </div>
                    <hr class="text-black">
                    <div class="col-12 mt-2">
                        <span class="text-black fs-4"><i class="fa-solid fa-circle-xmark text-danger"></i>
                            Monthly per-user charges pile up

                        </span>

                    </div>
                    <hr class="text-black">

                    <div class="col-12 mt-2">
                        <span class="text-black fs-4"><i class="fa-solid fa-circle-xmark text-danger"></i>
                            Scaling to multiple branches is complex

                        </span>

                    </div>
                    <hr class="text-black">

                    <div class="col-12 mt-2">
                        <span class="text-black fs-4"><i class="fa-solid fa-circle-xmark text-danger"></i>
                            UI looks outdated and hard to navigate


                        </span>

                    </div>
                    <hr class="text-black">
                    <div class="col-12 mt-2">
                        <span class="text-black fs-4"><i class="fa-solid fa-circle-xmark text-danger"></i>
                            Support is delayed and non-local



                        </span>

                    </div>
                    <hr class="text-black">
                    <div class="col-12 mt-2">
                        <span class="text-black fs-4"><i class="fa-solid fa-circle-xmark text-danger"></i>
                            You're adapting your process to their system



                        </span>

                    </div>
                </div>
            </div>
            <div class="col-11 col-lg-5 p-3 p-lg-5 bg-color rounded-20 mt-3 mx-3">
                <span class="text-black fs-4">If you build your ERP with Cody Zea:</span>

                <div class="col-12 d-flex justify-content-center">
                    <img src="assets/handshake.png" class="img-fluid text-center w-50 p-2 p-lg-4" alt="confusedperson">

                </div>
                <div class="col-12">
                    <div class="col-12 mt-2">
                        <span class="text-black fs-4"><i class="fa-solid fa-circle-check text-success"></i>
                            You get exactly the modules you need (and none you don’t)

                        </span>

                    </div>
                    <hr class="text-black">

                    <div class="col-12 mt-2">
                        <span class="text-black fs-4"><i class="fa-solid fa-circle-check text-success"></i>
                            One-time project pricing — no surprises

                        </span>

                    </div>
                    <hr class="text-black">

                    <div class="col-12 mt-2">
                        <span class="text-black fs-4"><i class="fa-solid fa-circle-check text-success"></i>
                            Designed for multi-branch, real-time operations

                        </span>

                    </div>
                    <hr class="text-black">

                    <div class="col-12 mt-2">
                        <span class="text-black fs-4"><i class="fa-solid fa-circle-check text-success"></i>
                            Custom-branded, clean, user-friendly design


                        </span>

                    </div>
                    <hr class="text-black">

                    <div class="col-12 mt-2">
                        <span class="text-black fs-4"><i class="fa-solid fa-circle-check text-success"></i>
                            24/7 expert support from NZ & LK teams



                        </span>

                    </div>
                    <hr class="text-black">

                    <div class="col-12 mt-2">
                        <span class="text-black fs-4"><i class="fa-solid fa-circle-check text-success"></i>
                            Your ERP adapts to your workflow — always




                        </span>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--Why Choose Us Section-->
    <!--Our Solutions Section-->
    <div class="container space-extra">
        <div class="row d-flex justify-content-center">
            <span class="text-black display-5">
                Our <span class="text-orange"> Solutions</span>
            </span>
            <p class="fw-bold text-black fs-4 font-landing">
                Explore the Full Power of Cody Zea’s Custom ERP Features
            </p>
        </div>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-lg-3 col-md-6 t3xt-center text-center p-3 m-2" style="background-color:#FFAD7F;">
                <img src="assets/erp/hp.png" class="img-fluid" alt="HR & Payroll">
                <div class="p-3">
                    <span class="fs-3 text-black">HR & Payroll</span>
                    <p class="font-landing fw-bold fs-5 text-black">
                        Manage employee data, attendance, leave, and automated payroll — all in one streamlined module.


                    </p>
                </div>

            </div>
            <div class="col-12 col-lg-3 col-md-6 text-center p-3 m-2" style="background-color:#FFAD7F;">
                <img src="assets/erp/fa.svg" class="img-fluid" alt="Finance & Accounting">
                <div class="p-3">
                    <span class="fs-3 text-black"> Finance & Accounting</span>
                    <p class="font-landing fw-bold fs-5 text-black">
                        Handle invoicing, expense tracking, budgeting, and generate financial reports with ease.



                    </p>
                </div>

            </div>
            <div class="col-12 col-lg-3 col-md-6 text-center p-3 m-2" style="background-color:#FFAD7F;">
                <img src="assets/erp/ip.svg" class="img-fluid" alt="Inventory & Procurement">
                <div class="p-3">
                    <span class="fs-3 text-black"> Inventory & Procurement</span>
                    <p class="font-landing fw-bold fs-5 text-black">
                        Track stock levels in real-time, manage suppliers, and automate reordering for better control.



                    </p>
                </div>

            </div>
            <div class="col-12 col-lg-3 col-md-6 text-center p-3 m-2" style="background-color:#FFAD7F;">
                <img src="assets/erp/hp.png" class="img-fluid" alt="CRM & Customer Management">
                <div class="p-3">
                    <span class="fs-3 text-black">CRM & Customer Management</span>
                    <p class="font-landing fw-bold fs-5 text-black">
                        Stay on top of customer communication, history, sales funnels, and service timelines — all in
                        one dashboard.



                    </p>
                </div>

            </div>
            <div class="col-12 col-lg-3 col-md-6 text-center p-3 m-2" style="background-color:#FFAD7F;">
                <img src="assets/erp/hp.png" class="img-fluid" alt="Multi-Branch Access">
                <div class="p-3">
                    <span class="fs-3 text-black">Multi-Branch Access</span>
                    <p class="font-landing fw-bold fs-5 text-black">
                        Centralized ERP access for franchises or chain businesses with branch-specific control and
                        reporting.



                    </p>
                </div>

            </div>
            <div class="col-12 col-lg-3 col-md-6 text-center p-3 m-2" style="background-color:#FFAD7F;">
                <img src="assets/erp/hp.png" class="img-fluid" alt="Reports & Dashboards">
                <div class="p-3">
                    <span class="fs-3 text-black"> Reports & Dashboards</span>
                    <p class="font-landing fw-bold fs-5 text-black">
                        Visualize key metrics your way. Build smart dashboards tailored to your KPIs and business
                        priorities.



                    </p>
                </div>

            </div>
        </div>
    </div>
    <!--Our Solutions Section-->


    <div class="container-fluid m-0 p-0 mb-5">
        <div class="row"
            style="background-blend-mode: multiply; background-image: url(assets/2148366645.jpg);  background-size: cover; background-position: center;">
            <div class="col-12 col-lg-7 d-flex justify-content-center">
                <div class="p-2 d-flex justify-content-center flex-column mt-5">
                    <div class="bg-orange rounded-20 p-5 position-relative z-index-3">
                        <span class="fs-3 fw-medium text-black">Limited-Time Offer
                        </span>
                        <p class="display-6 fw-semibold text-white">Lifetime ERP Software, Fully Tailored to Your
                            Business — USD $9,999

                            </span>
                        </p>
                        <p class="text-black fs-5">
                            No monthly fees. Unlimited access. Forever yours.
                        </p>

                        <div class="row bg-white rounded-20 p-2">
                            <span class="fs-4 text-black fw-bold">Features :</span>
                            <br>
                            <div class="col-12 col-lg-12">
                                <ul class="list-unstyled">
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp;
                                        HR & Payroll: Attendance, leave, roles, and automated payroll
                                    </li>
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp;
                                        Finance & Accounting: Invoicing, budgeting, tax reports
                                    </li>
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp;
                                        Inventory: Real-time stock management and supplier tracking
                                    </li>
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp;
                                        CRM: Customer history, sales pipeline, and engagement tracking
                                    </li>
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp;
                                        Multi-Branch Access: Unlimited locations with role-based control
                                    </li>
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp;
                                        Mobile Access: Tablet & phone-friendly UI
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-lg-12">
                                <ul class="list-unstyled">
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp;
                                        Custom Dashboards: Real-time reporting & KPI tracking
                                    </li>
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp;
                                        Branding: Your logo, colors, and custom design
                                    </li>
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp;
                                        Hosting: Cloud, VPS, or on-premise options
                                    </li>
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp;
                                        Lifetime License: One-time payment, no monthly fees
                                    </li>
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp;
                                        Unlimited Users & Branches: No restrictions
                                    </li>
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp;
                                        24/7 Support: Global team in NZ & Sri Lanka
                                    </li>
                                </ul>
                            </div>
                        </div>



                        <div class="btn-group mt-3 d-flex justify-content-center">
                            <a data-bs-target="#offer_modal" data-bs-toggle="modal"
                                class="th-btn blue-btn style1 th-icon th-radius fs-5 bg-black col-12 col-lg-8">Let’s
                                Let’s Build My ERP for USD 9,999 <i class="fa-regular fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-12 col-lg-5 space-extra d-flex justify-content-center">
                <div class="col-11 bg-white rounded-20 border border-2 black-border p-4 p-lg-5">
                    <span class="text-black fs-3 text-orange">Fill out the form below to claim your <span
                            class="text-orange"> USD 9,999 </span>Lifetime
                        Custom ERP Plan.
                    </span>
                    <form id="offer-form-ad">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <input type="text" class="form-control text-black" id="ef2_firstname"
                                    placeholder="Enter your Name" required>
                            </div>

                            <div class="col-12 mt-3">
                                <input type="email" class="form-control text-black" id="ef2_workEmail"
                                    placeholder="Enter your work email" required>
                            </div>

                            <div class="col-12 mt-3">
                                <input type="tel" class="form-control text-black" id="ef2_mobileNumber"
                                    placeholder="Enter your mobile number" required>
                            </div>

                            <!-- ✅ New Business Name Field -->
                            <div class="col-12 mt-3">
                                <input type="text" class="form-control text-black" id="ef2_businessName"
                                    placeholder="Enter your Business Name" required>
                            </div>

                            <div class="col-12">
                                <!-- Message -->
                                <div class="mt-3">
                                    <textarea class="form-control text-black" id="ef2_fmessage" rows="2"
                                        placeholder="Tell us what modules or processes you’d like to manage with ERP"
                                        required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-3 d-flex justify-content-center">
                            <!-- Submit Button -->
                            <div class="btn-group col-12">
                                <a class="th-btn blue-btn style1 th-icon th-radius fs-5 col-12 bg-orange" type="submit"
                                    id="ef2_thh-btn" onclick="freeConsultationEF2();">
                                    Get A Free Consultancy
                                    <i class="fa-regular fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
   


  
    <section class="overflow-hidden space-bottom mt-5 ani-c" id="testi-sec" data-track="Testimonials Section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="title-area mb-20 text-center">
                    <span class="sub-title sub-title7 text-ani-style2">Testimonials</span>
                    <h2 class="sec-title text-ani-style3">What our ERP clients say?</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0 space">
        <div class="slider-area testi-box-area">
            <div class="swiper th-slider has-shadow testiSlider3" id="testiSlide3"
                data-slider-options='{"centeredSlides":true,"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">

                    <!-- Testimonial 1 -->
                    <div class="swiper-slide">
                        <div class="testi-box th-ani">
                            <p class="box-text">Cody Zea delivered an ERP system that completely transformed how we run our operations. From managing HR to tracking inventory and generating reports, everything is now streamlined and centralized. Highly reliable and easy to use!</p>
                            <div class="box-wrapper">
                                <div class="box-profile">
                                    <div class="box-author">
                                        <img src="assets/clients/ceynap.png" alt="Avatar">
                                    </div>
                                    <div class="box-info">
                                        <h3 class="box-title">Ceynap, Auckland</h3>
                                        <span class="box-desig">Coco Coir NZ</span>
                                    </div>
                                </div>
                                <div class="box-review">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="swiper-slide">
                        <div class="testi-box th-ani">
                            <p class="box-text">Our franchise business needed a custom ERP to manage multiple branches, staff roles, and stock. Cody Zea provided a tailored solution that exceeded expectations. The system is powerful, user-friendly, and fully scalable.</p>
                            <div class="box-wrapper">
                                <div class="box-profile">
                                    <div class="box-author">
                                        <img src="assets/clients/boozebites.png" alt="Avatar">
                                    </div>
                                    <div class="box-info">
                                        <h3 class="box-title">Booze Bites, Auckland</h3>
                                        <span class="box-desig">Food & Drinks</span>
                                    </div>
                                </div>
                                <div class="box-review">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="swiper-slide">
                        <div class="testi-box th-ani">
                            <p class="box-text">We implemented Cody Zea’s ERP system to manage student records, attendance, and finance. It was custom-built to reflect our institute’s structure and is now an essential part of our operations. Brilliant support and execution!</p>
                            <div class="box-wrapper">
                                <div class="box-profile">
                                    <div class="box-author">
                                        <img src="assets/clients/pradeepasv.png" alt="Avatar">
                                    </div>
                                    <div class="box-info">
                                        <h3 class="box-title">Pradeepa Sangeeth Institute</h3>
                                        <span class="box-desig">Founder</span>
                                    </div>
                                </div>
                                <div class="box-review">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 4 -->
                    <div class="swiper-slide">
                        <div class="testi-box th-ani">
                            <p class="box-text">We needed a robust ERP to manage our growing supply chain. Cody Zea delivered a custom solution with real-time dashboards, procurement workflows, and role-based access. It's now the backbone of our operations.</p>
                            <div class="box-wrapper">
                                <div class="box-profile">
                                    <div class="box-author">
                                        <img src="assets/mini-ccw.svg" alt="Avatar">
                                    </div>
                                    <div class="box-info">
                                        <h3 class="box-title">Ceylon Coir World</h3>
                                        <span class="box-desig">Founder</span>
                                    </div>
                                </div>
                                <div class="box-review">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 5 -->
                    <div class="swiper-slide">
                        <div class="testi-box th-ani">
                            <p class="box-text">Managing our tour business used to be a challenge until Cody Zea deployed a travel-specific ERP system for us. It handles bookings, customer info, payments, and even reporting. It’s efficient, mobile-ready, and saves us hours daily.</p>
                            <div class="box-wrapper">
                                <div class="box-profile">
                                    <div class="box-author">
                                        <img src="assets/cl-mini.svg" alt="Avatar">
                                    </div>
                                    <div class="box-info">
                                        <h3 class="box-title">Cheers Travels</h3>
                                        <span class="box-desig">Founder</span>
                                    </div>
                                </div>
                                <div class="box-review">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slider-pagination"></div>
                <button data-slider-prev="#testiSlide3" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                <button data-slider-next="#testiSlide3" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
            </div>
        </div>
</section>

   

    <div class="container mb-3" data-track="Contact Form Section" id="form">
        <div class="row">
            <div class="col-12 col-lg-6 mt-2">
                <img src="assets/contact-hero.png" class="img-fluid d-none d-lg-flex" alt="ContactUsFormCover">
            </div>
            <div class="col-12 col-lg-6 mt-2">
                <div class="col-12 bg-white rounded-20 border border-2 black-border p-2 p-lg-5">
                    <span class="text-black display-6 text-orange">Get a Quotation?
                    </span>
                    <div class="col-12">
                        <span class="display-5 text-black">Send us Your Requests
                        </span>
                    </div>
                    <form id="contact-form">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                                <input type="text" class="form-control text-black" id="last_fname">
                            </div>
                            <div class="col-12 mt-3">
                                <label for="exampleFormControlInput1" class="form-label">Email Address</label>
                                <input type="email" class="form-control text-black" id="last_fmail">
                            </div>
                            <div class="col-12">
                                <!-- Message -->
                                <div class="mt-3">
                                    <label for="message" class="form-label">Project Requirements</label>
                                    <textarea class="form-control text-black" id="last_fmessage" rows="2"
                                        placeholder="Any details or special requests?" required></textarea>
                                </div>
                            </div>
                            <style>
                                .features- {
                                    border: 2px solid #000;
                                    margin-right: 10px;
                                    margin-top: 10px;
                                    border-radius: 30px;
                                    cursor: pointer;
                                    color: #000;
                                    transition: all 0.3s ease;
                                }

                                .features-.active {
                                    background-color: #000;
                                    color: #fff;
                                }
                            </style>
                            <div class="col-12 mt-3">
                                <div class="">
                                    <span class="form-label text-dark">Select a Service Type</span>
                                </div>
                                <div class="row d-flex justify-content-center mt-1 px-3">
                                    <div class="col-auto features-" onclick="changeFeature(1)" id="cf_1">Custom Web
                                        development</div>
                                    <div class="col-auto features-" onclick="changeFeature(2)" id="cf_2">E commerce web
                                        development</div>
                                    <div class="col-auto features-" onclick="changeFeature(3)" id="cf_3">Digital
                                        Marketing</div>
                                    <div class="col-auto features-" onclick="changeFeature(4)" id="cf_4">Branding</div>
                                    <div class="col-auto features-" onclick="changeFeature(5)" id="cf_5">App development
                                    </div>
                                    <div class="col-auto features- active" onclick="changeFeature(6)" id="cf_6">Other
                                        Digital Services</div>
                                </div>
                            </div>

                            <div class="col-12 text-center mt-3">
                                <p class="text-o h6 fw-normal">Get your quotation <span class="text-orange">within 24
                                        hours</span> — fast and easy!</p>
                            </div>
                        </div>

                        <div class="col-12 mt-3 d-flex justify-content-center">
                            <!-- Submit Button -->
                            <div class="btn-group col-10 text-center">
                                <a class="th-btn blue-btn style1 th-icon th-radius fs-5 col-12 bg-black"
                                    id="last_thh-btn" onclick="sendMessage_2();">Get a Quotation
                                    <i class="fa-regular fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" data-track="Get a Free Cosultancy Modal Loaded" style="z-index: 1000;" id="gfc"
        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content rounded-0 border-0">

                <div class="modal-body m-0 p-0">
                    <div class="row m-0 p-0">

                        <div class="col-12 p-4">
                            <div class="col-12 d-flex justify-content-end" data-bs-dismiss="modal">
                                <i class="fa-light fa-xmark-large fs-4 text-black" style="cursor: pointer;"></i>
                            </div>
                            <span class="text-black fs-3 text-orange">Let’s Discuss Your Project — Free of
                                Charge</span><br /><span class="text-orange fs-5">Schedule a call and get expert
                                insights tailored to your business. I'll contact you within 24 hours.


                            </span>

                            <form id="offer-form-ad">
                                <div class="row">
                                    <div class="col-12 mt-3">
                                        <input type="text" class="form-control text-black" id="c_firstname"
                                            placeholder="Enter your Name" required>
                                    </div>

                                    <div class="col-12 mt-3">
                                        <input type="email" class="form-control text-black" id="c_workEmail"
                                            placeholder="Enter your work email" required>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <input type="text" class="form-control text-black" id="c_mobileNumber"
                                            placeholder="Enter your mobile number" required>
                                    </div>
                                    <div class="col-12">
                                        <!-- Message -->
                                        <div class="mt-3">
                                            <textarea class="form-control text-black" id="c_fmessage" rows="2"
                                                placeholder="To help us understand better,enter a brief description about your project"
                                                required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-3 d-flex justify-content-center">
                                    <!-- Submit Button -->
                                    <div class="btn-group col-12">
                                        <a class="th-btn blue-btn style1 th-icon th-radius fs-5 col-12 bg-orange"
                                            type="submit" id="c_thh-btn" onclick="freeConsultation();">Get A Free
                                            Consultancy


                                            <i class="fa-regular fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" data-track="NZD 399 Offer Filling Modal Loaded" style="z-index: 1000;" id="offer_modal"
        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content rounded-0 border-0">

                <div class="modal-body m-0 p-0">
                    <div class="row m-0 p-0">

                        <div class="col-12 p-4">
                            <div class="col-12 d-flex justify-content-end" data-bs-dismiss="modal">
                                <i class="fa-light fa-xmark-large fs-4 text-black" style="cursor: pointer;"></i>
                            </div>
                            <span class="text-black fs-3 text-orange">Exclusive Offer: Business Website for <span
                                    class="text-orange">NZD 399</span></span><br /><span class="text-black fs-5">Limited
                                Availability — Only 13 Coupons Left to Claim This Special Price.


                            </span>

                            <form id="offer-form-ad">
                                <div class="row">
                                    <div class="col-12 mt-3">
                                        <input type="text" class="form-control text-black" id="ef1_firstname"
                                            placeholder="Enter your Name" required>
                                    </div>

                                    <div class="col-12 mt-3">
                                        <input type="email" class="form-control text-black" id="ef1_workEmail"
                                            placeholder="Enter your work email" required>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <input type="tel" class="form-control text-black" id="ef1_mobileNumber"
                                            placeholder="Enter your mobile number" required>
                                    </div>
                                    <div class="col-12">
                                        <!-- Message -->
                                        <div class="mt-3">
                                            <textarea class="form-control text-black" id="ef1_fmessage" rows="2"
                                                placeholder="To help us understand better,enter a brief description about your project"
                                                required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-3 d-flex justify-content-center">
                                    <!-- Submit Button -->
                                    <div class="btn-group col-12">
                                        <a class="th-btn blue-btn style1 th-icon th-radius fs-5 col-12 bg-orange"
                                            type="submit" id="ef1_thh-btn" onclick="freeConsultationEF1();">Submit

                                            <i class="fa-regular fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <?php require_once "footer.php"; ?>


    <script>
        let selectedFeature = "Other Digital Services";

        function changeFeature(id) {
            for (let x = 1; x <= 6; x++) {
                const feature = document.getElementById('cf_' + x);
                feature.classList.remove('active');
            }
            const active = document.getElementById('cf_' + id);
            active.classList.add('active');
            selectedFeature = active.innerText;
        }
    </script>

    <!--============================== All Js File ============================== -->

    <script src="forms.js"></script>
    <script src="assets/js/pricing.js"></script>
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
    <script>
        function sendMessage_2() {
            // Get form values
            const fullName = document.getElementById('last_fname').value;
            const email = document.getElementById('last_fmail').value;
            const message = document.getElementById('last_fmessage').value;

            // Validate required fields (basic validation)
            if (!fullName || !email || !message) {
                Swal.fire('Error', 'All fields are required!', 'error');
                return;
            }

            const msg = selectedFeature + ' || ' + message;

            // Prepare form data to send
            var formData = new FormData();
            formData.append('fullName', fullName);
            formData.append('email', email);
            formData.append('message', msg);

            // Get button element
            var submitButton = document.getElementById('last_thh-btn');

            // Change button text to show spinner
            submitButton.innerHTML = '<div class="spinner-border text-light" role="status"><span class="visually-hidden"></span></div>';

            // Create a new XMLHttpRequest object
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'sendmessage.php', true);

            // Handle response
            xhr.onload = function () {
                if (xhr.status === 200) {
                    // If everything is OK
                    var responseT = xhr.responseText;
                    if (responseT === 'success') {
                        Swal.fire({
                            title: 'Success',
                            text: 'Your request has been submitted!',
                            icon: 'success',
                            confirmButtonText: 'Great'
                        });
                        document.getElementById("contact-form").reset();

                    } else {
                        Swal.fire(responseT);
                    }

                    // Reset the button text to original
                    submitButton.innerHTML = 'Get in Touch<i class="fa-regular fa-arrow-right ms-2"></i>';
                } else {
                    // Handle server error
                    Swal.fire('Error', 'Something went wrong. Please try again later.', 'error');

                    // Reset the button text to original
                    submitButton.innerHTML = 'Get in Touch<i class="fa-regular fa-arrow-right ms-2"></i>';
                }
            };

            // Send the request with form data
            xhr.send(formData);
        }

        function freeConsultation() {
            // Get form values
            var fullName = document.getElementById('c_firstname').value;
            var email = document.getElementById('c_workEmail').value;
            var phone = document.getElementById('c_mobileNumber').value;
            var message = document.getElementById('c_fmessage').value;

            // Validate required fields (basic validation)
            if (!fullName || !email || !phone || !message) {
                Swal.fire('Error', 'All fields are required!', 'error');
                return;
            }

            // Prepare form data to send
            var formData = new FormData();
            formData.append('fullName', fullName);
            formData.append('email', email);
            formData.append('phone', phone);
            formData.append('message', message);

            // Get button element
            var submitButton = document.getElementById('c_thh-btn');

            // Change button text to show spinner
            submitButton.innerHTML = '<div class="spinner-border text-light" role="status"><span class="visually-hidden"></span></div>';

            // Create a new XMLHttpRequest object
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'free_consultation.php', true);

            // Handle response
            xhr.onload = function () {
                if (xhr.status === 200) {
                    var responseT = xhr.responseText;
                    if (responseT === 'success') {
                        Swal.fire({
                            title: 'Success',
                            text: 'Your request has been submitted!',
                            icon: 'success',
                            confirmButtonText: 'Awesome!'
                        });
                        document.getElementById('c_firstname').value = '';
                        document.getElementById('c_workEmail').value = '';
                        document.getElementById('c_mobileNumber').value = '';
                        document.getElementById('c_fmessage').value = '';
                    } else {
                        Swal.fire('Error', responseT, 'error');
                    }

                    // Reset button text
                    submitButton.innerHTML = 'Get A Free Consultancy <i class="fa-regular fa-arrow-right ms-2"></i>';
                } else {
                    Swal.fire('Error', 'Something went wrong. Please try again later.', 'error');
                    submitButton.innerHTML = 'Get A Free Consultancy <i class="fa-regular fa-arrow-right ms-2"></i>';
                }
            };

            // Send the request with form data
            xhr.send(formData);
        }

        function freeConsultationEF1() {
            // Get form values from ef1_*
            var fullName = document.getElementById('ef1_firstname').value.trim();
            var email = document.getElementById('ef1_workEmail').value.trim();
            var phone = document.getElementById('ef1_mobileNumber').value.trim();
            var message = document.getElementById('ef1_fmessage').value.trim();

            // Validate required fields
            if (!fullName || !email || !phone || !message) {
                Swal.fire('Error', 'All fields are required!', 'error');
                return;
            }

            // Prepare form data
            var formData = new FormData();
            formData.append('fullName', fullName);
            formData.append('email', email);
            formData.append('phone', phone);
            formData.append('message', message);

            // Get button
            var submitButton = document.getElementById('ef1_thh-btn');
            submitButton.innerHTML = '<div class="spinner-border text-light" role="status"><span class="visually-hidden"></span></div>';

            // Send AJAX
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'free_consultation_2.php', true);
            xhr.onload = function () {
                if (xhr.status === 200) {
                    var response = xhr.responseText;
                    if (response === 'success') {
                        Swal.fire({
                            title: 'Success',
                            text: 'Your request has been submitted!',
                            icon: 'success',
                            confirmButtonText: 'Ok, I got it'
                        });

                        document.getElementById('ef1_firstname').value = '';
                        document.getElementById('ef1_workEmail').value = '';
                        document.getElementById('ef1_mobileNumber').value = '';
                        document.getElementById('ef1_fmessage').value = '';
                    } else {
                        Swal.fire('Error', response, 'error');
                    }
                } else {
                    Swal.fire('Error', 'Something went wrong. Please try again later.', 'error');
                }

                // Reset button text
                submitButton.innerHTML = 'Submit <i class="fa-regular fa-arrow-right ms-2"></i>';
            };
            xhr.send(formData);
        }

        function sendMessage() {
            // Get form values
            const fullName = document.getElementById('fname').value;
            const email = document.getElementById('fmail').value;
            const message = document.getElementById('fmessage').value;

            // Validate required fields (basic validation)
            if (!fullName || !email || !message) {
                Swal.fire('Error', 'All fields are required!', 'error');
                return;
            }

            const msg = selectedFeature + ' || ' + message;

            // Prepare form data to send
            var formData = new FormData();
            formData.append('fullName', fullName);
            formData.append('email', email);
            formData.append('message', msg);

            // Get button element
            var submitButton = document.getElementById('thh-btn');

            // Change button text to show spinner
            submitButton.innerHTML = '<div class="spinner-border text-light" role="status"><span class="visually-hidden"></span></div>';

            // Create a new XMLHttpRequest object
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'sendmessage.php', true);

            // Handle response
            xhr.onload = function () {
                if (xhr.status === 200) {
                    // If everything is OK
                    var responseT = xhr.responseText;
                    if (responseT === 'success') {
                        Swal.fire({
                            title: 'Success',
                            text: 'Your request has been submitted!',
                            icon: 'success',
                            confirmButtonText: 'Done'
                        });
                        document.getElementById("contact-form").reset();

                    } else {
                        Swal.fire(responseT);
                    }

                    // Reset the button text to original
                    submitButton.innerHTML = 'Get in Touch<i class="fa-regular fa-arrow-right ms-2"></i>';
                } else {
                    // Handle server error
                    Swal.fire('Error', 'Something went wrong. Please try again later.', 'error');

                    // Reset the button text to original
                    submitButton.innerHTML = 'Get in Touch<i class="fa-regular fa-arrow-right ms-2"></i>';
                }
            };

            // Send the request with form data
            xhr.send(formData);
        }

        function freeConsultationEF2() {
            // Get form values from ef1_*
            var fullName = document.getElementById('ef2_firstname').value.trim();
            var email = document.getElementById('ef2_workEmail').value.trim();
            var phone = document.getElementById('ef2_mobileNumber').value.trim();
            var message = document.getElementById('ef2_fmessage').value.trim();

            // Validate required fields
            if (!fullName || !email || !phone || !message) {
                Swal.fire('Error', 'All fields are required!', 'error');
                return;
            }

            // Prepare form data
            var formData = new FormData();
            formData.append('fullName', fullName);
            formData.append('email', email);
            formData.append('phone', phone);
            formData.append('message', message);

            // Get button
            var submitButton = document.getElementById('ef2_thh-btn');
            submitButton.innerHTML = '<div class="spinner-border text-light" role="status"><span class="visually-hidden"></span></div>';

            // Send AJAX
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'free_consultation_3.php', true);
            xhr.onload = function () {
                if (xhr.status === 200) {
                    var response = xhr.responseText;
                    if (response === 'success') {
                        Swal.fire({
                            title: 'Success',
                            text: 'Your request has been submitted!',
                            icon: 'success',
                            confirmButtonText: 'Close Now'
                        });

                        document.getElementById('ef2_firstname').value = '';
                        document.getElementById('ef2_workEmail').value = '';
                        document.getElementById('ef2_mobileNumber').value = '';
                        document.getElementById('ef2_fmessage').value = '';
                    } else {
                        Swal.fire('Error', response, 'error');
                    }
                } else {
                    Swal.fire('Error', 'Something went wrong. Please try again later.', 'error');
                }

                // Reset button text
                submitButton.innerHTML = 'Submit <i class="fa-regular fa-arrow-right ms-2"></i>';
            };
            xhr.send(formData);
        }



        (function () {
            const endpoint = "https://codyzea.co.nz/track-visit.php"; // Update with your server URL
            let userLocation = {}; // Store user location details

            // Fetch user IP, city, and country
            fetch("https://ipapi.co/json/")
                .then(response => response.json())
                .then(data => {
                    userLocation = {
                        ip: data.ip,
                        country: data.country_name,
                        city: data.city
                    };
                })
                .catch(error => console.error("Location fetch error:", error));

            function sendVisitData(action, extraData = {}) {
                const visitData = {
                    action: action,
                    timestamp: new Date().toISOString(),
                    url: window.location.href,
                    userAgent: navigator.userAgent,
                    ip: userLocation.ip || "Unknown",
                    country: userLocation.country || "Unknown",
                    city: userLocation.city || "Unknown",
                    ...extraData
                };

                navigator.sendBeacon(endpoint, JSON.stringify(visitData));
            }

            // Track tab changes
            document.addEventListener("visibilitychange", function () {
                if (document.visibilityState === "visible") {
                    sendVisitData("User returned to tab");
                } else {
                    sendVisitData("User left the tab");
                }
            });

            // Track scroll depth
            let lastScroll = 0;

            function trackScroll() {
                const scrollTop = window.scrollY;
                const windowHeight = window.innerHeight;
                const documentHeight = document.documentElement.scrollHeight;
                const scrollPercentage = Math.round((scrollTop / (documentHeight - windowHeight)) * 100);

                if (Math.abs(scrollPercentage - lastScroll) >= 10) { // Log every 10% scroll change
                    sendVisitData("User scrolled", {
                        scrollPercentage: scrollPercentage
                    });
                    lastScroll = scrollPercentage;
                }
            }

            // Track when user enters specific sections
            function trackSectionVisibility() {
                document.querySelectorAll("[data-track]").forEach(section => {
                    const rect = section.getBoundingClientRect();
                    if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
                        sendVisitData("User viewed section", {
                            section: section.getAttribute("data-track")
                        });
                    }
                });
            }

            // Track button clicks
            function trackButtonClicks() {
                document.querySelectorAll("[data-track-button]").forEach(button => {
                    button.addEventListener("click", function () {
                        sendVisitData("User clicked button", {
                            button: button.getAttribute("data-track-button")
                        });
                    });
                });
            }

            // Initialize event listeners
            window.addEventListener("scroll", function () {
                trackScroll();
                trackSectionVisibility();
            });

            document.addEventListener("DOMContentLoaded", trackButtonClicks);

        })();
    </script>

</body>

</html>