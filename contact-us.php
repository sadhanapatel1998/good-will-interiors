<?php
ob_start();
session_start();

$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$old = isset($_SESSION['old']) ? $_SESSION['old'] : [];
?>

<!-- Breadcrumbs -->
<section class="breadcrumbs-custom-inset">
    <div class="breadcrumbs-custom context-dark">
        <div class="container">
            <h2 class="breadcrumbs-custom-title">Contact Us</h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="/">Home</a></li>
                <li class="active">Contact Us</li>
            </ul>
        </div>
        <div class="box-position" style="background-image: url(assets/images/bg-breadcrumbs.jpg);"></div>
    </div>
</section>

<!-- Contact information-->
<section class="section section-sm bg-default bg_second_cl">
    <div class="container">
        <div class="row row-30 justify-content-center">
            <div class="col-md-4 col-lg-4">
                <article class="box-contacts bg_first_cl">
                    <div class="box-contacts-body">
                        <div class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
                        <div class="box-contacts-decor"></div>
                        <p class="box-contacts-link"><a href="tel:919810884029">+91 98108 84029</a></p>
                        <p class="box-contacts-link"><a href="tel:919810331333">+91 98103 31333</a></p>
                    </div>
                </article>
            </div>
            <div class="col-md-4 col-lg-4">
                <article class="box-contacts bg_first_cl">
                    <div class="box-contacts-body">
                        <div class="box-contacts-icon fl-bigmug-line-up104"></div>
                        <div class="box-contacts-decor"></div>
                        <p class="box-contacts-link"><a href="https://maps.app.goo.gl/ABVAWcbCZzAb3R9C8"
                                target="_blank">288, Block B, Sector 26A, Gurugram, Haryana 122002</a></p>
                    </div>
                </article>
            </div>
            <div class="col-md-4 col-lg-4">
                <article class="box-contacts bg_first_cl">
                    <div class="box-contacts-body">
                        <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
                        <div class="box-contacts-decor"></div>
                        <p class="box-contacts-link"><a href="goodwillinteriors82@gmail.com"><span class="__cf_email__"
                                   >goodwillinteriors82@gmail.com</span></a></p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form and Gmap-->
<section class="section section-sm bg-default text-md-left">
    <div class="container">
        <div class="row row-50">
            <div class="col-lg-6">
                <h4 class="text-spacing-50">Get in Touch</h4>
                <p>
                    Connect with our experts for premium flooring, wall paneling, decking solutions, project guidance,
                    and personalized assistance.
                </p>

                <form class="" method="POST" action="mail.php">
                    <input type="hidden" name="form_type" value="Contact Us">
                    <div class="row row-14 gutters-14">
                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input" type="text" name="name" placeholder="Enter Name"
                                    value="<?= isset($old['name']) ? $old['name'] : ''; ?>">
                                <span class="text-danger">
                                    <?= isset($errors['name']) ? $errors['name'] : ''; ?>
                                </span>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input" type="text" name="phone" placeholder="Enter Phone"
                                    value="<?= isset($old['phone']) ? $old['phone'] : ''; ?>">
                                <span class="text-danger">
                                    <?= isset($errors['phone']) ? $errors['phone'] : ''; ?>
                                </span>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input" type="email" name="email" placeholder="Enter Email"
                                    value="<?= isset($old['email']) ? $old['email'] : ''; ?>">
                                <span class="text-danger">
                                    <?= isset($errors['email']) ? $errors['email'] : ''; ?>
                                </span>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input" type="text" name="subject" placeholder="Enter Subject"
                                    value="<?= isset($old['subject']) ? $old['subject'] : ''; ?>">
                                <span class="text-danger">
                                    <?= isset($errors['subject']) ? $errors['subject'] : ''; ?>
                                </span>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-wrap">
                                <textarea class="form-input" placeholder="Enter Message"
                                    name="message"><?= isset($old['message']) ? $old['message'] : ''; ?></textarea>
                                <span class="text-danger">
                                    <?= isset($errors['message']) ? $errors['message'] : ''; ?>
                                </span>
                            </div>
                        </div>

                        <div class="col-md-12 mt-3">
                            <div class="form-loader text-success" style="display:none;">
                                <i class="icon fa fa-spinner fa-spin"></i>
                                Please wait, submitting your enquiry...
                            </div>
                        </div>

                    </div>

                    <button class="button button-secondary button-pipaluk" type="submit">
                        Send Message
                    </button>

                </form>

                <?php
                unset($_SESSION['errors']);
                unset($_SESSION['old']);
                ?>
            </div>
            <div class="col-lg-6 section-map-small">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d224568.90642784548!2d76.9900807!3d28.4226011!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d19ea6004b70d%3A0x5d60f5753f58b31d!2sGOODWILL%20INTERIORS!5e0!3m2!1sen!2sin!4v1780047039961!5m2!1sen!2sin"
                    width="100%" height="500" frameborder="0" style="border:0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
require 'layout.php';
?>