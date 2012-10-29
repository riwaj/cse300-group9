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
            <?php
session_start();
if(!isset($_SESSION['userid']))
{
	 echo "<li><a href='index.php'><i class='icon-home icon-white'></i>Home</a></li>";
	 	echo "<li><a href='about.php'>About</a></li>";
		echo   "<li><a href='contact.php'>Contact Us</a></li>";
      echo   "<li class='active'><a href='faq.php'>FAQ</a></li>";

		}

else
{
	echo "<li><a href='dashboard.php'><i class='icon-home icon-white'></i> Home</a></li>";
	echo "<li><a href='about.php'>About</a></li>";
      echo   "<li><a href='profile.php'>Profile</a></li>";
	    echo "<li><a href=index.php'>Logout</a></li>";
	   echo   "<li><a href='contact.php'>Contact Us</a></li>";
	         echo   "<li class='active'><a href='faq.php'>FAQ</a></li>";

}
?>

</li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

<div class="span7 offset2">
    <h1> <div align="left">Frequently asked questions about IIITD Carpool </div></h1>
    <br>

	
	<h4>1. Why can I not login from any account than IIITD account?</h4>
	<p> IIITD car pool is a car pool software for students studying in IIITD for use bound to IIITD.</p>
<br>
<h4>2. Is my password insecured?</h4>
<p>We do store your password in a hash function, hence it is hidden from the administrators as well.</p>
<br>
<h4>3. Can I be a car owner as well as a passenger?</h4>
<p>Yes you can be both.</p>
<br>

<h4>4. Why do I need to write the milestones while creating my profile?</h4>
<p>Specifying your milestones would help the passengers connect with you more freely.</p>
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
