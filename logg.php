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
		<a href="index.php " target="_self">
   <img src="images/closebutton.png" alt="" style="float:right;position:relative;top:-10px;left:20px;padding: 15px;
	margin:0 2px; background:transparent;" ></a><br><br><br>
	<h2>Login</h2>
	<form action="#" method="post" >
<font face="Times New Roman" size="8px" color="#000">
		<img src="images/email.png" alt="">
		<input type="email" placeholder="Email-id" autocomplete="off" required="" name="Email">
		<img src="images/pass.png" alt="">
		<input type="password" placeholder="Password"autocomplete="off" required="" name="psw">
		</font><br><br><br><br><br><br><br><br><br>
		<input type="submit" name="submit" value="Login">
		<a href="register.php" style="text-decoration: none;padding:3px;margin:7px;">New User</a><br><br>
		<a href="forgot.php" style="text-decoration: none;padding:3px;margin:7px;">Forgot Password</a></form>
	</div>
	</body>
	</html>
	<?php
	if(isset($_POST['submit']))
	{
		$user=$_POST['Email'];
		$pass=$_POST['psw'];
		echo "<script> alert('hiiii') </script>";
		setcookie('user',$user,time()+(86400*7),'/');
		if($user=="admin@gmail.com" && $pass=="12345")
		{
			echo "<script> alert('Login Successfully') </script>";
			header("Location:adminlogin.php");
		}
		else
		$con=mysql_connect("localhost","root","");
		mysql_select_db("fund",$con);
		$q=mysql_query("select *from register where email='$user';");
		while($row=mysql_fetch_array($q))
		{
		$c=$row[1];
		$d=$row[3];
		if($user== $c && $pass== $d)
		{
			echo "<script> alert('Login Success') </script>";
			header("Location:upload.php");
		}
		else
		{
			echo "<script> alert('Login unSuccess') </script>";
		}
	}
	}
	?>