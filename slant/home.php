<?php
include("db.php");
 session_start();
if (!isset($_SESSION['id'])) 
{
	
header("location:index.php");
}


?>



<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>EX-PREP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
	
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 	https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

  	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  	<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" href="jquery.rateyo.min.css"/>
  	<!-- Google Webfont -->
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
	<!-- Themify Icons -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Easy Responsive Tabs -->
	<link rel="stylesheet" href="css/easy-responsive-tabs.css">
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

		<!-- START #fh5co-header -->
		<header id="fh5co-header-section" role="header" class="" >
			<div class="container">

				

				<!-- <div id="fh5co-menu-logo"> -->
					<!-- START #fh5co-logo -->
					<h1 id="fh5co-logo" class="pull-left"><a href="index.php"><img src="images/logo.png" alt="Slant Free HTML5 Template"></a></h1>
					
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						
						
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active">
								<a href="home.php">Home</a>
							</li>
							<li>
								<a href="#" class="fh5co-sub-ddown">Courses</a>
								 <ul class="fh5co-sub-menu">
								 	<li><a href="left-sidebar.html">Bank PO</a></li>
									<li><a href="left-sidebar.html">Bank SO</a></li>
									<li><a href="left-sidebar.html">Bank Clerk</a></li>
									<li><a href="right-sidebar.html">Railays</a></li>
									<li><a href="right-sidebar.html">Insurance</a></li>
									<li><a href="right-sidebar.html">RBI</a></li>
									<li><a href="right-sidebar.html">Aptitude</a></li>
									<li><a href="right-sidebar.html">GK & Current Affairs</a></li>
									<li><a href="right-sidebar.html">BSNL TTA</a></li>
									<li>
									    <a href="#">CIL</a>
									    <ul class="fh5co-sub-menu">
											<li><a href="http://freehtml5.co/preview/?item=build-free-html5-bootstrap-template" target="_blank">CIL CE</a></li>
											<li><a href="http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap" target="_blank">CIL ME</a></li>
										</ul>
									
									</li>
									<li>
									    <a href="left-sidebar.html">SSC JE</a>
									    <ul class="fh5co-sub-menu">
											<li><a href="http://freehtml5.co/preview/?item=build-free-html5-bootstrap-template" target="_blank">SSC JE CE</a></li>
											<li><a href="http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap" target="_blank">SSC JE ME</a></li>
										
											<li><a href="http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap" target="_blank">SSC JE EE</a></li>
										</ul>
									
									</li>
								 	
									<li>
										<a href="#" class="fh5co-sub-ddown">GATE</a>
										<ul class="fh5co-sub-menu">
											<li><a href="http://freehtml5.co/preview/?item=" target="_blank">GATE CS</a></li>
											<li><a href="http://freehtml5.co/preview/?item=" target="_blank">GATE CE</a></li>
											<li><a href="http://freehtml5.co/preview/?item=" target="_blank">GATE EE</a></li>
											<li><a href="http://freehtml5.co/preview/?item=" target="_blank">GATE ECE</a></li>
											<li><a href="http://freehtml5.co/preview/?item=" target="_blank">GATE ME</a></li>
										</ul>
									</li>
									
								</ul>
							</li>
							<li><a href="elements.html">PRACTICE</a></li>
							<li><a href="login.php">Log In</a></li>
							<li class="fh5co-special"><a href="signup.php">Get started</a></li>
						</ul>
					</nav>
				<!-- </div> -->

			</div>
		</header>
		
		
		<div id="fh5co-hero">
			<a href="#fh5co-main" class="smoothscroll fh5co-arrow to-animate hero-animate-4"><i class="ti-angle-down"></i></a>
			
			<!-- End fh5co-arrow -->
			<div class="container">
				<div class="col-md-8 col-md-offset-2">
					<div class="fh5co-hero-wrap">
						<div class="fh5co-hero-intro">
							<h1 class="to-animate hero-animate-1" style="color:#ff6a14;">Hello <?=$_SESSION['name']?></h1>
							<h2 class="to-animate hero-animate-2" style="color:#ff6a14;">Start Preparing Now!!</h2>
						</div>
					</div>
				</div>
			</div>		
		</div>

	<div id="fh5co-main">
	
			<div class="container">

				
				<div class="row">
					<div class="col-md-12 animate-box">
						
						
						<div class="fh5co-spacer fh5co-spacer-sm"></div>

						<div id="fh5co-tab-feature-center" class="fh5co-tab text-center">
							<ul class="resp-tabs-list hor_1">
								<li><i class="fh5co-tab-menu-icon ti-ruler-pencil"></i>Ask Questions</li>
								<li><i class="fh5co-tab-menu-icon ti-thought"></i>View Other Discussion </li>
								<li><i class="fh5co-tab-menu-icon ti-comments-smiley"></i>Share Study Material</li>
							</ul>
							<div class="resp-tabs-container hor_1">
								<div>
									<div class="row">
										<div class="col-md-12">
											<h3 class="h3"> <center style="color:#ff6a14;"> We are here to help you...!!! <?=$_SESSION['name']?></center></h3>
										</div>
										<div class="col-md-12">
				<center>
                <form action="home.php" role="form" method="post" enctype="multipart/form-data"> 
                
				<input type ="text" class="form-control" style="height:60px;width:50%;font-size: 20pt ;margin-top:12%;" name ="comment" placeholder="write your query...!"    >
                <input type ="file" class="form-control" style="height:60px;width:50%;font-size: 20pt ;margin-top:12%;" name ="pic"     >
                
				<br>
                <br>  <input type ="submit" value ="Post your query" class="btn btn-default" name ="postbutton"  />
			    </form> 
				</center>
				                        </div>
									</div>
								</div>
								<div>
									<div class="row">
										<div class="col-md-12">
											<h3 class="h3"><center style="color:#ff6a14;">Discussion Session</center></h3>
										</div>
										<div class="col-md-12">
										<?php $id = $_SESSION['id'];
 $get = "SELECT * FROM feedback ";
 $run = mysqli_query($con,$get);
 $row = mysqli_fetch_array($run); 
 
	while ( $row = mysqli_fetch_array($run))
  
  {     $u_id   =  $row['u_id'];
	    $nam    =  $row['u_name'];
		$sub	=  $row['msg'];
	 	$topic	=  $row['f_id'];
		$pic	=  $row['pic'];
         echo"<h4>$nam</h4> <br>";                        
						echo"<img src='compressed_udp/$pic' width='300px' height='205px'/>";  
					  echo $sub;  
	 } ?>  
								   </div>
								</div>
								</div>
							<div>
									<div class="row">
										<div class="col-md-12">
											<h3 class="h3"> <center style="color:#ff6a14;"> Share Your Study Material With Others <?=$_SESSION['name']?></center></h3>
										</div>
										<div class="col-md-12">
				<center>
                <form action="home.php" role="form" method="post" enctype="multipart/form-data"> 
                
				<input type ="text" class="form-control" style="height:60px;width:50%;font-size: 20pt ;margin-top:12%;" name ="title" placeholder="TITLE"    >
                <input type ="file" class="form-control" style="height:60px;width:50%;font-size: 20pt ;margin-top:12%;" name ="pic"     >
                <select>
				<option>SSC</option>
				<option>BANK PO</option>
				<option>BANK Clerk</option>
				<option>Railways</option>
				<option>Insurance</option>
				<option>Gate CS</option>
				<option>Gate CE</option>
				<option>Gate ME</option>
				<option>Gate ECE</option>
				<option>Gate EE</option> 
				</select>
				<br>
                <br>  <input type ="submit" value ="SHARE NOW!!" class="btn btn-default" name ="post"  />
			    </form> 
				</center>
				                        </div>
									</div>
								</div>
						
					</div>

					<hr class="fh5co-spacer fh5co-spacer-sm">

					
					
					<!-- END Tabs -->
				</div>


			<!-- END container -->
				
			

			<!-- Responsive Tabs -->
			
		
		</div>
		<!-- END fhtco-main -->
					
					
					
					
					
					
					
					
					
					
					
					<div class="col-md-4">
						<div class="rateyo-readonly-widg"></div>

    
   
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="jquery.rateyo.js"></script>

    <script>

      $(function () {

        var rating = 1.9;

        $(".counter").text(rating);

        $("#rateYo1").on("rateyo.init", function () { console.log("rateyo.init"); });

        $("#rateYo1").rateYo({
          rating: rating,
          numStars: 5,
          precision: 2,
          starWidth: "64px",
          spacing: "5px",
	  rtl: true,
          multiColor: {

            startColor: "#000000",
            endColor  : "#ffffff"
          },
          onInit: function () {

            console.log("On Init");
          },
          onSet: function () {

            console.log("On Set");
          }
        }).on("rateyo.set", function () { console.log("rateyo.set"); })
          .on("rateyo.change", function () { console.log("rateyo.change"); });

        $(".rateyo").rateYo();

        $(".rateyo-readonly-widg").rateYo({

          rating: rating,
          numStars: 5,
          precision: 2,
          minValue: 1,
          maxValue: 5
        }).on("rateyo.change", function (e, data) {
        
          console.log(data.rating);
        });
      });
    </script>
					</div>

					<div class="fh5co-spacer fh5co-spacer-md"></div>	

				</div>
			</div>

			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		
		</div>
		<!-- END fhtco-main -->

		
		
		
		
		
		

		<footer role="contentinfo" id="fh5co-footer">
			<a href="#" class="fh5co-arrow fh5co-gotop footer-box"><i class="ti-angle-up"></i></a>
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6 footer-box">
						<h3 class="fh5co-footer-heading">About us</h3>
						<p>We Are Freshly Trained Web Developers who just joined this industry in order to provide best Web Experience to all our lovers.</p>
						<p><a href="#" class="btn btn-outline btn-sm">Join Us</a></p>

					</div>
					<div class="col-md-4 col-sm-6 footer-box">
						<h3 class="fh5co-footer-heading">Links</h3>
						<ul class="fh5co-footer-links">
							<li><a href="t&c.php">Terms &amp; Conditions</a></li>
							<li><a href="faq.php">Support &amp; FAQ's</a></li>
							<li><a href="signup.php">Sign up</a></li>
							<li><a href="login.php">Log in</a></li>
						</ul>
					</div>
					<div class="col-md-4 col-sm-12 footer-box">
						<h3 class="fh5co-footer-heading">Get in touch</h3>
						<ul class="fh5co-social-icons">
							
							<li><a href="https://plus.google.com/u/0/115610516108387053968"><i class="ti-google"></i></a></li>
							<li><a href="https://twitter.com/Tabish__Tanseef"><i class="ti-twitter-alt"></i></a></li>
							<li><a href="https://www.facebook.com/tabish.tanseef"><i class="ti-facebook"></i></a></li>	
							<li><a href="https://www.instagram.com/teratabish/"><i class="ti-instagram"></i></a></li>
							
						</ul>
					</div>
					<div class="col-md-12 footer-box">
						<div class="fh5co-copyright">
						<p>&copy; 2017 EX-PREP. All Rights Reserved. <br>Designed by <a href="#">Mohd Shahrukh</a> & <a href="#">Mohd Israr</a></p>
						</div>
					</div>
					
				</div>
				<!-- END row -->
				<div class="fh5co-spacer fh5co-spacer-md"></div>
			</div>
		</footer>
			
			
		<!-- jQuery -->
		<script src="js/jquery-1.10.2.min.js"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.js"></script>
		<!-- Owl carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Magnific Popup -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Superfish -->
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.js"></script>
		<!-- Easy Responsive Tabs -->
		<script src="js/easyResponsiveTabs.js"></script>
		<!-- FastClick for Mobile/Tablets -->
		<script src="js/fastclick.js"></script>
		<!-- Parallax -->
		<script src="js/jquery.parallax-scroll.min.js"></script>
		<!-- Waypoints -->
		<script src="js/jquery.waypoints.min.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>

	</body>
