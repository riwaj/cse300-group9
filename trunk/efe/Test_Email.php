<?php

require("class.phpmailer.php");

$mail             = new PHPMailer();
 
$body             = "Please verify your account by clicking on the link below.<br>
					
					192.168.1.20:8089/verified.php?c=".$_GET['hash']."&email=".$_GET['email']."";
 
$mail->Mailer = "smtp"; 
$mail->Host = "ssl://smtp.gmail.com"; 
$mail->Port = 465; 
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "carpool.iiitd@gmail.com"; // SMTP username
$mail->Password = "grp9football"; // SMTP password 
$mail->IsSMTP(); // telling the class to use SMTP
$mail->SetFrom('carpool.iiitd@gmail.com', 'Car Pool');
 
$mail->Subject    = "CarPool Account Verification";
 
$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
 
$mail->MsgHTML($body);
 $e=$_GET['email'];
$mail->AddAddress($e, 'User Carpool');
 
if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
   header("Location: http://192.168.1.20:8089/verify.php?email=".$_GET['email']."");
}
?>