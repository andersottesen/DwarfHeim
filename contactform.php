<!--
FILE NAME: contactform.php
WRITTEN BY: Kristoffer Ravik Andresen
WHEN: October 2015
PURPOSE: Display a message sent confirmation after sending a message from contact.php
-->
<?php
include_once "modules/paths.php";
require 'config/mail.php';
if($host === "smtp.localhost.com"){
    $status = 'Email has not been configured on this server';
    $success = false;
}elseif (isset($_POST["name"]) && isset($_POST["message"]) && isset($_POST["email"])) {
    require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

    //Set headers and content of email to be sent
    $name = $_POST["name"];
    $message = $name." sent a message to DwarfHeim on ".date("H:i:s j M Y").":<br/><div style=\"border-left:2px solid rgba(0,153,255,0.5);min-height:50px;width:350px; max-width:100%;\"> <hr/><p style=\"padding-left:15px;\">" .$_POST["message"]."</p></div>";
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

    $mail->setFrom($email_address, 'DwarfHeim');
    $mail->addAddress($to);     // Add a recipient
    $mail->addReplyTo($email, $name);

    $mail->WordWrap = 50;
    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->AltBody = $message;
    if(!$success = $mail->send()){
        $status = 'Message could not be sent. Please <a style="color: #0000AA;" href="'.$page["contact"].'">try again</a>';
    }else{
        $status = 'Your message has been sent to the DwarfHeim team';
    }
} else {
    $status = 'Form was not correctly filled, please <a style="color: #0000AA;" href="'.$page["contact"].'">try again</a>';
    $success = false;
}
//End send mail
?>

<?php $title = "Contact"; ?>
<?php include_once("modules/head.php") ?>
<?php include_once("modules/nav.php"); ?>

<!-- Landing page after sending mail -->

<div class="row">
    <div class="offset-by-three nine columns">

        <h3 style="<?php echo ($success == true) ? 'color:#009100' : 'color:#910000';?>"><?php echo $status ?></h3>
        <?php if ($success) {
            echo '<img src="' . $root . '/images/owlMail.png" style="width:400px;max-width:100%;">';
        } ?>
    </div>
</div>
<?php include_once "modules/footer.php"; ?>
