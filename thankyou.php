<?php
ob_start();
?>

<!-- Breadcrumbs -->
<section class="breadcrumbs-custom-inset">
    <div class="breadcrumbs-custom context-dark">
        <div class="container">
            <h2 class="breadcrumbs-custom-title">Thank you</h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="/">Home</a></li>
                <li class="active">Thank you</li>
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
                    <h1>Thank You!</h1>

                    <h4 class="title-modern">ENQUIRY SUBMITTED SUCCESSFULLY</h4>

                    <p class="big text-spacing-25">
                        Thank you for contacting Good Will Interiors.
                        We have received your enquiry and our team will get back to you shortly
                        with the information and assistance you need.
                    </p>

                    <a class="button button-secondary button-ujarak" href="index.php">
                        Back to Home
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