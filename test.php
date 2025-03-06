<?php
require_once "assets/process/database.php";
$_POST['uid'] = 2;
$_POST['uname'] = "sdf sdf sdf";
$_POST['uemail'] = 'fasa@gmail.com';
$_POST['umobile'] = '+84548 54 855';

$uid = $_POST['uid'];
$uname = $_POST['uname'];
$uemail = $_POST['uemail'];
$umobile = $_POST['umobile'];

$query = "SELECT * FROM `cart` INNER JOIN pack ON  pack.pack_id = cart.pack_id INNER JOIN solution ON solution.sol_id = pack.solution_sol_id WHERE `user_id` = " . $uid . " ORDER BY `cart_id` DESC";
$res = Databases::search($query);
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style2.css">
  <link rel="stylesheet" href="assets/css/pricing-styles.css">

</head>

<body>

  <div class="container">
    <div class="row mt-5">
      <div class="col-12 text-center text-uppercase h3">cart quotation</div>
      <div class="col-12 h5"><span class="text-o">Name : </span><?php echo $uname; ?></div>
      <div class="col-12 h5"><span class="text-o">Email : <a href="mailto:<?php echo $uemail; ?>" class="text-decoration-underline"><?php echo $uemail; ?> </a></div>
      <div class="col-12 h5"><span class="text-o">Mobile : </span><a href="https://wa.me/<?php echo $umobile; ?>" class="text-dark text-decoration-underline" target="_blank">
          <?php echo $umobile; ?>
        </a></div>
    </div>
    <div class="row">
      <div class="col-12">

        <?php

        $subtotal = 0;
        $distotal = 0;
        $final_price = 0;
        $discount = 0;

        if ($res->num_rows == 0) {
        ?>
          <div class="py-5 bg-color my-5"><span class="text-dark h6">Cart is Empty</span>
          </div>
        <?php
        } else {
        ?>

          <div class="row">
            <div class="col-12">

              <div class="row mt-5 border-bottom border-dark">
                <div class="col-5 text-center h5 text-o">Package Name</div>
                <div class="col-5 text-center h5 text-o">Solution Name</div>
                <div class="col-2 text-center h5 text-o">Price</div>
              </div>

              <?php

              for ($x = 0; $x < $res->num_rows; $x++) {
                $results = $res->fetch_assoc();
                $subtotal = $subtotal + $results['pack_price'];
                $beforePriceAdded = 0;

              ?>

                <div class="row mt-5">
                  <div class="col-5 text-center h6"><?php echo $results['pack_name'] ?></div>
                  <div class="col-5 text-center h6"><?php echo $results['sol_name'] ?></div>
                  <div class="col-2 text-center h6 text-orange">$&nbsp;<?php echo $results['pack_price'] ?></div>
                </div>

                <?php

                $coupond = Databases::Search("SELECT * FROM `user_has_coupon` INNER JOIN `coupon` ON `coupon`.`c_id` = `user_has_coupon`.`coupon_id` WHERE `user_id` = '" . $uid . "' AND `c_status` = '1' ");
                if ($coupond->num_rows == 1) {
                  $coupon = $coupond->fetch_assoc();
                  $cid = Databases::Search("SELECT * FROM `coupon_offers` WHERE `coupon_id`='" . $coupon['c_id'] . "' AND `pack_id`='" . $results['pack_id'] . "' ");
                  if ($cid->num_rows != 0) {
                    while ($ci = $cid->fetch_assoc()) {
                      if ($ci['offer_pack_id'] == 0) {

                ?>
                        <div class="row">
                          <div class="col-5 text-center h6"><?php echo $ci['offer_name'] ?></div>
                          <div class="col-5 text-center h6 text-orange">Special Offers</div>
                          <div class="col-2 text-center h6 text-orange">FREE</div>
                        </div>
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

                            <div class="row">
                              <div class="col-5 h6 text-center"><?php echo $po['pack_name'] ?></div>
                              <div class="col-5 h6 text-center"><?php echo $po['sol_name'] ?> || <span class="text-orange">FREE or DISCOUNT</span></div>
                              <div class="col-2 h6 text-center text-orange">$<?php echo $po['pack_price'] ?></div>
                            </div>
                              <?php

                          }
                        }
                      }
                    }
                  }
                }
                ?>
                <hr>
              <?php
              }
              ?>
            </div>
          </div>

          <div class="row">
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
              <div class="col-12">
                <div class="row">
                  <div class="w-auto p-3 mt-md-3 rounded-0 bg-color"
                    style="border: 2px dashed rgb(167, 162, 162) !important;">
                    <span
                      class="coupon-text text-o fw-semibold mx-3">Coupon Code : &nbsp;<?php echo $coupon['c_code'] ?></span>

                  </div>
                </div>
              </div>
            <?php
            }
            $subtotal = number_format($subtotal, 2, '.', '');
            ?>

            <!-- Discount Process  End -->

            <div class="col-12">
              <h2 class="text-end">Package Totals</h2>
              <table class="mt-4">
                <tbody>
                  <tr>
                    <td><span class="h6 fw-semibold text-o">Subtotal</span></td>
                    <td data-title="Cart Subtotal">
                      <span
                        class="amount h6"><bdi><span>&nbsp;&nbsp;&nbsp;$&nbsp;</span><?php echo $subtotal; ?></bdi></span>
                    </td>
                  </tr>
                  <tr>
                    <td><span class="h6 fw-semibold text-o">Discount</span></td>
                    <td data-title="Cart Subtotal">
                      <span class="amount h6"><bdi><span>- $&nbsp;</span><?php echo $discount; ?></bdi></span>
                    </td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr class="order-total">
                    <td><span class="h6 fw-semibold text-orange">Order Total</span></td>
                    <td data-title="Total">
                      <strong><span
                          class="amount h6 text-orange"><bdi><span>&nbsp;&nbsp;&nbsp;$&nbsp;</span><?php echo $final_price; ?></bdi></span></strong>
                    </td>
                  </tr>
                </tfoot>
              </table>
            </div>

          </div>
        <?php
        }
        ?>

      </div>
    </div>
  </div>

</body>

</html>