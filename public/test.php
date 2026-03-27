<?php
require __DIR__ . '/Mailer/vendor/autoload.php';
require __DIR__ . '/Payment/assets/config.php';
use PHPMailer\PHPMailer\PHPMailer;



		$mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = SMTP_HOST;
        $mail->SMTPAuth   = true;
        $mail->Username   = SMTP_USER;
        $mail->Password   = SMTP_PASS;
        $mail->SMTPSecure = SMTP_SECURE;
        $mail->Port       = SMTP_PORT;

        $mail->setFrom(SMTP_FROM_EMAIL, SMTP_FROM_NAME);
$mail->addAddress('suresh@blueoceancorporation.com','Suresh');
$mail->isHTML(true);
$mail->Subject = 'Egypt test';
$mail->Body = '<b>Hello</b> from PHPMailer test';
if (!$mail->send()) {
  echo "Send failed: ".$mail->ErrorInfo;
} else {
  echo "OK";
}



