<?php
ob_start();
?>

<!-- Breadcrumbs -->
<section class="breadcrumbs-custom-inset">
    <div class="breadcrumbs-custom context-dark">
        <div class="container">
            <h2 class="breadcrumbs-custom-title">404</h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="/">Home</a></li>
                <li class="active">404 Error</li>
            </ul>
        </div>
        <div class="box-position" style="background-image: url(assets/images/bg-breadcrumbs.jpg);"></div>
    </div>
</section>

<section class="section section-sm bg-default">
    <div class="section-single-main">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h1>Oops!</h1>

                    <h4 class="title-modern">SOMETHING WENT WRONG</h4>

                    <p class="big text-spacing-25">
                        We encountered an unexpected issue while processing your request.
                        Please try again in a few moments or contact us directly if the problem persists.
                    </p>
                    <a class="button button-primary button-ujarak ml-3" href="/">
                        Go to Home Page
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
$content = ob_get_clean();
require 'layout.php';
?>