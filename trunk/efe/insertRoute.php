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
	?>
<?php
$con = mysql_connect("localhost","group9","grp9football");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("group9", $con);
  
 $sql_route = "INSERT INTO route VALUES(NULL,'$_POST[sp]','$_POST[m1]','$_POST[m2]','$_POST[m3]','$_POST[m4]','$_POST[m5]','$_POST[cost]')";
   
   
    if (!mysql_query($sql_route,$con))
  {
 	 die('Error: ' . mysql_error());
  }
  $sql1=mysql_query("SELECT rid FROM route ORDER BY rid DESC LIMIT 1 ");
  $rid = mysql_fetch_array($sql1);
  
  $sql_follows = "INSERT INTO follows VALUES(NULL,$uid,'$rid[rid]')";
 if (!mysql_query($sql_follows,$con))
  {
 	 die('Error: ' . mysql_error());
  }
  
  
mysql_close($con);
header("Location: http://192.168.1.20:8089/profile.php");
exit;
  ?>