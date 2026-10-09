<?php
ob_start();
?>

<!-- Breadcrumbs -->
<section class="breadcrumbs-custom-inset">
    <div class="breadcrumbs-custom context-dark">
        <div class="container">
            <h2 class="breadcrumbs-custom-title">DeLaCour WPC Wave</h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="/">Home</a></li>
                <li><a href="#">Products</a></li>
                <li class="active">DeLaCour WPC Wave</li>
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
                    <img src="assets/images/products/delacour-wpc-wave.jpg" alt="DeLaCour WPC Wave" class="img-fluid">
                </div>
                <div class="single-service">
                    <h3>DeLaCour WPC Wave</h3>
                    <h6 class="text-secondary mb-3">Fluid Fluted Flairs</h6>
                    <p class="text-spacing-100">
                        DeLaCour WPC Wave features an avant-garde fluted configuration that creates dynamic shadow play and fluid architectural motion across sprawling commercial facade surfaces.
                    </p>
                    <!-- Quote Classic-->
                    <article class="quote-classic">
                        <div class="quote-classic-text">
                            <p class="q">
                                We provide complete material solutions, from professional site analysis and selection to clean, timely execution.
                            </p>
                        </div>
                    </article>
                    <p class="text-spacing-100">
                        At Good Will Interiors, we supply elite surfaces matching pristine appearance with long-term wear resistance. Whether executing residential upgrades or heavy commercial builds, our architectural ranges bring functional design into balance.
                    </p>
                    <div class="row row-40 align-items-xl-center">
                        <div class="col-md-6 col-xl-5">
                            <h5 class="text-spacing-100">Key Features</h5>
                            <ul class="list-sm list-marked list-marked-sm list-marked-secondary text-spacing-100">
                                <li>Dynamic Fluted Pattern</li>
                                <li>Unique Shadow Interplay</li>
                                <li>Superior Sound Dampening</li>
                                <li>Seamless Interlocking Tracks</li>
                            </ul>
                            <a class="button button-primary button-pipaluk" href="quote.php">Get a Free Quote</a>
                        </div>
                        <div class="col-md-6 col-xl-7 text-lg-right">
                            <img src="assets/images/products/delacour-wpc-wave2.jpg" alt="" height="589">
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