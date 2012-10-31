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
  
$result = mysql_query("SELECT userType,name,phone FROM users where uid='" . $uid . "'");
$row = mysql_fetch_array($result);
$type=$row['userType'];
$name=$row['name'];
$phn=$row['phone'];

$result = mysql_query("SELECT modelName,capacity,AC,numberPlate FROM car,owns where owns.oid='".$uid."' and owns.cid=car.cid");
$row = mysql_fetch_array($result);
$cname=$row['modelName'];
$cap=$row['capacity'];
$ac=$row['AC'];
$np=$row['numberPlate'];
mysql_close($con);
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>IIITD Car Pool</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<style type="text/css">
div span::after {
  width: 0;
  height: 0;
  display: inline-block;
  content: "&darr;";
  text-indent: -99999px;
  vertical-align: top;
  margin-top: 8px;
  margin-left: 4px;
  border-left: 4px solid transparent;
  border-right: 4px solid transparent;
  border-top: 4px solid #000;
  filter: alpha(opacity=50);
  -khtml-opacity: 0.5;
  -moz-opacity: 0.5;
  opacity: 0.5;
}
</style>
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
              <li ><a href="dashboard.php"><i class="icon-home icon-white"></i> Home</a></li>
			  <li><a href="about.php">About</a></li>
              <li class="active"><a href="profile.php">Profile</a></li>
                           <li><a href="index.php">Logout</a></li>   
                  <li><a href="contact.php">Contact Us</a></li>   
				  	   <li><a href="faq.php">FAQ</a></li>;

   				  
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
	<h1> Edit Your Profile</h1>
	<h4>Edit only those fields you want change</h4><br>
<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
        <span>Edit Personal Info</span>
		 </a>
    </div>
	<div id="collapseOne" class="accordion-body collapse">
      <div class="accordion-inner">
	  <form class="form-horizontal" name="form1" action="update_user.php?f=g" method="post">
	  <fieldset>
          <div class="control-group">
            <label class="control-label" for="name">Full Name</label>
            <div class="controls">
              <input type="text" required class="input-append" name="name" value="<?php echo $name?>" pattern="^[A-Za-z]{1,20}\s[A-Za-z]{1,20}$"  >
            </div>
          </div>
           <div class="control-group">
            <label class="control-label" for="phn">Phone Number*</label>
            <div class="controls">
              <input type="tel" required pattern="^[789][0-9]{9}$" class="input-medium" name="phn" value="<?php echo $phn?>"  >
              <label> *Phone Number is not disclosed to other users.</label>
            </div>
          </div>
		     <div class="form-actions">
 <button type="submit" class="btn btn-success">Save Changes</button>
            <button class="btn" ><a href="profile.php">Cancel</a></button>
          </div>
        </fieldset>
      </form>
	   </div>
    </div>
	 <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
      <?php
	  if($type=="Passenger")
	  {
		  echo "<span>Delete Profile</span>
		  </a>
		  </div>";
	  }
	  else
	  {
		  echo "<span>Edit Car Info</span>
		  </a>
		  </div>";
	  }
	  ?>
        
    <div id="collapseTwo" class="accordion-body collapse">
      <div class="accordion-inner">
   <?php
	  if($type=="Passenger")
	  {
		  echo "<button class='btn btn-danger'>Delete Profile</button>
	 (Cannot be undone)";
	  }
	  else
	  {
	  echo
		  "<form class='form-horizontal' name='form1' action='update_user.php?f=c' method='post'>
	  <fieldset>
      <div class='control-group'>
            <label class='control-label' for='textarea'>Model</label>
            <div class='controls'>
              <input type='text' class='input-small'  pattern='^[A-za-z0-9 ]{1,30}$' name='cmodel' value='$cname'  >
            </div>
</div>

 <div class='control-group'>
            <label class='control-label' for='textarea'>Capacity*</label>
            <div class='controls'>
              <input type='text' class='input-mini' pattern='^[0-9]$' name='cap' value='$cap'  >
              *Including driver
            </div>
</div>
 <div class='control-group'>
            <label class='control-label' for='textarea'>Number Plate</label>
            <div class='controls'>
              <input type='text' class='input-medium' name='plate' value='$np'>
            </div>
</div>
 <div class='control-group'>
            <label class='control-label' for='userType'>A/C</label>
            <div class='controls'>
              <select id='ac' class='span1' name='ac'  >";
			  
			  if($ac=='Yes')
			  {echo"
                <option selected='selected'>Yes</option>
                <option>No</option>
				";}
				else
				{echo"
                <option>Yes</option>
                <option selected='selected'>No</option>
				";}echo"
              </select>
            </div>
          </div>
		  <div class='form-actions'>
 <button type='submit' class='btn btn-success'>Save Changes</button>
            <button class='btn' ><a href='profile.php'>Cancel</a></button>
          </div>
        </fieldset>
      </form>
      </div>
    </div>
  </div>
  
  <div class='accordion-group'>
    <div class='accordion-heading'>
      <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#collapseThree'>
	  <span>Delete Profile or Route</span>
		  </a>
		  </div>
		  <div id='collapseThree' class='accordion-body collapse'>
      <div class='accordion-inner'>";
	  $con = mysql_connect("localhost","group9","grp9football");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("group9", $con);
$cnt=1;
$result = mysql_query("select route.rid,route.startpoint from route, follows where route.rid=follows.rid and follows.oid='". $uid. "'");
 while($row = mysql_fetch_array($result))
 {	 
   echo "Route ".$cnt." (from ".$row['startpoint']." ) <a href='delete.php?t=r&r=".$row['rid']."'><button class='btn btn-warning'>Delete Route</button></a> <br><br>";
   $cnt=$cnt+1;
   }
	echo "<hr>  <button class='btn btn-danger'>Delete Profile</button>
	 (Cannot be undone)
	  ";}
	  ?>
	  
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
