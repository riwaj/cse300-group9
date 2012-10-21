<?php
$con = mysql_connect("localhost","root","wirelesslan");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("carpool", $con);


 
  $sql_route = "INSERT INTO route VALUES(NULL,'$_POST[sp]','$_POST[m1]','$_POST[m2]','$_POST[m3]','$_POST[m4]','$_POST[m5]','$_POST[cost]')";
   $sql_car = "INSERT INTO car VALUES(NULL,'$_POST[cap]','$_POST[cmodel]','$_POST[ac]','$_POST[plate]')";

  
 $type = $_POST['userType'];

 if($type == "Passenger"){
	 
	 	$hash = md5( rand(0,1000) );
$sql_passenger="INSERT INTO users VALUES( NULL,'$_POST[name]','$_POST[email]','$_POST[pass]','". mysql_escape_string($hash) ."','$_POST[phn]','passenger',1)";
 
 if (!mysql_query($sql_passenger,$con))
  {
  die('Error: ' . mysql_error());
  }
  
 }
 
 
 if($type == "Car Owner")
 {
	 	 	$hash = md5( rand(0,1000) );
$sql_owner="INSERT INTO users VALUES( NULL,'$_POST[name]','$_POST[email]','$_POST[pass]','". mysql_escape_string($hash) ."','$_POST[phn]','owner',1)";
  if (!mysql_query($sql_owner,$con))
  {
	  die('Error: ' . mysql_error());
  }
  
  
 if (!mysql_query($sql_route,$con))
  {
 	 die('Error: ' . mysql_error());
  }
 
  
  
 if (!mysql_query($sql_car,$con))
  {
  	die('Error: ' . mysql_error());
  }
  
  
$plate = mysql_real_escape_string($_POST["plate"]);
$email = mysql_real_escape_string($_POST["email"]);
$sql1=mysql_query("SELECT cid FROM car WHERE numberPlate='" . $plate . "'");
$sql2=mysql_query("SELECT uid FROM users WHERE eid='" . $email . "'");
$cid = mysql_fetch_array($sql1);
$oid = mysql_fetch_array($sql2);
$sql_owns = "INSERT INTO owns VALUES(NULL,'$oid[uid]','$cid[cid]')";
 if (!mysql_query($sql_owns,$con))
  {
 	 die('Error: ' . mysql_error());
  }


$sql1=mysql_query("SELECT rid FROM route ORDER BY rid DESC LIMIT 1 ");
$sql2=mysql_query("SELECT uid FROM users WHERE eid='" . $email . "'");
$rid = mysql_fetch_array($sql1);
$oid = mysql_fetch_array($sql2);
$sql_follows = "INSERT INTO follows VALUES(NULL,'$oid[uid]','$rid[rid]')";
 if (!mysql_query($sql_follows,$con))
  {
 	 die('Error: ' . mysql_error());
  }
  
  
 }
 
 
 

mysql_close($con);
header("Location: http://localhost/SE/efe/index.html");
exit;
?>