</html>
 <?php
				 
				 if(isset($_POST['postbutton']))
				 {
					  $msg = $_POST['comment'];
					$name = $_SESSION['name'];
					 $id = $_SESSION['id'];
					 
					 $url = "compressed_udp/" ; //for compression

function compress_image($source_url, $destination_url, $quality) {

		$info = getimagesize($source_url);

    		if ($info['mime'] == 'image/jpeg')
        			$image = imagecreatefromjpeg($source_url);

    		elseif ($info['mime'] == 'image/gif')
        			$image = imagecreatefromgif($source_url);

   		elseif ($info['mime'] == 'image/png')
        			$image = imagecreatefrompng($source_url);

    		imagejpeg($image, $destination_url, $quality);
		return $destination_url;
	}
//function ends here :) 

  $file = rand(1000,100000)."-".$_FILES['pic']['name'] ;
 $files = preg_replace('/\s+/', '_', $file);
	$temp_file = $_FILES['pic']['tmp_name'] ;
	$file_size = $_FILES['pic']['size'];
    $file_type = $_FILES['pic']['type'];
	$folder="udp/";
	$target_file = $folder.basename($_FILES["pic"]["name"]);
    $FileType = pathinfo($target_file,PATHINFO_EXTENSION);

	if($FileType != "jpg" && $FileType != "JPG" && $FileType != "png" && $FileType != "jpeg" && $FileType != "gif" )  
    {
     echo "<script>alert('it seems your image format is not supported by our system, we are sorry for trouble!!!');</script>"; 
}
 else
 {  $filename = compress_image($temp_file, $url.$files, 10); //for compression 
compress_image($temp_file, $folder.$files, 40); //for compression 
//move_uploaded_file($temp_file,$folder.$files);  				 
	    $sm = "INSERT INTO feedback (u_id,msg,u_name,pic) VALUES ('$id','$msg','$name','$files')";
	    $run = mysqli_query($con, $sm); 
			 	echo "<script>alert('your query has been published & will be responded soon...!!!');</script>";	 
			   	
			}
				 }	
 if(isset($_POST['post']))
				 {
					  $msg = $_POST['title'];
					$name = $_SESSION['name'];
					 $id = $_SESSION['id'];
					 
					 $url = "compressed_udp/" ; //for compression

function compress_image($source_url, $destination_url, $quality) {

		$info = getimagesize($source_url);

    		if ($info['mime'] == 'image/jpeg')
        			$image = imagecreatefromjpeg($source_url);

    		elseif ($info['mime'] == 'image/gif')
        			$image = imagecreatefromgif($source_url);

   		elseif ($info['mime'] == 'image/png')
        			$image = imagecreatefrompng($source_url);

    		imagejpeg($image, $destination_url, $quality);
		return $destination_url;
	}
//function ends here :) 

  $file = rand(1000,100000)."-".$_FILES['pic']['name'] ;
 $files = preg_replace('/\s+/', '_', $file);
	$temp_file = $_FILES['pic']['tmp_name'] ;
	$file_size = $_FILES['pic']['size'];
    $file_type = $_FILES['pic']['type'];
	$folder="udp/";
	$target_file = $folder.basename($_FILES["pic"]["name"]);
    $FileType = pathinfo($target_file,PATHINFO_EXTENSION);
$filename = compress_image($temp_file, $url.$files, 10); //for compression 
compress_image($temp_file, $folder.$files, 40); //for compression 
//move_uploaded_file($temp_file,$folder.$files);  				 
	    $sm = "INSERT INTO material (u_id,msg,u_name,pic) VALUES ('$id','$msg','$name','$files')";
	    $run = mysqli_query($con, $sm); 
			 	echo "<script>alert('your material has been shared');</script>";	 
				 }					 
?>