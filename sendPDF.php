<?php
session_start();
include "loginUser.php";
?>
<head>
	<link href="css/styles.css" rel="stylesheet">
</head>
<body>
	<div class="form-center border">
		<form action="" method="post">
			<span class="row heading">PDF per E-Mail versenden</span>
			<div class="inputs row">
				<div class="row margin-b15">
					<span class="subtitle">Geben Sie Ihre E-Mail an!</span>
					<div>
						<input  type="text"  placeholder="E-Mail"  name="mail" required>
					</div>
				</div>
				<button type="submit" name="sendMail" class="btn-submit button">Anmelden</button>
			</div>
		</form>
	</div>
</body>

<?php
if (isset($_POST['sendMail'])==! '') {
	require("PHPMailer/PHPMailerAutoload.php");
	require 'PHPMailer/class.phpmailer.php';

	$mail_customer = $_POST['mail'];

	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->CharSet = 'UTF-8';
	$mail->SMTPAuth = true;
	$mail->Host = "smtp.gmail.com";
	$mail->Mailer = "gmail";
	$mail->SMTPSecure = "ssl";
	$mail->SMTPAuth = true;
	$mail->Username = "phil73537@gmail.com";
	$mail->Password = "websiteLueck";

	$subject = utf8_decode('Ihr angeforderte PDF zur Übersicht von gespeicherten personenbezogenen Daten');
	$mail->setFrom('phil73537@gmail.com', $subject);
	$mail->addReplyTo($mail_customer, $subject);
	$mail->addAddress($mail_customer);
	$mail->Subject = utf8_decode('Ihr angeforderte PDF zur Übersicht von gespeicherten personenbezogenen Daten');
	$mail->Port = "465";
	$mail->isHTML(true);
	$mail->Body('Ihr angeforderte PDF zur Übersicht von gespeicherten personenbezogenen Daten');

	if (!$mail->send()) {
		echo "<p>
                 Ihre Nachricht konnte nicht gesendet werden. Versuchen Sie es später erneut.
            </p>";
	} else {
		echo "<p>
                 Ihre Nachricht wurde erfolgreich versandt.
            </p>";
	}
}
