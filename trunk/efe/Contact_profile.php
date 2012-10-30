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
              <li ><a href="dashboard.php"><i class="icon-home icon-white"></i> Home</a></li>
			  <li ><a href="about.php">About</a></li>
              <li class=""><a href="profile.php">Profile</a></li>
                            <li><a href="index.php">Logout</a></li>
								   

  <li><a href="contact.php">Contact Us</a></li>   
  <li><a href="faq.php">FAQ</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
      <?php
	  session_start();
if(!isset($_SESSION['userid']))
{
	 header("Location: http://192.168.1.20:8089/unauthrised.php");
}
else{
	$uid=$_SESSION['userid'];
}
$con = mysql_connect("localhost","group9","grp9football");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("group9", $con);

$result = mysql_query("SELECT * FROM users where uid='" . $pid. "'");


$row = mysql_fetch_array($result);
 
$name=$row['name'];
$type=$row['userType'];
$eid=$row['eid'];
$phn=$row['phone'];
if($type=="Car Owner")
{
	$car =  mysql_query("select car.modelName, car.capacity,car.AC,car.numberPlate from car,users,owns
						where car.cid=owns.cid and owns.oid=".$pid);
	$row = mysql_fetch_array($car);
	$cname=$row['modelName'];
	$cap=$row['capacity'];
	$np=$row['numberPlate'];
	$AC=$row['AC'];
}

mysql_close($con);
?>
    <div class="container">

     <?php echo "<h3 align='center'>".$name."'s Profile</h3>";
	 ?>

<div class="span3 offset4">
      <div class="row">
      <div class="btn-group pull-right">

</div>
      <div class="row">
</div>      

<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
        <span>Personal Info</span>
      </a>
    </div>
    <div id="collapseOne" class="accordion-body collapse in">
      <div class="accordion-inner">
      <h4>  Name : <?php echo $name?><br>
        Email ID : <?php echo $eid?><br>
        User Type : <?php echo $type?><br></h4>
      </div>
    </div>
  </div>
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
        <?php
	  if($type=="Passenger")
	  {
		  echo "<span>Route Followed</span>
		  </a>
		  </div>";
	  }
	  else
	  {
		  echo "<span>Car Info</span>
		  </a>
		  </div>";
	  }
	  ?>
      </a>
    
    <div id="collapseTwo" class="accordion-body collapse">
      <div class="accordion-inner">
         <?php
	  if($type=="Passenger")
	  {
		  echo "Passenger";
	  }
	  else
	  {
		  echo "<h4>  Model Name : ".$cname."<br>
       Capacity : ".$cap."<br>
         AC : ".$AC."<br>
          Number Plate : ".$np."<br></h4>";
	  }
	  ?>
      </div>
    </div>
	</div>
	<?php
	if($type=="Car Owner")
{
$con = mysql_connect("localhost","group9","grp9football");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("group9", $con);

$result = mysql_query("select route.rid, route.startpoint, route.milestone1, route.milestone2, route.milestone3, route.milestone4, route.milestone5, route.rcost
from route, follows where route.rid=follows.rid and follows.oid='" . $pid. "'");

$cnt1=6;
$cntr=1;

echo	" <div class='accordion-group'>
    <div class='accordion-heading'>
      <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#collapseThree'>
        <span>Route Info</span>
      </a>
    </div>
    <div id='collapseThree' class='accordion-body collapse'>
      <div class='accordion-inner'>
	  <div class='accordion' id='accordion3'>";
	  while($row = mysql_fetch_array($result))
 {	  
 echo 
  "<div class='accordion-group'>
    <div class='accordion-heading'>
      <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion3' href='#collapse".$cnt1."'>
        <span>Route ".$cntr." (From ".$row['startpoint'].")</span>
      </a>
    </div>
    <div id='collapse".$cnt1."' class='accordion-body collapse'>
      <div class='accordion-inner'>
        
		<h4>Start Point : ".$row['startpoint']."</br>
		Milestone 1 : ".$row['milestone1']."</br>
		Milestone 2 : ".$row['milestone2']."</br>
		Milestone 3 : ".$row['milestone3']."</br>
		Milestone 4 : ".$row['milestone4']."</br>
		Milestone 5 : ".$row['milestone5']."</br>
		Route Cost : Rs.".$row['rcost']."</h4><br>";
		$data = mysql_query("select count(*) as num from route, cpool
where cpool.passenger='".$uid."' and cpool.route='".$row['rid']."'") or die(mysql_error());

$rown = mysql_fetch_assoc($data);

$numfo = $rown['num'];
if($numfo==0){
		echo"<form method='post' action='join_cpool.php'>
		<input type='text' name='ploc' required placeholder='Pick Up Location for above route'/>
		<input type='hidden' name='calbak' value='".$pid."' required/>
		<input type='hidden' name='route' required value='".$row['rid']."'/>
		<button type='submit' class='btn btn-success' value='follow'>Follow This Route</button>
         </form>		";
		}
		else
		{
		echo"<form method='post' action='join_cpool.php'>
		<input type='hidden' name='calbak' value='".$pid."' required/>
		<input type='hidden' name='route' required value='".$row['rid']."'/>
		<button type='submit' class='btn btn-success' value='follow'>Unfollow This Route</button>
         </form>		";
		}
     echo" </div>
    </div>
  </div>";
$cnt1=$cnt1+1;
$cntr=$cntr+1;
}
 echo "</div>
    </div>
  </div>";
    mysql_close($con);
  }

  ?>
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
