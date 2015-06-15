<?php
include("includes/connect.php");
$email=$_POST['email'];
$name=$_POST['name'];
if(isset($_POST['subscribe'])){

        $insqry="INSERT INTO `subscribe`(`id`, `email`, `name`, `date_time`) VALUES ('','$email','$name',now())";
		$var=mysql_query($insqry);
		if($var>0){
				$to = $email;
			$subject = "Thank You";
			$body = " hi $name Thank you for  subscribing jet set career. \n\nif you need any urgent information you can call +918861193750 we will happy to help you
			\n\n please don't reply to this mail this auto generated mail ";
			$additionalheaders = "From: <".SITEEMAIL.">\r\n";
			$additionalheaders .= "Reply-To: ".SITEEMAIL."";
			mail($to, $subject, $body, $additionalheaders);
			echo"<script>alert('registered sucessfully ')</script>";
			
			}
		    else{
				echo"<script>alert('please try again ')</script>";
		  }
}
mysql_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Jet Set Career</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="blog/style/normalize.css">
    <link rel="stylesheet" href="blog/style/main.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link href="blog/css/responsive-slider.css" rel="stylesheet">
	<link rel="stylesheet" href="blog/style/style.css">
	<link rel="stylesheet" href="blog/css/style1.css">
	<link rel="stylesheet" href="blog/css/flexslider.css" type="text/css" media="screen" />	
	<script  src="blog/js/jquery.min.js"></script>
	<script src="blog/js/bootstrap.js"></script>
</head>
<body background="#fff;"  >

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<nav class="navbar navbar-default navbar-fixed-top hidden-xs ">
	  <div class="container-fluid" style="padding-right:0px;padding-left:0px;">
	  <div class="col-md-12" style="background:#d10c18; padding-left:0px;">
	    <div class="clearfix">
	    <div class="col-md-11" style="padding-left:0px;background:#d10c18;">
			<div class="navbar-header" style="background:brown; padding-right:10px; padding-left:10px;">
			  <a class="navbar-brand" href="http://jetsetcareer.com/">
				<img alt="Brand" src="blog/images/Logo.png" >
			  </a>
			</div>
			<form class="navbar-form navbar-left " method="post">
			  <div class="form-group">
				<input type="text" class="form-control" id="name"  name="name" placeholder="Name">
			  </div>
			  <div class="form-group">
				<input type="email" class="form-control" id="email" name="email" placeholder="Email">
			  </div>
			  <button type="submit" class="btn " name="subscribe" style="background:#000000; color:#FFFFFF; border: #FFFFFF 3px solid; ">Subscribe</button>
			</form>
			<form class="navbar-form navbar-right hidden-sm" role="search">
			  <div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			  </div>
			  <button type="submit" class="btn " style="background:#000000; color:#FFFFFF; border: #FFFFFF 3px solid; padding-right:30px; padding-left:30px;">Go!</button>
			</form>
		  </div>
		 </div>
	  </div>

	  </div>
	</nav>
	
	
<nav class="navbar navbar-default hidden-md hidden-lg hidden-sm" >
	  <div class="container-fluid" style=" background:grey;" >
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="http://jetsetcareer.com/"><img alt="Brand" src="blog/images/Logo.png" ></a>
		</div>
	
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="http://jetsetcareer.com/">Home</a></li>
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About Us <span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="http://jetsetcareer.com/aboutus.php#why">Why</a></li>
							<li class="divider"></li>
							<li><a href="http://jetsetcareer.com/aboutus.php#team">The Team</a></li>
							<li class="divider"></li>
							<li><a href="http://jetsetcareer.com/aboutus.php#value">Value</a></li>
						  </ul>
						</li>
						<li class="dropdown">
						  <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Training <span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="http://jetsetcareer.com/training.php#career">Jet Set Career</a></li>
							<li class="divider"></li>
							<li><a href="http://jetsetcareer.com/training.php#coach">Coach and Consultant</a></li>
							<li class="divider"></li>
							<li><a href="http://jetsetcareer.com/training.php#trainer">Coperate Trainer</a></li>
						  </ul>
						</li>
						<li class="dropdown">
						  <a href="http://jetsetcareer.com/blog/" >Blog</a>
						</li>
						<li><a href="http://jetsetcareer.com/contactus.php">Contact Us</a></li>
				 </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>


