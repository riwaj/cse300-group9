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
if($_GET['t']=="r")
{
$rid= mysql_real_escape_string($_GET['r']);
$result = mysql_query("delete from cpool where cpool.route=".$rid);
if (!mysql_query($result,$con))
  {
 	 die('Error: ' . mysql_error());
  }
  
  $result = mysql_query("delete from follows where rid=".$rid);
if (!mysql_query($result,$con))
  {
 	 die('Error: ' . mysql_error());
  }
  
  $result = mysql_query("delete from route where rid=".$rid);
if (!mysql_query($result,$con))
  {
 	 die('Error: ' . mysql_error());
  }
  }
 ?>