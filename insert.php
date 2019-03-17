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
    $id=$row[0];
	$name=$row[1];
    $email=$row[2];
    $title=$row[3];
    $problem=$row[4];
    $neededamount=$row[5];
    $date=$row[6];
    $raisedamount=$row[7];
    $image=$row[8];
    $r=mysql_query("insert into approved values('$id','$name','$email','$title','$problem','$neededamount','$date',$raisedamount,'$image')");
    if($r)
    {
    $up=mysql_query("update problem set status='approved' where uniqid='$id'");
     echo "<script>alert('Success')</script>";
     header("Location:problems.php");
 	}
 	else
 	{
 	 echo "<script>alert('Not Success')</script>";
 	}
}

?>
