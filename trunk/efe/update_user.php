<?php
session_start();
if(!isset($_SESSION['userid']))
{
	 header("Location: http://192.168.1.20:8089/unauthrised.php");
}
else
{
	$uid=$_SESSION['userid'];
}
$con = mysql_connect("localhost","group9","grp9football");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("group9", $con);

if($_GET['f']=="g")
{
	$sql_update = "update users set name='".$_POST['name']."' where uid=".$uid."";   
    if (!mysql_query($sql_update,$con))
  {
 	 die('Error: ' . mysql_error());
  }
  
  $sql_update = "update users set phone='".$_POST['phn']."' where uid=".$uid."";   
    if (!mysql_query($sql_update,$con))
  {
 	 die('Error: ' . mysql_error());
  }
}
if($_GET['f']=="c")
{
	$sql_update = "update car,owns set modelName='".$_POST['cmodel']."' where owns.oid=".$uid." and owns.cid=car.cid";   
    if (!mysql_query($sql_update,$con))
  {
 	 die('Error: ' . mysql_error());
  }
  
  $sql_update = "update car,owns set capacity='".$_POST['cap']."' where owns.oid=".$uid." and owns.cid=car.cid";   
    if (!mysql_query($sql_update,$con))
  {
 	 die('Error: ' . mysql_error());
  }
  
  $sql_update = "update car,owns set numberPlate='".$_POST['plate']."' where owns.oid=".$uid." and owns.cid=car.cid";   
    if (!mysql_query($sql_update,$con))
  {
 	 die('Error: ' . mysql_error());
  }
  
  $sql_update = "update car,owns set AC='".$_POST['ac']."' where owns.oid=".$uid." and owns.cid=car.cid";   
    if (!mysql_query($sql_update,$con))
  {
 	 die('Error: ' . mysql_error());
  }
}
 

mysql_close($con);
header("Location: http://192.168.1.20:8089/profile.php");
exit;
?>