<div class="clearfix" style=" background:#d3d3d3; padding-bottom:10px; ">
<nav class="navbar navbar-default  hidden-xs " >
	  <div class="container-fluid" style="z-index:200; position:relative; top:80px;">
	  <div class="col-md-1"></div>
	  <div class="col-md-11" >
	    <div class="col-md-11" >
			<ul class="nav navbar-nav navbar-right" style="background:grey;border-bottom: solid 4px rgba(255,209,219,0.78);border-left: solid 4px rgba(255,209,219,0.78);">
			<li><a href="http://jetsetcareer.com/">Home</a></li>
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About Us <span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="http://jetsetcareer.com/aboutus.php#why">Why</a></li>
							<li class="divider"></li>
							<li><a href="http://jetsetcareer.com/aboutus.php#team">The Team</a></li>
							<li class="divider"></li>
							<li><a href="http://jetsetcareer.com/aboutus.php#value">Value</a></li>
						  </ul>
						</li>
						<li class="dropdown">
						  <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Training <span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="http://jetsetcareer.com/training.php#career">Jet Set Career</a></li>
							<li class="divider"></li>
							<li><a href="http://jetsetcareer.com/training.php#coach">Coach and Consultant</a></li>
							<li class="divider"></li>
							<li><a href="http://jetsetcareer.com/training.php#trainer">Coperate Trainer</a></li>
						  </ul>
						</li>
						<li class="dropdown">
						  <a href="http://jetsetcareer.com/blog/" >Blog</a>
						</li>
						<li><a href="http://jetsetcareer.com/contactus.php">Contact Us</a></li>
		  </ul>
		  </div>
		 <div class="col-md-1" ></div>
		 
	  </div>

	  </div>
	</nav>

