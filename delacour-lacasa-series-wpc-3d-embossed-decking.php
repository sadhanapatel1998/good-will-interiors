<?php
ob_start();
?>

<!-- Breadcrumbs -->
<section class="breadcrumbs-custom-inset">
    <div class="breadcrumbs-custom context-dark">
        <div class="container">
            <h2 class="breadcrumbs-custom-title">DeLaCour Lacasa Series WPC 3D Embossed Decking</h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="/">Home</a></li>
                <li><a href="#">Products</a></li>
                <li class="active">DeLaCour Lacasa Series WPC 3D Embossed Decking</li>
            </ul>
        </div>
        <div class="box-position" style="background-image: url(assets/images/bg-breadcrumbs.jpg);"></div>
    </div>
</section>

<!-- Section single service-->
<section class="section section-sm bg-default">
    <div class="container">
        <div class="row row-70">
            <div class="col-lg-8">
                <div class="mb-5">
                    <img src="assets/images/products/delacour-lacasa-series-wpc-3d-embossed-decking.jpg"
                        alt="DeLaCour Lacasa Series WPC 3D Embossed Decking" class="img-fluid">
                </div>
                <div class="single-service">
                    <h3>DeLaCour Lacasa Series WPC 3D Embossed Decking</h3>
                    <h6 class="text-secondary mb-3">Heavy-Traffic Luxury Decks</h6>
                    <p class="text-spacing-100">
                        The crown jewel of composites—Lacasa Series offers a deeply stamped 3D wood-grain surface that
                        remains anti-slip and resilient under continuous traffic in commercial developments.
                    </p>
                    <!-- Quote Classic-->
                    <article class="quote-classic">
                        <div class="quote-classic-text">
                            <p class="q">
                                We provide complete material solutions, from professional site analysis and selection to
                                clean, timely execution.
                            </p>
                        </div>
                    </article>
                    <p class="text-spacing-100">
                        At Good Will Interiors, we supply elite surfaces matching pristine appearance with long-term
                        wear resistance. Whether executing residential upgrades or heavy commercial builds, our
                        architectural ranges bring functional design into balance.
                    </p>
                    <div class="row row-40 align-items-xl-center">
                        <div class="col-md-6 col-xl-5">
                            <h5 class="text-spacing-100">Key Features</h5>
                            <ul class="list-sm list-marked list-marked-sm list-marked-secondary text-spacing-100">
                                <li>Deep 3D Embossed Grain</li>
                                <li>Commercial Wear Guarantee</li>
                                <li>Wet-Slip Resistance Rated</li>
                                <li>Ultra Dense Composition</li>
                            </ul>
                            <a class="button button-primary button-pipaluk" href="quote.php">Get a Free Quote</a>
                        </div>
                        <div class="col-md-6 col-xl-7 text-lg-right">
                            <img src="assets/images/products/delacour-lacasa-series-wpc-3d-embossed-decking2.jpg" alt="" height="589">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <?php include('include/product-sidebar.php'); ?>
            </div>
        </div>
    </div>
</section>

<!-- How We Work-->
<?php include('include/how-we-work.php'); ?>

<?php
$content = ob_get_clean();
require 'layout.php';
?>