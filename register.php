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
    <img class="d-block" src="images/logo1.png" alt="logo">
		<p > <font face="Times New Roman" size="6px" color="#000" style="top:100%">Global CSR</font></p>
	</div>
	<div class="social">
		<a href="#"><img src="images/Twitter-circle-logo.png" alt=""></a>
		<a href="#"><img src="images/facebook_circle-512.png" alt=""></a>
		<a href="#"><img src="images/in.png" alt=""></a>
	</div>
	<div class="forms">
		<a href="index.php" target="_self">
   <img src="images/closebutton.png" alt="" style="float:right;position:relative;top:-10px;left:20px;padding: 15px;
	margin:0 2px; background:transparent;" ></a><br><br><br>
	<h2>Register Here....</h2>
	<form action="#" method="post" >
<font face="Times New Roman" size="8px" color="#000"><img src="images/avatar-512.png" alt="">
		<input type="text" placeholder="UserName" autocomplete="off" required="" name="name">
		<img src="images/email.png" alt="">
		<input type="email" placeholder="Email-id" autocomplete="off" required="" name="Email"><br>
		<img src="images/reset.png" alt="">
		<input type="password" placeholder="Password"autocomplete="off" required="" name="psw">
		<img src="images/reset.png" alt="">
		<input type="password" placeholder="Confirm Password" autocomplete="off" required="" name="psw1">
		</font>
		<input type="radio" name="r1" style="width:20px;height:10px;" value="Individual">Individual
		<input type="radio" name="r1"  style="width:20px;height:10px;" value="Corporate">Corporate<br>

		<input type="submit" name="submit" value="Register"><br><br><br>
		<a href="logg.php" style="text-decoration: none;padding:3px;margin:7px;">Already User?</a></form>
	</div>
<font face="Times New Roman" size="6px" color="#000" style="top:100%"></font>
</body>
	</html>
	<?php
	if(isset($_POST['submit']))
	{
		echo "<script> alert('hiiii') </script>";
	$name=$_POST['name'];
	$email=$_POST['Email'];
	$phone=$_POST['r1'];
	$pass=$_POST['psw'];
	$cpass=$_POST['psw1'];
	if($pass!= $cpass)
	{
	echo "<script> alert('Confirm Password Should Match') </script>";
	}
	else
	mysql_connect("localhost","root","");
	mysql_select_db("fund");
	if($pass==$cpass) 
	{
	mysql_query("insert into register values('$name','$email','$phone','$cpass')");
	echo "<script> alert('Inserted Successfully') </script>";
	}
	else
	{
		"<script> alert('Not Successfully') </script>";
	}
	}
	
	?>