<div class="col-md-12" style="padding-left:10px; padding-right:10px;">
      <!-- Responsive slider - START -->
    	<div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
        <div class="slides" data-group="slides">
      		<ul>
  	    		<li>
              <div class="slide-body" data-group="slide">
                <img src="blog/images/ns5.JPG" >
                <div class="caption header hidden-xs hidden-sm" data-animate="slideAppearUpToDown" data-delay="800" data-length="800" style="cursor:pointer;">
                  <a href="http://jetsetcareer.com/training.php#career" style=" padding: 10px;text-align: left; font-size:20px; text-transform: uppercase; color:  #FFFFFF; background:#e74c3c!important;">More Information on JetSet Careers</a>
				  
                </div>
                <div class="caption img-html5 hidden-xs hidden-sm" data-animate="slideAppearRightToLeft" data-delay="800" data-length="800" style="cursor:pointer;">
                  <a href="http://jetsetcareer.com/training.php#trainer" style=" padding: 10px;text-align: left; text-transform: uppercase; font-size:14px;color: #FFFFFF; background:#565a60;">More Information on Corporate Training</a>
                </div>
                <div class="caption img-css3 hidden-xs hidden-sm" data-animate="slideAppearDownToUp" data-delay="800" data-length="800" style="cursor:pointer;">
                  <a  href="http://jetsetcareer.com/training.php#coach"    style="  font-size:10px; padding:10px; text-align: left; text-transform: uppercase; color: #FFFFFF; background:#565a60;">More information on Coaching and Consultancy</a>
                </div>
              </div>
  	    		</li>
  	    		<li>
              <div class="slide-body" data-group="slide">
                <img src="blog/images/ns3.JPG" >
                <div class="caption header hidden-xs hidden-sm" data-animate="slideAppearUpToDown" data-delay="800" data-length="800" style="cursor:pointer;">
                  <a href="http://jetsetcareer.com/training.php#career" style=" padding: 10px;text-align: left; font-size:20px; text-transform: uppercase; color:  #FFFFFF; background:#e74c3c!important;">More Information on JetSet Careers</a>
				  
                </div>
                <div class="caption img-html5 hidden-xs hidden-sm" data-animate="slideAppearRightToLeft" data-delay="800" data-length="800" style="cursor:pointer;">
                  <a href="http://jetsetcareer.com/training.php#trainer" style=" padding: 10px;text-align: left; text-transform: uppercase; font-size:14px;color: #FFFFFF; background:#565a60;">More Information on Corporate Training</a>
                </div>
                <div class="caption img-css3 hidden-xs hidden-sm" data-animate="slideAppearDownToUp" data-delay="800" data-length="800" style="cursor:pointer;">
                  <a  href="http://jetsetcareer.com/training.php#coach"    style="  font-size:10px; padding:10px; text-align: left; text-transform: uppercase; color: #FFFFFF; background:#565a60;">More information on Coaching and Consultancy</a>
                </div>
			</div>
  	    		</li>
  	    		<li>
              <div class="slide-body" data-group="slide">
                <img src="blog/images/ns4.JPG" >
                <div class="caption header hidden-xs hidden-sm" data-animate="slideAppearUpToDown" data-delay="800" data-length="800" style="cursor:pointer;">
                  <a href="http://jetsetcareer.com/training.php#career" style=" padding: 10px;text-align: left; font-size:20px; text-transform: uppercase; color:  #FFFFFF; background:#e74c3c!important;">More Information on JetSet Careers</a>
				  
                </div>
                <div class="caption img-html5 hidden-xs hidden-sm" data-animate="slideAppearRightToLeft" data-delay="800" data-length="800" style="cursor:pointer;">
                  <a href="http://jetsetcareer.com/training.php#trainer" style=" padding: 10px;text-align: left; text-transform: uppercase; font-size:14px;color: #FFFFFF; background:#565a60;">More Information on Corporate Training</a>
                </div>
                <div class="caption img-css3 hidden-xs hidden-sm" data-animate="slideAppearDownToUp" data-delay="800" data-length="800" style="cursor:pointer;">
                  <a  href="http://jetsetcareer.com/training.php#coach"    style="  font-size:10px; padding:10px; text-align: left; text-transform: uppercase; color: #FFFFFF; background:#565a60;">More information on Coaching and Consultancy</a>
                </div>
              </div>
  	    		</li>
  	    	</ul>
        </div>
        <a class="slider-control left" href="#" data-jump="prev"><img src="blog/images/left.png"</a>
        <a class="slider-control right" href="#" data-jump="next"><img src="blog/images/right.png"</a>
        <div class="pages">
          <a class="page" href="#" data-jump-to="1">1</a>
          <a class="page" href="#" data-jump-to="2">2</a>
          <a class="page" href="#" data-jump-to="3">3</a>
        </div>
    	</div>
      <!-- Responsive slider - END -->

</div>
</div> 
<style>
	  .zoom_img {
-moz-transition:-moz-transform 0.5s ease-in; 
-webkit-transition:-webkit-transform 0.5s ease-in; 
-o-transition:-o-transform 0.5s ease-in;
color:#FFFFFF;

}
.zoom_img:hover{
-moz-transform:scale(1.2); 
-webkit-transform:scale(1.2);
-o-transform:scale(1.2);
color:#000000;
padding:0px;
}
.don:hover >h2 {
background:white;
color:red;
font-family: Comic sans MS;
font-size:12px;
opacity:1;
}
.don > h2{
color:  #FFFFFF;
 background: rgba(240,70,79, 0.8);
 font-family: Comic sans MS;
font-size:10px;
opacity:0.5;
}
</style>

