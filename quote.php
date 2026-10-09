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
            <h2 class="breadcrumbs-custom-title">Get A Quote</h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="/">Home</a></li>
                <li class="active">Get A Quote</li>
            </ul>
        </div>
        <div class="box-position" style="background-image: url(assets/images/bg-breadcrumbs.jpg);"></div>
    </div>
</section>

<!-- Contact Form and Gmap-->
<section class="section section-sm bg-default text-md-left">
    <div class="container">
        <div class="row row-50">
            <div class="col-lg-7 mx-auto">
                <div class="quote-form">
                    <h4 class="text-spacing-50 text-center">Get Your Free Quote</h4>

                    <p class="text-center">
                        Share your project details with us and receive expert recommendations, pricing, and customized
                        interior solutions.
                    </p>
                    <form class="" data-form-output="form-output-global"
                        data-form-type="contact" method="post" action="mail.php">

                        <input type="hidden" name="form_type" value="Get A Quote">

                        <div class="row row-14 gutters-14">

                            <div class="col-sm-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-first-name" type="text" name="name"
                                        value="<?= isset($old['name']) ? $old['name'] : ''; ?>">

                                    <label class="form-label" for="contact-first-name">
                                        First Name
                                    </label>

                                    <span class="text-danger">
                                        <?= isset($errors['name']) ? $errors['name'] : ''; ?>
                                    </span>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-last-name" type="text" name="phone"
                                        value="<?= isset($old['phone']) ? $old['phone'] : ''; ?>">

                                    <label class="form-label" for="contact-last-name">
                                        Phone
                                    </label>

                                    <span class="text-danger">
                                        <?= isset($errors['phone']) ? $errors['phone'] : ''; ?>
                                    </span>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-email" type="email" name="email"
                                        value="<?= isset($old['email']) ? $old['email'] : ''; ?>">

                                    <label class="form-label" for="contact-email">
                                        E-mail
                                    </label>

                                    <span class="text-danger">
                                        <?= isset($errors['email']) ? $errors['email'] : ''; ?>
                                    </span>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-wrap">

                                    <select class="form-input" id="contact-service" name="service">

                                        <option value="">Select Service</option>

                                        <option value="Wooden Flooring" <?= (isset($old['service']) && $old['service'] == 'Wooden Flooring') ? 'selected' : ''; ?>>
                                            Wooden Flooring
                                        </option>

                                        <option value="Wall Paneling" <?= (isset($old['service']) && $old['service'] == 'Wall Paneling') ? 'selected' : ''; ?>>
                                            Wall Paneling
                                        </option>

                                        <option value="Decking Solutions" <?= (isset($old['service']) && $old['service'] == 'Decking Solutions') ? 'selected' : ''; ?>>
                                            Decking Solutions
                                        </option>

                                        <option value="General Inquiry" <?= (isset($old['service']) && $old['service'] == 'General Inquiry') ? 'selected' : ''; ?>>
                                            General Inquiry
                                        </option>

                                    </select>

                                    <span class="text-danger">
                                        <?= isset($errors['service']) ? $errors['service'] : ''; ?>
                                    </span>

                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-wrap">
                                    <label class="form-label" for="contact-message">
                                        Message
                                    </label>

                                    <textarea class="form-input" id="contact-message"
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

                        <div class="text-center mt-3">
                            <button class="button button-secondary button-pipaluk" type="submit">
                                Send Message
                            </button>
                        </div>

                    </form>
                      <?php
                            unset($_SESSION['errors']);
                            unset($_SESSION['old']);
                            ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
require 'layout.php';
?>