<!DOCTYPE html>
<html>

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

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="width: 100%; background-color: #ffffff; border-collapse: collapse; padding: 20px;">
        <tr>
            <td style="background-color: #e67e22; color: #ffffff; text-align: center; padding: 15px; font-size: 30px; padding-top: 25px; padding-bottom: 25px;">
                CART QUOTATION
            </td>
        </tr>
        <tr>
            <td style="padding: 20px;">
                <p>ID : <strong><?php echo $uid; ?></strong> </p>
                <p>Full Name : <strong><?php echo $uname; ?></strong> </p>
                <p>Company Name : <strong><?php echo $cname; ?></strong> </p>
                <p>Date : <strong><?php echo $date; ?></strong> </p>
                <p>Email : <strong><a href="mailto:<?php echo $uemail; ?>" style="color: #e67e22; text-decoration: underline;"><?php echo $uemail; ?></a></strong> </p>
                <p>Mobile : <strong><a href="https://wa.me/<?php echo $umobile; ?>" style="color: #e67e22; text-decoration: underline;"><?php echo $umobile; ?></a></strong> </p>
            </td>
        </tr>
        <tr>
            <td style="padding: 20px;">
                <table role="presentation" width="100%" cellpadding="5" cellspacing="0" style="border-collapse: collapse; width: 100%; text-align: left;">
                    <tr style="background-color: #e67e22; color: #ffffff;">
                        <th style="padding: 10px; text-align: left;">Package Name</th>
                        <th style="padding: 10px; text-align: left;">Solution Name</th>
                        <th style="padding: 10px; text-align: left;">Price</th>
                    </tr>
                    <tr style="background-color: #f9f9f9; ">
                        <td style="padding: 10px;"></td>
                        <td style="padding: 10px; color: #e67e22;"></td>
                        <td style="padding: 10px; color: #e67e22;"></td>
                    </tr>

                    <?php

                    $subtotal = 0;
                    $distotal = 0;
                    $final_price = 0;
                    $discount = 0;

                    if ($res->num_rows == 0) {
                        die("er");
                    } else {

                        for ($x = 0; $x < $res->num_rows; $x++) {
                            $results = $res->fetch_assoc();
                            $subtotal = $subtotal + $results['pack_price'];
                            $beforePriceAdded = 0;
                    ?>

                            <tr style="background-color: #f9f9f9;">
                                <td style="padding: 10px;"><?php echo $results['pack_name'] ?></td>
                                <td style="padding: 10px;"><?php echo $results['sol_name'] ?></td>
                                <td style="padding: 10px; color: #e67e22;"><strong>$&nbsp;<?php echo $results['pack_price'] ?></strong></td>
                            </tr>

                            <?php

                            $coupond = Databases::Search("SELECT * FROM `user_has_coupon` INNER JOIN `coupon` ON `coupon`.`c_id` = `user_has_coupon`.`coupon_id` WHERE `user_id` = '" . $uid . "' AND `c_status` = '1' ");
                            if ($coupond->num_rows == 1) {
                                $coupon = $coupond->fetch_assoc();
                                $copid = $coupon['c_id'];
                                $cid = Databases::Search("SELECT * FROM `coupon_offers` WHERE `coupon_id`='" . $coupon['c_id'] . "' AND `pack_id`='" . $results['pack_id'] . "' ");
                                if ($cid->num_rows != 0) {
                                    while ($ci = $cid->fetch_assoc()) {
                                        if ($ci['offer_pack_id'] == 0) {
                            ?>
                                            <tr style="background-color: #f9f9f9;">
                                                <td style="padding: 10px;"><?php echo $ci['offer_name'] ?></td>
                                                <td style="padding: 10px; color: #e67e22;">Special Offers</td>
                                                <td style="padding: 10px; color: #e67e22;"><strong>Special Offers</strong></td>
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
                                                $isPrintedD = Databases::Search("SELECT * FROM `cart` WHERE `user_id`= '" . $uid . "' AND `pack_id`='" . $ci['offer_pack_id'] . "' ");
                                                if ($isPrintedD->num_rows == 0) {

                                            ?>

                                                    <tr style="background-color: #f9f9f9;">
                                                        <td style="padding: 10px;"><?php echo $po['pack_name'] ?></td>
                                                        <td style="padding: 10px; color: #e67e22;"><?php echo $po['sol_name'] ?> || <span class="text-orange">FREE or DISCOUNT</span></td>
                                                        <td style="padding: 10px; color: #e67e22;"><strong>$&nbsp;<?php echo $po['pack_price'] ?></strong></td>
                                                    </tr>
                            <?php

                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            ?>
                            <tr style="background-color: #f9f9f9; border-bottom: 1px solid rgb(124, 124, 124);">
                                <td style="padding: 10px;"></td>
                                <td style="padding: 10px; color: #e67e22;"></td>
                                <td style="padding: 10px; color: #e67e22;"></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </table>
            </td>
        </tr>

        <!-- Discount Process  Start -->

        <?php
        $coupond = Databases::Search("SELECT * FROM `user_has_coupon` INNER JOIN `coupon` ON `coupon`.`c_id` = `user_has_coupon`.`coupon_id` WHERE `user_id` = '" . $uid . "' AND `c_status` = '1' ");
        if ($coupond->num_rows == 1) {
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
            <tr>
                <td style="padding-right: 20px; text-align: right;">
                    <p>Coupon Code :: <strong><?php echo $coupon['c_code'] ?> </strong> </p>
                </td>
            </tr>
        <?php
        }
        $subtotal = number_format($subtotal, 2, '.', '');
        ?>

        <!-- Discount Process  End -->

        <?php
        $coupond = Databases::Search("SELECT * FROM `user_has_coupon` INNER JOIN `coupon` ON `coupon`.`c_id` = `user_has_coupon`.`coupon_id` WHERE `user_id` = '" . $uid . "' AND `c_status` = '1' ");
        if ($coupond->num_rows == 0) {
            $final_price = $subtotal;
        }
        ?>

        <tr>
            <td style="padding: 20px; text-align: right;">
                <p>Subtotal : <strong><?php echo $subtotal; ?></strong>
                <p>
                <p>Discount : <strong>- <?php echo $discount; ?></strong></p>
                <p style="font-size: 20px; color: #e67e22;">Total : <strong><?php echo $final_price; ?></strong></p>
            </td>
        </tr>
        <tr>
            <td style="background-color: #e67e22; color: #ffffff; text-align: center; padding: 15px;">
                &copy; 2025 Codyzea
            </td>
        </tr>
    </table>
</body>

</html>