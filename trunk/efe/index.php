<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<title>IIITD Car Pool</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="Web Mutiny">

<!-- Le styles -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/animate-custom.css" rel="stylesheet">

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
p
<body>
<?php
session_start();
if(!session_id() == '')
 {
	session_unset();
   session_destroy();
}
?>
<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">I-Pool</a>
          <div class="nav-collapse">
            <ul class="nav pull-right">
              <li class="active"><a href="#"><i class="icon-home icon-white"></i>Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact Us</a></li>
			  	  <li><a href="faq.php">FAQ</a></li>

             <li>

</li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
<div class="container"> 

  
  <!-- Main hero unit for a primary marketing message or call to action -->
  <div class="hero row span12">
  
    <div class="span6">
      <section> 
        <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  --> 
        <a class="hiddenanchor" id="toregister"></a> <a class="hiddenanchor" id="tologin"></a>
        <div id="wrapper">
          <div id="login" class="animate form">
          <div id="buttons">
</div>
            <form autocomplete="off" action="authenticate.php" method="post">
              <p>
                <label for="username" class="uname"  > Your Username </label>
                
                <input id="username" autocomplete="on" pattern="^[A-Za-z]{1,20}[0-9]{0,5}$" name="username" required type="text" placeholder="xyz10067"/>
              </p>
              <p>
                <label for="password" class="youpasswd" > Your password </label>
                <input id="password" name="password" required type="password" placeholder="eg. X8df!90EO" />
              </p>
              <p>
                    <a href="hello.html"><label>Forgot My Passowrd</label></a>
              </p>
                 <p class="login button">
                <input type="submit" value="Log in !" class="btn-primary"/>
              </p>
				
              </p>
              
              <p class="login button">
              Not a Member yet ? 
                <a href="signUp.php"><input type="button" value= "Sign Up" class="btn-info"/></a>
              </p>
             
            </form>
          </div>
        
        </div>
      </section>
    </div>
  </div>
  </div>
  <hr>
</div>
<!-- /container --> 

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
