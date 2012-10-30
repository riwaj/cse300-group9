
    <?php
	
session_start();
if(!isset($_SESSION['userid']))
{
	 header("Location: http://localhost:809/SE/efe/unauthrised.php");
}
else
{
	$uid=$_SESSION['userid'];
}
	?>
	<?php
$con = mysql_connect("localhost","root","shubhansh");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("carpool", $con);
  
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
header("Location: http://localhost:809/SE/efe/Contact_profile.php?uid=".$_POST['calbak']);
exit;
  ?>

