<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>IIITD Car Poor</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/main.css" rel="stylesheet">
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
 <li class="active"><a href="dashboard.php"><i class="icon-home icon-white"></i> Home</a></li>
              <li><a href="profile.php">Profile</a></li>
<li><a href="index.php">Logout</a></li>                     
  <li><a href="contact.php">Contact Us</a></li>
  <li>
  <input type="text" class="input-medium search-query">
  <button type="submit" class="btn">Search</button>
  </li>
</li> </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    
    <div class="navbar navbar-fixed-bottom">
      <div class="navbar-inner">
      <div class="container">
       <ul class="nav nav-pills offset6">
       <li class="dropdown" style="width:200 px">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">       </a>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Filters<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li class="active"><a href="#alphabetical">Passenger</a></li>
              <li class=""><a href="#system1-value">Car Owner</a></li>
              <li class=""><a href="#system2-value">System2 Value</a></li>
              <li class=""><a href="#user-value">User Value</a></li>
              <li class=""><a href="#selected">Selected</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sort By<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li class="active"><a href="#alphabetical">Cost</a></li>
              <li class=""><a href="#system1-value">Capacity</a></li>
              <li class=""><a href="#system2-value">System2 Value</a></li>
              <li class=""><a href="#user-value">User Value</a></li>
              <li class=""><a href="#selected">Selected</a></li>
            </ul>
          </li>
          </ul>
            </div><!-- /.container -->
    </div><!-- /.navbar-inner -->
  </div><!-- /.navbar -->
    </div>
    
    <?php
	session_start();
	$uid=$_SESSION['userid'];
	?>
<div class="container">
      <h1>Find a Match</h1>
      
   
 <div class="row">
          <div id="myTabContent" class="tab-content">
      <table class="table table-striped">
        <thead>
          <tr>         
            <th>User Name</th>
            <th>User Type</th>            
          </tr>
        </thead>
        <tbody>
<?php
$con = mysql_connect("localhost","root","wirelesslan");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("carpool", $con);

$result = mysql_query("SELECT * FROM users where uid!='" . $uid . "'");


while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['userType'] . "</td>";
  echo "</tr>";
  }

mysql_close($con);
?>
         
        </tbody>
      </table>         
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
