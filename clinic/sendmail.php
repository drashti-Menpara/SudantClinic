<!-- <?php
$to_email = "tryonprototype@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
$headers = "From:Keyurchampion@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
?> -->
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";
$mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "Keyurchampion@gmail.com";
$mail->Password   = "Keyur@539";
$mail->IsHTML(true);
$mail->AddAddress("drashtimenpara1612@gmail.com", "recipient-name");
$mail->SetFrom("Keyurchampionr@gmail.com", "Sudant Clinic");
$mail->AddReplyTo("drashtimenpara1612@gmail.com", "reply-to-name");
$mail->AddCC("drashtimenpara1612@gmail.com", "cc-recipient-name");
$mail->Subject = "Appoinment Booking Confired";
$content = "<b>Congratulations, Your Appoinment Book successfully
please Come On The Time</b>";
$mail->MsgHTML($content); 
if(!$mail->Send()) {
  echo "Error while sending Email.";
  var_dump($mail);
} else {
  echo "Email sent successfully";
}
?>
