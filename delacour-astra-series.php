<?php
ob_start();
?>

<!-- Breadcrumbs -->
<section class="breadcrumbs-custom-inset">
    <div class="breadcrumbs-custom context-dark">
        <div class="container">
            <h2 class="breadcrumbs-custom-title">DeLaCour Astra Series</h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="/">Home</a></li>
                <li><a href="#">Products</a></li>
                <li class="active">DeLaCour Astra Series</li>
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
                    <img src="assets/images/products/delacour-astra-series.jpg" alt="DeLaCour Astra Series" class="img-fluid">
                </div>
                <div class="single-service">
                    <h3>DeLaCour Astra Series</h3>
                    <h6 class="text-secondary mb-3">Premium Exterior Facades</h6>
                    <p class="text-spacing-100">
                        Enhance architectural beauty with the DeLaCour Astra Series. Engineered for premium exterior facades, these systems offer unmatched weather defense and striking visual profiles for modern structures.
                    </p>
                    <!-- Quote Classic-->
                    <article class="quote-classic">
                        <div class="quote-classic-text">
                            <p class="q">
                                We provide complete architectural solutions, from custom consultation and material selection to professional installation support.
                            </p>
                        </div>
                    </article>
                    <p class="text-spacing-100">
                        At Good Will Interiors, we supply elite outer surfaces matching pristine appearance with long-term wear resistance. Whether executing residential upgrades or heavy commercial builds, our architectural ranges bring functional design into balance.
                    </p>
                    <div class="row row-40 align-items-xl-center">
                        <div class="col-md-6 col-xl-5">
                            <h5 class="text-spacing-100">Key Features</h5>
                            <ul class="list-sm list-marked list-marked-sm list-marked-secondary text-spacing-100">
                                <li>High UV Resistance</li>
                                <li>Advanced Thermal Insulation</li>
                                <li>Architectural Grade Finish</li>
                                <li>Structural Stability</li>
                            </ul>
                            <a class="button button-primary button-pipaluk" href="quote.php">Get a Free Quote</a>
                        </div>
                        <div class="col-md-6 col-xl-7 text-lg-right">
                            <img src="assets/images/products/astra-series2.jpg" alt="" height="589">
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