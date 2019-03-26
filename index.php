<?php
include('check_login1.php');
include('connect.php');

include("RandomStringGenerator.php");
include('function.php');
include('process.php');

$err1="";
if(isset($_POST['login'])){

    $UserName = clean($_POST['username']);
    $Password =md5(clean($_POST['password']));
    
      
    
      //Create query
    $sql="SELECT * FROM student WHERE username='$UserName' AND password='$Password' AND status='Active'";//Password
    $result=mysqli_query($servr, $sql);
    
      //Check whether the query was successful or not
  if($result) {
      if(mysqli_num_rows($result) > 0) {
        //Login Successful
        session_regenerate_id();
        $row = mysqli_fetch_assoc($result);
        $_SESSION['s_id'] = $row['studentid'];
        $_SESSION['s_uid'] = $row['uid'];
        $_SESSION['s_sid'] = $row['sid'];
        $_SESSION['s_firstname'] = $row['firstname'];
        $_SESSION['s_middlename'] = $row['middlename'];
        $_SESSION['s_lastname'] = $row['lastname'];
        $_SESSION['s_gender'] = $row['gender'];
        $_SESSION['s_dateofbirth'] = $row['dateofbirth'];
        $_SESSION['s_class'] = $row['class'];
        $_SESSION['s_session'] = $row['session'];
        $_SESSION['s_term'] = $row['term'];
        $_SESSION['s_regno'] = $row['regno'];
        $_SESSION['s_username'] = $row['username'];
        $_SESSION['s_password'] = $row['password'];
        $_SESSION['s_email'] = $row['email'];
        $_SESSION['s_phone'] = $row['phone'];
        $_SESSION['s_degree'] = $row['degree'];
        $_SESSION['s_salary'] = $row['salary'];
        $_SESSION['s_address'] = $row['address'];
        $_SESSION['s_type'] = $row['type'];
        $_SESSION['s_role'] = $row['role'];
        $_SESSION['s_reason'] = $row['reason'];
        $_SESSION['s_status'] = $row['status'];
        $_SESSION['s_enrolled'] = $row['enrolled'];
        
        session_write_close();
        $err1 ="";
        header("location: welcome.php");
        //header("location: profile.php");
        exit();
      }else {
        
        $err1="Username or Password Incorrect!";
        //Login failed
        //header("location: profile.php");
        // header("location: errorlogin.php");
        // exit();
      }
    }else {
      header("location: errorlogin.php");
       exit();
      //die("Query failed");
    } 



}
  


?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="front_let/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="front_let/css/style.css" type="text/css" />

	<!-- One Page Module Specific Stylesheet -->
	<link rel="stylesheet" href="front_let/css/onepage.css" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="front_let/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="front_let/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="front_let/css/et-line.css" type="text/css" />
	<link rel="stylesheet" href="front_let/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="front_let/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="front_let/css/fonts.css" type="text/css" />

	<link rel="stylesheet" href="front_let/css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />


	<!-- Document Title
	============================================= -->
	<title>Welcome To Quick Schools</title>

</head>

<body class="stretched" data-loader="11" data-loader-color="#543456">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header transparent-header border-full-header dark static-sticky" data-sticky-class="not-dark" data-sticky-offset="full" data-sticky-offset-negative="100">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<!-- <div id="logo">
						<a href="index.html" class="standard-logo" data-dark-logo="images/canvasone-dark.png"><img src="images/canvasone.png" alt="Canvas Logo"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="images/canvasone-dark@2x.png"><img src="images/canvasone@2x.png" alt="Canvas Logo"></a>
					</div> -->
					<!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<!-- <nav id="primary-menu">

						<ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1250" data-offset="65">
							<li><a href="#" data-href="#wrapper"><div>Home</div></a></li>
							<li><a href="#" data-href="#section-about"><div>About</div></a></li>
							<li><a href="#" data-href="#section-works"><div>Works</div></a></li>
							<li><a href="#" data-href="#section-services"><div>Services</div></a></li>
							<li><a href="#" data-href="#section-blog"><div>Blog</div></a></li>
							<li><a href="#" data-href="#section-contact"><div>Contact</div></a></li>
						</ul>

					</nav> -->
					<!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-parallax full-screen">

			<div class="slider-parallax-inner">

				<div class="full-screen dark section nopadding nomargin noborder ohidden" style="background-image: url('front_let/images/school.jpeg'); background-size: cover; background-position: center center;">

					<div class="row nomargin" style="position: relative; z-index: 2;">
						<div class="col-md-offset-7 col-md-5 full-screen" style="background-color: rgba(0,0,0,0.45);">
							<div class="vertical-middle col-padding">
								<div class="heading-block nobottomborder bottommargin-sm">
									<p><h1 style="font-size: 22px;">Quick Schools</h1><em>...be awesome.</em></p>
									<span style="font-size: 16px;" class="t300 capitalize ls1 notopmargin">Enter your credentials to sign in.</span>
								</div>
								<p><?php echo "<span style='color:red;'>".$err1."</span>"; ?></p>
								<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="clearfix" style="max-width: 300px;">
									<div class="col_full">
										<label for="" class="capitalize t600">Username</label>
										<input type="text" id="username" name="username" class="form-control not-dark" />
									</div>
									<div class="col_full">
										<label for="" class="capitalize t600">Password</label>
										<input type="password" id="password" name="password" class="form-control not-dark" />
									</div>
									<div class="col_full nobottommargin">
									
										<button type="submit" name="login" class="t400 capitalize button button-border button-light button-circle nomargin" value="submit">Sign In</button>
									</div>
								</form>
							</div>
						</div>
					</div>

				</div>

			</div>

		</section><!-- #slider end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark noborder">

			<div class="container center">
				<div class="footer-widgets-wrap">

					<div class="row divcenter clearfix">

						<div class="col-md-7">

							<div class="widget subscribe-widget clearfix" data-loader="button">
								<h4>Subscribe</h4>
<!-- role="form"  -->
								<div class="widget-subscribe-form-result"></div>
								<form id="widget-subscribe-form" action="../include/subscribe.php" role="form" method="post" class="nobottommargin">
									<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control input-lg not-dark required email" placeholder="Your Email Address">
									<button class="button button-border button-circle button-light topmargin-sm" type="submit">Subscribe Now</button>
								</form>
							</div>

						</div>

						<div class="col-md-5">

							<div class="widget clearfix">
								<h4>Contact</h4>

								<p class="lead">22 Quarry Road, Abeokuta 
									<br>
									Ogun State, Nigeria.
								</p>

								<div class="center topmargin-sm">
									<a href="#" class="social-icon inline-block noborder si-small si-facebook" title="Facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon inline-block noborder si-small si-twitter" title="Twitter">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
								</div>
							</div>

						</div>

					</div>

				</div>
			</div>

			<div id="copyrights">
				<div class="container center clearfix">
					Copyright &copy; Avigo Investment Limited <?php echo date("Y"); ?> | All Rights Reserved
				</div>
			</div>

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="front_let/js/jquery.js"></script>
	<script type="text/javascript" src="front_let/js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="front_let/js/functions.js"></script>

</body>
</html>