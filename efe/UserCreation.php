<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Creation</title>
</head>

<body>
<?php
$con = mysql_connect("localhost:3306","root","<PaSS>");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("carpool", $con);
if($_POST["userType"]=="Passenger")
{
	$sql="INSERT INTO Passenger (eid, name, phoneNo, pickLocation)
	VALUES
	('$_POST[email]','$_POST[name]','$_POST[phn]','$_POST[ploc]')";

	if (!mysql_query($sql,$con))
  	{
  		die('Error: ' . mysql_error());
  	}
	mysql_close($con);
}


/*echo (isset($_POST["phn"]))? $_POST["phn"] : 'Variable undefined..';
//echo (isset($_POST["userType"]))? $_POST["userType"] : 'Variable undefined..';
if($_POST["userType"]=="Passenger")
{
header("Location: http://localhost/dashboard.php");
exit();
}
else{
echo (isset($_POST["name"]))? $_POST["name"] : 'Variable undefined..';
}*/


?>

</body>
</html>