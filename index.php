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
	</head>
	<title>
		ASB
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
	              <!--<a href="#"><img src = "img/timeclock_logo_transparent.png" height = "30px" width = "206px" style= "margin-top: 12px"></a>-->
	            </div>
	            <div class="navbar-collapse collapse">
	              <ul class="nav navbar-nav navbar-right">
	                <li><a href="#">City Pollution</a></li>
	                <li><a href="#about"></a></li>
	                <li class="dropdown">
	                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <span class="caret"></span></a>
	                  <ul class="dropdown-menu" role="menu">
	                    <li><a href="#">Features</a></li>
	                    <li><a href="#">Pricing</a></li>
	                    <li><a href="#">Add-ons</a></li>
	                    <li class="divider"></li>
	                    <li><a href="#">Support</a></li>
	                    <li><a href="#">Blog</a></li>
	                  </ul>
	                </li>
	                <li><a href="timeConnectWebLogin.html">Log-in</a></li>
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
		        <img src="img/meeting.jpg" height= "100px" alt="TimeConnect">
	          <div class="container">
	          	<div id = "test"></div>
	            <div class="carousel-caption">
	              <h1 style="background-color:rgba(75,75,75,.25); padding: 10px; border-radius: 10px">The end of manual time cards.</h1>
	              <br>
	              <p><a class="btn btn-lg btn-primary" href="#" onclick="myFunction()" role="button"><i class="fa fa-play"></i> &nbsp; 2-Minute Overview</a> &nbsp; <a class="btn btn-lg btn-primary" href="#" role="button">30-Day Free Trial</a></p>
	              <p style="background-color:rgba(75,75,75,.25); padding: 10px; border-radius: 10px; width: 400px; margin-left: 50px">See why others choose TimeConnect</p>      
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>

		<div class = "container marketing" style ="margin-top:-50px">
			<h1 style="text-align:center">TimeConnect at a glance</h1>
			<br>
			<p style="text-align:center; color: #ADADAD">Check-in or out from work without any hassle. No more paper time cards. <br>TimeConnect's an automated time card system that's simple, smart, and accurate.</p>
		</div>

		<div id = "glance" style="background-color: white;" class="jumbotron">
			<!--<h2 class="text-center" style="background-color:white; margin: auto; width: 450px; padding: 10px; border-radius: 10px; color: black; margin-top: -15px">A three component system</h2>-->
      		<div class="container text-center">
      			<img src = "img/computer.png" width = "350px" style = "margin-top: 110px">
      			<img src = "img/mobileapp.png" width = "200px" style = "margin-left: -20px; margin-right: -10px">
      			<img src = "img/scanner.png" width = "250px" style = "margin-top: 70px; margin-right: 50px;">
      		</div>
    	</div>

    	<div class="jumbotron" style="background-color: #44aefc; margin-top: -30px">
      		<div class="container text-center">
      			</br>
      			<img style="margin: auto" src = "img/TimeConnectWhiteLogo.png" height ="100px">
      			</br>
      			<h3 style="color: white">Innovative startup that prizes customer satisfaction</h2>
      		</div>
    	</div>

    	<div class="jumbotron" style="background-color: white; margin-top: -30px">
      		<div class="container text-center">
      			<h2>Popular features - Why you'll love TimeConnect.</h2>
      			<br>
      			<p style="text-align:center; color: #ADADAD">Automated software and hardware that allows you to save time and money </br>used on correcting employee time entries.</p>
      			<br>
      			<div class="row">
        			<div class="col-md-4">
        				<div class = "iconColors"><i class="fa fa-mobile fa-2x"></i></div>
        				<h4 style="color:#46b8da">Go mobile</h4>
        				<p style="font-size: 14px;">TimeConnect works for mobile</br> devices.</p>
        				<br>
        				<div class = "iconColors"><i class="fa fa-cloud fa-2x"></i></div>
        				<h4 style="color:#46b8da">On the cloud</h4>
        				<p style="font-size: 14px;">All the times are stored</br> securely on the cloud.</p>
        				<br>
        				<div class = "iconColors"><i class="fa fa-book fa-2x"></i></div>
        				<h4 style="color:#46b8da">Stored in the books</h4>
        				<p style="font-size: 14px;">Automated time entry stores</br> online for reference.</p>
        			</div>
        			<div class="col-md-4">
        				<div class = "iconColors"><i class="fa fa-archive fa-2x"></i></div>
        				<h4 style="color:#46b8da">Archived</h4>
        				<p style="font-size: 14px;">Accurate saves of employee</br> check-in and outs.</p>
        				<br>
        				<div class = "iconColors"><i class="fa fa-paperclip fa-2x"></i></div>
        				<h4 style="color:#46b8da">Organized</h4>
        				<p style="font-size: 14px;">Data is displayed online</br> or mobile for overview.</p>
        				<br>
        				<div class = "iconColors"><i class="fa fa-truck fa-2x"></i></div>
        				<h4 style="color:#46b8da">Delivery</h4>
        				<p style="font-size: 14px;">Hardware component set-up for</br> businesses of TimeConnect.</p>
        			</div>
        			<div class="col-md-4">
        				<div class = "iconColors"><i class="fa fa-keyboard-o fa-2x"></i></div>
        				<h4 style="color:#46b8da">No more manual</h4>
        				<p style="font-size: 14px;">Never fill out a paper</br> time card again!</p>
        				<br>
        				<div class = "iconColors"><i class="fa fa-cog fa-2x"></i></div>
        				<h4 style="color:#46b8da">Effectiveness</h4>
        				<p style="font-size: 14px;">Mobile automated wi-fi and</br> geo-fencing.</p>
        				<br>
        				<div class = "iconColors"><i class="fa fa-group fa-2x"></i></div>
        				<h4 style="color:#46b8da">Pay your employees</h4>
        				<p style="font-size: 14px;">Hours should be absolutely correct.</br> Pay your workers for their hours!</p>
        				</br>
        			</div>
        			<div class="text-center"><p><a class="btn btn-lg btn-info" href="#" role="button"><i class="fa fa-paper-plane"></i> &nbsp;Explore More Features</a></p></div>
        		</div>
      		</div>
    	</div>

    	<!--
    	<div class="jumbotron" style="background-color: #636363; margin-top: -30px">
      		<div class="container text-center">
 				<h2 style="color: white">Businesses love TimeConnect</h2>
 				<div id="myCarousel" class="carousel slide" data-ride="carousel">
			      <ol class="carousel-indicators">
			        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			        <li data-target="#myCarousel" data-slide-to="1"></li>
			        <li data-target="#myCarousel" data-slide-to="2"></li>
			      </ol>
				    <div class="carousel-inner">
				      <div class="active item">
				      	<div class="container">
            				<div style="background-color:rgba(75,75,75,0.7);" class="carousel-caption">
              				
            				</div>
          				</div>
				      </div>
				      <div class="item"><p>2</p></div>
				      <div class="item"><p>3</p></div>
				    </div>
					<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>
      		</div>
    	</div>
    	-->

    	<!--
		<div class="container marketing">
    		<div class = "text-center jumbotron well" id = "end">
    		<h2>30-Day Trial</h2>	
        </br>
		<form class = "form-inline" name="contactform" role="form" method ="post" action = "send_form_email.php">
		  <div class="form-group">
		    <label for="contact-name" class="col-lg-2 control-label">Name: </label>
		    <input type="text" class="form-control" id="contact-name" name="contact-name" placeholder="Enter Full Name" maxlength="50" size="30">
		  </div>
		  </br>
		  </br>
		  <div class="form-group">
		    <label for="email" class="col-lg-2 control-label">Email: </label>
		    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email" maxlength="80" size="30">
		  </div>
		  </br>
		  </br>
		  <div class="form-group">
		    <label for="contact-sub" class="col-lg-2 control-label">Subject: </label>
		    <input type="text" class="form-control" id="contact-sub" name="contact-sub" placeholder="Enter the Subject" maxlength="50" size="30">
		  </div>
		  </br>
		  </br>
		  <div class="form-group">
		    <label for="contact-msg" class ="col-lg-2 control-label">Message: </label>
		    <div class = "col-lg-10">
		      <textarea class="form-control" id="contact-msg" rows="8" name="contact-msg" placeholder="Enter your Message" maxlength = "1000"></textarea>
		    </div>
		  </div>
		  </br>
		  </br>
		  <button type="submit" value = "Submit" class="btn btn-primary">Submit</button>
		</form>
		</div>
		</div>
		-->

		<div class="jumbotron" style="background-color: #575757; margin-top: -30px">
      		<div class="container text-center">
				<!-- Begin MailChimp Signup Form -->
				<div id="mc_embed_signup">
				<form action="//amazonaws.us8.list-manage.com/subscribe/post?u=359696a4df68e08db57399404&amp;id=5f13a0800f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<h2 style="color: white">Subscribe to TimeConnect's newsletter!</h2>
					<br>
					<p style="color: #DBD9DB; font-size: 16px">We'll keep you up to date with the<br>latest TimeConnect features and status.</p> 
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
				    <div style="position: absolute; left: -5000px;"><input type="text" name="b_359696a4df68e08db57399404_5f13a0800f" tabindex="-1" value=""></div>
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
        				<h4>Learn about TimeConnect</h4>
        				<a class = "footerColors" href = "#">Why TimeConnect?</a><br>
        				<a class = "footerColors" href = "#">Features</a><br>
        				<a class = "footerColors" href = "#">Pricing</a><br>
        				<a class = "footerColors" href = "#">Case Studies</a><br>
        				<a class = "footerColors" href = "#">Add-ons</a>
        			</div>
        			<div class="col-lg-4">
        				<h4>Partner with us</h4>
        				<a class = "footerColors" href = "#">Accountants and Bookkeepers</a><br>
        				<a class = "footerColors" href = "#">Financial Institutions</a><br>
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
        		<p><a <a target="_blank" href="https://www.facebook.com/pages/TimeConnect/1532301686991646" style="color: #8F8F8F"><i class="fa fa-facebook fa-lg"></i> &nbsp;Facebook</a></p>
            	<a style="font-size: 14px" href = "#" class = "navbar-text pull-right">Terms of use</a>
                <p style="font-size: 14px" class = "navbar-text pull-left">&copy; 2014 - TimeConnect. All rights reserved.</p>
            </div>
      	</div>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src=""></script>
		<script src="js/bootstrap.min.js"></script>
    
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
</html>