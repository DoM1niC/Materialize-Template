<?php
if (isset($_POST['name'], $_POST['email'], $_POST['message'])) {
define('MAIL_HOST', 'mysmtp.de'); // Host Mailserver
define('MAIL_USER', 'info@myemail.de'); // Login email
define('MAIL_NAME', 'Website Contact'); // Name Absender
define('MAIL_PASS', 'mypassword'); // Pwd
define('MAIL_ADDR', 'info@myemail.de'); // Absender email

$title = $_POST['name'].' - '.$_POST['email'];
$text = $_POST['message'];

if (isset($title, $text)) {
        require_once "phpmailer/PHPMailerAutoload.php";

        $mail = new PHPMailer();

        $mail->isSMTP();

        $mail->Host = MAIL_HOST;
        $mail->SMTPAuth = true;
        $mail->Username = MAIL_USER;
        $mail->Password = MAIL_PASS; 
        $mail->setFrom(MAIL_ADDR, MAIL_NAME);
	$mail->Timeout=4;
	$mail->Timelimit=4;

        $mail->addAddress("info@mymail.de", "Tester");

        $mail->addReplyTo(MAIL_ADDR, MAIL_NAME);

        $mail->Subject = $title;

        $mail->Body = $text;

        if (!$mail->send()) { ?>
  <div style="margin-top:20px; margin-left:28px;" class="chip">
    Anfrage fehlerhaft!
    <i class="close material-icons">close</i>
  </div>
	<?php } else { ?>
  <div style="margin-top:20px; margin-left:28px;" class="chip">
    Anfrage verschickt!
    <i class="close material-icons">close</i>
  </div>
        	<?php }
} } ?>