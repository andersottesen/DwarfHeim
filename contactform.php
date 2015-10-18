<?php
include_once "modules/paths.php";

if (isset($_POST["name"]) && isset($_POST["message"]) && isset($_POST["email"])) {
    require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
    require 'config/mail.php';

    $name = $_POST["name"];
    $message = $_POST["message"];
    $email = $_POST["email"];
    $to = $email_address;
    $subject = '[Contact Form] '. $name.' sent you a message from ' . str_replace("http://", "",$root);

    //Configure mail settings
    $mail = new PHPMailer;

    $mail->CharSet= "UTF-8";
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = $host;                                  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = $username;                          // SMTP username
    $mail->Password = $password;                          // SMTP password
    $mail->SMTPSecure = $SMTPSecure;                      // Enable TLS encryption, `ssl` also accepted
    $mail->Port = $port;                                  // TCP port to connect to

    $mail->setFrom($email_address, 'DwarHeim');
    $mail->addAddress($to);     // Add a recipient
    $mail->addReplyTo($email, $name);

    $mail->WordWrap = 50;
    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->AltBody = $message;
    if(!$success = $mail->send()){
        $status = 'Message could not be sent. Please try again.';
    }else{
        $status = 'Your message has been sent to the DwarfHeim team';
    }
} else {
    $status = 'Form was not correctly filled';
    $success = false;
}
?>














<?php $title = "Contact"; ?>
<?php include_once("modules/head.php") ?>
<?php include_once("modules/nav.php"); ?>

<!-- CONTENT HERE -->

<div class="row">
    <div class="offset-by-three nine columns">

        <h3 style="<?php echo ($success == true) ? 'color:#009100' : 'color:#910000';?>"><?php echo $status ?></h3>
        <?php if ($success) {
            echo '<img src="' . $root . '/images/owlMail.png" style="width:400px;max-width:100%;">';
        } ?>
    </div>
</div>
<?php include_once "modules/footer.php"; ?>
