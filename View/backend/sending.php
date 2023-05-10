<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include '../../Controller/EvenementC.php';
include_once '../../Model/Evenement.php';
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["send"])){
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username ='moncef.halleb@esprit.tn';
$mail->Password = 'ywhfefuzobegqjmt';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('moncef.halleb@esprit.tn');
$mail->addAddress($_POST["email"]);
$mail->isHTML(true);
$mail->Subject = $_POST["subject"];
$mail->Body = $_POST["message"];
$mail->send();
echo"<script>
alert('Sent Successfuly');
document.location.href = 'listevenment.php';
</script>
";
}
?>

