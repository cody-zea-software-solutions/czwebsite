<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>3D Slider</title>
  <link rel="stylesheet" href="./styles.css">
  <style>
    .slider-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 2.5rem;
      width: clamp(22rem, 90%, 64rem);
      height: 20rem;
      margin: 0 auto;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

      /* Dark Theme */
      --bg: linear-gradient(to bottom right, #1e2022, #323439);
      --txtBg: linear-gradient(to bottom right, #d4d4d8, #52525b);
      --borderClr: rgb(65, 65, 65);
    }

    .slider {
      position: relative;
      height: 100%;
      width: 100%;
      transform-style: preserve-3d;
      perspective: 500px;
    }

    .slide {
      width: clamp(8rem, 10rem, 25rem);
      height: clamp(10rem, 12rem, 27rem);
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 0.5rem;
      border: 1px solid var(--borderClr);
      transition: 0.5s;
      background: var(--bg);
      transition-timing-function: cubic-bezier(0.9, 0, 0.1, 1);
    }

    .slide span {
      position: absolute;
      border-radius: inherit;
      display: flex;
      height: 3rem;
      width: 3rem;
      align-items: center;
      justify-content: center;
      background-image: var(--txtBg);
      -webkit-background-clip: text;
      background-clip: text;
      font-size: 2.25rem;
      line-height: 2.5rem;
      font-weight: 800;
      color: transparent;
    }

    .slider-buttons {
      display: flex;
      gap: 1.5rem;
      z-index: 1;
    }

    .slider-buttons button {
      display: flex;
      height: 2rem;
      width: 2rem;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      background-image: var(--bg);
      border: none;
      outline: none;
      cursor: pointer;
      position: relative;
      box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
    }

    .slider-buttons button::before {
      content: '';
      width: 80%;
      height: 80%;
      background: var(--txtBg);
      position: absolute;
      border-radius: inherit;
      transition: .3s;
      opacity: .5;
    }

    .slider-buttons button:hover::before {
      opacity: 1;
    }

    .slider-buttons button:nth-of-type(1)::before {
      mask-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M14.29 5.707a1 1 0 0 0-1.415 0L7.988 10.6a2 2 0 0 0 0 2.828l4.89 4.89a1 1 0 0 0 1.415-1.414l-4.186-4.185a1 1 0 0 1 0-1.415l4.182-4.182a1 1 0 0 0 0-1.414Z' fill='%230F0F0F'/%3E%3C/svg%3E");
      -webkit-mask-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M14.29 5.707a1 1 0 0 0-1.415 0L7.988 10.6a2 2 0 0 0 0 2.828l4.89 4.89a1 1 0 0 0 1.415-1.414l-4.186-4.185a1 1 0 0 1 0-1.415l4.182-4.182a1 1 0 0 0 0-1.414Z' fill='%230F0F0F'/%3E%3C/svg%3E");
    }

    .slider-buttons button:nth-of-type(2)::before {
      mask-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M9.71 18.293a1 1 0 0 0 1.415 0l4.887-4.892a2 2 0 0 0 0-2.828l-4.89-4.89a1 1 0 0 0-1.415 1.414l4.186 4.185a1 1 0 0 1 0 1.415L9.71 16.879a1 1 0 0 0 0 1.414Z' fill='%230F0F0F'/%3E%3C/svg%3E");
      -webkit-mask-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M9.71 18.293a1 1 0 0 0 1.415 0l4.887-4.892a2 2 0 0 0 0-2.828l-4.89-4.89a1 1 0 0 0-1.415 1.414l4.186 4.185a1 1 0 0 1 0 1.415L9.71 16.879a1 1 0 0 0 0 1.414Z' fill='%230F0F0F'/%3E%3C/svg%3E");
    }

    @media (max-width: 700px) {
      .slider-container {
        gap: 0;
      }

      .slide {
        width: clamp(4rem, 6rem, 25rem);
        height: clamp(6rem, 8rem, 27rem);
      }

      .slide span {
        font-size: 1.6rem;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="slider-container">
      <div class="slider">
        <div class="slide">
          <div class="col-xl-4 col-md-6">
            <div class="price-box th-ani active orange-border">
              <span class="offer-tag text-orange">popular</span>
              <div class="text-center">
                <h3 class="box-title">Premium Package</h3>
                <h4 class="box-price"><span class="text-orange">$29.99</span><span class="duration">/Per Month</span></h4>
                <p class="box-text2">This is a premium package that offers the best features and services for your needs.</p>
              </div>
              <a href="pack-details.php?id=1" class="th-btn style4 btn-fw th-radius th-icon">Get Started<i class="fa-regular fa-arrow-right ms-2"></i></a>
              <div class="box-content">
                <div class="available-list">
                  <ul>
                    <li>Feature 1</li>
                    <li class="unavailable">Feature 2</li>
                    <li>Feature 3</li>
                    <li class="unavailable">Feature 4</li>
                    <li>Feature 5</li>
                    <div class="d-none mb-3" id="showMoreList_1">
                      <li>Feature 6</li>
                      <li class="unavailable">Feature 7</li>
                      <li>Feature 8</li>
                    </div>
                  </ul>
                </div>
              </div>
              <div class="text-center text-dark">
                <span class="text-o fw-semibold hover" onclick="showMore(1);" id="showMoreBtn_1"><i class="bi bi-chevron-double-down h6"></i>&nbsp;More Features</span>
              </div>
            </div>
          </div>

        </div>
        <div class="slide"><span>6</span></div>
        <div class="slide"><span>7</span></div>
        <div class="slide"><span>1</span></div>
        <div class="slide"><span>2</span></div>
        <div class="slide"><span>3</span></div>
        <div class="slide"><span>4</span></div>
      </div>
      <div class="slider-buttons">
        <button id="prev-slide" aria-label="Previous Slide" title="Go To Previous Slide"></button>
        <button id="nxt-slide" aria-label="Next Slide" title="Go To Next Slide"></button>
      </div>
    </div>
  </div>
  <script>
    const slideTransforms = ['translate3d(-200%, -50%, 0rem) rotateY(45deg) scale(0.85)', 'translate3d(-150%, -50%, 3rem) rotateY(30deg) scale(0.9)', 'translate3d(-100%, -50%, 6rem) rotateY(15deg) scale(0.95)', 'translate3d(-50%, -50%, 9rem)', 'translate3d(0%, -50%, 6rem) rotateY(-15deg) scale(0.95)', 'translate3d(50%, -50%, 3rem) rotateY(-30deg) scale(0.9)', 'translate3d(100%, -50%, 0) rotateY(-45deg) scale(0.85)'];

    const slides = document.querySelectorAll('.slide');

    slides.forEach((slide, index) => {
      const slideTransform = slideTransforms[index];

      slide.style.transform = slideTransform;
    });

    let debounceTimeOut;

    const navigateTo = (bool) => {
      clearTimeout(debounceTimeOut);

      debounceTimeOut = setTimeout(() => {
        if (bool) {
          slideTransforms.unshift(slideTransforms.pop());
        } else {
          slideTransforms.push(slideTransforms.shift());
        }

        slides.forEach((slide, index) => {
          slide.style.transform = slideTransforms[index];
        });
      }, 500);
    }

    document.getElementById('prev-slide').addEventListener('click', () => navigateTo(false));
    document.getElementById('nxt-slide').addEventListener('click', () => navigateTo(true));
  </script>
</body>

</html>

<?php
require_once "db.php";
$s_d = Databases::Search("SELECT * FROM `solution`");
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Saor - SEO Digital Marketing Agency HTML Template - About Us</title>
  <meta name="author" content="themeholy">
  <meta name="description" content="Saor - SEO Digital Marketing Agency HTML Template">
  <meta name="keywords" content="Saor - SEO Digital Marketing Agency HTML Template">
  <meta name="robots" content="INDEX,FOLLOW">

  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicons - Place favicon.ico in the root directory -->
  <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
  <link rel="manifest" href="assets/img/favicons/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
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

<body onload="triggerBtnOnload(1);">


  <?php require_once "header.php"; ?>

  <div class="container">
    <div class="container">
      <div class="slider-container">
        <div class="slider">
          <div class="slide">
            <div class="col-xl-4 col-md-6">
              <div class="price-box th-ani active orange-border">
                <span class="offer-tag text-orange">popular</span>
                <div class="text-center">
                  <h3 class="box-title">Premium Package</h3>
                  <h4 class="box-price"><span class="text-orange">$29.99</span><span class="duration">/Per Month</span></h4>
                  <p class="box-text2">This is a premium package that offers the best features and services for your needs.</p>
                </div>
                <a href="pack-details.php?id=1" class="th-btn style4 btn-fw th-radius th-icon">Get Started<i class="fa-regular fa-arrow-right ms-2"></i></a>
                <div class="box-content">
                  <div class="available-list">
                    <ul>
                      <li>Feature 1</li>
                      <li class="unavailable">Feature 2</li>
                      <li>Feature 3</li>
                      <li class="unavailable">Feature 4</li>
                      <li>Feature 5</li>
                      <div class="d-none mb-3" id="showMoreList_1">
                        <li>Feature 6</li>
                        <li class="unavailable">Feature 7</li>
                        <li>Feature 8</li>
                      </div>
                    </ul>
                  </div>
                </div>
                <div class="text-center text-dark">
                  <span class="text-o fw-semibold hover" onclick="showMore(1);" id="showMoreBtn_1"><i class="bi bi-chevron-double-down h6"></i>&nbsp;More Features</span>
                </div>
              </div>
            </div>

          </div>
          <div class="slide"><span>6</span></div>
          <div class="slide"><span>7</span></div>
          <div class="slide"><span>1</span></div>
          <div class="slide"><span>2</span></div>
          <div class="slide"><span>3</span></div>
          <div class="slide"><span>4</span></div>
        </div>
        <div class="slider-buttons">
          <button id="prev-slide" aria-label="Previous Slide" title="Go To Previous Slide"></button>
          <button id="nxt-slide" aria-label="Next Slide" title="Go To Next Slide"></button>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid px-5 py-5 px-md-0 pe-lg-5 bg-color">
    <div class="row mt-0 mt-md-3" style="z-index: -999999999999 !important;">
      <div class="col-lg-6 order-2 order-lg-1 d-flex justify-content-center">
        <img src="assets/img/hero/hero_3_1.png" alt="" class="img-fluid pricing-image d-none d-md-flex" style="width: 400px; height: 450px;">
      </div>
      <div class="col-lg-6 order-1 order-lg-2 mt-3 px-md-5 px-lg-0">
        <div class="title-area mb-25 mt-n1 mt-4 text-start text-md-end text-lg-start">
          <span class="sub-title sub-title4 style1 text-ani-style2">Pricing</span>
          <h2 class="sec-title text-ani-style3 text-start">Choose the Perfect Plan for Your Business Needs</h2>
        </div>
        <p class="mt-n2 mb-30 d-none">Click on any of the packages below to explore <b>detailed pricing and features</b>. Each package is designed to meet different business needs, ensuring you get the best digital solutions for your goals.</p>
        <div class="info-list">
          <div class="info-item">
            <span class="info-icon"></span>
            <p class="info-text">Offering <?php echo $s_d->num_rows; ?>+ innovative digital solutions to boost business growth.</p>
          </div>
          <div class="info-item">
            <span class="info-icon"></span>
            <p class="info-text">Trusted by startups and enterprises for cutting-edge digital strategies.</p>
          </div>
          <div class="info-item">
            <span class="info-icon"></span>
            <p class="info-text">Dedicated to delivering innovative strategies for long-term success.</p>
          </div>
        </div>

        <div class="btn-group about-btn justify-content-center justify-content-md-start">
          <a href="about.html" class="th-btn th-icon th-radius">Learn More About Us<i
              class="fa-regular fa-arrow-right ms-2"></i></a>

        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid mt-5">
    <div class="col-12 position-relative overflow-hidden">
      <div class="random-svg-container">
        <img src="assets/img/a1.svg" class="random-svg">
        <img src="assets/img/a2.svg" class="random-svg">
        <img src="assets/img/a2.svg" class="random-svg d-none">
        <img src="assets/img/a3.svg" class="random-svg d-none">
        <img src="assets/img/a1.svg" class="random-svg d-none">
      </div>
    </div>
    <div class="row">
      <div class="text-center mt-3"><span class="display-4 text-dark fw-semibold">Select a Package </span><br>
        <span class="sub-title sub-title6 style1 text-ani-style2 mt-4 d-none d-md-inline-block text-o">Simply click on any of the packages below to view its pricing and features.</span>
        <p class="d-md-none mt-4 px-3">Simply click on any of the packages below to view its pricing and features.</p>
      </div>
      <div class="col-12 pb-5 px-50 mt-4">
        <div class="row d-flex gap-4 align-items-center justify-content-center px-0 px-md-5">
          <?php
          while ($sd = $s_d->fetch_assoc()) {
          ?>
            <button class="gradient-border-button w-auto px-3 px-md-5 py-2 py-md-3" id="triggerBtn_<?php echo $sd['sol_id']; ?>" onclick="triggerBtn('<?php echo $sd['sol_id']; ?>');">
              <span><?php echo $sd['sol_name']; ?></span>
            </button>
          <?php
          }
          ?>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid" id="resBox">
    <div class="row">
      <!--============================== Price Area  ==============================-->
      <section class="overflow-hidden space bg-color mt-4" style="padding-top: 60px !important;" id="">

      </section>
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

  <!--==============================
    All Js File
============================== -->
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