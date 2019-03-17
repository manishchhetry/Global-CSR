<?php
mysql_connect("localhost","root","");
mysql_select_db("fund");
$a=$_GET['id'];
$q=mysql_query("delete from register where email = '$a'");
if($q)
{
echo "<script> alert('Success') </script>";	
header("Location:adminlogin.php");
}
else
{
echo "<script> alert('Not Success') </script>";	
}

?>
