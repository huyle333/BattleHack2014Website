<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "utf-8">
		<meta name = "viewport" content = "width=device-width, initial-scale = 1">
		<link href = "css/bootstrap.min.css" rel="stylesheet">
		<link href = "css/style.css" rel="stylesheet">
		<link rel= "shortcut icon" href="img/favicon.ico">
		<link href= "http://fonts.googleapis.com/css?family=Ubuntu|Open+Sans:400,600" rel="stylesheet" />
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<script src="//www.parsecdn.com/js/parse-1.2.19.min.js"></script>
		<script>
			Parse.initialize("amPPk1qmmyVaJDGDj0DcooxNOSf4FV1WAGF5J7OT", "ye1aAM74mKkhLvIz81JL1tmxrGfRg37vgK02rz2t");
		</script>
		<script>
			/*
			var TestObject = Parse.Object.extend("TestObject");
			var testObject = new TestObject();
			testObject.save({foo: "bar"}).then(function(object) {
  				alert("yay! it worked");
			});
			*/
		</script>
	</head>
	<title>
		Canary!
	</title>
	<body data-spy="scroll" data-target="#navigation" id="home">
		<div class="navbar-wrapper" style="z-index: 30">
	      <div class="container">
	        <div class="navbar navbar-default navbar-static-top" role="navigation">
	          <div class="container">
	            <div class="navbar-header">
	              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	              </button>
	              <!--<a class="navbar-brand" href="index.php">Canary!</a>-->
	              <a href="index.php"><img src = "img/Canary.png" height = "30px" style= "margin-top: 12px"></a>
	            </div>
	            <div class="navbar-collapse collapse">
	              <ul class="nav navbar-nav navbar-right">
	                <li><a href="#">City Pollution</a></li>
	                <li><a href="#about">Who we are</a></li>
	                <li class="dropdown">
	                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <span class="caret"></span></a>
	                  <ul class="dropdown-menu" role="menu">
	                    <li><a href="#">Features</a></li>
	                    <li><a href="#">Purpose</a></li>
	                    <li><a href="#">Add-ons</a></li>
	                    <li class="divider"></li>
	                    <li><a href="#">Support</a></li>
	                    <li><a href="#">Blog</a></li>
	                  </ul>
	                </li>
	                <li class = "active"><a href="login.php">Log-in</a></li>
	              </ul>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>

	    <div class="jumbotron" style="background-color: white; margin-top: 30px">
      		<div class="container text-center">
      			<div class = "row">
      				<div class="col-md-6">
		      			<h2>Login</h2>
		      			<br>
		      			<form name = "loginForm" action="javascript:loginFunction()">
			      			<span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
			      			<input class="form-control" type="text" id="user" placeholder="Username"><br>
							<span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
							<input class="form-control" type="password" id="pass" placeholder="Password"><br>
							<br>
							<button class = "btn btn-success" type = "submit">Login</button><br>
      					</form>
      				</div>
      				<div class="col-md-6">
		      			<h2>First time user? - Sign up</h2>
		      			<br>
		      			<input type="text" id="firstN" placeholder="First Name"><br>
						<input type="text" id="lastN" placeholder="Last Name"><br>
						<input type="text" id="userN" placeholder="Username"><br>
						<input type="password" id="signUpPass" placeholder="Password"><br>
						<input type="text" id="email" placeholder="Email"><br><br>
      					<button class = "btn btn-success" onclick="signUpFunction()">Sign Up</button>
      				</div>
      			</div>
      		</div>
      	</div>

		<div id = "end" class = "navbar navbar-default" style="height: 250px">
            <div class = "container">
            	<div class="row">
        			<div class="col-lg-4">
        				<h4>Learn about Canary</h4>
        				<a class = "footerColors" href = "#">Why Canary?</a><br>
        				<a class = "footerColors" href = "#">Features</a><br>
        				<a class = "footerColors" href = "#">Purpose</a><br>
        				<a class = "footerColors" href = "#">Case Studies</a><br>
        				<a class = "footerColors" href = "#">Add-ons</a>
        			</div>
        			<div class="col-lg-4">
        				<h4>Partner with us</h4>
        				<a class = "footerColors" href = "#">CO2</a><br>
        				<a class = "footerColors" href = "#">Ambient Light and Noise</a><br>
        				<a class = "footerColors" href = "#">Developer Tools</a>
        			</div>
        			<div class="col-lg-4">
        				<h4>Contact & info</h4>
        				<a class = "footerColors" href = "#">About us</a><br>
        				<a class = "footerColors" href = "#">Blog</a><br>
        				<a class = "footerColors" href = "#">Media</a><br>
        				<a class = "footerColors" href = "#">Careers</a><br>
        				<a class = "footerColors" href = "#">Contact us</a>
        			</div>
        		</div>
        		<hr class="featurette-divider">
        		<p><a <a target="_blank" href="#" style="color: #8F8F8F"><i class="fa fa-facebook fa-lg"></i> &nbsp;Facebook</a></p>
            	<a style="font-size: 14px" href = "#" class = "navbar-text pull-right">Terms of use</a>
                <p style="font-size: 14px" class = "navbar-text pull-left">&copy; 2014 - Canary. All rights reserved.</p>
            </div>
      	</div>


		<script>
		Parse.initialize("amPPk1qmmyVaJDGDj0DcooxNOSf4FV1WAGF5J7OT", "ye1aAM74mKkhLvIz81JL1tmxrGfRg37vgK02rz2t");

		var USER = document.getElementById("user").value + "";

		//login checks to see if manager or employee
		function loginFunction() {
			Parse.User.logIn(document.loginForm.user.value, document.loginForm.pass.value, {
				success: function(user) {
				  	window.location="dashboard.php";
				},
				error: function(user, error) { 
				  	alert("Error: Wrong Username or Password. Please refresh page and try again. " + "Error: " + error.code + " " + error.message);
				} 
			});
		}
		</script>

		<script>
		var FN = document.getElementById("firstN").value;
		var LN = document.getElementById("lastN").value;
		var UN = document.getElementById("userN").value;
		var PW = document.getElementById("signUpPass").value;
		var EM = document.getElementById("email").value;

		
		function signUpFunction() {
			var user = new Parse.User();
			user.set("firstName", FN);
			user.set("lastName", LN);
			user.set("username", UN);
			user.set("password", PW);
			user.set("email", EM);

			user.signUp(null, {
				success: function(user) {
					//hooray! let them use the app now. just redirect to login page.
					window.location="dashboard.php";
				},
				error: function(user, error) {
					//show error message
					alert("Error: " + error.code + " " + error.message);
				}
			});
		}
		</script>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-klagRI08vJ54c1emqvfH7M0s9Gz5b_Q"></script>
		<script src="js/d3.min.js" charset="utf-8"></script>
		<script src="js/bootstrap.min.js"></script>
    	<script src="js/d3js-google-maps.js"></script>
    	<script src="//cdn.embedly.com/widgets/platform.js"></script>

	    <script>
	      $("#navigation ul li a[href^='#']").on('click', function(e) {
	        // prevent default anchor click behavior
	        e.preventDefault();
	        // store hash
	        var hash = this.hash;
	        // animate
	        $('html, body').animate({
	          scrollTop: $(this.hash).offset().top
	        }, 300, function(){
	          // when done, add hash to url
	          // (default click behaviour)
	          window.location.hash = hash;
	        });
	      });
	    </script>
	    </body>
</html>