<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<link rel="shortcut icon" type="image/x-icon" href="images/fevicon.ico">
		<title>Job Preparation</title>		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/animate.css">
		<link rel="stylesheet" href="../css/responsive.css">
		<link rel="stylesheet" href="../css/main.css">
		
	</head>
	<body>
		<script src="j../s/wow.min.js"></script> 	
		<script>
			new WOW().init();
		</script>
		<header id="header">
			<div class="top-bar">
				<div class="container">
					<div class="row">	
						<div class="col-sm-6 col-xs-12">
							<div class="top-number">
							   <p><i class="fa fa-phone-square"></i> <a href="#">+8801515-622388</a></p>
								<p><i class="fa fa-envelope-o"></i> <a href="#"> shapiqul@gmail.com</a></p>
							</div>
						</div> <!--/lft row-->
						<div class="col-sm-6 col-xs-12">
							<div class="row">
								<div class="col-sm-6 col-xs-12">
									<div class="social">
										<ul class="social-share">
											<li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
											<li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
											<li><a href="https://bd.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
											<li><a href="https://www.skype.com/"  target="_blank"><i class="fa fa-skype"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="col-sm-6 col-xs-12">
									<div class="search">						   
										<ul class=" navbar-nav navbar-left text-uppercase">		  
											<li><a href="#">SIGN UP</a></li>											
											<li>
												<a href="#" data-toggle="modal" data-target="#searchModal"><i class="fa fa-fw fa-search"></i> <span class="hidden-lg hidden-md hidden-sm">Search Ypur Question</span></a>
											</li>
										</ul>
							 		 </div>
								</div>
							</div>							
						</div> <!-- /rit row -->
					</div>
				</div>
			</div>		
			<!-- Modal for search -->
			<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="searchModalLabel">Search Themes:</h4>
						</div>
						<div class="modal-body">
							<form action="get" id="site_search">
								<div class="input-group">
									<input class="form-control" type="text" id="search_box" placeholder="Search Your content">
									<span class="input-group-btn">
									<button class="btn btn-primary" type="submit">Search</button>
									</span>
								</div>
							</form>
							<ul style="display: block; margin-top: 15px;" id="search_results"></ul>
						</div>
					</div>
				</div>
			</div><!-- /Search modal end-->		
			<nav class="navbar navbar-inverse navbar_top" role="navigation">			
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"><img src="../images/brand.png" class="img-responsive" alt="Shapiqul Mis logo"></a>
					</div>
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right navbar-home">
							<li><a href="../index.php">Home</a></li>
							<li><a href="#">Mcq Test</a></li>							
								 <li><a href="#" lass="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Module <span class="caret"></span></a>
									<ul class="dropdown-menu menu-module">
										<li><a href="#" class="ab">BCS</a></li>
										<li><a href="#" class="ab">BANK</a></li>
										<li><a href="#" class="ab">GOVT. JOB</a></li>										
										<li><a href="#" class="ab">TEACHER'S REG</a></li>
										<li><a href="#" class="ab">MEDICAL/HEALTHCARE</a></li>
										<li><a href="#" class="ab">NTRCA</a></li>
									</ul>
								</li>
							<li><a href="#" lass="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">general knowledge <span class="caret"></span></a>
								<ul class="dropdown-menu menu-module">
									<li><a href="#">সাম্প্রতিক বাংলাদেশ</a></li>										
									<li><a href="#">সাম্প্রতিক আর্ন্তজাতিক</a></li>
									<li><a href="#">সাধারণ জ্ঞান বাংলাদেশ</a></li>	
									<li><a href="#">সাধারণ জ্ঞান আর্ন্তজাতিক</a></li>																
								</ul>
							</li>											
							<li><a href="#">Job Circular</a></li>			
							<li><a href="#">Contact</a></li>			
						</ul>
					</div>	
				</div><!--/.container-->
			</nav><!--/nav-->
		</header> <!--/Header top-->
	 	
		<!-- START CONTENT -->
		<section class="content content-dark bg-signup">
			<div>
			</div>
		<div class="container">
			<div id="msg">				
			</div>
			<hr class="invisible">
			<div class="row">
				<!-- edit form column -->
				<div class="col-md-7 personal-info">
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-4 col-lg-offset-4">
					  <h1>সাইন আপ করে সদস্য হোন</h1>
					</div>
				   
					<form class="form-horizontal" id='frm-reg' role="form" action="#" method='post'>
						<div class="form-group">
							<label class="col-lg-4 col-md-4 col-sm-12 col-xs-12 control-label">ইমেইল:</label>
							<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
								<input type="email" name="txt_email" id="txt_email" placeholder='ইমেইল' class='form-control'  required="required"/>
								<span class="form-control-feedback"></span>
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-4 col-md-4 col-sm-12 col-xs-12 control-label">মোবাইল:</label>
							<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
								<input type="text" name="txt_mobile" id="txt_email" placeholder='মোবাইল' class='form-control'  required="required"/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-4 col-md-4 col-sm-12 col-xs-12 control-label">পাসওয়ার্ড:</label>
							<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
								<input type="password" name="txt_pass" id="txt_pass" placeholder='পাসওয়ার্ড' class='form-control' required="required"/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-4 col-md-4 col-sm-12 col-xs-12 control-label">পাসওয়ার্ড নিশ্চিত করুন:</label>
							<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
								<input type="password" name="txt_pass_retype" placeholder='পাসওয়ার্ড নিশ্চিত করুন' class='form-control' id="txt_pass_retype" required="required"/>
								<span class='pass_conf_msg'></span>
							</div>
						</div>

						<div class="form-group">
							<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-4 col-lg-offset-4">
								<input type="submit" class="btn btn-primary" id='btn_sign_up' value="সাইন আপ">
							</div>
						</div>
					</form>
				</div>
				<!-- left column -->
				<div class="col-md-5 personal-info">
				  <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-4 col-lg-offset-4">
					<h1>লগইন করুন</h1>
				  </div>					
					<form class="form-horizontal" role="form" action="#" method='post'>
					  <div class="form-group">
						<label for="user" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 control-label">ইমেইল</label>
						<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
						  <input type="email" name="user" id="user" class='form-control' placeholder='ইমেইল' required>
						</div>
					  </div>

					  <div class="form-group">
						  <label for="password" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 control-label">পাসওয়ার্ড </label>
						  <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
							<input type="password" name="pass" class='form-control' placeholder='পাসওয়ার্ড ' id="password" required>
						  </div>
					  </div>

					  <div class="form-group">
						<label for="password" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 control-label"> </label>
						  <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8" style="text-align:left;">
							<button type="submit" class='btn btn-primary' name='login'>লগইন</button>
						  </div>
					  </div>

					</form>
				</div>
			</div>	<!-- <hr class="featurette-divider"> -->
		</div>
	</section>
    <!-- END CONTENT -->
		
	 	
		
				
		<script src="../js/jquery-1.12.2.min.js"></script>
		<script src="../js/custom.js"></script>
		<script src="../js/bootstrap.min.js"></script>  			
		<script src="../js/wow.min.js"></script>  			
  	</body>
</html>





