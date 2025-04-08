<?php
require_once "assets/process/database.php";
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Book A Call - Cody Zea</title>
    <meta name="author" content="Cody Zea Software Solutions">
    <meta name="description"
        content="Book a call with Cody Zea Software Solutions to discuss expert Web Design, Branding, Digital Marketing, and App Development. Let's bring your ideas to life!">
    <meta name="keywords"
        content="Book a Call, Cody Zea, Web Design Consultation, App Development, Branding Strategy, Digital Marketing Advice, Software Solutions, Business Growth, Free Consultation">
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

</head>

<body>
    <?php require_once "header.php"; ?>


    <div class="container-fluid space-extra2-top" data-track="Hero-wd Section">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="d-flex justify-content-center flex-column mt-5 p-2 p-lg-5">
                    <span class="fs-5 fw-medium text-orange">Hey, we’re Cody Zea — Experts in Stunning Web Design</span>
                    <p class="display-4 fw-semibold text-black">Affordable Web Design Built for Business.
                    </p>
                    <p class="text-black fs-5">
                        Your business, your call — let our expert developers build it for you, or start with your own
                        vision and we’ll take it from there.


                    </p>

                    <ul class="list-unstyled">
                        <li class="text-black fs-5"><i class="fa-solid fa-circle-check text-success"></i>&nbsp;
                            Affordable
                            & effective web design</li>
                        <li class="text-black fs-5"><i class="fa-solid fa-circle-check text-success"></i>&nbsp; Fast,
                            secure, SEO-optimised websites</li>
                        <li class="text-black fs-5"><i class="fa-solid fa-circle-check text-success"></i>&nbsp; Branding
                            by professional NZ-based designers</li>

                    </ul>
                    <div class="btn-group">
                        <a href="contact.php" data-bs-target="#gfc" data-bs-toggle="modal"
                            class="th-btn blue-btn style1 th-icon th-radius fs-5">Get a Free
                            Consultation<i class="fa-regular fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 d-flex justify-content-start align-items-center flex-column">
                <img src="assets/main-hero-web.webp" class="img-fluid w-75 d-none d-lg-block" alt="">

            </div>
        </div>
    </div>


    <div class="container-fluid m-0 p-0 mb-5">
        <div class="row"
            style="background-blend-mode: multiply; background-image: url(assets/2148366645.jpg);  background-size: cover; background-position: center;">
            <div class="col-12 col-lg-7 d-flex justify-content-center">
                <div class="p-2 d-flex justify-content-center flex-column mt-5">
                    <div class="bg-orange rounded-20 p-5 position-relative z-index-3">
                        <span class="fs-3 fw-medium text-black">Limited-Time Offer</span>
                        <p class="display-4 fw-semibold text-black">Business Website for Just NZ$399</span>
                        </p>
                        <p class="text-black">
                            We Make Aesthetic Websites With The Ability To Help You Convert
                            Potential Leads Into Customers
                        </p>

                        <div class="row bg-white rounded-20 p-2">
                            <span class="fs-4 text-black fw-bold">Features :</span>
                            <br>
                            <div class="col-12 col-lg-6">
                                <ul class="list-unstyled">
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp; Website Features:
                                        5-page custom website

                                    </li>
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp;
                                        Design: Mobile-responsive design</li>
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp; SEO: Basic SEO setup
                                    </li>
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp; Communication:
                                        Enquiry to WhatsApp</li>
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp; Visuals: Free stock
                                        images</li>
                                </ul>
                            </div>
                            <div class="col-12 col-lg-6">
                                <ul class="list-unstyled">
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp; Social media: Social
                                        media integration</li>
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp; Business Setup:
                                        Google business setup</li>
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp; Content: Free web
                                        content writing</li>
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp;
                                        Email: Free one business email</li>
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp;Location: My Google
                                        Map integration</li>
                                    <li class="text-black fs-6"><i
                                            class="fa-solid fa-circle-check text-black"></i>&nbsp;Support: Free priority
                                        support</li>
                                </ul>
                            </div>
                        </div>


                        <div class="btn-group mt-3 d-flex justify-content-center">
                            <a data-bs-target="#offer_modal" data-bs-toggle="modal"
                                class="th-btn blue-btn style1 th-icon th-radius fs-5 bg-black col-12 col-lg-8">Let’s
                                Build My Website for NZD 399 <i class="fa-regular fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-12 col-lg-5 space-extra d-flex justify-content-center">
                <div class="col-11 bg-white rounded-20 border border-2 black-border p-4 p-lg-5">
                    <span class="text-black fs-3 text-orange">Fill out the form below to claim your <span
                            class="text-orange">NZD 399 </span> business website
                        plan today.
                    </span>
                    <form id="offer-form-ad">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <input type="text" class="form-control text-black" id="firstname"
                                    placeholder="Enter your Name" required>
                            </div>

                            <div class="col-12 mt-3">
                                <input type="email" class="form-control text-black" id="workEmail"
                                    placeholder="Enter your work email" required>
                            </div>
                            <div class="col-12 mt-3">
                                <input type="tel" class="form-control text-black" id="mobileNumber"
                                    placeholder="Enter your mobile number" required>
                            </div>
                            <div class="col-12">
                                <!-- Message -->
                                <div class="mt-3">
                                    <textarea class="form-control text-black" id="fmessage" rows="2"
                                        placeholder="To help us understand better,enter a brief description about your project"
                                        required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3 d-flex justify-content-center">
                            <!-- Submit Button -->
                            <div class="btn-group col-12">
                                <a class="th-btn blue-btn style1 th-icon th-radius fs-5 col-12 bg-orange" type="submit"
                                    id="thh-btn" onclick="sendEBook('branding_ebook');">Get A Free
                                    Consultancy


                                    <i class="fa-regular fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container space-extra2-top">
        <div class="col-12 text-center">
            <span class="display-5 text-black">💼Transparent. Honest. No Hidden Costs.</span>
            <p class="text-black fs-5">We start by understanding your business needs — your goals, challenges, and
                long-term growth. With that insight, we create a tailored pricing plan that’s both achievable and fair.
                Your success is our priority.</p>
        </div>
        <section class="overflow-hidden" data-track="Pricing Section">
            <?php
            $gg = 2;
            $conn = Databases::getConnection();
            $stmt = $conn->prepare("SELECT * FROM `pack` INNER JOIN `solution` ON `solution`.`sol_id`=`pack`.`solution_sol_id` WHERE `solution_sol_id` = ? ORDER BY `pack_id` ASC ");
            $stmt->bind_param("i", $gg);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $sol_name = $result->fetch_assoc();

                ?>

                <div class="container px-md-5">
                    <div id="monthly" class="wrapper-full mt-5">
                        <div class="row gy-4 justify-content-center">

                            <?php
                            $result->data_seek(0);
                            $n = 0;
                            $f_round = 0;

                            for ($x = 1; $x <= $result->num_rows; $x++) {
                                $data = $result->fetch_assoc();
                                ?>

                                <div class="col-xl-4 col-md-8">
                                    <div class="price-box th-ani <?php if ($x == 2) {
                                        echo "active orange-border";
                                    } else {
                                        echo "side-border";
                                    } ?>">
                                        <span class="offer-tag text-orange"><?php if ($x == 2) {
                                            echo "popular";
                                        } ?></span>
                                        <div class="text-center">
                                            <h3 class="box-title"><?php echo $data['pack_name']; ?></h3>

                                            <h4 class="box-price" style="margin-bottom: 0px !important;"><span
                                                    class="price-tag"></span><span
                                                    class="text-orange">$<?php echo $data['pack_price']; ?></span></h4>
                                            <h5 style="margin-top: 0px !important; font-weight: 600 !important;"
                                                class="text-decoration-line-through text-o">
                                                $<?php echo $data['pack_before_price']; ?></h5>
                                            <p class="box-text2 text-dark d-none d-lg-block" style="padding: 0px;">
                                                <?php echo $data['pack_desc']; ?>
                                            </p>
                                        </div>
                                        <div class="col-12 text-center">
                                            <span class="text-black fs-5">Call Us at: <a href="tel:+64223568614"
                                                    class="text-orange">+64 22 356 8614</a> </span>
                                        </div>

                                        <a href="package-details.php?package_identity=<?php echo $data['pack_id']; ?>"
                                            class="th-btn style4 btn-fw th-radius th-icon fs-5 text-white mt-2">Start Project<i
                                                class="fa-regular fa-arrow-right ms-2"></i></a>

                                        <div class="box-content">
                                            <div class="available-list"
                                                style="padding-left: 10px !important; padding-right: 10px !important; margin: 0px !important;">

                                                <ul>
                                                    <?php

                                                    // Prepare and execute SQL query
                                                    $query = "(SELECT * FROM `pack_features` WHERE `pack_pack_id` = ? AND `status` = 1 ORDER BY `f_id` ASC)
                                                        UNION
                                                        (SELECT * FROM `pack_features` WHERE `pack_pack_id` = ? AND `status` != 1 ORDER BY `f_id` ASC) ";
                                                    $stmt = $conn->prepare($query);
                                                    $stmt->bind_param("ii", $data['pack_id'], $data['pack_id']);
                                                    $stmt->execute();
                                                    $results = $stmt->get_result();

                                                    if ($x == 1) {
                                                        $part1 = floor($results->num_rows / 2);
                                                        $part2 = ceil($results->num_rows / 2);
                                                        $f_round = $part1;
                                                    } else {
                                                        $part1 = $f_round;
                                                        $part2 = $results->num_rows - $part1;
                                                    }

                                                    for ($y = 1; $y <= $part1; $y++) {
                                                        $n = $n + 1;
                                                        $fet = $results->fetch_assoc();
                                                        if ($fet['status'] == 1) {
                                                            ?>
                                                            <li class="f-list text-dark"><?php echo $fet['f_name']; ?></li>
                                                            <?php
                                                        } else {
                                                            ?>
                                                            <li class="nf-list unavailable text-dark"><?php echo $fet['f_name']; ?></li>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                    <div class="d-none mb-3" id="showMoreList_<?php echo $x; ?>">
                                                        <?php
                                                        $n = $n + 1;
                                                        for ($y = 1; $y <= $part2; $y++) {
                                                            $fet = $results->fetch_assoc();
                                                            if ($fet['status'] == 1) {
                                                                ?>
                                                                <li class="f-list text-dark"><?php echo $fet['f_name']; ?></li>
                                                                <?php
                                                            } else {
                                                                ?>
                                                                <li class="nf-list unavailable text-dark"><?php echo $fet['f_name']; ?>
                                                                </li>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </div>
                                                </ul>

                                            </div>
                                        </div>

                                        <div class="text-center text-dark mt-3">
                                            <span class="text-o fw-semibold hover" onclick="showMore(<?php echo $x; ?>);"
                                                id="showMoreBtn_<?php echo $x; ?>"><i
                                                    class="bi bi-chevron-double-down h6"></i>&nbsp;More Features</span>
                                        </div>
                                    </div>
                                </div>

                                <?php
                            }
                            ?>

                        </div>
                    </div>

                </div>
                <?php
            }
            ?>
        </section>
    </div>

    <div class="container">
        <div class="row text-center">
            <span class="display-4 text-black mt-5">
                Attract Your Ideal Customers with Tailored Web Designs </span>
            <p class="text-black fs-5">
                Our custom design process ensures your website connects with the people who matter most to your
                business.


            </p>
            <div class="col-12 text-center">
                <span class="text-black fs-5">Call Us at: <a href="tel:+64223568614" class="text-orange">+64 22 356
                        8614</a> </span>
            </div>
        </div>

        <div class="col-12">
            <div class="overflow-hidden position-relative space-extra-top space-bottom" id="portfolio-sec">
                <div class="container-fluid">
                    <div class="portfolio-area">
                        <div class="row filter-active">
                            <div class="col-12 col-lg-4 col-md-6 filter-item cat5 cat5 cat8 cat1 mt-3">
                                <div class="project-item" onclick="window.location='work-ceylonmoss.php'">
                                    <div class="box-img global-img">
                                        <img src="assets/img/project/project_1_2.jpg" alt="project image">
                                    </div>
                                    <div class="box-content">
                                        <h3 class="box-title"><a href="works.php">Ceylon Moss -
                                                https://ceylonmoss.com/</a></h3>
                                        <p class="box-subtitle">Web Design & Development</p>
                                    </div>
                                    <div class="box-btn"><a href="assets/img/project/project_1_2.jpg"
                                            class="icon-btn popup-image"><i class="fa-solid fa-arrow-up-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 col-md-6 filter-item cat5 cat5 cat8 cat1 mt-3">
                                <div class="project-item" onclick="window.location='work-boozebites.php'">
                                    <div class="box-img global-img">
                                        <img src="assets/img/project/project_1_3.jpg" alt="project image">
                                    </div>
                                    <div class="box-content">
                                        <h3 class="box-title"><a href="works.php">Booze Bites -
                                                https://boozebites.co.nz/</a></h3>
                                        <p class="box-subtitle">Web Design & Development</p>
                                    </div>
                                    <div class="box-btn"><a href="assets/img/project/project_1_2.jpg"
                                            class="icon-btn popup-image"><i class="fa-solid fa-arrow-up-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 col-md-6 filter-item cat5 cat5 cat8 cat1 mt-3">
                                <div class="project-item" onclick="window.location='work-ceynap.php'">
                                    <div class="box-img global-img">
                                        <img src="assets/img/project/project_1_4.jpg" alt="project image">
                                    </div>
                                    <div class="box-content">
                                        <h3 class="box-title"><a href="works.php">Ceynap -
                                                https://ceynap.co.nz/</a></h3>
                                        <p class="box-subtitle">Web Design & Development</p>
                                    </div>
                                    <div class="box-btn"><a href="assets/img/project/project_1_2.jpg"
                                            class="icon-btn popup-image"><i class="fa-solid fa-arrow-up-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 col-md-6 filter-item cat5 cat5 cat8 cat1 mt-3">
                                <div class="project-item" onclick="window.location='work-cl-travel.php'">
                                    <div class="box-img global-img">
                                        <img src="assets/cheers-work.jpg" alt="project image">
                                    </div>
                                    <div class="box-content">
                                        <h3 class="box-title"><a href="works.php">Cheers Travels -
                                                https://cheerslankatravels.com/</a></h3>
                                        <p class="box-subtitle">Web Design & Development</p>
                                    </div>
                                    <div class="box-btn"><a href="assets/img/project/project_1_2.jpg"
                                            class="icon-btn popup-image"><i class="fa-solid fa-arrow-up-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 col-md-6 filter-item cat5 cat5 cat8 cat1 mt-3">
                                <div class="project-item" onclick="window.location='work-p-s-Vidyapeetaya.php'">
                                    <div class="box-img global-img">
                                        <img src="assets/pradeepa-work.jpg" alt="project image">
                                    </div>
                                    <div class="box-content">
                                        <h3 class="box-title"><a href="works.php">Pradeepa Sangeeth Institute -
                                                https://pradeepasv.com/</a></h3>
                                        <p class="box-subtitle">Web Design & Development</p>
                                    </div>
                                    <div class="box-btn"><a href="assets/img/project/project_1_2.jpg"
                                            class="icon-btn popup-image"><i class="fa-solid fa-arrow-up-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-4 col-md-6 filter-item cat5 cat5 cat8 cat1 mt-3">

                                <div class="project-item" onclick="window.location='work-edupathlk.php'">
                                    <div class="box-img global-img">
                                        <img src="assets/edu-works.jpg" alt="project image">
                                    </div>
                                    <div class="box-content">
                                        <h3 class="box-title"><a href="works.php">EduPath LMS -
                                                https://edupath.com/</a></h3>
                                        <p class="box-subtitle">Web Design & Development</p>
                                    </div>
                                    <div class="box-btn"><a href="assets/img/project/project_1_2.jpg"
                                            class="icon-btn popup-image"><i class="fa-solid fa-arrow-up-right"></i></a>
                                    </div>
                                </div>
                            </div>



                        </div>

                    </div>
                    <div class="col-12 mt-5 d-flex justify-content-center">
                        <div class="btn-group">
                            <a href="works.php" class="th-btn blue-btn style1 th-icon th-radius fs-5 bg-black">View More
                                Website
                                Work <i class="fa-regular fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>



    </div>
    <div class="container-fluid">

    </div>
    <section class="overflow-hidden space-bottom mt-5 ani-c" id="testi-sec" data-track="Testomonials Section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="title-area mb-20 text-center">
                        <span class="sub-title sub-title7 text-ani-style2">Testimonials</span>
                        <h2 class="sec-title text-ani-style3">What our clients say?</h2>
                    </div>
                </div>

            </div>
        </div>
        <div class="container-fluid p-0 space">
            <div class="slider-area testi-box-area">
                <div class="swiper th-slider has-shadow testiSlider3" id="testiSlide3"
                    data-slider-options='{"centeredSlides":true,"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testi-box th-ani">
                                <p class="box-text">I had a great experience with Cody zea while building my e-commerce
                                    website. They delivered a high-quality site on time and provided excellent customer
                                    support throughout the process. I highly recommend them for anyone looking to create
                                    a professional website! </p>
                                <div class="box-wrapper">
                                    <div class="box-profile">
                                        <div class="box-author">
                                            <img src="assets/clients/ceynap.png" alt="Avater">
                                        </div>
                                        <div class="box-info">
                                            <h3 class="box-title">Ceynap,Auckland</h3>
                                            <span class="box-desig">Coco Coir NZ</span>
                                        </div>
                                    </div>
                                    <div class="box-review">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-box th-ani">
                                <p class="box-text">Booze Bites has had an outstanding experience working with Cody Zea
                                    Software Solutions. Their team delivered a seamless and efficient service, helping
                                    us establish our online presence with a sleek, user-friendly website. Their
                                    attention to detail, creativity, and ability to understand our brand made the
                                    process smooth and hassle-free.</p>
                                <div class="box-wrapper">
                                    <div class="box-profile">
                                        <div class="box-author">
                                            <img src="assets/clients/boozebites.png" alt="Avater">
                                        </div>
                                        <div class="box-info">
                                            <h3 class="box-title">Booze Bites,Auckland</h3>
                                            <span class="box-desig">Food & Drinks</span>
                                        </div>
                                    </div>
                                    <div class="box-review">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-box th-ani">
                                <p class="box-text">At Pradeepa Sangeeth Institute, we were looking for a reliable
                                    partner to help us enhance our digital presence, and Cody Zea Software Solutions
                                    exceeded our expectations. Their team created a beautifully designed website that
                                    perfectly reflects our institute’s artistic vision and cultural values.</p>
                                <div class="box-wrapper">
                                    <div class="box-profile">
                                        <div class="box-author">
                                            <img src="assets/clients/pradeepasv.png" alt="Avater">
                                        </div>
                                        <div class="box-info">
                                            <h3 class="box-title">Pradeepa Sangeeth Institute</h3>
                                            <span class="box-desig">Founder</span>
                                        </div>
                                    </div>
                                    <div class="box-review">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-box th-ani">
                                <p class="box-text">Working with Cody Zea Software Solutions was a game-changer for our
                                    business. They took our vision and transformed it into a powerful digital presence.
                                    From a sleek, user-friendly website to strategic branding and digital marketing,
                                    every detail was handled with expertise and professionalism. Their team truly
                                    understands business growth and goes beyond just creating a website – they craft
                                    solutions that drive real results. Highly recommended for anyone looking to elevate
                                    their brand!</p>
                                <div class="box-wrapper">
                                    <div class="box-profile">
                                        <div class="box-author">
                                            <img src="assets/mini-ccw.svg" alt="Avater">
                                        </div>
                                        <div class="box-info">
                                            <h3 class="box-title">Ceylon Coir World</h3>
                                            <span class="box-desig">Founder</span>
                                        </div>
                                    </div>
                                    <div class="box-review">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-box th-ani">
                                <p class="box-text">ody Zea Software Solutions has been instrumental in transforming our
                                    travel business. They designed a stunning, user-friendly website that makes booking
                                    seamless for our customers. Their expertise in branding and digital marketing helped
                                    us attract more travelers and stand out in the competitive tourism industry. The
                                    team is professional, innovative, and always ready to go the extra mile. If you're
                                    looking for real business growth, Cody Zea is the way to go!</p>
                                <div class="box-wrapper">
                                    <div class="box-profile">
                                        <div class="box-author">
                                            <img src="assets/cl-mini.svg" alt="Avater">
                                        </div>
                                        <div class="box-info">
                                            <h3 class="box-title">Cheers Travels</h3>
                                            <span class="box-desig">Founder</span>
                                        </div>
                                    </div>
                                    <div class="box-review">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
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
    <div class="row px-3 px-md-2 px-lg-5 my-5" data-track="meeting Section">
        <div class="col-12 bg-black px-3 py-5 p-md-5 meeting rounded-20">
            <div class="row">
                <div class="col-12 col-md-2 d-flex justify-content-center align-items-center ">
                    <img src="assets/bulb-2.svg" class="img-fluid bulb-img">
                </div>
                <div class="col-12 col-md-10 text-center mt-3">
                    <h3 class="text-white">Have a Project in Mind? <span class="text-orange">Let's schedule a
                            meeting</span> and bring your ideas to life!</h3>

                    <!-- Calendly Stylesheet -->
                    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
                    <!-- Custom Button to Trigger Calendly Popup -->
                    <div class="row mt-4">
                        <div class="btn-group col-12 d-flex justify-content-center">
                            <a href="#"
                                onclick="Calendly.initPopupWidget({url: 'https://calendly.com/codyzeaofficial'}); return false;"
                                class="th-btn blue-btn style1 th-icon th-radius fs-5 col-12 w-auto px-5 py-4">
                                Schedule a meeting <i class="fa-regular fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Calendly Widget Script -->
                    <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript"
                        async></script>
                </div>
            </div>
        </div>
    </div>

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
                                <input type="text" class="form-control text-black" id="fname">
                            </div>
                            <div class="col-12 mt-3">
                                <label for="exampleFormControlInput1" class="form-label">Email Address</label>
                                <input type="email" class="form-control text-black" id="fmail">
                            </div>
                            <div class="col-12">
                                <!-- Message -->
                                <div class="mt-3">
                                    <label for="message" class="form-label">Project Requirements</label>
                                    <textarea class="form-control text-black" id="fmessage" rows="2"
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
                                    data-bs-target="#gfc" data-bs-toggle="modal" id="thh-btn"
                                    onclick="sendMessage();">Get a Quotation
                                    <i class="fa-regular fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" data-track="Get a Free Cosultancy Modal Loaded" style="z-index: 1000;" id="gfc" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content rounded-0 border-0">

                <div class="modal-body m-0 p-0">
                    <div class="row m-0 p-0">

                        <div class="col-12 p-4">
                            <div class="col-12 d-flex justify-content-end" data-bs-dismiss="modal">
                                <i class="fa-light fa-xmark-large fs-4 text-black" style="cursor: pointer;"></i>
                            </div>
                            <span class="text-black fs-3 text-orange">Let’s Discuss Your Project — Free of Charge</span><br/><span
                                    class="text-orange fs-5">Schedule a call and get expert insights tailored to your business. I'll contact you within 24 hours.


                            </span>

                            <form id="offer-form-ad">
                                <div class="row">
                                    <div class="col-12 mt-3">
                                        <input type="text" class="form-control text-black" id="firstname"
                                            placeholder="Enter your Name" required>
                                    </div>

                                    <div class="col-12 mt-3">
                                        <input type="email" class="form-control text-black" id="workEmail"
                                            placeholder="Enter your work email" required>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <input type="tel" class="form-control text-black" id="mobileNumber"
                                            placeholder="Enter your mobile number" required>
                                    </div>
                                    <div class="col-12">
                                        <!-- Message -->
                                        <div class="mt-3">
                                            <textarea class="form-control text-black" id="fmessage" rows="2"
                                                placeholder="To help us understand better,enter a brief description about your project"
                                                required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-3 d-flex justify-content-center">
                                    <!-- Submit Button -->
                                    <div class="btn-group col-12">
                                        <a class="th-btn blue-btn style1 th-icon th-radius fs-5 col-12 bg-orange"
                                            type="submit" id="thh-btn" onclick="sendEBook('branding_ebook');">Get A Free
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
    <div class="modal fade" data-track="NZD 399 Offer Filling Modal Loaded" style="z-index: 1000;" id="offer_modal" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content rounded-0 border-0">

                <div class="modal-body m-0 p-0">
                    <div class="row m-0 p-0">

                        <div class="col-12 p-4">
                            <div class="col-12 d-flex justify-content-end" data-bs-dismiss="modal">
                                <i class="fa-light fa-xmark-large fs-4 text-black" style="cursor: pointer;"></i>
                            </div>
                            <span class="text-black fs-3 text-orange">Exclusive Offer: Business Website for <span class="text-orange">NZD 399</span></span><br/><span
                                    class="text-black fs-5">Limited Availability — Only 13 Coupons Left to Claim This Special Price.


                            </span>

                            <form id="offer-form-ad">
                                <div class="row">
                                    <div class="col-12 mt-3">
                                        <input type="text" class="form-control text-black" id="firstname"
                                            placeholder="Enter your Name" required>
                                    </div>

                                    <div class="col-12 mt-3">
                                        <input type="email" class="form-control text-black" id="workEmail"
                                            placeholder="Enter your work email" required>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <input type="tel" class="form-control text-black" id="mobileNumber"
                                            placeholder="Enter your mobile number" required>
                                    </div>
                                    <div class="col-12">
                                        <!-- Message -->
                                        <div class="mt-3">
                                            <textarea class="form-control text-black" id="fmessage" rows="2"
                                                placeholder="To help us understand better,enter a brief description about your project"
                                                required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-3 d-flex justify-content-center">
                                    <!-- Submit Button -->
                                    <div class="btn-group col-12">
                                        <a class="th-btn blue-btn style1 th-icon th-radius fs-5 col-12 bg-orange"
                                            type="submit" id="thh-btn">Submit

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



    <!--============================== All Js File ============================== -->
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
                    sendVisitData("User scrolled", { scrollPercentage: scrollPercentage });
                    lastScroll = scrollPercentage;
                }
            }

            // Track when user enters specific sections
            function trackSectionVisibility() {
                document.querySelectorAll("[data-track]").forEach(section => {
                    const rect = section.getBoundingClientRect();
                    if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
                        sendVisitData("User viewed section", { section: section.getAttribute("data-track") });
                    }
                });
            }

            // Track button clicks
            function trackButtonClicks() {
                document.querySelectorAll("[data-track-button]").forEach(button => {
                    button.addEventListener("click", function () {
                        sendVisitData("User clicked button", { button: button.getAttribute("data-track-button") });
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