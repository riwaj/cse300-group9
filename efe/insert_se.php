<?php
$con = mysql_connect("localhost","root","wirelesslan");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("carpool", $con);


  $sql_passenger="INSERT INTO passenger (pid,eid ,name,phoneNo) VALUES( NULL,'$_POST[email]','$_POST[name]','$_POST[phn]')";
  $sql_owner ="INSERT INTO owner VALUES(NULL,'$_POST[email]','$_POST[name]','$_POST[phn]')";
  $sql_route = "INSERT INTO route VALUES(NULL,'$_POST[m1]','$_POST[m2]','$_POST[m3]','$_POST[m4]','$_POST[m5]','$_POST[sp]','$_POST[cost]')";
   $sql_car = "INSERT INTO car VALUES(NULL,'$_POST[cap]','$_POST[cmodel]','$_POST[ac]','$_POST[plate]')";

$sql_follows = "INSERT INTO follows VALUES(NULL,'$_POST[email]',NULL)";
$sql_cpool = "INSERT INTO cpool VALUES(NULL,NULL,NULL)";
  
 $type = $_POST['userType'];

 if($type == "Passenger"){
 
 if (!mysql_query($sql_passenger,$con))
  {
  die('Error: ' . mysql_error());
  }
  
 }
 
 
 if($type == "Car Owner")
 {
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
$sql2=mysql_query("SELECT oid FROM owner WHERE eid='" . $email . "'");
$cid = mysql_fetch_array($sql1);
$oid = mysql_fetch_array($sql2);
$sql_owns = "INSERT INTO owns VALUES(NULL,'$oid[oid]','$cid[cid]')";
 if (!mysql_query($sql_owns,$con))
  {
 	 die('Error: ' . mysql_error());
  }
  
  
 }
 
 
 

mysql_close($con);
?>

