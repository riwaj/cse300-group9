<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>IIITD Car Pool</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
	<script language="JavaScript" type="text/javascript">
function changeVisibility(id2,id1) {
	    var e=document.form1.userType.value;
		var f = document.getElementById(id1);
		var g = document.getElementById(id2);
	if(e==="Car Owner")
	{
					document.form1.sp.required=true;
					document.form1.m1.required=true;
					document.form1.cost.required=true;
					document.form1.cmodel.required=true;
					document.form1.cap.required=true;
					document.form1.plate.required=true;
          			g.style.display = 'block';
					f.style.display = 'none';		
	}
	if(e==="Passenger")
	{
					document.form1.sp.required=false;
					document.form1.m1.required=false;
					document.form1.cost.required=false;
					document.form1.cmodel.required=false;
					document.form1.cap.required=false;
					document.form1.plate.required=false;

          			f.style.display = 'block';
					g.style.display = 'none';		
	}
}
</script>
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
              <li class="active"><a href="dashboard.html">Home</a></li>
              <li><a href="profile.html">Profile</a></li>
             <li><a href="contact.html">Contact Us</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

<?php
$user=$_POST["username"];;
$pass=$_POST["pass"];
?>
      <h1>Create your Profile</h1>
      
      <div class="row"><div class="span5 offset3">
      <form class="form-horizontal" name="form1" action="insert_se.php" method="post">
        <fieldset>
<h3>Personal Info</h3>
 <div class="control-group" >
         
            <div class="controls">
              <input type="hidden" required class="input-append" name="email" value="<?php echo $user ?>" placeholder="temporary till we get google login">
            </div>
          </div>
          <div class="control-group">
      
            <div class="controls">
              <input type="hidden" required class="input-append" name="pass" value="<?php echo $pass ?>" placeholder="temporary till we get google login">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="name">Name</label>
            <div class="controls">
              <input type="text" required class="input-append" name="name" placeholder="eg. Vinod Chopra"  >
            </div>
          </div>
           <div class="control-group">
            <label class="control-label" for="phn">Phone Number*</label>
            <div class="controls">
              <input type="tel" required class="input-medium" name="phn" placeholder="eg. 9811098110"  >
              <label> *Phone Number is not disclosed to other users.</label>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="userType">User Type</label>
            <div class="controls">
              <select name="userType" onchange="changeVisibility('owner','passenger')" class="span2" name="userType"  >
                <option selected="selected" disabled="disabled">Select</option>
                <option>Car Owner</option>
                <option>Passenger</option>
              </select>
            </div>
          </div>
          
          <div id="owner" style="display: none;">
          <div class="control-group">
          <h3>Route Info<h5>(You can register more routes anytime after registration is complete)
</h5></h3>            <label class="control-label" for="textarea">Start Point </label>
            <div class="controls">
              <input type="text" class="input-large" name="sp" placeholder="eg. Nehru Place Bus Terminal"  >
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
  <div class="control-group">
          
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


<h3>Car Info</h3>
<div class="control-group">
            <label class="control-label" for="textarea">Model</label>
            <div class="controls">
              <input type="text" class="input-small" name="cmodel" placeholder="eg. Swift"  >
            </div>
</div>

 <div class="control-group">
            <label class="control-label" for="textarea">Capacity</label>
            <div class="controls">
              <input type="text" class="input-mini" name="cap" placeholder="eg. 5"  >
            </div>
</div>
 <div class="control-group">
            <label class="control-label" for="textarea">Number Plate</label>
            <div class="controls">
              <input type="text" class="input-medium" name="plate" placeholder="eg. DL3C3024">
            </div>
</div>
 <div class="control-group">
            <label class="control-label" for="userType">A/C</label>
            <div class="controls">
              <select id="ac" class="span1" name="ac"  >
                <option>Yes</option>
                <option>No</option>
              </select>
            </div>
          </div>
            

          </div>
          <div id="passenger" style="display: none;">
           <div class="control-group">
                       <div class="controls">
              <input type="hidden" class="input-large" name="ploc" placeholder="eg. R.K. Puram, Sec 3 bus stop"  >
            </div>
</div>


 




          </div> 
          

                 
          
                   

          <div class="form-actions">
 <button type="submit" class="btn btn-success">Submit</button>
            <button class="btn" ><a href="index.html">Cancel</a></button>
          </div>
        </fieldset>
      </form>
      </div>
      
      
      </div>
      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
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
