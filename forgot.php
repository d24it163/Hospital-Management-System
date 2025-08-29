
<!DOCTYPE HTML>
<html>
<head>
<link rel="shortcut icon" href="doctor/logo.jpg" type="image/x-icon">
<title>Forgot Page | Divyam Hospital </title>
<link rel="stylesheet" href="forgot.css">

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<link href="css/style.css" rel='stylesheet' type='text/css' />


<link href="css/font-awesome.css" rel="stylesheet"> 

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
 

<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>

<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">

</head> 
<body>

	<div class="wrapper">
		<div class="login_box">
		  <div class="login-header">
			<span>Forgot Page</span>
		  </div>
		
		  <div class="input_box">
			<input type="email" name="email" id="email" class="input-field"  required="true">
			
			<label for="email" class="label">Email</label>
			<i class="bx bx-user icon"></i>
		  </div>
	  
		  <div class="input_box">
			<input type="text" name="contactno" id="contact" class="input-field" required="true" maxlength="10" pattern="[0-9]+">
			
			<label for="pass" class="label">Mobile Number</label>
			<i class="bx bx-lock-alt icon"></i>
		  </div>
	  
		  
	  
		  <div class="input_box">
			<input type="submit" class="input-submit" value="Reset">
		  </div>
	  
		  <div class="register">
			<span><a href="admin.php">Already have an account? </a></span>
		  </div>
		 
		</div>
	  </div>



	
	
	
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>


