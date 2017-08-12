<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<link rel="shortcut icon" type="image/x-icon" href="../images/fevicon.ico">
		<title>Contact Us</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/animate.css">
		<link rel="stylesheet" href="../css/responsive.css">
		<link rel="stylesheet" href="../css/main.css">
	</head>
	<body>
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
											<li><a href="../Online_exam_New/index.php">SIGN UP</a></li>

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
							<li><a href="../Online_exam_New/index.php">Mcq Test</a></li>
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
<!-- contact-->
     <div class="container">
         <section>
              <div class="page-header" id="contact">
                <h3>Contact <small>Contac us for more</small></h3>
            </div> <!-- end page header-->
            <div class="row">
                <div class="col-sm-4">
                    <p>Send a message or contact us from the address below</p>
                    <address>
                        <strong>Shapiqul Islam</strong><br>
                        Shahali garden 148/9/d <br>
                        Mirpur-1,Dhaka 1216 <br /> Mobile:01723-741777
                    </address>
                </div>
                 <div class="col-sm-8">
									 <?php
									 if( isset($_GET['error']) )
									 {
										 echo "<p style='color:#f00;'>Some input are required!</p>";
									 }
									 if( isset($_GET['success']) )
									 {
										 echo "<p style='color:green;'>Your message has been successfully sent.</p>";
									 }
									 ?>
                    <form action="../Online_exam_New/contact.php" class="form-horizontal" method="POST">
                        <div class="form-group">
                            <label for="user-name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" id="user-name" placeholder="Enter your Name" required>
                            </div>
                        </div> <!--end form group -->
                        <div class="form-group">
                            <label for="user-email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control" id="user-email" placeholder="Enter your Email" required>
                            </div>
                        </div> <!-- end form group -->
                        <div class="form-group">
                            <label for="user-message" class="col-sm-2 control-label">Any Message</label>
                            <div class="col-sm-10">
                                <textarea name="message" id="user-message" cols="20" rows="10"
                                     class="form-control" placeholder="Enter your opnium"></textarea>
                            </div>
                        </div> <!-- end form group-->
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <button type="submit" class="btn btn-primary">Submit</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>    <!-- end row-->
         </section>
		</div>
		<script src="../js/jquery-1.12.2.min.js"></script>
		<script src="../js/custom.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/wow.min.js"></script>
  	</body>
</html>
