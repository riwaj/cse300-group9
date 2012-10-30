
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
  
  if(isset($_POST['ploc']))
   {
 $sql_cpool = "INSERT INTO cpool VALUES(NULL,'$_POST[route]','$uid','$_POST[ploc]')";
   
   
    if (!mysql_query($sql_cpool,$con))
  {
 	 die('Error: ' . mysql_error());
  }
}
else
{
	$sql_cpool = "delete from cpool where route=".$_POST[route]." and passenger=".$uid."";
	if (!mysql_query($sql_cpool,$con))
  {
 	 die('Error: ' . mysql_error());
  }
}
  
  
mysql_close($con);
header("Location: http://192.168.1.20:8089/Contact_profile.php?uid=".$_POST['calbak']);
exit;
  ?>

