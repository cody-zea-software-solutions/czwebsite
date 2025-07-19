<?php
require_once "assets/process/database.php";

// Capture the 'utm_term' parameter from the URL
$keyword = isset($_GET['utm_term']) ? $_GET['utm_term'] : 'default keyword';

// Default headline
$headline = "Run Your Business Smarter with Cody Zea POS";

// Change the headline based on the keyword
if ($keyword == "pos") {
    $headline = "Simple, Smart POS for NZ Businesses!";
} elseif ($keyword == "pos software") {
    $headline = "All-in-One POS Software for Retail, Salons & Cafés!";
} elseif ($keyword == "pos system") {
    $headline = "Modern POS System – Just NZ$240/mo!";
} elseif ($keyword == "retail pos") {
    $headline = "Retail POS That Tracks Sales & Stock Instantly!";
} elseif ($keyword == "point of sale") {
    $headline = "Point of Sale System That Works Online & Offline!";
} elseif ($keyword == "point of sales") {
    $headline = "Fast, Easy Point of Sales Solution for NZ Shops!";
} elseif ($keyword == "pos point of sale system") {
    $headline = "POS + Point of Sale in One – Powerful & Easy!";
} elseif ($keyword == "salon pos system") {
    $headline = "POS System Built for Salons & Spa Businesses!";
} elseif ($keyword == "cafe pos system") {
    $headline = "Serve Fast with Café POS Built for NZ Hospitality!";
} elseif ($keyword == "mobile pos") {
    $headline = "Mobile-Friendly POS for On-the-Go Sales!";
} elseif ($keyword == "cloud pos system") {
    $headline = "Cloud POS System with Offline Capability!";
} elseif ($keyword == "multi branch pos") {
    $headline = "POS for Multi-Branch Retail & Franchise Stores!";
} elseif ($keyword == "small business pos") {
    $headline = "POS for Small NZ Businesses – No Setup Fee!";
} else {
    // Default fallback headline
    $headline = "Run Your Business Smarter with Cody Zea POS";
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
        content="Looking for a POS system in New Zealand? Cody Zea offers smart, affordable POS software for retail, salons, cafés, and more. Try it today — just NZ$240/month.">
    <meta name="keywords"
        content="POS System NZ, Point of Sale Software, Retail POS New Zealand, Salon POS, POS for Café, Cloud POS System, POS Software NZ, Cody Zea POS, Inventory Management POS, Small Business POS NZ">
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
                    <span class="fs-5 fw-medium text-orange">Let’s Build the Right POS for Your Business — with Cody Zea



                    </span>
                    <p class="display-4 fw-semibold text-black"><?php echo $headline ?>
                    </p>
                    <p class="text-black fs-4 font-landing fw-semibold">
                        Cody Zea delivers modern POS systems that simplify sales, manage stock, and boost customer
                        loyalty—without bloat, contracts, or hidden fees.




                    </p>

                    <ul class="list-unstyled">
                        <li class="text-black fs-5"><i class="fa-solid fa-circle-check text-success"></i>&nbsp;
                            Tailored POS for Retail, Salon, Café & Grocery Stores</li>
                        <li class="text-black fs-5"><i class="fa-solid fa-circle-check text-success"></i>&nbsp;
                            Works Online & Offline – Fast, Reliable Checkout</li>
                        <li class="text-black fs-5"><i class="fa-solid fa-circle-check text-success"></i>&nbsp;
                            Barcode, Inventory, Loyalty & Staff Management</li>
                        <li class="text-black fs-5"><i class="fa-solid fa-circle-check text-success"></i>&nbsp;
                            Made for NZ Businesses – Quick Setup & Local Support</li>
                    </ul>
                    <div class="btn-group">
                        <a href="contact.php" data-bs-target="#gfc" data-bs-toggle="modal"
                            class="th-btn blue-btn style1 th-icon th-radius fs-5">
                            Get a Free Demo<i class="fa-regular fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5 space-extra d-flex justify-content-center">
                <div class="col-11 bg-white rounded-20 border border-2 black-border p-4 p-lg-5">
                    <span class="text-black fs-3 text-orange">
                        Fill out the form below to try our
                        <span class="text-orange">Free POS System Demo</span> — No Setup Cost!
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

                            <div class="col-12 mt-3">
                                <input type="text" class="form-control text-black" id="ef2_businessName"
                                    placeholder="Enter your Business Name" required>
                            </div>

                            <div class="col-12">
                                <div class="mt-3">
                                    <textarea class="form-control text-black" id="ef2_fmessage" rows="2"
                                        placeholder="What type of business do you run? (Retail, Salon, Café, etc.)"
                                        required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-3 d-flex justify-content-center">
                            <div class="btn-group col-12">
                                <a class="th-btn blue-btn style1 th-icon th-radius fs-5 col-12 bg-orange" type="submit"
                                    id="ef2_thh-btn" onclick="freeConsultationEF2();">
                                    Try the Free POS Demo
                                    <i class="fa-regular fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <span class="text-black display-5">
                The <span class="text-orange">Modern Look & Feel</span> of Cody Zea POS
            </span>
            <p class="fw-bold text-black fs-4 font-landing">
                Discover how our clean interface, real-time tools, and intuitive design deliver a seamless experience
                for NZ retailers, salons, cafés, and more.
            </p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6">
                <img src="assets/login-mokup.png" class="img-fluid rounded-20 w-100" alt="Cody Zea POS Login">
            </div>
            <div class="col-12 col-lg-6">
                <img src="assets/POS-DASHBOARD.png" class="img-fluid rounded-20 w-100" alt="Cody Zea POS Login">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <img src="assets/billing.png" class="img-fluid rounded-20 w-100" alt="Cody Zea POS Login">
            </div>
            <div class="col-12 col-lg-6">
                <img src="assets/settings-page.png" class="img-fluid rounded-20 w-100" alt="Cody Zea POS Login">
            </div>
        </div>
    </div>
    <!--Why Choose Us Section-->
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12 text-center">
                <span class="text-black display-5">Why Choose <span class="text-orange">Cody Zea POS Over Generic POS
                        Systems?</span>
                </span>
                <p class="text-black font-landing fs-4 fw-bold">
                    Off-the-shelf POS systems slow you down. Cody Zea POS is custom-fit to your business, built for
                    speed, ease, and growth — especially for New Zealand retailers, salons, and cafés.
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row d-flex justify-content-center">
            <!-- Left Column - Generic POS -->
            <div class="col-11 col-lg-5 p-3 p-lg-5 bg-color rounded-20 mt-3 mx-3">
                <span class="text-black fs-4">If you choose a generic POS system:</span>
                <div class="col-12 d-flex justify-content-center p-2 p-lg-4">
                    <img src="assets/confused.png" class="img-fluid text-center w-50" alt="confusedperson">
                </div>
                <div class="col-12">
                    <div class="col-12 mt-2">
                        <span class="text-black fs-4">
                            <i class="fa-solid fa-circle-xmark text-danger"></i> Features you'll never use clutter the
                            screen
                        </span>
                    </div>
                    <hr class="text-black">

                    <div class="col-12 mt-2">
                        <span class="text-black fs-4">
                            <i class="fa-solid fa-circle-xmark text-danger"></i> Monthly fees + per-user pricing add up
                            fast
                        </span>
                    </div>
                    <hr class="text-black">

                    <div class="col-12 mt-2">
                        <span class="text-black fs-4">
                            <i class="fa-solid fa-circle-xmark text-danger"></i> Difficult to set up multiple locations
                        </span>
                    </div>
                    <hr class="text-black">

                    <div class="col-12 mt-2">
                        <span class="text-black fs-4">
                            <i class="fa-solid fa-circle-xmark text-danger"></i> Outdated interface confuses staff
                        </span>
                    </div>
                    <hr class="text-black">

                    <div class="col-12 mt-2">
                        <span class="text-black fs-4">
                            <i class="fa-solid fa-circle-xmark text-danger"></i> Overseas support with long wait times
                        </span>
                    </div>
                    <hr class="text-black">

                    <div class="col-12 mt-2">
                        <span class="text-black fs-4">
                            <i class="fa-solid fa-circle-xmark text-danger"></i> Limited flexibility for NZ-specific
                            needs
                        </span>
                    </div>
                </div>
            </div>

            <!-- Right Column - Cody Zea POS -->
            <div class="col-11 col-lg-5 p-3 p-lg-5 bg-color rounded-20 mt-3 mx-3">
                <span class="text-black fs-4">If you choose Cody Zea POS:</span>
                <div class="col-12 d-flex justify-content-center">
                    <img src="assets/handshake.png" class="img-fluid text-center w-50 p-2 p-lg-4" alt="handshake">
                </div>
                <div class="col-12">
                    <div class="col-12 mt-2">
                        <span class="text-black fs-4">
                            <i class="fa-solid fa-circle-check text-success"></i> Only the features you need — simple &
                            fast
                        </span>
                    </div>
                    <hr class="text-black">

                    <div class="col-12 mt-2">
                        <span class="text-black fs-4">
                            <i class="fa-solid fa-circle-check text-success"></i> No per-user fees — transparent pricing
                        </span>
                    </div>
                    <hr class="text-black">

                    <div class="col-12 mt-2">
                        <span class="text-black fs-4">
                            <i class="fa-solid fa-circle-check text-success"></i> Multi-location support out of the box
                        </span>
                    </div>
                    <hr class="text-black">

                    <div class="col-12 mt-2">
                        <span class="text-black fs-4">
                            <i class="fa-solid fa-circle-check text-success"></i> Clean, intuitive UI your staff will
                            love
                        </span>
                    </div>
                    <hr class="text-black">

                    <div class="col-12 mt-2">
                        <span class="text-black fs-4">
                            <i class="fa-solid fa-circle-check text-success"></i> Real-time support from our NZ team
                        </span>
                    </div>
                    <hr class="text-black">

                    <div class="col-12 mt-2">
                        <span class="text-black fs-4">
                            <i class="fa-solid fa-circle-check text-success"></i> Custom setup to match how your
                            business runs
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Why Choose Us Section-->
    <!--POS Mockup Section-->
    <!-- POS Dashboard Feature -->


    <!--POS Mockup Section-->


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
    <div class="container-fluid px-5 mb-5 pt-5" style="margin-top: -200px !important;">
        <div class="row text-center d-flex justify-content-center mb-5 mt-5">
            <!-- MAM Core System -->
            <div class="col-10 col-lg-3 bg-white rounded-20 shadow-lg p-5 mt-3 mx-3">
                <img src="assets/cody/set-up-svgrepo-com.svg" class="img-fluid w-25" alt="MAM Core">
                <div class="col-12 mt-3">
                    <span class="fs-2 text-black fw-semibold">Unlimited Branches & Users</span>
                    <p class="text-o fw-normal fs-5"></p>
                </div>
            </div>

            <!-- Timeline Editor -->
            <div class="col-10 col-lg-3 bg-white rounded-20 shadow-lg p-5 mt-3 mx-3">
                <img src="assets/cody/timeline-svgrepo-com.svg" class="img-fluid w-25" alt="Timeline Editor">
                <div class="col-12 mt-3">
                    <span class="fs-2 text-black fw-semibold">Offline Billing Mode</span>
                    <p class="text-o fw-normal fs-5"></p>
                </div>
            </div>

            <!-- Publishing Hub -->
            <div class="col-10 col-lg-3 bg-white rounded-20 shadow-lg p-5 mt-3 mx-3">
                <img src="assets/cody/ai-hub-svgrepo-com.svg" class="img-fluid w-25" alt="Publishing Hub">
                <div class="col-12 mt-3">
                    <span class="fs-2 text-black fw-semibold">Cloud Sync or Local Hosting</span>
                    <p class="text-o fw-normal fs-5"></p>
                </div>
            </div>

            <!-- Metadata & Cultural Tagging -->
            <div class="col-10 col-lg-3 bg-white rounded-20 shadow-lg p-5 mt-3 mx-3">
                <img src="assets/cody/tag-label-svgrepo-com.svg" class="img-fluid w-25" alt="Metadata Tagging">
                <div class="col-12 mt-3">
                    <span class="fs-2 text-black fw-semibold">Easy Integration with Xero</span>
                    <p class="text-o fw-normal fs-5"></p>
                </div>
            </div>

            <!-- AI Insights Toolkit -->
            <div class="col-10 col-lg-3 bg-white rounded-20 shadow-lg p-5 mt-3 mx-3">
                <img src="assets/cody/chip-ai-svgrepo-com.svg" class="img-fluid w-25" alt="AI Toolkit">
                <div class="col-12 mt-3">
                    <span class="fs-2 text-black fw-semibold">Local Support (NZ & SL)</span>
                    <p class="text-o fw-normal fs-5"></p>
                </div>
            </div>

            <!-- Archive & Storage -->
            <div class="col-10 col-lg-3 bg-white rounded-20 shadow-lg p-5 mt-3 mx-3">
                <img src="assets/cody/cloud-backup-svgrepo-com.svg" class="img-fluid w-25" alt="Archive Storage">
                <div class="col-12 mt-3">
                    <span class="fs-2 text-black fw-semibold">Grow Your Business with No Limitations</span>
                    <p class="text-o fw-normal fs-5"></p>
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
                        <span class="fs-3 fw-medium text-black">Special Launch Offer – NZ Customers Only</span>
                        <p class="display-6 fw-semibold text-white">
                            Cody Zea POS – Just NZ$240/month <br /> 1 Branch, 3 Users Included
                        </p>
                        <p class="text-black fs-5">
                            Perfect for salons, cafés, groceries, and retail stores across New Zealand. No setup fees.
                            Cancel anytime.
                        </p>

                        <div class="row bg-white rounded-20 p-2">
                            <span class="fs-4 text-black fw-bold">Included Features:</span>
                            <br>
                            <div class="col-12 col-lg-12">
                                <ul class="list-unstyled">
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp;
                                        Cloud-Based POS with Offline Mode</li>
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp;
                                        Sales & Inventory Management</li>
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp;
                                        Barcode Scanning & Receipt Printing</li>
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp;
                                        Loyalty Points & Customer Profiles</li>
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp;
                                        Role-Based Staff Access (Admin / Cashier)</li>
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp;
                                        Mobile & Desktop Friendly Interface</li>
                                </ul>
                            </div>
                            <div class="col-12 col-lg-12">
                                <ul class="list-unstyled">
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp;
                                        Real-Time Dashboard & Reports</li>
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp;
                                        Multi-Branch Support (Expandable)</li>
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp;
                                        NZ Tax (GST) & EFTPOS Integration Ready</li>
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp;
                                        Custom Branding & Theming</li>
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp;
                                        Secure Login with OTP Verification</li>
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp;
                                        Dedicated NZ & LK Support Team – 24/7</li>
                                </ul>
                            </div>
                        </div>

                        <div class="btn-group mt-3 d-flex justify-content-center">
                            <a data-bs-target="#offer_modal" data-bs-toggle="modal"
                                class="th-btn blue-btn style1 th-icon th-radius fs-5 bg-black col-12 col-lg-8">
                                Start My POS Subscription for NZ$240/month
                                <i class="fa-regular fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Section -->
            <div class="col-12 col-lg-5 space-extra d-flex justify-content-center">
                <div class="col-11 bg-white rounded-20 border border-2 black-border p-4 p-lg-5">
                    <span class="text-black fs-3 text-orange">
                        Fill out the form below to activate your <span class="text-orange">NZ$240/month</span> Cody Zea
                        POS Plan
                    </span>

                    <form id="form1">
                        <div class="row">
                            <!-- Name -->
                            <div class="col-12 mt-3">
                                <input type="text" class="form-control text-black" id="form1_name"
                                    placeholder="Enter your Name" required>
                            </div>

                            <!-- Email -->
                            <div class="col-12 mt-3">
                                <input type="email" class="form-control text-black" id="form1_email"
                                    placeholder="Enter your work email" required>
                            </div>

                            <!-- Phone -->
                            <div class="col-12 mt-3">
                                <input type="tel" class="form-control text-black" id="form1_phone"
                                    placeholder="Enter your mobile number" required>
                            </div>

                            <!-- Business Name -->
                            <div class="col-12 mt-3">
                                <input type="text" class="form-control text-black" id="form1_bn"
                                    placeholder="Enter your Business Name" required>
                            </div>

                            <!-- Message -->
                            <div class="col-12 mt-3">
                                <textarea class="form-control text-black" id="form1_message" rows="2"
                                    placeholder="Type of business? (Retail, Salon, Café, etc.)" required></textarea>
                            </div>

                            <!-- Submit -->
                            <div class="col-12 mt-3 d-flex justify-content-center">
                                <button type="button"
                                    class="th-btn blue-btn style1 th-icon th-radius fs-5 col-12 bg-orange"
                                    id="form1_btn" onclick="submitForm1();">
                                    Request My POS Offer

                                    <i class="fa-regular fa-arrow-right ms-2"></i>
                                </button>
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
                        <h2 class="sec-title text-ani-style3">What our POS clients say?</h2>
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
                                <p class="box-text">We use Cody Zea POS across our retail operation and it has
                                    completely changed the way we work. The interface is smooth, inventory tracking is
                                    precise, and the reporting tools are invaluable. Highly recommended for NZ
                                    businesses!</p>
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
                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="swiper-slide">
                            <div class="testi-box th-ani">
                                <p class="box-text">As a growing franchise, we needed a POS system that could support
                                    multiple stores and staff levels. Cody Zea POS gave us everything — loyalty, stock
                                    control, and smooth billing — with amazing local support.</p>
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
                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="swiper-slide">
                            <div class="testi-box th-ani">
                                <p class="box-text">Cody Zea POS helped us modernize our front desk and student fee
                                    processing. It’s simple for staff to use and allows real-time tracking from any
                                    device. The design is clean and perfect for our institute environment.</p>
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
                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 4 -->
                        <div class="swiper-slide">
                            <div class="testi-box th-ani">
                                <p class="box-text">The POS solution by Cody Zea has streamlined every checkout and
                                    transaction. From real-time sales to staff control, it handles our daily workload
                                    with speed and accuracy. Great fit for our supply chain outlet!</p>
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
                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 5 -->
                        <div class="swiper-slide">
                            <div class="testi-box th-ani">
                                <p class="box-text">We switched to Cody Zea POS for our tour front desk, and it's been
                                    amazing. Booking entries, receipts, customer records — all in one system. The UI is
                                    modern, mobile-ready, and perfect for fast-paced travel businesses.</p>
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
                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="slider-pagination"></div>
                    <button data-slider-prev="#testiSlide3" class="slider-arrow slider-prev"><i
                            class="far fa-arrow-left"></i></button>
                    <button data-slider-next="#testiSlide3" class="slider-arrow slider-next"><i
                            class="far fa-arrow-right"></i></button>
                </div>
            </div>
    </section>



    <div class="container mb-3" data-track="Contact Form Section" id="form">
        <div class="row">
            <div class="col-12 col-lg-6 mt-2">
                <img src="assets/contact-hero.png" class="img-fluid d-none d-lg-flex" alt="ContactUsFormCover">
            </div>
            <div class="col-12 col-lg-6 mt-2">
                <div class="col-11 bg-white rounded-20 border border-2 black-border p-4 p-lg-5">
                    <span class="text-black fs-3 text-orange">
                        Get Started with Cody Zea POS – Only <span class="text-orange">NZ$240/month</span> for 1 Branch,
                        3 Users
                    </span>

                    <form id="form4">
                        <div class="row">
                            <!-- Name -->
                            <div class="col-12 mt-3">
                                <input type="text" class="form-control text-black" id="form4_name"
                                    placeholder="Enter your Name" required>
                            </div>

                            <!-- Email -->
                            <div class="col-12 mt-3">
                                <input type="email" class="form-control text-black" id="form4_email"
                                    placeholder="Enter your work email" required>
                            </div>

                            <!-- Phone -->
                            <div class="col-12 mt-3">
                                <input type="tel" class="form-control text-black" id="form4_phone"
                                    placeholder="Enter your mobile number" required>
                            </div>

                            <!-- Business Name -->
                            <div class="col-12 mt-3">
                                <input type="text" class="form-control text-black" id="form4_bn"
                                    placeholder="Enter your Business Name" required>
                            </div>

                            <!-- Message -->
                            <div class="col-12 mt-3">
                                <textarea class="form-control text-black" id="form4_message" rows="2"
                                    placeholder="What type of business? (Retail, Salon, Café, etc.)"
                                    required></textarea>
                            </div>

                            <!-- Submit -->
                            <div class="col-12 mt-3 d-flex justify-content-center">
                                <button type="button"
                                    class="th-btn blue-btn style1 th-icon th-radius fs-5 col-12 bg-orange"
                                    id="form4_btn" onclick="submitForm4();">
                                    Request My POS Demo
                                    <i class="fa-regular fa-arrow-right ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 1 -->
    <div class="modal fade" data-track="POS Plan Modal Loaded" style="z-index: 1000;" id="gfc" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-body m-0 p-0">
                    <div class="row m-0 p-0">
                        <div class="col-12 p-4">
                            <div class="col-12 d-flex justify-content-end" data-bs-dismiss="modal">
                                <i class="fa-light fa-xmark-large fs-4 text-black" style="cursor: pointer;"></i>
                            </div>
                            <div>
                                <span class="text-black fs-3 text-orange">
                                    Claim your <span class="text-orange">NZ$240/month</span> POS Plan Today
                                </span>

                                <form id="form2">
                                    <div class="row">
                                        <div class="col-12 mt-3">
                                            <input type="text" class="form-control text-black" id="form2_name"
                                                placeholder="Enter your Name" required>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <input type="email" class="form-control text-black" id="form2_email"
                                                placeholder="Enter your work email" required>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <input type="tel" class="form-control text-black" id="form2_phone"
                                                placeholder="Enter your mobile number" required>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <input type="text" class="form-control text-black" id="form2_bn"
                                                placeholder="Enter your Business Name" required>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <textarea class="form-control text-black" id="form2_message" rows="2"
                                                placeholder="What type of business? (Retail, Salon, Café, etc.)"
                                                required></textarea>
                                        </div>
                                        <div class="col-12 mt-3 d-flex justify-content-center">
                                            <button type="button"
                                                class="th-btn blue-btn style1 th-icon th-radius fs-5 col-12 bg-orange"
                                                id="form2_btn" onclick="submitForm2();">
                                                Start My POS Plan
                                                <i class="fa-regular fa-arrow-right ms-2"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" data-track="POS Offer Modal Loaded" style="z-index: 1000;" id="offer_modal" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-body m-0 p-0">
                    <div class="row m-0 p-0">
                        <div class="col-12 p-4">
                            <div class="col-12 d-flex justify-content-end" data-bs-dismiss="modal">
                                <i class="fa-light fa-xmark-large fs-4 text-black" style="cursor: pointer;"></i>
                            </div>
                            <div>
                                <span class="text-black fs-3 text-orange">
                                    Limited Offer: <span class="text-orange">NZ$240/month</span> POS for 1 Branch, 3
                                    Users
                                </span>

                                <form id="form3">
                                    <div class="row">
                                        <div class="col-12 mt-3">
                                            <input type="text" class="form-control text-black" id="form3_name"
                                                placeholder="Enter your Name" required>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <input type="email" class="form-control text-black" id="form3_email"
                                                placeholder="Enter your work email" required>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <input type="tel" class="form-control text-black" id="form3_phone"
                                                placeholder="Enter your mobile number" required>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <input type="text" class="form-control text-black" id="form3_bn"
                                                placeholder="Enter your Business Name" required>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <textarea class="form-control text-black" id="form3_message" rows="2"
                                                placeholder="Type of business? (Retail, Salon, Grocery, etc.)"
                                                required></textarea>
                                        </div>
                                        <div class="col-12 mt-3 d-flex justify-content-center">
                                            <button type="button"
                                                class="th-btn blue-btn style1 th-icon th-radius fs-5 col-12 bg-orange"
                                                id="form3_btn" onclick="submitForm3();">
                                                Request My POS Offer
                                                <i class="fa-regular fa-arrow-right ms-2"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
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
        function submitForm1() {
            const fullName = document.getElementById('form1_name').value.trim();
            const email = document.getElementById('form1_email').value.trim();
            const phone = document.getElementById('form1_phone').value.trim();
            const bn = document.getElementById('form1_bn').value.trim();
            const message = document.getElementById('form1_message').value.trim();

            if (!fullName || !email || !phone || !bn || !message) {
                Swal.fire({
                    title: 'Error',
                    text: 'All fields are required!',
                    icon: 'error',
                    confirmButtonText: 'Close Now',
                    customClass: {
                        confirmButton: 'th-btn style4',
                        htmlContainer: 'box-text2 text-success fw-semibold mt-3'
                    }
                });
                return;
            }

            const formData = new FormData();
            formData.append('fullName', fullName);
            formData.append('email', email);
            formData.append('phone', phone);
            formData.append('bn', bn);
            formData.append('message', message);

            const submitButton = document.getElementById('form1_btn');
            submitButton.innerHTML = '<div class="spinner-border text-light" role="status"><span class="visually-hidden"></span></div>';

            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'free_consultation_4.php', true);
            xhr.onload = function () {
                if (xhr.status === 200) {
                    const response = xhr.responseText;
                    if (response === 'success') {
                        Swal.fire({
                            title: 'Success',
                            text: 'Your request has been submitted!',
                            icon: 'success',
                            confirmButtonText: 'Close Now',
                            customClass: {
                                confirmButton: 'th-btn style4',
                                htmlContainer: 'box-text2 text-success fw-semibold mt-3'
                            }
                        });

                        document.getElementById('form1').reset();
                    } else {
                        Swal.fire({
                            title: 'Error',
                            text: response,
                            icon: 'error',
                            confirmButtonText: 'Close Now',
                            customClass: {
                                confirmButton: 'th-btn style4',
                                htmlContainer: 'box-text2 text-success fw-semibold mt-3'
                            }
                        });
                    }
                } else {
                    Swal.fire({
                        title: 'Error',
                        text: 'Something went wrong. Please try again later.',
                        icon: 'error',
                        confirmButtonText: 'Close Now',
                        customClass: {
                            confirmButton: 'th-btn style4',
                            htmlContainer: 'box-text2 text-success fw-semibold mt-3'
                        }
                    });
                }

                submitButton.innerHTML = 'Get A Free Consultancy <i class="fa-regular fa-arrow-right ms-2"></i>';
            };
            xhr.send(formData);
        }

        function submitForm4() {
            const fullName = document.getElementById('form4_name').value.trim();
            const email = document.getElementById('form4_email').value.trim();
            const phone = document.getElementById('form4_phone').value.trim();
            const bn = document.getElementById('form4_bn').value.trim();
            const message = document.getElementById('form4_message').value.trim();

            if (!fullName || !email || !phone || !bn || !message) {
                Swal.fire({
                    title: 'Error',
                    text: 'All fields are required!',
                    icon: 'error',
                    confirmButtonText: 'Close Now',
                    customClass: {
                        confirmButton: 'th-btn style4',
                        htmlContainer: 'box-text2 text-success fw-semibold mt-3'
                    }
                });
                return;
            }

            const formData = new FormData();
            formData.append('fullName', fullName);
            formData.append('email', email);
            formData.append('phone', phone);
            formData.append('bn', bn);
            formData.append('message', message);

            const submitButton = document.getElementById('form4_btn');
            submitButton.innerHTML = '<div class="spinner-border text-light" role="status"><span class="visually-hidden"></span></div>';

            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'free_consultation_4.php', true);
            xhr.onload = function () {
                if (xhr.status === 200) {
                    const response = xhr.responseText;
                    if (response === 'success') {
                        Swal.fire({
                            title: 'Success',
                            text: 'Your request has been submitted!',
                            icon: 'success',
                            confirmButtonText: 'Close Now',
                            customClass: {
                                confirmButton: 'th-btn style4',
                                htmlContainer: 'box-text2 text-success fw-semibold mt-3'
                            }
                        });

                        document.getElementById('form4').reset();
                    } else {
                        Swal.fire({
                            title: 'Error',
                            text: response,
                            icon: 'error',
                            confirmButtonText: 'Close Now',
                            customClass: {
                                confirmButton: 'th-btn style4',
                                htmlContainer: 'box-text2 text-success fw-semibold mt-3'
                            }
                        });
                    }
                } else {
                    Swal.fire({
                        title: 'Error',
                        text: 'Something went wrong. Please try again later.',
                        icon: 'error',
                        confirmButtonText: 'Close Now',
                        customClass: {
                            confirmButton: 'th-btn style4',
                            htmlContainer: 'box-text2 text-success fw-semibold mt-3'
                        }
                    });
                }

                submitButton.innerHTML = 'Get A Free Consultancy <i class="fa-regular fa-arrow-right ms-2"></i>';
            };
            xhr.send(formData);
        }


        function submitForm3() {
            const fullName = document.getElementById('form3_name').value.trim();
            const email = document.getElementById('form3_email').value.trim();
            const phone = document.getElementById('form3_phone').value.trim();
            const bn = document.getElementById('form3_bn').value.trim();
            const message = document.getElementById('form3_message').value.trim();

            if (!fullName || !email || !phone || !bn || !message) {
                Swal.fire({
                    title: 'Error',
                    text: 'All fields are required!',
                    icon: 'error',
                    confirmButtonText: 'Close Now',
                    customClass: {
                        confirmButton: 'th-btn style4',
                        htmlContainer: 'box-text2 text-success fw-semibold mt-3'
                    }
                });
                return;
            }

            const formData = new FormData();
            formData.append('fullName', fullName);
            formData.append('email', email);
            formData.append('phone', phone);
            formData.append('bn', bn);
            formData.append('message', message);

            const submitButton = document.getElementById('form3_btn');
            submitButton.innerHTML = '<div class="spinner-border text-light" role="status"><span class="visually-hidden"></span></div>';

            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'free_consultation_4.php', true);
            xhr.onload = function () {
                if (xhr.status === 200) {
                    const response = xhr.responseText;
                    if (response === 'success') {
                        Swal.fire({
                            title: 'Success',
                            text: 'Your request has been submitted!',
                            icon: 'success',
                            confirmButtonText: 'Close Now',
                            customClass: {
                                confirmButton: 'th-btn style4',
                                htmlContainer: 'box-text2 text-success fw-semibold mt-3'
                            }
                        });

                        document.getElementById('form3').reset();
                    } else {
                        Swal.fire({
                            title: 'Error',
                            text: response,
                            icon: 'error',
                            confirmButtonText: 'Close Now',
                            customClass: {
                                confirmButton: 'th-btn style4',
                                htmlContainer: 'box-text2 text-success fw-semibold mt-3'
                            }
                        });
                    }
                } else {
                    Swal.fire({
                        title: 'Error',
                        text: 'Something went wrong. Please try again later.',
                        icon: 'error',
                        confirmButtonText: 'Close Now',
                        customClass: {
                            confirmButton: 'th-btn style4',
                            htmlContainer: 'box-text2 text-success fw-semibold mt-3'
                        }
                    });
                }

                submitButton.innerHTML = 'Get A Free Consultancy <i class="fa-regular fa-arrow-right ms-2"></i>';
            };
            xhr.send(formData);
        }


        function submitForm2() {
            const fullName = document.getElementById('form2_name').value.trim();
            const email = document.getElementById('form2_email').value.trim();
            const phone = document.getElementById('form2_phone').value.trim();
            const bn = document.getElementById('form2_bn').value.trim();
            const message = document.getElementById('form2_message').value.trim();

            if (!fullName || !email || !phone || !bn || !message) {
                Swal.fire({
                    title: 'Error',
                    text: 'All fields are required!',
                    icon: 'error',
                    confirmButtonText: 'Close Now',
                    customClass: {
                        confirmButton: 'th-btn style4',
                        htmlContainer: 'box-text2 text-success fw-semibold mt-3'
                    }
                });
                return;
            }

            const formData = new FormData();
            formData.append('fullName', fullName);
            formData.append('email', email);
            formData.append('phone', phone);
            formData.append('bn', bn);
            formData.append('message', message);

            const submitButton = document.getElementById('form2_btn');
            submitButton.innerHTML = '<div class="spinner-border text-light" role="status"><span class="visually-hidden"></span></div>';

            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'free_consultation_4.php', true);
            xhr.onload = function () {
                if (xhr.status === 200) {
                    const response = xhr.responseText;
                    if (response === 'success') {
                        Swal.fire({
                            title: 'Success',
                            text: 'Your request has been submitted!',
                            icon: 'success',
                            confirmButtonText: 'Close Now',
                            customClass: {
                                confirmButton: 'th-btn style4',
                                htmlContainer: 'box-text2 text-success fw-semibold mt-3'
                            }
                        });

                        document.getElementById('form2').reset();
                    } else {
                        Swal.fire({
                            title: 'Error',
                            text: response,
                            icon: 'error',
                            confirmButtonText: 'Close Now',
                            customClass: {
                                confirmButton: 'th-btn style4',
                                htmlContainer: 'box-text2 text-success fw-semibold mt-3'
                            }
                        });
                    }
                } else {
                    Swal.fire({
                        title: 'Error',
                        text: 'Something went wrong. Please try again later.',
                        icon: 'error',
                        confirmButtonText: 'Close Now',
                        customClass: {
                            confirmButton: 'th-btn style4',
                            htmlContainer: 'box-text2 text-success fw-semibold mt-3'
                        }
                    });
                }

                submitButton.innerHTML = 'Get A Free Consultancy <i class="fa-regular fa-arrow-right ms-2"></i>';
            };
            xhr.send(formData);
        }



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
            var bn = document.getElementById('ef2_businessName').value.trim();
            var message = document.getElementById('ef2_fmessage').value.trim();

            // Validate required fields
            if (!fullName || !email || !phone || !bn || !message) {
                Swal.fire('Error', 'All fields are required!', 'error');
                return;
            }

            // Prepare form data
            var formData = new FormData();
            formData.append('fullName', fullName);
            formData.append('email', email);
            formData.append('phone', phone);
            formData.append('bn', bn);
            formData.append('message', message);

            // Get button
            var submitButton = document.getElementById('ef2_thh-btn');
            submitButton.innerHTML = '<div class="spinner-border text-light" role="status"><span class="visually-hidden"></span></div>';

            // Send AJAX
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'free_consultation_4.php', true);
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
                        document.getElementById('ef2_businessName').value = '';
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