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
 
  </head>

  <body>
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
	?>
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
              <li><a href="dashboard.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li class="active"><a href="contact.php">Contact Us</a></li>
                          <li>
 
</li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container span4 offset4">
    <h1>Add A Route</h1>
 <div class="row"><div>
      <form class="form-horizontal" name="form1" action="insertRoute.php" method="post">
        <fieldset>

          <div id="passenger">
          <div class="control-group">
          <h3>Route Info<h5>Enter Milestones in order of occurance</h5></h3>            <label class="control-label" for="textarea">Start Point </label>
            <div class="controls">
              <input type="text" class="input-large" name="sp" placeholder="eg. Nehru Place Bus Terminal" required>
            </div>
</div>

<div class="control-group">
          
            <label class="control-label" for="textarea">Milestone 1 </label>
            <div class="controls">
              <input type="text" class="input-large" name="m1" value="">
            </div>
</div>
          <div class="control-group">
          
            <label class="control-label" for="textarea">Milestone 2 </label>
            <div class="controls">
              <input type="text" class="input-large" name="m2" value="">
            </div>
</div>

          <div class="control-group">
          
            <label class="control-label" for="textarea">Milestone 3 </label>
            <div class="controls">
              <input type="text" class="input-large" name="m3" value="">
            </div>
</div>

          <div class="control-group">
          
            <label class="control-label" for="textarea">Milestone 4 </label>
            <div class="controls">
              <input type="text" class="input-large" name="m4" value="">
            </div>
</div>

          <div class="control-group">
          
            <label class="control-label" for="textarea">Milestone 5 </label>
            <div class="controls">
              <input type="text" class="input-large" name="m5" value="">
            </div>
</div>
  <label class="control-label" for="textarea">End Point </label>
            <div class="controls">
              <input type="text" class="input-large"  value="IIIT-Delhi, Okhala" disabled>
            </div>
</div>
<div class="control-group">
            <label class="control-label" for="textarea">Cost (One way)*</label>
            <div class="controls">
              <input type="text" class="input-mini" name="cost" placeholder="eg. 120"  >
              *For above mentioned route
            </div>
</div>



 




          </div> 
          

                 
          
                   

          <div class="form-actions">
          <div class="btn-group pull-right">
 <button type="submit" class="btn btn-large btn-success">Add Route</button>
            <button class="btn btn-large" ><a href="profile.php">Cancel</a></button>
          </div>
          </div>
        </fieldset>
      </form>

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
