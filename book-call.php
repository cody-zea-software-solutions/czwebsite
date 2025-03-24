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
    <div class="container-fluid space-extra">
        <!-- Calendly inline widget begin -->
        <div class="calendly-inline-widget" data-url="https://calendly.com/codyzeaofficial"
            style="min-width:320px;height:700px;"></div>
        <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
        <!-- Calendly inline widget end -->
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

            // Fetch user IP, country, and city
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

            window.addEventListener("scroll", function () {
                trackScroll();
                trackSectionVisibility();
            });

        })();
    </script>
</body>

</html>