<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

session_start();

$_SESSION['errors'] = [];
$_SESSION['old'] = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name      = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email     = htmlspecialchars(trim($_POST['email'] ?? ''));
    $phone     = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $subject   = htmlspecialchars(trim($_POST['subject'] ?? ''));
    $service   = htmlspecialchars(trim($_POST['service'] ?? ''));
    $message   = htmlspecialchars(trim($_POST['message'] ?? ''));
    $form_type = htmlspecialchars(trim($_POST['form_type'] ?? ''));

    $_SESSION['old'] = $_POST;

    $hasError = false;

    if (empty($name)) {
        $_SESSION['errors']['name'] = "Name is required";
        $hasError = true;
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['errors']['email'] = "Valid email required";
        $hasError = true;
    }

    if (empty($phone) || !preg_match("/^[0-9]{10,15}$/", $phone)) {
        $_SESSION['errors']['phone'] = "Valid phone required";
        $hasError = true;
    }

    if ($form_type == 'Contact Us' && empty($subject)) {
        $_SESSION['errors']['subject'] = "Subject is required";
        $hasError = true;
    }

    if ($form_type == 'Get A Quote' && empty($service)) {
        $_SESSION['errors']['service'] = "Please select a service";
        $hasError = true;
    }

    if (empty($message)) {
        $_SESSION['errors']['message'] = "Message is required";
        $hasError = true;
    }

    if ($hasError) {
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }

    $mail = new PHPMailer(true);

    try {

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'web.hoverbusinessservices@gmail.com';
        $mail->Password = 'zrtycnkdwjjgbybt';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom(
            'goodwillinteriors82@gmail.com',
            'Good Will Interiors'
        );

        $mail->addAddress(
            'web.hoverbusinessservices@gmail.com',
            'Good Will Interiors'
        );

        $mail->isHTML(true);

        $mail->Subject = !empty($form_type)
            ? "New " . $form_type . " Enquiry"
            : "New Website Enquiry";

        $mailBody = "
        <div style='font-family:Arial;padding:20px;'>
            <h2 style='margin-bottom:15px;color:#E00115;'>
                New " . (!empty($form_type) ? $form_type : 'Website') . " Enquiry
            </h2>
            <table cellpadding='10' cellspacing='0' border='1' width='100%' style='border-collapse:collapse;'>
                <tr>
                    <td><strong>Name</strong></td>
                    <td>$name</td>
                </tr>
                <tr>
                    <td><strong>Email</strong></td>
                    <td>$email</td>
                </tr>
                <tr>
                    <td><strong>Phone</strong></td>
                    <td>$phone</td>
                </tr>";

        if (!empty($service)) {
            $mailBody .= "

                <tr>
                    <td><strong>Service</strong></td>
                    <td>$service</td>
                </tr>";
        }

        if (!empty($subject)) {

            $mailBody .= "
                <tr>
                    <td><strong>Subject</strong></td>
                    <td>$subject</td>
                </tr>";
        }
        $mailBody .= "

                <tr>
                    <td><strong>Message</strong></td>
                    <td>$message</td>
                </tr>
            </table>
        </div>";

        $mail->Body = $mailBody;

        $mail->send();

        unset($_SESSION['errors']);
        unset($_SESSION['old']);

        header("Location: thankyou.php");
        exit();
    } catch (Exception $e) {

        header("Location: error.php");
        exit();

    }
}
?>