<?php
session_start();
ini_set("SMTP","localhost");
ini_set("smtp_port","25");
ini_set("sendmail_from","you@yourdomain");
$rndno=rand(100000, 999999);//OTP generate
$message = urlencode("otp number.".$rndno);
$to=$_POST['email'];
$subject = "OTP";
$txt = "OTP: ".$rndno."";
$headers = "From: otp@studentstutorial.com" . "\r\n" .
"CC: divyasundarsahu@gmail.com";
mail($to,$subject,$txt,$headers);
if(isset($_POST['btn-save']))
{
$_SESSION['name']=$_POST['name'];
$_SESSION['email']=$_POST['email'];
$_SESSION['phone']=$_POST['phone'];
$_SESSION['otp']=$rndno;
header( "Location: otp.php" ); 
} ?>