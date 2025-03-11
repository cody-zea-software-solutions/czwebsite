<?php
require_once "guest.php";
$query = "SELECT * FROM `cart` INNER JOIN pack ON  pack.pack_id = cart.pack_id INNER JOIN solution ON solution.sol_id = pack.solution_sol_id WHERE `user_id` = " . $_SESSION['user_id'] . " ORDER BY `cart_id` DESC";
$res = Databases::search($query);
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Codyzea - Cart</title>
    <meta name="author" content="Cody Zea Software Solutions">
    <meta name="description"
        content="Review your selected digital solutions before checkout. Complete your order with Cody Zea Software Solutions for expert web development, branding, and more.">
    <meta name="keywords"
        content="Cody Zea, Shopping Cart, Checkout, Digital Solutions, Web Development, Branding, E-Commerce, App Development">
    <meta name="robots" content="NOINDEX, NOFOLLOW">


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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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

    <style>
        /* Basic spinner styles */
        .spinner-border {
            width: 2rem;
            height: 2rem;
            border: 0.3em solid transparent;
            border-top-color: #ffffff;
            /* Spinner color */
            border-radius: 50%;
            animation: spin 1s linear infinite;
            display: inline-block;
            /* Ensures the spinner is inline with text */
        }

        /* Spinner rotation animation */
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Optional: Add a custom text for "loading" */
        .visually-hidden {
            visibility: hidden;
        }
    </style>


</head>

