<?php
ob_start();
?>

<!-- Breadcrumbs -->
<section class="breadcrumbs-custom-inset">
    <div class="breadcrumbs-custom context-dark">
        <div class="container">
            <h2 class="breadcrumbs-custom-title">Image Gallery</h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="/">Home</a></li>
                <li class="active">Image Gallery</li>
            </ul>
        </div>
        <div class="box-position" style="background-image: url(assets/images/bg-breadcrumbs.jpg);"></div>
    </div>
</section>

<section class="section section-sm bg-default">
    <div class="container">
        <div class="headingTitle">
            <h1>EXPLORE <span> OUR SHOWROOM</span></h1>

            <p>
                Explore our collection of premium Wooden Flooring, Wall Paneling,
                and Decking projects showcasing quality craftsmanship, elegant
                designs, and modern interior solutions.
            </p>
        </div>
        <div class="row row-30" data-lightgallery="group">
            <div class="col-sm-6 col-lg-3">
                <div class="oh-desktop">
                    <article class="thumbnail thumbnail-mary thumbnail-sm">
                        <div class="thumbnail-mary-figure"><img src="assets/images/gallery/gallery-1.jpg" alt="Image"
                                width="370" height="303"> </div>
                        <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                                href="assets/images/gallery/gallery-1.jpg" data-lightgallery="item"><img
                                    src="assets/images/gallery/gallery-1.jpg" alt="" width="370" height="303"></a>
                        </div>
                    </article>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="oh-desktop">
                    <article class="thumbnail thumbnail-mary thumbnail-sm">
                        <div class="thumbnail-mary-figure"><img src="assets/images/gallery/gallery-2.jpg" alt="Image"
                                width="370" height="303"> </div>
                        <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                                href="assets/images/gallery/gallery-2.jpg" data-lightgallery="item"><img
                                    src="assets/images/gallery/gallery-2.jpg" alt="" width="370" height="303"></a>
                        </div>
                    </article>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="oh-desktop">
                    <article class="thumbnail thumbnail-mary thumbnail-sm">
                        <div class="thumbnail-mary-figure"><img src="assets/images/gallery/gallery-3.jpg" alt="Image"
                                width="370" height="303"> </div>
                        <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                                href="assets/images/gallery/gallery-3.jpg" data-lightgallery="item"><img
                                    src="assets/images/gallery/gallery-3.jpg" alt="" width="370" height="303"></a>
                        </div>
                    </article>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="oh-desktop">
                    <article class="thumbnail thumbnail-mary thumbnail-sm">
                        <div class="thumbnail-mary-figure"><img src="assets/images/gallery/gallery-4.jpg" alt="Image"
                                width="370" height="303"> </div>
                        <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                                href="assets/images/gallery/gallery-4.jpg" data-lightgallery="item"><img
                                    src="assets/images/gallery/gallery-4.jpg" alt="" width="370" height="303"></a>
                        </div>
                    </article>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="oh-desktop">
                    <article class="thumbnail thumbnail-mary thumbnail-sm">
                        <div class="thumbnail-mary-figure"><img src="assets/images/gallery/gallery-5.jpg" alt="Image"
                                width="370" height="303"> </div>
                        <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                                href="assets/images/gallery/gallery-5.jpg" data-lightgallery="item"><img
                                    src="assets/images/gallery/gallery-5.jpg" alt="" width="370" height="303"></a>
                        </div>
                    </article>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="oh-desktop">
                    <article class="thumbnail thumbnail-mary thumbnail-sm">
                        <div class="thumbnail-mary-figure"><img src="assets/images/gallery/gallery-6.jpg" alt="Image"
                                width="370" height="303"> </div>
                        <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                                href="assets/images/gallery/gallery-6.jpg" data-lightgallery="item"><img
                                    src="assets/images/gallery/gallery-6.jpg" alt="" width="370" height="303"></a>
                        </div>
                    </article>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="oh-desktop">
                    <article class="thumbnail thumbnail-mary thumbnail-sm">
                        <div class="thumbnail-mary-figure"><img src="assets/images/gallery/gallery-7.jpg" alt="Image"
                                width="370" height="303"> </div>
                        <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                                href="assets/images/gallery/gallery-7.jpg" data-lightgallery="item"><img
                                    src="assets/images/gallery/gallery-7.jpg" alt="" width="370" height="303"></a>
                        </div>
                    </article>
                </div>  
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="oh-desktop">
                    <article class="thumbnail thumbnail-mary thumbnail-sm">
                        <div class="thumbnail-mary-figure"><img src="assets/images/gallery/gallery-8.jpg" alt="Image"
                                width="370" height="303"> </div>
                        <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                                href="assets/images/gallery/gallery-8.jpg" data-lightgallery="item"><img
                                    src="assets/images/gallery/gallery-8.jpg" alt="" width="370" height="303"></a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
require 'layout.php';
?>