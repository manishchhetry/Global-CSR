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
$q=mysql_query("select *from problem where uniqid='$a'");
while($row=mysql_fetch_array($q))
{
	$name=$row[1];
    $email=$row[2];
    $problem=$row[4];
    $neededamount=$row[5];
    $date=$row[6];
    $raisedamount=$row[7];
    $image=$row[8];
    $r=mysql_query("insert into successstories values('$name','$email','$problem','$neededamount','$date',$raisedamount,'$image')");
    if($r)
    {
     echo "<script>alert('Success')</script>";
     header("Location:approvedproblems.php");
 	}
 	else
 	{
 	 echo "<script>alert('Not Success')</script>";
 	}
}

?>
