<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Authenticating</title>
</head>
<?php
$username=$_POST['username'];
 $password = $_POST['password'];
$con = mysql_connect("localhost","root","wirelesslan");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("carpool", $con);

$result = mysql_query("SELECT pass, active, uid FROM users where eid='" . $username . "@iiitd.ac.in'");

$row = mysql_fetch_array($result);
if($row['pass']==$password && $row['active']==1 )
{
	ob_start();
	header("Location: http://localhost/SE/efe/dashboard.php");
	$uid = $row['uid'];
	session_start();
if(!session_id() == '')
 {
	session_unset();
   session_destroy();
   session_start();
}
if(isset($_SESSION['userid']))
{
	 unset($_SESSION['userid']); 
}
$_SESSION['userid']=$uid;
	echo "user ID = ". $_SESSION['userid'];
	ob_end_flush(); 
exit;
}
else if($row['pass']==$password && $row['active']==0 )
{
	header("Location: http://localhost/SE/efe/retryLogin.php?r=a");
	exit;
}
else
{
	header("Location: http://localhost/SE/efe/retryLogin.php?r=i");
	exit;
}

mysql_close($con);
?>
<body>
</body>
</html>