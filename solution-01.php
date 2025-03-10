<?php require_once "db.php";
$d_r = Databases::Search("SELECT * FROM pack WHERE solution_sol_id=1");
$dd = $d_r->fetch_assoc();
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Saor - SEO Digital Marketing Agency HTML Template - Services Details</title>
    <meta name="author" content="Cody Zea Software Solutions">
    <meta name="description" content="Startup Success Made Simple – Get expert solutions in web development, branding, digital marketing, and custom software to grow your business effortlessly.">
    <meta name="keywords" content="Cody Zea, Startup Solutions, Business Growth, Web Development, Digital Marketing, Branding, Custom Software, E-Commerce, App Development">
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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
    <?php require_once "header.php" ?>



    <div class="container-fluid space-extra2">
        <div class="row d-flex justify-content-center align-items-center"
            style="background-image: url(assets/solution001.webp); background-size: cover; background-position: center; min-height: 70vh;">
            <div class="col-11 col-lg-9">
                <div class="row bg-white p-5">
                    <div class="col-12 col-lg-3 d-none d-lg-block">
                        <img src="assets/solubulb.jpg" class="img-fluid" alt="SolutionCoverPageIllustration">
                    </div>
                    <div class="col-12 col-lg-9">
                        <span class="text-black display-5">Startup Made Easy – Choose Cody Zea</span>
                        <p class="text-black fs-3">
                            Effortless branding, web design, and digital growth—let’s build your success together!
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <span class="display-4 text-black">
                    The <span class="text-orange">Problem (Challenge)</span>
                </span>
                <br />
                <br />
                <p class="fs-3 text-black" style="text-align: justify;">
                    Starting a business comes with many challenges. One of the biggest? Building trust and visibility
                    without the right online presence. Many startups mistakenly think they need a fully functional
                    e-commerce website from day one, which can be costly and overwhelming.
                </p>
                <!-- <div class="btn-group">
                    <a href="about.html" class="th-btn blue-btn style1 th-icon th-radius fs-5">Create Your Website<i
                            class="fa-regular fa-arrow-right ms-2"></i></a>
                </div> -->
            </div>
            <div class="col-12 col-lg-6">
                <img src="assets/problem.jpg" class="img-fluid" alt="ProblemIllustration">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <img src="assets/ideasolu.jpg" class="img-fluid" alt="ProblemIllustration">
            </div>
            <div class="col-12 col-lg-6">
                <span class="display-4 text-black">
                    The <span class="text-orange">Solution – Smart Startup Solution</span>
                </span>
                <br />
                <br />
                <p class="fs-3 text-black" style="text-align: justify;">
                    We offer a smart, cost-effective way for startups to build their brand and online presence step by
                    step. Our Ultimate Pack & Essential Branding Package are designed to give you everything you need to
                    establish a professional and trustworthy online presence, without breaking the bank.
                </p>
                <!-- <div class="btn-group">
                    <a href="about.html" class="th-btn blue-btn style1 th-icon th-radius fs-5">Create Your Website<i
                            class="fa-regular fa-arrow-right ms-2"></i></a>
                </div> -->
            </div>

        </div>
        <div class="row">
            <div class="col-12 text-center">
                <span class="display-5 text-black">What We Want to Fill – <span class="text-orange"> The Problem
                        Gap</span>
                </span>
                <br>
                <br>
                <p class="text-black">
                    We help startups overcome common challenges like weak branding, generic websites, ineffective
                    marketing, and lack of ongoing support. Our tailored solutions in Branding, Web Design, Digital
                    Marketing, and Ongoing Support ensure your business stands out, engages the right audience, and
                    grows sustainably in a competitive market.
                </p>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div
                class="col-12 col-lg-6 text-center border border-start-0 border-top-0 border-bottom-0 border-end-2 border-dark">
                <span class="text-orange display-5">The Competitor</span> <br />
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-lg-6 bg-white rounded-20 shadow-lg p-5 mt-3 mx-3">
                        <img src="assets/img/icon/service_2_1.png" class="img-flud w-50" alt="Feature001"> <br />
                        <div class="col-12 mt-3">
                            <span class="fs-2 text-black">Web Design</span>

                        </div>

                    </div>
                    <div class="col-12 col-lg-6 bg-white rounded-20 shadow-lg p-5 mt-3 mx-3">
                        <img src="assets/digimar.png" class="img-flud w-50" alt="Feature001"> <br />
                        <div class="col-12 mt-3">
                            <span class="fs-2 text-black">Digital Marketing</span>

                        </div>

                    </div>
                    <div class="col-12 col-lg-6 bg-white rounded-20 shadow-lg p-5 mt-3 mx-3">
                        <img src="assets/branding.png" class="img-flud w-50" alt="Feature001"> <br />
                        <div class="col-12 mt-3">
                            <span class="fs-2 text-black">Branding</span>

                        </div>

                    </div>
                    <div class="col-12 col-lg-6 bg-white rounded-20 shadow-lg p-5 mt-3 mx-3">
                        <img src="assets/os.png" class="img-flud w-50" alt="Feature001"> <br />
                        <div class="col-12 mt-3">
                            <span class="fs-2 text-black">Ongoing Support

                            </span>

                        </div>

                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-6 text-center">
                <span class="text-orange display-5">You</span> <br />
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-12 col-lg-6 bg-white rounded-20 shadow-lg p-5 mt-3 mx-3">
                        <img src="assets/neg.png" class="img-flud w-50" alt="Feature001"> <br />
                        <div class="col-12 mt-3">
                            <span class="fs-2 text-black">Simple Business Setup</span>

                        </div>

                    </div>
                    <div class="col-12 mt-5">
                        <span class="fs-1 text-black">The Problem – <span class="text-orange">What You Have Right
                                Now</span>

                        </span>
                        <br>
                        <br>
                        <p class="text-black fs-3">
                            <span class="text-orange"> You:</span> You currently have just the basics – like a simple
                            business setup with minimal branding
                            and a basic online presence.
                            <br>
                            <br>
                            <span class="text-orange">Competitors:</span> Competitors often offer slightly more, like
                            additional services or an extensive
                            e-commerce platform, but still miss out on crucial areas like tailored branding or ongoing
                            support.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <div class="container space">
        <div class="row d-flex justify-content-center">
            <div class="col-12 text-center">
                <span class="text-black display-5">How Our Solution <span class="text-orange">Fills the Gaps</span>
                </span>
                <p class="text-black fs-4">
                    In today’s competitive market, many businesses settle for basic solutions that leave them vulnerable
                    to competitors. Our solution bridges the gaps you’re currently facing by providing a comprehensive
                    package that covers everything from branding to ongoing support.
                </p>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-lg-3 bg-white rounded-20 shadow-lg p-5 mt-3 mx-3">
                <img src="assets/img/icon/service_2_1.png" class="img-flud w-50" alt="Feature001"> <br />
                <div class="col-12 mt-3">
                    <span class="fs-2 text-black">Web Design</span>

                </div>

            </div>
            <div class="col-12 col-lg-3 bg-white rounded-20 shadow-lg p-5 mt-3 mx-3">
                <img src="assets/digimar.png" class="img-flud w-50" alt="Feature001"> <br />
                <div class="col-12 mt-3">
                    <span class="fs-2 text-black">Digital Marketing</span>

                </div>

            </div>
            <div class="col-12 col-lg-3 bg-white rounded-20 shadow-lg p-5 mt-3 mx-3">
                <img src="assets/branding.png" class="img-flud w-50" alt="Feature001"> <br />
                <div class="col-12 mt-3">
                    <span class="fs-2 text-black">Branding</span>

                </div>

            </div>
            <div class="col-12 col-lg-3 bg-white rounded-20 shadow-lg p-5 mt-3 mx-3">
                <img src="assets/os.png" class="img-flud w-50" alt="Feature001"> <br />
                <div class="col-12 mt-3">
                    <span class="fs-2 text-black">Ongoing Support

                    </span>

                </div>

            </div>
        </div>

    </div>
    <div class="conatiner-fluid">
        <img src="assets/says001.png" class="img-fluid d-lg-none d-block" alt="">
        <div class="row p-5 d-none d-lg-block"
            style="background-image: url(assets/says001.png); background-size: contain; background-position: center; background-repeat: no-repeat; min-height: 100vh;">
        </div>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center space-extra">
            <div class="col-12 text-center">
                <span class="text-black display-3">Web <span class="text-orange">Design</span>
                </span>
                <p class="text-black fs-4">
                    Our custom-designed websites aren’t just beautiful—they’re optimized for speed, SEO, and a seamless
                    user experience, helping you stand out from competitors.
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6 vh-100 bg-black">
                <div class="col-12 col-lg-7 offset-0 offset-lg-7 mt-4">
                    <div class="price-box th-ani " style="z-index: 9 !important; border-bottom: 2px solid #FF5C35;">
                        <span class="offer-tag"></span>
                        <div class="text-center">
                            <h3 class="box-title"><?php echo $dd["pack_name"]; ?></h3>
                            <h4 class="box-price text-center text-orange">NZ$ <?php echo $dd["pack_price"]; ?></h4>
                            <p class="box-text2 text-black"><?php echo $dd["pack_desc"]; ?></p>
                        </div>
                        <a href="package-details.php?package_identity=<?php echo $dd["pack_id"]; ?>" class="th-btn style4 btn-fw th-radius th-icon fs-5">Get Started<i
                                class="fa-regular fa-arrow-right ms-2"></i></a>
                        <div class="box-content">
                            <div class="available-list">
                                <ul>
                                    <ul>
                                        <?php
                                        $fd = Databases::Search("SELECT * FROM `pack_features` WHERE `pack_pack_id` = '" . $dd["pack_id"] . "' AND `status` = 1");
                                        for ($x = 0; $x < 2; $x++) {
                                            $ff = $fd->fetch_assoc();
                                        ?>
                                            <li class="text-black"><?php echo $ff["f_name"]; ?></li>
                                        <?php
                                        }
                                        $rest = $fd->num_rows - 2;
                                        ?>
                                        <div class="d-none mb-3" id="showMoreList_<?php echo $dd['pack_id']; ?>">
                                            <?php
                                            for ($x = 0; $x < $rest; $x++) {
                                                $ff = $fd->fetch_assoc();
                                            ?>
                                                <li class="text-black"><?php echo $ff["f_name"]; ?></li>
                                            <?php
                                            }
                                            ?>
                                        </div>

                                    </ul>

                                </ul>
                            </div>
                        </div>
                        <div class="text-center text-dark mt-3">
                            <span class="text-dark fw-bold h5" style="cursor: pointer;" onclick="showMore(<?php echo $dd['pack_id']; ?>);" id="showMoreBtn_<?php echo $dd['pack_id']; ?>"><i class="bi bi-chevron-double-down h6"></i>&nbsp;More Features</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-1">

            </div>
            <div class="col-12 col-lg-4 space">
                <div class="col-12 mt-0 mt-lg-5">
                    <span class="text-orange fs-3">
                        The Problem :
                    </span>
                    <p class="text-black fs-5">
                        A business without a website lacks credibility and struggles to attract customers. A poorly
                        designed website makes navigation difficult, leading to lost potential clients.
                    </p>
                </div>
                <div class="col-12">
                    <span class="text-orange fs-3">
                        Solution Impact:
                    </span>
                    <p class="text-black fs-5">
                        This package gives your startup an online presence, helping you attract and engage customers
                        effectively.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center space-extra">
            <div class="col-12 text-center">
                <span class="text-black display-3"> Branding<span class="text-orange"> - Cody Zea</span>
                </span>
                <p class="text-black fs-4">
                    Your brand is more than just a logo—it’s the face of your business. At Cody Zea, we craft stunning
                    visual identities that build trust, make an impact, and set you apart from the competition. Let’s
                    create a brand that speaks for you!
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6 vh-100 bg-black">
                <div class="col-12 col-lg-7 offset-0 offset-lg-7 mt-4">
                    <?php $dd = $d_r->fetch_assoc(); ?>
                    <div class="price-box th-ani " style="z-index: 8 !important; border-bottom: 2px solid #FF5C35;">
                        <span class="offer-tag"></span>
                        <div class="text-center">
                            <h3 class="box-title"><?php echo $dd["pack_name"]; ?></h3>
                            <h4 class="box-price text-center text-orange">NZ$ <?php echo $dd["pack_price"]; ?></h4>
                            <p class="box-text2 text-black"><?php echo $dd["pack_desc"]; ?></p>
                        </div>
                        <a href="package-details.php?package_identity=<?php echo $dd["pack_id"]; ?>" class="th-btn style4 btn-fw th-radius th-icon fs-5">Get Started<i
                                class="fa-regular fa-arrow-right ms-2"></i></a>
                        <div class="box-content">
                            <div class="available-list">
                                <ul>
                                    <ul>
                                        <?php
                                        $fd = Databases::Search("SELECT * FROM `pack_features` WHERE `pack_pack_id` = '" . $dd["pack_id"] . "' AND `status` = 1");
                                        for ($x = 0; $x < 2; $x++) {
                                            $ff = $fd->fetch_assoc();
                                        ?>
                                            <li class="text-black"><?php echo $ff["f_name"]; ?></li>
                                        <?php
                                        }
                                        $rest = $fd->num_rows - 2;
                                        ?>
                                        <div class="d-none mb-3" id="showMoreList_<?php echo $dd['pack_id']; ?>">
                                            <?php
                                            for ($x = 0; $x < $rest; $x++) {
                                                $ff = $fd->fetch_assoc();
                                            ?>
                                                <li class="text-black"><?php echo $ff["f_name"]; ?></li>
                                            <?php
                                            }
                                            ?>
                                        </div>

                                    </ul>

                                </ul>
                            </div>
                        </div>
                        <div class="text-center text-dark mt-3">
                            <span class="text-dark fw-bold h5" style="cursor: pointer;" onclick="showMore(<?php echo $dd['pack_id']; ?>);" id="showMoreBtn_<?php echo $dd['pack_id']; ?>"><i class="bi bi-chevron-double-down h6"></i>&nbsp;More Features</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-1">

            </div>
            <div class="col-12 col-lg-4 space">
                <div class="col-12 mt-0 mt-lg-5">
                    <span class="text-orange fs-3">
                        The Problem :
                    </span>
                    <p class="text-black fs-5">
                        Without proper branding, startups fail to differentiate themselves, making it harder to gain
                        customer trust and recognition.
                    </p>
                </div>
                <div class="col-12">
                    <span class="text-orange fs-3">
                        Solution Impact:
                    </span>
                    <p class="text-black fs-5">
                        This package builds a strong brand identity, making your business memorable and trustworthy.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center space-extra">
            <div class="col-12 text-center">
                <span class="text-black display-3"> Digital<span class="text-orange"> Marketing</span>
                </span>
                <p class="text-black fs-4">
                    Boost your brand’s visibility and attract customers with expert SEO, social media, and targeted ads.
                    Cody Zea helps you stand out and drive real results!
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6 vh-100 bg-black">
                <div class="col-12 col-lg-7 offset-0 offset-lg-7 mt-4" id="scrollableDiv">
                    <?php $dd = $d_r->fetch_assoc(); ?>
                    <div class="price-box th-ani " style="z-index: 7 !important; border-bottom: 2px solid #FF5C35;">
                        <span class="offer-tag"></span>
                        <div class="text-center">
                            <h3 class="box-title"><?php echo $dd["pack_name"]; ?></h3>
                            <h4 class="box-price text-center text-orange">NZ$ <?php echo $dd["pack_price"]; ?></h4>
                            <p class="box-text2 text-black"><?php echo $dd["pack_desc"]; ?></p>
                        </div>
                        <a href="package-details.php?package_identity=<?php echo $dd["pack_id"]; ?>" class="th-btn style4 btn-fw th-radius th-icon fs-5">Get Started<i
                                class="fa-regular fa-arrow-right ms-2"></i></a>
                        <div class="box-content">
                            <div class="available-list">
                                <ul>
                                    <ul>
                                        <?php
                                        $fd = Databases::Search("SELECT * FROM `pack_features` WHERE `pack_pack_id` = '" . $dd["pack_id"] . "' AND `status` = 1");
                                        for ($x = 0; $x < 2; $x++) {
                                            $ff = $fd->fetch_assoc();
                                        ?>
                                            <li class="text-black"><?php echo $ff["f_name"]; ?></li>
                                        <?php
                                        }
                                        $rest = $fd->num_rows - 2;
                                        ?>
                                        <div class="d-none mb-3" id="showMoreList_<?php echo $dd['pack_id']; ?>">
                                            <?php
                                            for ($x = 0; $x < $rest; $x++) {
                                                $ff = $fd->fetch_assoc();
                                            ?>
                                                <li class="text-black"><?php echo $ff["f_name"]; ?></li>
                                            <?php
                                            }
                                            ?>
                                        </div>

                                    </ul>

                                </ul>
                            </div>
                        </div>
                        <div class="text-center text-dark mt-3">
                            <span class="text-dark fw-bold h5" style="cursor: pointer;" onclick="showMore(<?php echo $dd['pack_id']; ?>);" id="showMoreBtn_<?php echo $dd['pack_id']; ?>"><i class="bi bi-chevron-double-down h6"></i>&nbsp;More Features</span>
                        </div>
                    </div>
                </div>

                <script>
                    const scrollableDiv = document.getElementById('scrollableDiv');
                    scrollableDiv.addEventListener('scroll', () => {
                        if (scrollableDiv.scrollHeight - scrollableDiv.scrollTop === scrollableDiv.clientHeight) {
                            alert('Hi');
                        }
                    });
                </script>

            </div>
            <div class="col-12 col-lg-1">

            </div>
            <div class="col-12 col-lg-4 space">
                <div class="col-12 mt-0 mt-lg-5">
                    <span class="text-orange fs-3">
                        The Problem :
                    </span>
                    <p class="text-black fs-5">
                        Startups often struggle to attract customers due to poor digital marketing and low online
                        visibility.
                    </p>
                </div>
                <div class="col-12">
                    <span class="text-orange fs-3">
                        Solution Impact:
                    </span>
                    <p class="text-black fs-5">
                        This package ensures people find your business online and engage with your content, leading to
                        higher conversions and sales. </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container space">
        <div class="row">
            <div class="row">
                <div class="col-xl-6">
                    <div class="me-xl-5 pe-xl-3">
                        <div class="title-area mb-30 text-center text-xl-start">
                            <span class="sub-title sub-title7 style1 text-ani-style2">FAQS</span>
                            <h2 class="sec-title text-ani-style3">Have Any Questions?</h2>
                            <p class="text-black fs-4">We know you might have questions about our startup solutions—so
                                we’ve answered the most common ones below. If you need more details, feel free to reach
                                out!</p>
                        </div>
                        <div class="text-center text-xl-start">
                            <a href="contact.html" class="th-btn style4 th-radius fs-5">Ask a Question</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 mt-35 mt-xl-0">
                    <div class="accordion-area accordion" id="faqAccordion">
                        <div class="accordion-card active">
                            <div class="accordion-header" id="collapse-item-1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">How
                                    long does it take to build my startup website?</button>
                            </div>
                            <div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="collapse-item-1"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text text-black">For standard business websites, we can have it ready
                                        in 4-6 days. Complex websites with advanced features may take 2-4 weeks. We will
                                        provide a clear timeline before we start so you're always informed.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">Can I
                                    update my website myself?</button>
                            </div>
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="collapse-item-2"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text text-black">Yes! We provide an easy-to-use content management
                                        system (CMS) for your website. You can edit text, images, and pages at any time
                                        without technical knowledge. We also offer training if needed.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">Is the
                                    website mobile-friendly?</button>
                            </div>
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="collapse-item-3"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text text-black">Absolutely! We ensure that every website we build is
                                        mobile-responsive, meaning it will look great and work smoothly on all devices,
                                        from phones and tablets to desktops.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">Do you
                                    offer SEO services to improve my site’s visibility?</button>
                            </div>
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="collapse-item-4"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text text-black">Yes! We build all our websites with SEO best
                                        practices to help you rank higher in search engines. We also offer ongoing SEO
                                        services to keep improving your visibility online.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">How
                                    much does the branding and website package cost?</button>
                            </div>
                            <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="collapse-item-5"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text text-black">Pricing depends on your specific needs and the
                                        features you want. We offer flexible packages that can be tailored to your
                                        startup’s budget. <span class="text-orange text-decoration-underline">Contact
                                            us</span> for a free consultation and quote!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <section class="d-flex justify-content-center">
        <div class="container mt-5 m-5">
            <div class="row bg-black rounded-20 p-2 p-lg-5">
                <div class="col-12 col-lg-4">
                    <img src="assets/conillus.png" class="img-fluid w-75" alt="ContactUsIllustration">
                </div>
                <div class="col-12 col-lg-8">
                    <span class="text-white display-4">Ready to Take Your Startup to the Next Level?</span>
                    <p class="text-white fs-4">
                        Our comprehensive web design, branding, and digital marketing solutions are crafted to bring
                        your business vision to life. Whether you're looking to build your online presence, improve
                        brand visibility, or engage more customers, we’re here to help!
                    </p>
                    <div class="text-center text-xl-start">
                        <a href="contact.php" class="th-btn style4 th-radius fs-5 bg-orange">Let’s Talk About Your
                            Project</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================
    Footer Area==============================-->
    <?php require_once "footer.php" ?>

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

    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <script src="assets/js/pricing.js"></script>
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