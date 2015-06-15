<?php
include("includes/connect.php");
$email=$_POST['email'];
$name=$_POST['name'];
if(isset($_POST['subscribe'])){

        $insqry="INSERT INTO `subscribe`(`id`, `email`, `name`, `date_time`) VALUES ('','$email','$name',now())";
		$var=mysql_query($insqry);
		if($var>0){
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
    <title>Contact Us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="blog/style/normalize.css">
    <link rel="stylesheet" href="blog/style/main.css">
	<link rel="stylesheet" href="blog/css/bootstrap.css">
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
	<nav class="navbar navbar-default  hidden-xs " >
	  <div class="container-fluid" style="padding-top:75px;  ">
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
<div class="clearfix" style="background:#df6224; margin-top:35px;" >
 <h1 class="container" style="font-family:'Comic Sans MS',cursive;font-size:54px;color:rgb(255,255,255);">Contact US</h1>
</div>
 <div class="container" style="padding-top:25px; min-height:500px;">
 	<div class="clearfix">
		<div class="col-md-1"></div>
		<div class="col-md-6">
			<img class="img-responsive" src="blog/images/map.JPG">
		</div>
		<div class="col-md-5">
			<div style="text-align:justify;white-space: normal;">
				<p><span class=" mobile-oversized" style="font-family:'Comic Sans MS',cursive;font-size:28px;color:rgb(223,98,36);">Address: Electronic City Phase 1, Bangalore</span></p>
				<p><span class=" mobile-oversized" style="font-family:'Comic Sans MS',cursive;font-size:28px;color:rgb(223,98,36);">&nbsp;</span></p>
				<p><span class=" mobile-oversized" style="font-family:'Comic Sans MS',cursive;font-size:28px;color:rgb(223,98,36);"></span></p>
				<p><span class=" mobile-oversized" style="font-family:'Comic Sans MS',cursive;font-size:28px;color:rgb(223,98,36);">Phone: +91 886-119-3750</span></p>
				<p><span class=" mobile-oversized" style="font-family:'Comic Sans MS',cursive;font-size:28px;color:rgb(223,98,36);">&nbsp;</span></p>
				<p><span class=" mobile-oversized" style="font-family:'Comic Sans MS',cursive;font-size:28px;color:rgb(223,98,36);">Email: Jet.set.path@gmail.com</span></p>
				</div>
		</div>
	</div>
 </div>
 
 
	
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
				echo"<script>alert('We will get back to you soon ')</script>";
			}
		    else{
				echo"<script>alert('please try again ')</script>";
		  }
}
mysql_close($conn);
?>


</body>
</html>