</div> 
<div class="clearfix hidden-xs hidden-sm"  style=" position:relative; z-index:200;   top:0px; background:#d3d3d3;">
	<div class="col-md-3"></div>
	
		<div class="col-md-2 don wrap">
			<div class="zoom_img">
				<img src="blog/images/1.jpg" class="img-responsive" style="margin-top:-70px;">
			</div>
			<a href="http://jetsetcareer.com/training.php#career" style="   padding: 10px; display:block;text-align:center;  text-transform: uppercase;  position:relative;   top:-100px; ">More Information on JetSet Careers</a>
		</div>
		<div class="col-md-2 don wrap">
			<div class="zoom_img">
				<img src="blog/images/2.jpg" class="img-responsive" style="margin-top:-70px;">
			</div>
			 <a href="http://jetsetcareer.com/training.php#trainer" style=" display:block; padding: 10px;text-align:center; text-transform: uppercase;  position:relative;   top:-100px;">More Information on Corporate Training</a>
		</div>
		<div class="col-md-2 don wrap">
			<div class="zoom_img">
				<img src="blog/images/3.jpg" class="img-responsive" style="margin-top:-70px;">
			</div>
			<a href="http://jetsetcareer.com/training.php#coach" style=" display:block; padding:10px; text-align: center; text-transform: uppercase;  position:relative;   top:-100px;">More information on Coaching and Consultancy</a> 
		</div>
	
	<div class="col-md-3"></div>
</div>



