<?php
require_once "assets/process/database.php";
if (isset($_GET['package_identity'])) {
    $pid = $_GET['package_identity'];

    $conn = Databases::getConnection();
    $stmt = $conn->prepare("SELECT * FROM  pack INNER JOIN solution ON solution.sol_id=pack.solution_sol_id WHERE pack_id= ? ; ");
    $stmt->bind_param("i", $pid);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows != 1) {
        die("no results were found.");
    } else {
        $data = $result->fetch_assoc();
    }
} else {
    header("Location: pricing.php");
    exit();
}
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $data['pack_name'];
            echo $data['sol_name']; ?> Package - Codyzea</title>
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

    <div class="container-fluid border-top border-dark">
        <div class="row">
            <div class="text-center mt-3">
                <span class="display-4 text-dark fw-semibold h1"><span class="sub-title sub-title4 style1 text-ani-style2 text-center">features</span><br><span class="text-orange h1"><?php echo $data['pack_name2']; ?></span> <?php echo $data['sol_name']; ?></span><br><span class="text-dark fw-semibold display-6 text-decoration-line-through">$<?php echo $data['pack_before_price']; ?></span>&nbsp;<span class="fw-semibold text-dark display-4">$<?php echo $data['pack_price']; ?></span><br>
                <span class="sub-title sub-title6 style1 text-ani-style2 mt-4 d-none d-md-inline-block text-o">This package is designed to meet your needs and drive your business toward success.</span>
                <p class="d-md-none mt-4 px-3">This package is designed to meet your needs and drive your business toward success.</p>
            </div>
            <div class="text-center mt-0 d-none">
                <span class="display-4 fw-semibold h1"><span class="text-dark h3 text-decoration-line-through">$<?php echo $data['pack_before_price']; ?></span>&nbsp;<span class=" h1 text-dark">$<?php echo $data['pack_price']; ?></span></span>
            </div>
        </div>
    </div>

    <div class="container mb-5 px-5 cdf">
        <div class="row">
            <div class="col-12 col-lg-5">
                <div class="row">
                    <div class="col-6">
                        <div style=" height: 400px; background-image: url('assets/img/adfg.jpg'); background-size: cover; background-position: center; border-radius: 40px;"></div>
                    </div>
                    <div class="col-6">
                        <div style="background-image: url('assets/img/adfg.jpg'); height: 400px; background-size: cover; background-position: center; border-radius: 40px;"></div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-7 mt-5">
                <div class="row">
                    <div class="text-center"><span class="sub-title sub-title4 style1 text-ani-style2 text-end">Target</span></div>
                    <div class="h2 ps-md-5 fw-dark text-center text-md-start">Who Needs This Package the Most?</div>

                    <!-- 10 Column div starts here -->
                    <div class="col-12 col-md-10 mt-4 mt-md-0">
                        <p class="ps-md-5 fs-5 text-dark text-center text-md-start"><?php echo $data['aud']; ?></p>
                        <div class="row d-flex justify-content-center">
                            <div class="d-flex justify-content-center"><a onclick="addToCart(<?php echo $pid; ?>);" class="th-btn th-radius th-icon text-white fs-4">Add to Cart<i
                                        class="fa-regular fa-arrow-right ms-2"></i></a></div>
                        </div>
                    </div>

                    <div class="col-2 d-md-flex flex-column justify-content-center d-none">
                        <div class="icon-container">
                            <i class="fas fa-rocket"></i> <!-- First Icon: Heart -->
                        </div>
                        <div class="icon-container">
                            <i class="fas fa-hourglass-half"></i> <!-- Second Icon: Star -->
                        </div>
                        <div class="icon-container">
                            <i class="fas fa-credit-card-alt"></i> <!-- Third Icon: Check -->
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-12 mt-3 d-md-none d-flex justify-content-center">
                <div class="icon-container" style="margin-left: 10px;">
                    <i class="fas fa-rocket"></i> <!-- First Icon: Heart -->
                </div>
                <div class="icon-container" style="margin-left: 10px;">
                    <i class="fas fa-hourglass-half"></i> <!-- Second Icon: Star -->
                </div>
                <div class="icon-container" style="margin-left: 10px;">
                    <i class="fas fa-credit-card-alt"></i> <!-- Third Icon: Check -->
                </div>
            </div>
        </div>
    </div>

    <?php
    $conn = Databases::getConnection();
    $stmt = $conn->prepare("SELECT * FROM `pack_features` WHERE `pack_pack_id`= ? AND `status`=1 ORDER BY `f_id` ASC ; ");
    $stmt->bind_param("i", $pid);
    $stmt->execute();
    $result = $stmt->get_result();
    $part1 = floor($result->num_rows / 2);
    $part2 = ceil($result->num_rows / 2);
    ?>

    <div class="container-fluid mb-5 px-5 bg-color py-5">
        <div class="row text-center">
            <h2 class="text-o mt-4">Features of the package</h2>
        </div>
        <div class="row py-5">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="row">
                    <ul class="list-unstyled">
                        <?php
                        for ($x = 1; $x <= $part1; $x++) {
                            $pack_d = $result->fetch_assoc();
                        ?>
                            <li class="d-flex align-items-center fw-light h6">
                                <i class="bi bi-clipboard-check text-orange me-2"></i>&nbsp;
                                <span><?php echo $pack_d['f_name'] ?>.</span>
                            </li>
                        <?php
                        }
                        ?>

                    </ul>
                </div>
            </div>

            <div class="col-12 d-md-none d-lg-block col-lg-4">
                <img src="assets/img/hero/hero_3_1.png" class="img-fluid pricing-image text-end">
            </div>

            <div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
                <div class="row">
                    <ul class="list-unstyled">
                        <?php
                        for ($x = 1; $x <= $part2; $x++) {
                            $pack_d = $result->fetch_assoc();
                        ?>
                            <li class="d-flex align-items-center fw-light h6">
                                <i class="bi bi-clipboard-check text-orange me-2"></i>&nbsp;
                                <span><?php echo $pack_d['f_name'] ?>.</span>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>

        </div>
        <div class="row d-flex justify-content-center">
            <div class="d-flex justify-content-center"><a onclick="addToCart(<?php echo $pid; ?>);" class="th-btn th-radius th-icon text-white fs-4">Add to Cart<i
                        class="fa-regular fa-arrow-right ms-2"></i></a></div>
        </div>
    </div>

    <div class="container-fluid mb-5 px-5">
        <div class="row d-flex justify-content-center px-md-5">
            <?php
            $result->data_seek(0);
            for ($x = 1; $x <= $result->num_rows; $x++) {
                $pack_d = $result->fetch_assoc();
            ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="row p-4">
                        <div class="col-12 shadow feature-box-2" style="border-left: 2px solid #FF5C35;">
                            <div class="mt-3 d-flex align-items-start">
                                <i class="bi bi-check-circle text-orange me-2 fw-medium h5"></i>&nbsp;
                                <span class="fw-medium h5"><?php echo $pack_d['f_name']; ?></span>
                            </div>

                            <div>
                                <p class="my-2 text-dark px-3"><?php echo $pack_d['f_desc']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="row d-flex justify-content-center my-5">
            <div class="d-flex justify-content-center"><a onclick="addToCart(<?php echo $pid; ?>);" class="th-btn th-radius th-icon text-white fs-4">Add to Cart<i
                        class="fa-regular fa-arrow-right ms-2"></i></a></div>
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
<?php $stmt->close(); ?>