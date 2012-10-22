<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>IIITD Car Pool</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/log.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

<?php $pid =$_GET["uid"]; ?>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">IIITD Car Pool</a>
          <div class="nav-collapse">
            <ul class="nav pull-right">
              <li ><a href="dashboard.php">Home</a></li>
              <li class="active"><a href="profile.php">Profile</a></li>
                            <li><a href="index.php">Logout</a></li>

  <li><a href="contact.php">Contact Us</a></li>   
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
      <?php
	  session_start();
if(!isset($_SESSION['userid']))
{
	 header("Location: http://localhost/SE/efe/unauthrised.php");
}
else{
	$uid=$_SESSION['userid'];
}
$con = mysql_connect("localhost","root","wirelesslan");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("carpool", $con);

$result = mysql_query("SELECT * FROM users where uid='" . $pid. "'");


$row = mysql_fetch_array($result);
 
$name=$row['name'];
$type=$row['userType'];
$eid=$row['eid'];
$phn=$row['phone'];
mysql_close($con);
?>
    <div class="container">

     <?php echo "<h3 align='center'>".$name."'s Profile</h3>";
	 ?>

<div class="span3 offset4">
      <div class="row">
      <div class="btn-group pull-right">
  <a href="register.php"><button class="btn-primary">Message Me</button></a>
</div>
      <div class="row">
</div>      

<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
        Personal Info
      </a>
    </div>
    <div id="collapseOne" class="accordion-body collapse in">
      <div class="accordion-inner">
      <h4>  Name : <?php echo $name?><br>
        Phone Number : <?php echo $phn?><br>
        User Type : <?php echo $type?><br></h4>
      </div>
    </div>
  </div>
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
        Route Info
      </a>
    </div>
    <div id="collapseTwo" class="accordion-body collapse">
      <div class="accordion-inner">
        Anim pariatur cliche...
      </div>
    </div>
  </div>
</div>
      </div>
      
  
      </div>
      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.js"></script> 
<script src="assets/js/bootstrap-transition.js"></script> 
<script src="assets/js/bootstrap-alert.js"></script> 
<script src="assets/js/bootstrap-modal.js"></script> 
<script src="assets/js/bootstrap-dropdown.js"></script> 
<script src="assets/js/bootstrap-scrollspy.js"></script> 
<script src="assets/js/bootstrap-tab.js"></script> 
<script src="assets/js/bootstrap-tooltip.js"></script> 
<script src="assets/js/bootstrap-popover.js"></script> 
<script src="assets/js/bootstrap-button.js"></script> 
<script src="assets/js/bootstrap-collapse.js"></script> 
<script src="assets/js/bootstrap-carousel.js"></script> 
<script src="assets/js/bootstrap-typeahead.js"></script>
 

  </body>
</html>
