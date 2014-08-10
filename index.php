<!--
<?php
	/*
	require 'vendor/autoload.php';
	use Parse\ParseClient;
	ParseClient::initialize('amPPk1qmmyVaJDGDj0DcooxNOSf4FV1WAGF5J7OT', 'BfGwmk2OSkvDzJUo6Y0scVXeigeF2IOX1mePFBIl', 'NizBiKchYDX9gujgc3tvmFQxRzN6lbtOg4pykvME');
	*/
?>
-->
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
		Track the Planet!
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
	              <a class="navbar-brand" href="index.php">Track the Planet!</a>
	              <!--<a href="#"><img src = "img/timeclock_logo_transparent.png" height = "30px" width = "206px" style= "margin-top: 12px"></a>-->
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
	                <li><a href="login.php">Log-in</a></li>
	              </ul>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>

	    <div id="myCarousel" class="carousel slide" data-ride="carousel">
	      <div class="carousel-inner">
	        <div class="item active">
	        	<div class="overlay"></div>
		        <img src="img/Zz6LMaB.jpg" height= "100px" alt="ASB">
	          <div class="container">
	          	<div id = "test"></div>
	            <div class="carousel-caption">
	              <h1 style="background-color:rgba(75,75,75,.25); padding: 10px; border-radius: 10px">Solving the city pollution problem</h1>
	              <br>
	              <p><a class="btn btn-lg btn-primary" href="#" onclick="myFunction()" role="button"><i class="fa fa-play"></i> &nbsp; 2-Minute Overview</a> &nbsp; <a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
	              <p style="background-color:rgba(75,75,75,.25); padding: 10px; border-radius: 10px; width: 400px; margin-left: 50px">Donate to solve the high areas of pollution</p>      
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>

		<div class = "container marketing" style ="margin-top:-50px">
			<h1 style="text-align:center">ASB at a glance</h1>
			<br>
			<p style="text-align:center; color: #ADADAD">Find the areas of concern where city pollution is severe. <br>Donate to help fix the issue of city pollution.</p>
		</div>

		<div id = "glance" style="background-color: white;" class="jumbotron">
			<!--<h2 class="text-center" style="background-color:white; margin: auto; width: 450px; padding: 10px; border-radius: 10px; color: black; margin-top: -15px">A three component system</h2>-->
      		<div class="container text-center">
      			<!--
      			<img src = "img/computer.png" width = "350px" style = "margin-top: 110px">
      			<img src = "img/mobileapp.png" width = "200px" style = "margin-left: -20px; margin-right: -10px">
      			<img src = "img/scanner.png" width = "250px" style = "margin-top: 70px; margin-right: 50px;">
      			!-->
      		</div>
    	</div>

    	<div class="jumbotron" style="background-color: #0068A8; margin-top: -30px">
      		<div class="container text-center">
      			</br>
      			<!--<img style="margin: auto" src = "img/TimeConnectWhiteLogo.png" height ="100px">-->
      			<!--<iframe width="600" height="450" frameborder="0" style="border:0"
					src="https://www.google.com/maps/embed/v1/place?q=Boston%2C%20MA%2C%20United%20States&key=AIzaSyA-klagRI08vJ54c1emqvfH7M0s9Gz5b_Q"></iframe>-->
				<p>
					<input type="checkbox" id="temperature">
					<label style="color: white" for="temperature">Show Temperature </label>
					<input type="checkbox" id="humidity">
					<label style="color: white" for="humidity">Show Humidity </label>
					<input type="checkbox" id="noise">
					<label style="color: white" for="noise">Show Noise </label>
					<input type="checkbox" id="carbonmonoxide">
					<label style="color: white" for="carbonmonoxide">Show Carbon Monoxide </label>
					<input type="checkbox" id="methane">
					<label style="color: white" for="methane">Show Methane</label>
				</p>
				<div id="map-canvas"></div>
      			</br>
      			<h3 style="color: white">Working together we can alleviate Boston's pollution.</h2>
      			<div id ="towhom">
      			<script data-button="donate" src="https://www.paypalobjects.com/js/external/paypal-button.min.js?merchant=YUYCX7QDJ8MNG" async="async">
    			</script>
    			</div>
    			<br>
      		</div>
    	</div>

    	<div class="jumbotron" style="background-color: white; margin-top: -30px">
      		<div class="container text-center">
      			<h2>Popular features - Why you'll love ASB.</h2>
      			<br>
      			<p style="text-align:center; color: #ADADAD">Software and hardware that allows you to track the city's pollution </br>and pay towards fixing the severe areas.</p>
      			<br>
      			<div class="row">
        			<div class="col-md-4">
        				<div class = "iconColors"><i class="fa fa-mobile fa-2x"></i></div>
        				<h4 style="color:#0068A8a">Go mobile</h4>
        				<p style="font-size: 14px;">ASB works for mobile</br> devices.</p>
        				<br>
        				<div class = "iconColors"><i class="fa fa-cloud fa-2x"></i></div>
        				<h4 style="color:#0068A8">On the cloud</h4>
        				<p style="font-size: 14px;">All the graph informations are stored</br> securely on the cloud.</p>
        				<br>
        				<div class = "iconColors"><i class="fa fa-book fa-2x"></i></div>
        				<h4 style="color:#0068A8">PayPal integration</h4>
        				<p style="font-size: 14px;">ASB uses PayPal API</br> to pay towards research facilities.</p>
        			</div>
        			<div class="col-md-4">
        				<div class = "iconColors"><i class="fa fa-archive fa-2x"></i></div>
        				<h4 style="color:#0068A8">Archived</h4>
        				<p style="font-size: 14px;">Accurate sensors that track</br> city pollution.</p>
        				<br>
        				<div class = "iconColors"><i class="fa fa-paperclip fa-2x"></i></div>
        				<h4 style="color:#0068A8">Organized</h4>
        				<p style="font-size: 14px;">Data is displayed on the web</br> or mobile for overview.</p>
        				<br>
        				<div class = "iconColors"><i class="fa fa-truck fa-2x"></i></div>
        				<h4 style="color:#0068A8">Delivery</h4>
        				<p style="font-size: 14px;">Hardware component set-up for</br> users of ASB.</p>
        			</div>
        			<div class="col-md-4">
        				<div class = "iconColors"><i class="fa fa-keyboard-o fa-2x"></i></div>
        				<h4 style="color:#0068A8">Automation</h4>
        				<p style="font-size: 14px;">Tied to your bag</br> ASB tracks the pollutions, and you do your part.</p>
        				<br>
        				<div class = "iconColors"><i class="fa fa-cog fa-2x"></i></div>
        				<h4 style="color:#0068A8">Effectiveness</h4>
        				<p style="font-size: 14px;">Hardware portability, website and</br> mobile visualization.</p>
        				<br>
        				<div class = "iconColors"><i class="fa fa-group fa-2x"></i></div>
        				<h4 style="color:#0068A8">People</h4>
        				<p style="font-size: 14px;">You can do your part to help.</br> Bring around our hardware, and track the pollution!</p>
        				</br>
        			</div>
        			<div class="text-center"><p><a class="btn btn-lg btn-info" href="#" role="button"><i class="fa fa-paper-plane"></i> &nbsp;Explore More Features</a></p></div>
        		</div>
      		</div>
    	</div>

		<div class="jumbotron" style="background-color: #575757; margin-top: -30px">
      		<div class="container text-center">
				<!-- Begin MailChimp Signup Form -->
				<div id="mc_embed_signup">
				<form action="//amazonaws.us8.list-manage.com/subscribe/post?u=359696a4df68e08db57399404&amp;id=d591bf2f1f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<h2 style="color: white">Subscribe to ASB's newsletter!</h2>
					<br>
					<p style="color: #DBD9DB; font-size: 16px">We'll keep you up to date with the<br>latest ASB features and status.</p> 
					<br>
				<div class="jumbotron" style="width:400px; height: 300px; margin: auto; background:#46b8da;">
				<div class="mc-field-group">
					<span style="width: 50px; height: 31px; float: left; margin-left: 18px;"class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span><input type="email" value="" name="EMAIL" placeholder=" E-mail address" class="required email" id="mce-EMAIL">
				</div>
				<div class="mc-field-group">
					<br>
					<span style="width: 50px; height: 31px; float: left; margin-left: 18px;"class="input-group-addon"><i class="fa fa-user fa-fw"></i></span><input type="text" value="" name="FNAME" placeholder=" First Name" class="" id="mce-FNAME">
				</div>
				<div class="mc-field-group">
					<br>
					<span style="width: 50px; height: 31px; float: left; margin-left: 18px;"class="input-group-addon"><i class="fa fa-user fa-fw"></i></span><input type="text" value="" name="LNAME" placeholder=" Last Name" class="" id="mce-LNAME">
				</div>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
						<br><br>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    <div style="position: absolute; left: -5000px;"><input type="text" name="b_359696a4df68e08db57399404_d591bf2f1f" tabindex="-1" value=""></div>
				    <div class="clear"><input type="submit" value="Subscribe!" name="subscribe" id="mc-embedded-subscribe" class="button btn btn-default"></div>
				</form>
				</div>
				</div>
				<!--End mc_embed_signup-->
			</div>
		</div>
		
		<div id = "end" class = "navbar navbar-default" style="height: 250px">
            <div class = "container">
            	<div class="row">
        			<div class="col-lg-4">
        				<h4>Learn about ASB</h4>
        				<a class = "footerColors" href = "#">Why ASB?</a><br>
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
                <p style="font-size: 14px" class = "navbar-text pull-left">&copy; 2014 - ASB. All rights reserved.</p>
            </div>
      	</div>

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
	    <script>
	      function myFunction() {
		        var myDiv = document.getElementById("test");
		        var makeIframe = document.createElement("iframe");
		        makeIframe.setAttribute("src", "//www.youtube.com/embed/3S86okk405E?rel=0&showinfo=0&autoplay=1");
		        makeIframe.setAttribute('frameborder', "0");
		        makeIframe.style.width = "100%";
		        makeIframe.style.height = "100%";
		        makeIframe.style.height = "450px";
		        makeIframe.style.width = "800px";
		        myDiv.appendChild(makeIframe);
		}
	    </script>
	    <!--
	    <?php
			use Parse\ParseObject;
			$testObject = ParseObject::create("TestObject");
			$testObject->set("foo", "bar");
			$testObject->save();
		?>
		-->
	    </body>
</html>