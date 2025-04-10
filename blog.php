<?php
session_start();
require_once "db.php"; ?>
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
    <title>Codyzea - Tech Talks: Exploring the World of Software</title>
    <meta name="author" content="Cody Zea Software Solutions">
    <meta name="description" content="Stay updated with the latest trends, insights, and expert tips on web development, branding, digital marketing, and business growth.">
    <meta name="keywords" content="Cody Zea, Blog, Digital Marketing Tips, Web Development, Branding Strategies, Business Growth, E-Commerce Insights">
    <meta name="robots" content="INDEX,FOLLOW">


    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png">

    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/logocz.png">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">

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

<body id="top">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KDPFLMB3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->



    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->



    <!--********************************
   		Code Start From Here 
	******************************** -->

    <!--==============================
     Preloader
  ==============================-->
    <div class="preloader ">
        <button class="th-btn style1 preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <img src="assets/img/logo.svg" alt="Rasm">
            <span class="loader"></span>
        </div>
    </div>
    <div class="popup-search-box d-none d-lg-block">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="What are you looking for?">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>

    <?php require_once "header.php"; ?>


    <div class="container space-extra">
        <!--============================== Blog Area ==============================-->
        <section class="th-blog-wrapper space-top ">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-8 col-lg-7" id="resultsView">

                        <?php
                        $pass = 0;
                        if (isset($_SESSION['blog_id'])) {
                            $blid = $_SESSION['blog_id'];
                            echo $blid;
                            $db = Databases::Search("SELECT * FROM `blogs` INNER JOIN `blog_categories` ON `blogs`.`blog_categories_bc_id` = `blog_categories`.`bc_id` WHERE `blogs`.`blog_id`='$blid' ORDER BY `blog_date` ASC ");
                            if ($db->num_rows == 1) {
                                $res = $db->fetch_assoc();
                                $formattedDate = date('F j, Y', strtotime($res['blog_date']));
                        ?>

                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        // Get the element by id
                                        const targetElement = document.getElementById('ddd');

                                        if (targetElement) {
                                            // Scroll to the element
                                            targetElement.scrollIntoView({
                                                behavior: 'smooth', // For smooth scrolling
                                                block: 'start' // Scroll to the top of the element
                                            });
                                        }
                                    });
                                </script>

                                <div class="th-blog blog-single has-post-thumbnail" id="ddd">
                                    <div class="blog-img">
                                        <a href=""><img src="<?php echo $res['blog_img']; ?>" alt="Blog Image"></a>
                                    </div>
                                    <div class="blog-content" >
                                        <div class="blog-meta">
                                            <a href="" class="text-orange"><i class="fa-light fa-calendar"></i><?php echo $formattedDate; ?></a>
                                            <a href="" class="text-orange"><i class="fa-light fa-tags"></i> <?php echo $res['bc_name']; ?></a>
                                        </div>
                                        <h3 class="blog-title"><a href=""><?php echo $res['blog_name']; ?></a>
                                        </h3>
                                        <p class="blog-text text-secondary " id="blogDesc<?php echo $res['blog_id']; ?>">
                                            <?php echo $res['blog_desc']; ?>
                                        </p>
                                        <a href="javascript:void(0);" onclick="toggleReadMore(<?php echo $res['blog_id']; ?>)" id="readMoreBtn<?php echo $res['blog_id']; ?>" class="th-btn black-border th-icon th-radius">
                                            Read Less <i class="fa-regular fa-arrow-right ms-2"></i>
                                        </a>


                                    </div>
                                </div>
                            <?php
                                $pass = $blid;
                            }
                            unset($_SESSION['blog_id']);
                        }

                        $db = Databases::Search("SELECT * FROM `blogs` INNER JOIN `blog_categories` ON `blogs`.`blog_categories_bc_id` = `blog_categories`.`bc_id` WHERE `blogs`.`blog_id` != " . $pass . " ORDER BY `blog_date` ASC ");
                        $total_pages = ceil($db->num_rows / 3);
                        if ($db->num_rows < 3) {
                            $times = $db->num_rows;
                        } else {
                            $times = 3;
                        }

                        for ($x = 1; $x <= $times; $x++) {
                            $res = $db->fetch_assoc();
                            $formattedDate = date('F j, Y', strtotime($res['blog_date']));
                            ?>
                            <div class="th-blog blog-single has-post-thumbnail">
                                <div class="blog-img">
                                    <a href=""><img src="<?php echo $res['blog_img']; ?>" alt="Blog Image"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="" class="text-orange"><i class="fa-light fa-calendar"></i><?php echo $formattedDate; ?></a>
                                        <a href="" class="text-orange"><i class="fa-light fa-tags"></i> <?php echo $res['bc_name']; ?></a>
                                    </div>
                                    <h3 class="blog-title"><a href=""><?php echo $res['blog_name']; ?></a>
                                    </h3>
                                    <p class="blog-text text-secondary truncate" id="blogDesc<?php echo $res['blog_id']; ?>">
                                        <?php echo $res['blog_desc']; ?>
                                    </p>
                                    <a href="javascript:void(0);" onclick="toggleReadMore(<?php echo $res['blog_id']; ?>)" id="readMoreBtn<?php echo $res['blog_id']; ?>" class="th-btn black-border th-icon th-radius">
                                        Read More <i class="fa-regular fa-arrow-left ms-2"></i>
                                    </a>


                                </div>
                            </div>
                        <?php
                        }
                        ?>

                        <div class="th-pagination ">
                            <ul>
                                <li onclick="blogPagination(0);"><a class="hand"><i class="fa-regular fa-arrow-left"></i></a></li>
                                <?php
                                for ($x = 1; $x <= $total_pages; $x++) {
                                ?>
                                    <li onclick="blogPagination(<?php echo $x; ?>);"><a class="hand <?php if ($x == 1) {
                                                                                                        echo "bg-orange";
                                                                                                    } ?>"><?php echo $x; ?></a></li>
                                <?php
                                }
                                ?>
                                <li onclick="blogPagination(2);"><a class="hand"><i class="fa-regular fa-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xxl-4 col-lg-5">
                        <aside class="sidebar-area">
                            <div class="widget widget_categories  ">
                                <h3 class="widget_title">Top Categories</h3>
                                <ul>
                                    <li onclick="changeCategory(event, 0);">
                                        <a class="text-o bg-orange hand" data-id="0">All Categories</a>
                                    </li>
                                    <?php
                                    $cat_db = Databases::Search("SELECT * FROM `blog_categories` WHERE `cat_p`='1' LIMIT 4 ");
                                    while ($cat = $cat_db->fetch_assoc()) {
                                    ?>
                                        <li onclick="changeCategory(event, <?php echo $cat['bc_id']; ?>);">
                                            <a class="text-o hand" data-id="<?php echo $cat['bc_id']; ?>"><?php echo $cat['bc_name']; ?></a>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="widget  ">
                                <h3 class="widget_title">Recent Posts</h3>
                                <div class="recent-post-wrap">

                                    <?php
                                    $bs_db = Databases::Search("SELECT * FROM `blog_side`");
                                    while ($bs = $bs_db->fetch_assoc()) {
                                    ?>
                                        <div class="recent-post">
                                            <div class="media-img">
                                                <a><img src="assets/img/blog/recent-post-1-1.jpg" alt="Blog Image"></a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="post-title"><a class="text-inherit"><?php echo $bs['side_name']; ?></a></h4>
                                                <div class="recent-post-meta">
                                                    <a class="text-orange"><i class="fa-sharp fa-solid fa-calendar-days text-orange"></i><?php echo $bs['side_sub_name']; ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>

                                </div>
                            </div>
                            <div class="widget widget_tag_cloud   ">
                                <h3 class="widget_title">All Categories</h3>
                                <div class="tagcloud">
                                    <a onclick="changeCategory(event, 0);" class="text-o bg-orange" data-id="0">All</a>
                                    <?php
                                    $cat_db = Databases::Search("SELECT * FROM `blog_categories` ");
                                    while ($cat = $cat_db->fetch_assoc()) {
                                    ?>
                                        <a onclick="changeCategory(event, <?php echo $cat['bc_id']; ?>);" class="text-o hand" data-id="<?php echo $cat['bc_id']; ?>"><?php echo $cat['bc_name']; ?></a>
                                    <?php
                                    }
                                    ?>
                                </div>


                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>

    </div>

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

    <!--==============================
    All Js File
============================== -->
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

</body>

</html>