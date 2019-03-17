<html>
<head>
	<body>
		<form action="" method="post" enctype="multipart/form-data">
	</body>
</head>
</html>
<?php
mysql_connect("localhost","root","");
mysql_select_db("fund");
$a=$_GET['id'];
    $up=mysql_query("update problem set status='rejected' where problem='$a'");
    if($up)
    {
     echo "<script>alert('Success')</script>";
     header("Location:problems.php");
 	}
 	else
 	{
 	 echo "<script>alert('Not Success')</script>";
 	}

?>
