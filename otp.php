<?php
session_start();
if(isset($_POST['save']))
{
$rno=$_SESSION['otp'];
$urno=$_POST['otpvalue'];
if(!strcmp($rno,$urno))
{
$name=$_SESSION['name'];
$email=$_SESSION['email'];
$phone=$_SESSION['phone'];
//For admin if he want to know who is register
$to="example@gmail.com";
$subject = "Thank you!";
$txt = "Some one show your demo Email id: ".$email." Mobile number : ".$phone."";
$headers = "From: studentstutorial@gmail.com" . "\r\n" .
"CC: divyasundarsahu@gmail.com";
mail($to,$subject,$txt,$headers);
echo "<p>Thank you for show our Demo.</p>";
//For admin if he want to know who is register
}
else{
echo "<p>Invalid OTP</p>";
}
}
//resend OTP
if(isset($_POST['resend']))
{
$message="<p class='w3-text-green'>Sucessfully send OTP to your mail.</p>";
$rno=$_SESSION['otp'];
$to=$_SESSION['email'];
$subject = "OTP";
$txt = "OTP: ".$rno."";
$headers = "From: otp@studentstutorial.com" . "\r\n" .
"CC: divyasundarsahu@gmail.com";
mail($to,$subject,$txt,$headers);
$message="<p class='w3-text-green w3-center'><b>Sucessfully resend OTP to your mail.</b></p>";
}
?>
<html>
<head>
	<title> Registration Page </title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<style type="text/css">
		.forms img:hover
{
	transform: scale(1.2);
	transform: .5s;
}
	</style>
</head>
<body>
	<div class="container">
	<div class="icon">
		<img class="d-block" src="images/logg.jpg" alt="logo">
		<p > <font face="Times New Roman" size="6px" color="#fff">Welcome to our charity</font></p>
	</div>
	<div class="social">
		<a href="#"><img src="images/Twitter-circle-logo.png" alt=""></a>
		<a href="#"><img src="images/facebook_circle-512.png" alt=""></a>
		<a href="#"><img src="images/in.png" alt=""></a>
	</div>
	<div class="forms">
		<a href="index.html" target="_self">
   <img src="images/closebutton.png" alt="" style="float:right;position:relative;top:-10px;left:20px;padding: 15px;
	margin:0 2px; background:transparent;" ></a><br><br><br>
	<form action="" method="post" >
<font face="Times New Roman" size="8px" color="#000">
		<img src="images/email.png" alt="">
		<input type="email" placeholder="Email-id" autocomplete="off" required="">
		<img src="images/pass.png" alt="">
		<input type="password" placeholder="Password"autocomplete="off" required="">
		<input type="text" placeholder="OTP" autocomplete="off" required="">
</font>
		<input type="submit" name="save" value="Login"><br><br><br><br>
		<input type="submit" name="resend" value="resend" style="float:right;"">
	</div>
	</body>
	</html>