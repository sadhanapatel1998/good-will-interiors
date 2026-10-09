<?php
require_once 'seo.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- SEO Meta -->
    <title><?php echo $pageMeta['title']; ?></title>
    <meta name="description" content="<?php echo $pageMeta['description']; ?>">
    <meta name="keywords" content="<?php echo $pageMeta['keywords']; ?>">
    <meta name="robots" content="<?php echo $pageMeta['robots']; ?>">
    <!-- Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon//favicon-16x16.png">
    <link rel="manifest" href="assets/favicon//site.webmanifest">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css"
        href="assets/ss/css?family=Poppins:400,500%7CTeko:300,400,500%7CMaven+Pro:500">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/fonts.css">
    <link rel="stylesheet" href="assets/css/style.css" id="main-styles-link">
    <!--Color Switcher Mockup-->
    <link rel="stylesheet" href="assets/dist/color-default.css">
    <link rel="stylesheet" href="assets/dist/color-switcher.css">

</head>

<body>
    <div class="page">

        <?php require_once("include/header.php"); ?>
        <?= $content ?? ''; ?>
        <?php require_once("include/footer.php"); ?>

    </div>

    <div class="floating-contact">

        <a href="https://wa.me/919810884029" class="floating-whatsapp" target="_blank">
            <i class="icon fa fa-whatsapp"></i>
        </a>

        <a href="tel:+919810884029" class="floating-call">
            <i class="icon fa fa-phone"></i>
        </a>

    </div>

    <!-- Javascript-->
    <script src="assets/js/core.min.js"></script>
    <!-- <script src="assets/dist/color-switcher.js"></script> -->
    <script src="assets/dist/colorJS.js"></script>
    <script src="assets/js/script.js"></script>

    <script>
        var swiper = new Swiper(".testimonialSwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            autoplay: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2
                },
                1200: {
                    slidesPerView: 3
                }
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const forms = document.querySelectorAll('form');
            forms.forEach(function (form) {
                form.addEventListener('submit', function () {
                    const loader = this.querySelector('.form-loader');
                    if (loader) {
                        loader.style.display = 'block';
                    }
                });
            });
        });
    </script>

</body>

</html>