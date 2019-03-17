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
		<p > <font face="Times New Roman" size="6px" color="#000" style="top:100%">Global CSR</font></p>
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
	<h2>Forgot Password</h2>
	<form action="#" method="post" >
<font face="Times New Roman" size="8px" color="#000">
		<img src="images/email.png" alt="">
		<input type="email" placeholder="Email-id" autocomplete="off" required="" name="Email">
		<img src="images/pass.png" alt="">
		<input type="password" placeholder="Password"autocomplete="off" required="" name="psw">
		<img src="images/pass.png" alt="">
		<input type="password" placeholder="Password"autocomplete="off" required="" name="psw1">
		</font><br><br><br><br><br><br><br><br><br>
		<input type="submit" name="submit" value="Change Your Password">
		<a href="logg.php" style="text-decoration: none;padding:3px;margin:7px;">Login</a><br><br>
	</div>
	</body>
	</html>
	<?php
	if(isset($_POST['submit']))
	{
		$user=$_POST['Email'];
		$pass=$_POST['psw'];
		$cpass=$_POST['psw1'];
		setcookie('user',$user,time()+(86400*7),'/');
		$con=mysql_connect("localhost","root","");
		mysql_select_db("fund",$con);
		if($pass==$cpass)
		{
		$q=mysql_query("update register set cpass='$cpass' where email='$user'");
		if($q)
		{
			echo "<script> alert('Updated Successfully') </script>";
		}
		else
		{
			echo "<script> alert('Login unSuccess') </script>";
		}
	}
	}
	?>