<body>

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

    <?php require_once "header.php"; ?>


    <!--============================== Cart Area ==============================-->
    <div class="th-cart-wrapper  space-extra" style="margin-top: 80px !important;">
        <div class="container">
            <div class="woocommerce-notices-wrapper d-none">
                <div class="woocommerce-message">Shipping costs updated.</div>
            </div>
            <div class="woocommerce-cart-form">

                <?php

                $subtotal = 0;
                $distotal = 0;
                $final_price = 0;
                $discount = 0;

                if ($res->num_rows == 0) {
                    ?>
                    <div class="py-5 bg-color my-5"><span class="text-dark h6">Cart is Empty</span><br>
                        <a href="pricing.php" class="h4 text-orange text-decoration-underline mt-5">Continue Shopping</a>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="mt-5 text-dark text-start fw-semibold "><a href="pricing.php"
                            class="text-o text-decoration-underline"><i class="fa fa-long-arrow-left"
                                aria-hidden="true"></i>&nbsp;Back to Shopping</a></div>
                    <table class="cart_table mt-2">
                        <thead>
                            <tr>
                                <th class="cart-col-image"></th>
                                <th class="cart-col-productname h6 fw-normal">Package Name</th>
                                <th class="cart-col-price h6 fw-normal">Category</th>
                                <th class="cart-col-price h6 fw-normal">Price</th>
                                <th class="cart-col-remove h6 fw-normal"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            for ($x = 0; $x < $res->num_rows; $x++) {
                                $results = $res->fetch_assoc();
                                $subtotal = $subtotal + $results['pack_price'];
                                $beforePriceAdded = 0;

                                ?>
                                <tr class="cart_item">
                                    <td data-title="Product">
                                        <a class="cart-productimage rounded-20" href="pricing.php"><img width="91" height="91"
                                                src="<?php echo $results['img_path'] ?>" alt="Image"></a>
                                    </td>
                                    <td data-title="Name">
                                        <a class="cart-productname h6 text-o"><?php echo $results['pack_name'] ?></a>
                                    </td>
                                    <td data-title="Price">
                                        <span class="cart-productname text-o h6"><?php echo $results['sol_name'] ?></span>
                                    </td>
                                    <td data-title="Total">
                                        <span
                                            class="amount h5 text-orange"><bdi><span>$</span><?php echo $results['pack_price'] ?></bdi></span>
                                    </td>
                                    <td data-title="Remove">
                                        <a onclick="removeFromCart('<?php echo $results['cart_id'] ?>','<?php echo $subtotal; ?>');"
                                            class="remove hover"><i class="fal fa-trash-alt text-dark"></i></a>
                                    </td>
                                </tr>
                                <?php

                                $coupond = Databases::Search("SELECT * FROM `user_has_coupon` INNER JOIN `coupon` ON `coupon`.`c_id` = `user_has_coupon`.`coupon_id` WHERE `user_id` = '" . $_SESSION['user_id'] . "' AND `c_status` = '1' ");
                                if ($coupond->num_rows == 1) {
                                    $coupon = $coupond->fetch_assoc();
                                    $cid = Databases::Search("SELECT * FROM `coupon_offers` WHERE `coupon_id`='" . $coupon['c_id'] . "' AND `pack_id`='" . $results['pack_id'] . "' ");
                                    if ($cid->num_rows != 0) {
                                        while ($ci = $cid->fetch_assoc()) {
                                            if ($ci['offer_pack_id'] == 0) {

                                                ?>
                                                <tr class="cart_item">
                                                    <td data-title="Product">
                                                        <a class="cart-productimage rounded-20" href="pricing.php"><img width="91" height="91"
                                                                src="assets\img\product\offer_img.jpg" alt="Image"></a>
                                                    </td>
                                                    <td data-title="Name">
                                                        <a class="cart-productname h6 text-o"><?php echo $ci['offer_name'] ?></a>
                                                    </td>
                                                    <td data-title="Price">
                                                        <span class="cart-productname text-orange h6 text-uppercase">Special Offers</span>
                                                    </td>
                                                    <td data-title="Total">
                                                        <span class="amount h5 text-orange"><bdi>FREE</bdi></span>
                                                    </td>
                                                    <td data-title="Remove">

                                                    </td>
                                                </tr>
                                                <?php

                                            } else {
                                                $pod = Databases::Search("SELECT * FROM `pack` INNER JOIN `solution` ON `pack`.`solution_sol_id` = `solution`.`sol_id` WHERE `pack_id` = '" . $ci['offer_pack_id'] . "' ");
                                                if ($pod->num_rows == 1) {
                                                    $po = $pod->fetch_assoc();
                                                    $subtotal = $subtotal + $po['pack_price'];
                                                    $distotal = $distotal + $po['pack_price'];
                                                    if ($beforePriceAdded == 0) {
                                                        $distotal = $distotal + $results['pack_price'];
                                                        $beforePriceAdded == 1;
                                                    }
                                                    $isPrintedD = Databases::Search("SELECT * FROM `cart` WHERE `user_id`= '" . $_SESSION['user_id'] . "' AND `pack_id`='" . $ci['offer_pack_id'] . "' ");
                                                    if ($isPrintedD->num_rows == 0) {

                                                        ?>
                                                        <tr class="cart_item">
                                                            <td data-title="Product">
                                                                <a class="cart-productimage rounded-20" href="pricing.php"><img width="91" height="91"
                                                                        src="assets\img\product\offer_img.jpg" alt="Image"></a>
                                                            </td>
                                                            <td data-title="Name">
                                                                <a class="cart-productname h6 text-o"><?php echo $po['pack_name'] ?></a>
                                                            </td>
                                                            <td data-title="Price">
                                                                <span class="cart-productname text-o h6"><?php echo $po['sol_name'] ?><br><span
                                                                        class="text-orange text-uppercase">Special Offers</span></span>
                                                            </td>
                                                            <td data-title="Total">
                                                                <span
                                                                    class="amount h5 text-orange"><bdi><span>$</span><?php echo $po['pack_price'] ?></bdi></span>
                                                            </td>
                                                            <td data-title="Remove"></td>
                                                        </tr>
                                                        <?php

                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            ?>
                            <tr>
                                <td colspan="6" class="actions pb-0">
                                    <?php
                                    $coupond = Databases::Search("SELECT * FROM `user_has_coupon` INNER JOIN `coupon` ON `coupon`.`c_id` = `user_has_coupon`.`coupon_id` WHERE `user_id` = '" . $_SESSION['user_id'] . "' AND `c_status` = '1' ");
                                    if ($coupond->num_rows == 0) {
                                    ?>
                                        <div class="th-cart-coupon mt-4">
                                            <input type="text" class="form-control" placeholder="Coupon Code..." id="c_code">
                                            <button type="submit" class="th-btn rounded-pill text-white"
                                                onclick="applyCoupon(<?php echo $subtotal; ?>);">Apply Coupon</button>
                                        </div>
                                    <?php
                                    } elseif ($coupond->num_rows == 1) {
                                        $coupon = $coupond->fetch_assoc();
                                        $couponHasPackD = Databases::Search("SELECT * FROM `coupon_offers` WHERE `coupon_id`='" . $coupon['c_id'] . "' AND `offer_pack_id` != 0 ");
                                        if ($couponHasPackD->num_rows == 0) {
                                            if ($coupon['c_mode'] == 1) {
                                                $max_expend = $coupon['max_expend'];
                                                $discount = $coupon['amount'];

                                                if ($subtotal >= $max_expend) {
                                                    $final_price = $subtotal - $discount;
                                                    // Ensure final price has exactly two decimal places
                                                    $final_price = number_format($final_price, 2, '.', '');
                                                }
                                            }

                                            if ($coupon['c_mode'] == 2) {
                                                $max_expend = $coupon['max_expend'];
                                                $percentage = $coupon['amount'];

                                                if ($subtotal >= $max_expend) {
                                                    $perc = $subtotal * $percentage / 100;
                                                    $final_price = $subtotal - $perc;
                                                    // Ensure final price has exactly two decimal places
                                                    $final_price = number_format($final_price, 2, '.', '');
                                                    $discount = $subtotal - $final_price;
                                                }
                                            }
                                        } else {
                                            if ($coupon['c_mode'] == 1) {
                                                $max_expend = $coupon['max_expend'];
                                                $discount = $coupon['amount'];

                                                if ($subtotal >= $max_expend) {
                                                    $final_price = $subtotal - $discount;
                                                    // Ensure final price has exactly two decimal places
                                                    $final_price = number_format($final_price, 2, '.', '');
                                                }
                                            }

                                            if ($coupon['c_mode'] == 2) {
                                                $max_expend = $coupon['max_expend'];
                                                $percentage = $coupon['amount'];

                                                        if ($distotal >= $max_expend) {
                                                            $perc = $distotal * $percentage / 100;
                                                            $final_price = $subtotal - $perc;
                                                            // Ensure final price has exactly two decimal places
                                                            $final_price = number_format($final_price, 2, '.', '');
                                                            $discount = $subtotal - $final_price;
                                                        }
                                                    }
                                                }



                                            ?>
                                                <div class="coupon p-3 mt-md-3 rounded-0 bg-color"
                                                    style="border: 2px dashed rgb(167, 162, 162) !important;">
                                                    <span
                                                        class="coupon-text text-o fw-semibold mx-3"><?php echo $coupon['c_code'] ?></span>
                                                    <button class="remove-coupon-btn text-o fw-bold ms-3"
                                                        onclick="removeCoupon(<?php echo $coupon['uc_id']; ?>);">×</button>
                                                </div>
                                            <?php
                                            }
                                            $subtotal = number_format($subtotal, 2, '.', '');
                                            ?>

                                            <!-- Discount Process  End -->

                                        </div>
                                    <?php
                                    $subtotal = number_format($subtotal, 2, '.', '');
                                    }
                                    ?>

                                    <a class="pe-5 h2 text-o mt-4 d-none d-md-block"><i
                                            class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            

                        </tbody>
                    </table>
                    <?php
                }
                ?>

            </div>
            <div class="row justify-content-end">
                <div class="col-md-4 col-lg-5 col-xl-6 order-2 order-md-1">
                    <div class="row">
                        <div class="col-12">
                            <div class="row pe-md-5 pt-5">
                                <div class="col-12 mt-4 bg-color" style="height: 200px; border-radius: 30px; 
                    background-image: url('assets/pin_7.jpg'); 
                    background-size: cover; 
                    background-position: center; ">
                                </div>
                                <div class="col-12 h6 fw-semibold text-o mt-5 text-center">Select your <span
                                        class="text-orange">desired packages</span> , apply any available <span
                                        class="text-orange">coupons for discounts</span>, review your order, and <span
                                        class="text-orange">proceed to get a quotation.</span></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-8 col-lg-7 col-xl-6 order-1 order-md-2">
                    <h2 class="h3 summary-title text-end">Package Totals</h2>
                    <table class="cart_totals mt-4">
                        <tbody>
                            <tr>
                                <td><span class="h6 fw-semibold text-o">Subtotal</span></td>
                                <td data-title="Cart Subtotal">
                                    <span
                                        class="amount h6"><bdi><span>&nbsp;&nbsp;&nbsp;$</span><?php echo $subtotal; ?></bdi></span>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="h6 fw-semibold text-o">Discount</span></td>
                                <td data-title="Cart Subtotal">
                                    <span class="amount h6"><bdi><span>- $</span><?php echo $discount; ?></bdi></span>
                                </td>
                            </tr>
                        </tbody>

                        <?php
                        $coupond = Databases::Search("SELECT * FROM `user_has_coupon` INNER JOIN `coupon` ON `coupon`.`c_id` = `user_has_coupon`.`coupon_id` WHERE `user_id` = '" . $_SESSION['user_id'] . "' AND `c_status` = '1' ");
                        if ($coupond->num_rows == 0) {
                            $final_price = $subtotal;
                        }
                        ?>

                        <tfoot>
                            <tr class="order-total">
                                <td><span class="h6 fw-semibold text-orange">Order Total</span></td>
                                <td data-title="Total">
                                    <strong><span
                                            class="amount h6"><bdi><span>&nbsp;&nbsp;&nbsp;$</span><?php echo $final_price; ?></bdi></span></strong>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="wc-proceed-to-checkout text-center mt-5">
                        <button type="submit" class="th-btn rounded-pill text-white fs-4 mt-3" data-bs-target="#qModal"
                            data-bs-toggle="modal">Get a Quotation&nbsp;<i class="fa fa-credit-card-alt ms-2"></i></button>
                    </div>
                    <div class="text-secondary text-center mt-4 mb-30">Request a <b>quotation</b> to get more details and proceed with your order.</div>

                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" style="z-index: 1000;" id="qModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content rounded-0 border-0">
                        <div class="modal-body m-0 p-0">
                            <div class="row m-0 p-0">
                                <div class="col-12 col-lg-6 p-0 m-0 d-none d-lg-block border-end border-dark"
                                    style="background-image: url('assets/wprocess.jpg'); background-size: cover;">

                                </div>
                                <div class="col-12 col-lg-6 p-4">
                                    <div class="col-12 d-flex justify-content-end" data-bs-dismiss="modal">
                                        <i class="fa-light fa-xmark-large fs-4 text-black" style="cursor: pointer;"></i>
                                    </div>
                                    <span class="display-6 text-orange fw-bold">Get Your Free Quote!
                                    </span>
                                    <div class="col-12 mt-3">
                                        <span class="text-o fs-4 ">Fill in the details, and we’ll send you a custom
                                            quotation.
                                        </span>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="uname">
                                    </div>
                                    <div class="col-12 mt-4">
                                        <label for="exampleFormControlInput1" class="form-label">Company Name</label>
                                        <input type="text" class="form-control" id="cname">
                                    </div>
                                    <div class="col-12 mt-3">
                                        <label for="exampleFormControlInput1" class="form-label">E mail</label>
                                        <input type="text" class="form-control" id="uemail">
                                    </div>
                                    <div class="col-12 mt-3">
                                        <label for="exampleFormControlInput1" class="form-label">Mobile</label>
                                        <input type="text" class="form-control" id="umobile">
                                    </div>
                                    <div class="col-12 mt-5 d-flex justify-content-center">
                                        <div class="text-center text-xl-start col-10">
                                            <a onclick="getAQ(<?php echo $_SESSION['user_id']; ?>);" id="th-btnq"
                                                style="cursor: pointer;"
                                                class="th-btn th-radius fs-5 fs-5 col-12 text-white text-decoration-none ">
                                                Send&nbsp;<i class="fa fa-paper-plane ms-2"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

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