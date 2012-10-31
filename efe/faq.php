<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>IIIT-D Car Pool</title>
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
    <h1> <div align="left">Frequently asked questions about IIIT-D Car Pool </div></h1>
    <br>

	
	
	<h4>1. Why can I not login from any account other than IIIT-D account?</h4>
	<p> IIIT-D car pool is a car pool software only for students studying in IIIT-D for use bound to IIIT-D.</p>
<br>

<h4>2. I can make only one account, what shall I do if I no longer want to use the software as a car-owner but use it as a passenger?</h4>
	<p> You need to delete your account and Sign up again, this time as a passenger.</p>
<br>


<h4>3. Can I be a car owner as well as a passenger?</h4>
<p>Yes, you can be both.</p>
<br>

<h4>4. Why do I need to write the milestones while creating my profile?</h4>
<p>Specifying your milestones would help the passengers connect with you more freely.</p>
<br>

<h4>5. Can I check which other passengers are following the same route(s) that I am following?</h4>
<p>This feature would be added soon</p>
<br>

<h4>6. I don't know how to go back to the List of Car Owners and Passengers. What do I do?</h4>
<p>Go to the Home Page by selecting Home from the panel on the top right of the webpage.</p>
<br>

<h4>7. Why can't I reply back to the broadcaster confirming my willingness to go with him at the time specified by him?</h4>
<p>This situation occurs when the number of people who have replied to broadcaster is already equal to the capacity of the car being used by him and hence no more people can travel with the broadcaster.</p>
<br>

<h4>8. I am a Car Owner and I have an emergency. I cannot travel today. Can I cancel the broadcast message sent to the passengers?</h4>
<p>Answer be filled in later</p>
<br>

<h4>9. My route followers are not paying me. What do I do?</h4>
<p>We are here to facilitate the coming together of people for the car pool but payments are expected to be handled by the car pool group members.</p>
<br>


<h4>10. How do I stop receiving broadcasts from a Car Owner?</h4>
<p>Go to your Profile and from the Route Followed tab, you can select Unfollow Route button against the Car Owner you wish to stop receiving broadcasts from.</p>
<br>
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