<!-- what -->
<div class="clearfix" style="">
	<div class="what">
		<div class="col-md-1"></div>
		<div class="col-md-7" style="padding: 1em 0; padding-right:15px;">
			<section class="slider">
						<div class="flexslider" >
						<h6  class="hidden-xs" style=" background:#000000; margin:0px;color:#FFFFFF; padding-top:10px; text-align:left;">TESTIMONIALS</h6>
							<ul class="slides">
							
								<li>
								<div class="what-top">
									<p>" I loved every minute of the classes. I took a similar course at a local community college last year and it was of not much help. But, I found "Jet set Career" to be extremely practical and helpful - the format of the modules works well and is very easy to follow and apply. I enjoyed the training session so much that I told my friends about how wonderful it is, and I'm sure they are going to be part of the next training session "</p>
									<h5>From <span> Maharaja S</span></h5>
									<div class="what-bottom">
									
								</div>
								</div>
								
								</li>
								<li>
									<div class="what-top">
									<p>" Lacking access to professional teachers is the biggest problem that hinders my learning. Jet set career was recommended by a colleague and I must admit that your complete training modules are arranged in a very systematic way, which helped me learn step-by-step. I am ready to Jet set fly."</p>
									<h5>From<span> Saurabh Singla</span></h5>
									<div class="what-bottom">
									
								</div>
								</div>
								
								</li>
								<li>
									<div class="what-top">
									<p>" I amazed people at office with my credibility after attending the training. My colleagues were astonished and asked from where did I learned so much about the hidden job market? Thanks Susmita for such a wonderful program. Looking forward for more! "</p>
									<h5>From<span> Nagarjuna Mallijurna</span></h5>
								<div class="what-bottom">
									
								</div>
							</div>
								
								</li>
								<li>
								<div class="what-top">
									<p>" I don't think I've ever felt so "accomplished" upon completing a training program before. You both are phenomenal instructors and I think at one point I even thought of asking if I could borrow your brain to do a quick download."</p>
									<h5>From<span> Bhagwathi Perumal</span></h5>
								<div class="what-bottom">
									
								</div>
								</div>
								
								</li>
								<li>
								<div class="what-top">
									<p>" The trainers were able to explain difficult to understand matters in simple terms, They used many ways in which to pass on their knowledge to us, The trainers has rich experience, knowledgeable and was able to answer all of our queries; generally a big eye-opener!"</p>
									<h5>From<span> Asaithambi</span></h5>
								<div class="what-bottom">
									
								</div>
								</div>
								
								</li>

								<div class="clearfix"> </div>
							</ul>
						</div>
					</section>
					<!-- FlexSlider -->
							  <script defer src="blog/js/jquery.flexslider.js"></script>
							  <script type="text/javascript">
								$(function(){
								  SyntaxHighlighter.all();
								});
								$(window).load(function(){
								  $('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
							  </script>
						<!-- FlexSlider -->
		
			<div class="col-md-2"></div>
			<div class="col-md-10">
				<br><br>
				<span class=" mobile-oversized" style="font-family:'Comic Sans MS',cursive;font-size:36px;color:rgb(46,46,46);">Jet Set Career</span>
				<br><br>
				<div style="text-align:justify;white-space: normal;">
				<p><span style="font-size:20px;font-weight:bold;">Are you not able to convert job interviews into job offers?</span></p>
				<p><span style="font-size:20px;font-weight:bold;">Do you have all of the required qualifications, yet don't have a final job offer letter in your hand?</span></p>
				<p><span style="font-size:20px;font-weight:bold;">Do you feel yourself just being so close and losing on success?</span></p>
				<p><span style="font-size:20px;font-weight:bold;">Are you looking for a key which will unlock success in your life?</span></p><br>
				<p style="text-align:right;"><span  style=" font-family:'Comic Sans MS',cursive;font-size:24px; padding-left:5px; padding-right:5px;color: #fff;background-color: #f5231c;"><a   style="color:#fff;"class="textlink link" href="">click here to know more</a></span></p>
				</div>
				<br><br>
				<p><span class=" mobile-oversized" style="font-family:'Comic Sans MS',cursive;font-size:36px;color:rgb(46,46,46);">Coach and Consultant</span></p>
				<br><br>
				<div style="text-align:justify;white-space: normal;">
				<p><span style="font-size:20px;">With nearly 7+ years of experience, Our team brings deep expertise in the recruitment industry. We have worked with 100s of students to help them with their resume, polished their positioning, drafted their cover letters, trained them for interviews and finally, helped them transition professionally.....</span></p><br>
				<p style="text-align:right;"><span  style=" font-family:'Comic Sans MS',cursive;font-size:24px; padding-left:5px; padding-right:5px;color: #fff;background-color: #f5231c;"><a   style="color:#fff;"class="textlink link" href="">click here to know more</a></span></p>
				</div>
				<br><br>
				<p><span class=" mobile-oversized" style="font-family:'Comic Sans MS',cursive;font-size:36px;color:rgb(46,46,46);">Why?</span></p>
				<br><br>
				<div style="text-align:justify;white-space: normal;">
				<p><span style="font-family:Arial,Helvetica,sans-serif;font-size:20px;color:rgb(121,121,121);">Our Vision is simple, to make each and every person fully equipped to pursue their dream career. In order to do this, it is simply not necessary to walk down the same old path of regular training. Change is inevitable and thus, it can be brought about in any form, vision and mission. We're obsessed with innovation and highly passionate about our purpose........</span></p><br>
				<p style="text-align:right;"><span  style=" font-family:'Comic Sans MS',cursive;font-size:24px; padding-left:5px; padding-right:5px;color: #fff;background-color: #f5231c;"><a   style="color:#fff;"class="textlink link" href="">click here to know more</a></span></p>
				</div>
				<br><br>
				<p><span class=" mobile-oversized" style="font-family:'Comic Sans MS',cursive;font-size:36px;color:rgb(46,46,46);">Values</span></p>
				<br><br>
				<div style="text-align:justify;white-space: normal;">
				<p><span class=" mobile-oversized" style="font-size:28px;font-weight:bold;">Insist on the Top 1% Standard</span></p>
				<p><span style="font-size:20px;">We only believe in being among Top 1% in the entire world. Many people may think these standards are unreasonably high. We continually raise the bar and drive our team to deliver high quality products, and services...........</span></p><br>
				<p style="text-align:right;"><span  style=" font-family:'Comic Sans MS',cursive;font-size:24px; padding-left:5px; padding-right:5px;color: #fff;background-color: #f5231c;"><a   style="color:#fff;"class="textlink link" href="">click here to know more</a></span></p>
				
				</div>
			</div>
			
			
		</div>
		<div class="col-md-4" style="background:#d3d3d3; padding:0px; padding-top:15px;">
		<div  style="border-top:#D10C18 5px solid; background:#d3d3d3; padding:0px; ">
			<p style="padding:15px;"><span  style="font-family:'Comic Sans MS',cursive;font-size:40px;color:rgb(46,46,46); ">Testimonials</span><p>
			<p style="margin:3%; padding:1%; background:rgba(236,210,200,0.8);"><span style="font-family:'Comic Sans MS',cursive;font-size:18px;color:rgb(110,110,110);">Jet set career is a unique module which no one thought of exploring earlier in India. I'm very thankful to the complete team, especially Susmita for creating such a valuable module to help people around.</span><br><br>
			<span  style="font-family:'Comic Sans MS',cursive;font-size:22px;color:rgb(46,46,46);">From Himanshu Jain</span></p>
		</div>
		<div  style="border-top:#D10C18 5px solid; background:#d3d3d3; margin:0px;">
			<p style="margin:3%; padding:1%; background:rgba(236,210,200,0.8);"><span style="font-family:'Comic Sans MS',cursive;font-size:18px;color:rgb(110,110,110);">I loved every minute of the classes. I took a similar course at a local community college last year and it was of not much help. But, I found "Jet set Career" to be extremely practical and helpful - the format of the modules works well and is very easy to follow and apply. I enjoyed the training session so much that I told my friends about how wonderful it is, and I'm sure they are going to be part of the next training session </span><br><br>
			<span  style="font-family:'Comic Sans MS',cursive;font-size:22px;color:rgb(46,46,46);">From Maharaja S</span></p>
		</div>
		<div  style="border-top:#D10C18 5px solid; background:#d3d3d3; margin:0px;">
			<p style="margin:3%; padding:1%; background:rgba(236,210,200,0.8);"><span style="font-family:'Comic Sans MS',cursive;font-size:18px;color:rgb(110,110,110);">I amazed people at office with my credibility after attending the training. My colleagues were astonished and asked from where did I learned so much about the hidden job market? Thanks Susmita for such a wonderful program. Looking forward for more! </span><br><br>
			<span  style="font-family:'Comic Sans MS',cursive;font-size:22px;color:rgb(46,46,46);">From   Nagarjuna Mallijurna</span></p>
		</div>
		<div  style="border-top:#D10C18 5px solid; background:#d3d3d3; margin:0px;">
			<p style="margin:3%; padding:1%; background:rgba(236,210,200,0.8);"><span style="font-family:'Comic Sans MS',cursive;font-size:18px;color:rgb(110,110,110);">I don't think I've ever felt so "accomplished" upon completing a training program before. You both are phenomenal instructors and I think at one point I even thought of asking if I could borrow your brain to do a quick download. </span><br><br>
			<span  style="font-family:'Comic Sans MS',cursive;font-size:22px;color:rgb(46,46,46);">From  Bhagwathi Perumal</span></p>
		</div>
		<div  style="border-top:#D10C18 5px solid; background:#d3d3d3; margin:0px;">
			<p style="margin:3%; padding:1%; background:rgba(236,210,200,0.8);"><span style="font-family:'Comic Sans MS',cursive;font-size:18px;color:rgb(110,110,110);">The trainers were able to explain difficult to understand matters in simple terms, They used many ways in which to pass on their knowledge to us, The trainers has rich experience, knowledgeable and was able to answer all of our queries; generally a big eye-opener!</span><br><br>
			<span  style="font-family:'Comic Sans MS',cursive;font-size:22px;color:rgb(46,46,46);">From   Asaithambi</span></p>
		</div>
		
	</div>
	</div>
	
	
</div>	
</div>
<!-- what -->



 
 
<div class="clearfix" style="background:#000000; min-height:220px; padding-top:15px;">
		<div class="container-fluid">
			<div class="col-md-2"></div>
			<div class="col-md-4">
				<p><span class=" mobile-oversized" style="font-family:'Comic Sans MS',cursive;font-size:28px;font-weight:bold;color:rgb(255,255,255);">Subscribe Us</span></p>
				<form class="navbar-form navbar-left " method="post">
				  <div class="form-group">
					<input type="text" class="form-control" id="name"  name="name" placeholder="Name">
				  </div>
				  <div class="form-group">
					<input type="email" class="form-control" id="email" name="email" placeholder="Email">
				  </div>
				  <button type="submit" class="btn " name="subscribe" style="background:#000000; color:#FFFFFF; border: #FFFFFF 3px solid; ">Subscribe</button>
			</form>
			</div>
			<div class="col-md-3">
			    <p><span  style="font-family:'Comic Sans MS',cursive;font-size:28px;font-weight:bold;color:rgb(255,255,255);">Contact Us</span></p>
				<p><span style="color:#797979;">Address: Electronic City Phase 1, Bangalore</span></p>
				<p><span style="color:#797979;"> </span></p>
				<p><span style="color:#797979;">Phone: +91 886-119-3750</span></p>
				<p><span style="color:#797979;"> </span></p>
				<p><span style="color:#797979;">Email: Jet.set.path@gmail.com</span></p>
			</div>
			<div class="col-md-3">
				<p><span class=" mobile-oversized" style="font-family:'Comic Sans MS',cursive;font-size:28px;font-weight:bold;color:rgb(255,255,255);">Follow Us</span></p><br>
				<div class="fb-like" data-href="https://www.facebook.com/jetsetcareer" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
			</div>
		</div>
	</div>


<div class="panel-group navbar-fixed-bottom col-md-3" id="accordion" role="tablist" aria-multiselectable="false">
  <div class="panel panel-danger" >
    <div class="panel-heading" role="tab" id="headingOne" style="background: #ED8B29; ">
     
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
		 <h1 class="panel-title" style="color:#FFFFFF; text-align:center; ">
          Leave Your Message Here
		   </h1>
        </a>
     
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <div class="col-md-12">
					<form role="form" method="post" action="" autocomplete="off">
						<div class="form-group col-md-12">
							<label for="NAME" style="font-size:12px;">Full Name</label>
							<input type="text" class="form-control" id="NAME" required placeholder="Name" name="NAME" >
						</div>
						<div class="form-group col-md-12">
							   <label for="EMAIL" style="font-size:12px;" >Email</label>	
								<input type="email" name="EMAIL" id="EMAIL" required class="form-control " placeholder="Email Address" >
						</div>
						<div class="form-group col-md-12">
							   <label for="TEXT" style="font-size:12px;" >Message</label>	
								<textarea name="TEXT" id="TEXT" required class="form-control " placeholder="Enter Your Message " ></textarea>
						</div>
						<div class="col-md-12">
						<button  class="btn btn-success" data-dismiss="modal" type="submit" name="submit" id="submit" value="submit!" >Submit</button>
						</div>
					</form>
				</div>
      </div>
    </div>
  </div>
</div>
<script>
$('#collapseOne').collapse('hide')
</script>

			<?php
include("includes/connect.php");
$name=$_POST['NAME'];
$email=$_POST['EMAIL'];
$msg=$_POST['TEXT'];
if(isset($_POST['submit'])){

        $insqry="INSERT INTO `message`(`ID`, `NAME`, `EMAIL`, `TEXT`, `DATE`) VALUES ('','$name','$email','$msg',now())";
		$var=mysql_query($insqry);
		if($var>0){
				$to = $email;
			$subject = "Thank You";
			$body = " hi $name Thank you for  messaging jet set career.\n\nWe will be contacting you soon. \n\nif you need any urgent information you can call +918861193750 we will happy to help you
			\n\n please don't reply to this mail this auto generated mail ";
			$additionalheaders = "From: <".SITEEMAIL.">\r\n";
			$additionalheaders .= "Reply-To: ".SITEEMAIL."";
			mail($to, $subject, $body, $additionalheaders);
				echo"<script>alert('We will get back to you soon ')</script>";
				
			}
		    else{
				echo"<script>alert('please try again ')</script>";
		  }
}
mysql_close($conn);
?>


<script src="blog/js/jquery-slider.js"></script>
	<script src="blog/js/jquery.event.move.js"></script>
    <script src="blog/js/responsive-slider.js"></script>
	


     


</body>
</html>