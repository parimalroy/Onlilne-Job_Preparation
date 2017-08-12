<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">		
          <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="../images/fevicon.ico">
		<title>Primary Math</title>		
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
									<li><a href="latestbd.php">সাম্প্রতিক বাংলাদেশ</a></li>										
									<li><a href="latestintenational.php">সাম্প্রতিক আর্ন্তজাতিক</a></li>
									<li><a href="g_know_bd.php">সাধারণ জ্ঞান বাংলাদেশ</a></li>
									<li><a href="g_know_int.php">সাধারণ জ্ঞান আর্ন্তজাতিক</a></li>																																			
								</ul>
							</li>											
							<li><a href="#">Job Circular</a></li>
							<li><a href="../Online_exam_New/feedback.php">Contact</a></li>
						</ul>
					</div>	
				</div><!--/.container-->
			</nav><!--/nav-->
		</header> <!--/Header top-->
		<section class="full_body_latestbd">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-xs-12 well">  
						<div class="top_hdr_ltestbd">
							<ul>
								<li><a href="primary_pe_ban.php">বাংলা</a></li>
								<li><a href="primary_eng.php">ইংরেজী</a></li>
								<li><a href="#"  class="select_orange">গণিত</a></li>
							</ul>							
						</div>
						<table class="table">
							<tbody>									
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text"> কতগুলো ঘন্টা একসাথে বাজার ১০ সে., ১৫সে., ২০সে. এবং ২৫সে. পরপর বাজতে লাগল। উহারা আবার কতক্ষণ পর একত্রে বাজবে?</p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">৫ মিনিট</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text"> দুটি সংখ্যার ল.সা.গু ও ল.সা.গু - এর গুণফল সংখ্যা দুইটির--</p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">গুণফলের সমান</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text"> দু'টি সংখ্যার গ.সা.গু ৭ ও ল.সা.গু ৮৪। সংখ্যা দুটির একটি ৪২ হলে, অপরটি কত?</p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">১৪</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text"> ক মৌলিক সংখ্যা এবং ক,খ দ্বারা বিভাজ্য নয়। ক এবং খ এর ল.সা.গু কত/</p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">কখ </p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text"> দুটি সংখ্যার গ.সা.গু ৪ এবং ল.সা.গু ৪৮। একটি সংখ্যা ১৬ হলে, অপর সংখ্যাটি কত?</p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">১২</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text"> কোন বৃহত্তম সংখ্যা দিয়ে ১০২ ও ১৮৬ কে ভাগ করলে প্রত্যেকবার ৬ অবশিষ্ট থাকবে? </p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">১২</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text"> দু'টি সংখ্যার অনুপাত ৭ : ৮ এবং তাদের গ.সা.গু. ৫ হলে, সংখ্যা দু'টির ল.সা.গু. কত?</p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">২৮০</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text">  তিন অংকের ক্ষুদ্রতম সংখ্যা হতে কোন লঘিষ্ঠ সংখ্যা বিয়োগ করলে বিয়োগফল ৫,১০ ও ১৫ দ্বারা বিভাজ্য হবে?</p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">১০</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text"> কোন বৃহত্তম সংখ্যা দ্বারা ১০০ ও ১৮৪ কে ভাগ করলে প্রত্যেকবার ভাগশেষ ৪ থাকবে?</p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">১২</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text"> ৩/৪, ৪/৫ ও ৫/৬ এর গ.সা.গু কত? </p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">৬০</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text"> একটি পূর্ণ সংখ্যা নির্নয় করুন যাকে ৩,৪,৫ এবং ৬ দ্বারা ভাগ করলে যথাক্রমে ২,৩,৪ এবং ৫ অবশিষ্ট থাকে?</p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">৫৯</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text"> কোন বিমান আক্রমণের সময় এক শহরের চারটিস্থান থেকে যথাক্রমে ১,৫/৪,৩/২৭/৪ মিনিট অন্তর সাইরেন বাজতে লাগলো। একবার একত্রে বাজবার কতক্ষণ পর সাইরেনগুলো আবার একত্রে বাজবে?</p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">১ ঘ. ৪৫ মি.</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text"> কোন লঘিষ্ঠ সংখ্যার সাথে ২ যোগ করলে যোগফল ১২,১৮ এবং ২৪ দ্বারা বিভাজ্য হবে? </p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text"> ৭২</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text">  দু'টি সংখ্যার গ.সা.গু. ও ল.সা.গু. যথাক্রমে ৮ ও ৯৬ একটি সংখ্যা ২৪ হলে অপরটি কত?জাতীয় স্মৃতি সৌধ কত জায়গার উপর প্রতিষ্ঠিত?</p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">৩২</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text"> ৩/৪ ও ৭/১৫ এর বিপরীত ভগ্নাংশের গ.সা.গু. কত?</p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">১/২১</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text">   একটি গাড়ি ঘণ্টায় ২৫ মাইল বেগে ঢাকা থেকে চট্টগ্রাম অভিমুখে রওয়ানা হলো। আরেকটি গাড়ি ১৫ মাইল বেগে চট্টগ্রাম থেকে ঢাকা অভিমূখে রওনা হলো। ঢাকা ও চট্টগ্রামের দূরত্ব ২০০ মাইল হলে এ গাড়ি দুটি অবিরাম গতিতে চলতে থাকলে কত সময় পর গাড়ি দুটি মুখোমুখি হবে?</p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">৫ ঘন্টা</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text"> দুটি সংখ্যার অনুপাত ৫:৬ এবং তাদের গ.সা.গু ৮ হলে, তাদের ল.সা.গু কত? </p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">২৪০</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text"> সবচেয়ে ছোট কোন সংখ্যাকে ৭,৮ অথবা ৯ দ্বারা ভাগ করলে ৫ অবশিষ্ট থাকে?</p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">৫০৯</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text"> দুটি সংখ্যার গ.সা.গু., বিয়োগফল ও ল.সা.গু যথাক্রমে ১২,৬০ এবং ২৪৪৮। সংখ্যা দুটি কত? </p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text"> ১৪৪,২০৪</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text"> দুটি সংখ্যার গ.সা.গু. ও ল.সা.গু. যথাক্রমে ১৫ ও ২২৫। একটি সংখ্যা ৪৫ হলে অপর সংখ্যাটি--</p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text"> ৭৫</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text">  কোন ক্ষুদ্রতম সংখ্যাকে ৩,৫,৬ দ্বারা ভাগ করলে প্রত্যেকবার ভাগশেষ হবে ১?</p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">৩১</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text"> কোন ক্ষুদ্রতম সংখ্যাকে ২০,২৫,৩০,৩৬ ও ৪৮ দ্বারা ভাগ করলে যথাক্রমে ১৫,২০,২৫,৩১ ও ৪৩ ভাগশেষ থাকে? </p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text"> ৩৫৯৫৫৬টি।</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text">  কোন ক্ষুদ্রতম সংখ্যাকে ৪,৫ ও ৬ দ্বারা ভাগ করলে প্রত্যেকবার ৩ অবশিষ্ট থাকে? </p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">৬৩</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text">  কোন ক্ষুদ্রতম সংখ্যার সাথে ১ যোগ করলে যোগফল ৩,৬,৯,১২ এবং ১৫ দ্বারা নিঃশেষে বিভাজ্য হবে?</p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">১৭৯</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text"> নিচের নম্বর সিরিজে কোনটি বসবে ?১ , ২ , ৮ , ৪৮ , ৩৮৪</p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">৩৮৪০</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text"> দুইটি প্রশ্নবোধক চিহ্নের জায়গায় কোন সংখ্যাটি বসবে ? ৭ / ? ? / ৩৪৩ </p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">৪৯</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text"> ১২ এর কত শতাংশ ১৮ হবে ?</p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">১৫০ </p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text">.০৩ Χ .০০৬ Χ .০০৭ = ?</p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">.০০০০০১২৬ </p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text"> প্রশ্নবোধক স্থানের সংখ্যাটি কত হবে ?২         √৯         ৪           √২৫        ? </p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">৬</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text"> আপনার কাছে পাঁচটি আধুলি ,৮ টি সিকি আছে । আর কয়টা ১০ পয়সার মুদ্রা দিলে মোট ৫ টাকা হবে ?</p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">০৫</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text">পাঁচটি ঘন্টা একত্রে বেজে যথাক্রমে ৩,৫,৭,৮ ও ১০ সেকেন্ড অন্তর অন্তর বাজতে লাগল। কতক্ষণ পড়ে ঘন্টা গুলো পুনরায় একত্রে বাজবে? </p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">১৪ মিনিট</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text"> কোন ক্ষুদ্রতম সংখ্যার সাথে ৫ যোগ করলে যোগফল ১৬, ২৪ ও ৩২ দিয়ে নিঃশেষে বিভাজ্য হবে? </p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">৯১</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text"> একটি স্কুলে ছাত্রদের ড্রিল করাবার সময় ৮,১০ ও ১২ সারিতে সাজানো যায়। আবার বর্গাকারেও সাজানো যায়। ঐ স্কুলে কমপক্ষে কত জন ছাত্র আছে?</p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">৩৬০০</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text">দুটি সংখ্যার ল.সা.গু. ও গ.সা.গু. যথাক্রমে ২২৮ ও ১২। একটি সংখ্যা ৩৬ হলে, অপরটি কত?</p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">৯৬</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text">৯৯৯৯৯ এর সঙ্গে কোন ক্ষুদ্রতম সংখ্যা যোগ করলে যোগফল ২,৩,৪,৫ এবং ৬ দ্বারা নিঃশেষে বিভাজ্য হবে? </p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">২১</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text"> দুটি সংখ্যার অনুপাত ৫ : ৬ এবং তাদের গ.সা.গু. ৪ হলে, ছোট সংখ্যাটি কত? </p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">২০</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text"> তিনটি ঘন্টা একত্রে বেজে ১.৫ মিনিট, ২.৫ মিনিট, ৩.৫ মিনিট অন্তর বাজতে লাগলো। নূন্যতম কতক্ষণ পর ঘন্টাগুলো পুনরায় একত্রে বাজবে?</p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">৫২.৫ মিনিট</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text">  ৪ জন লোক গাবতলী থেকে সকাল ৯টায় একই দিকে যাত্রা শুরু করেন। তাঁরা ঘন্টায় যথাক্রমে ১০, ১৫, ২৪ ও ৩০ কিলোমিটার পথ অতিক্রম করেন। কমপক্ষে কতদূর পথ অতিক্রম করার পর তাঁরা আবার মিলিত হবেন?</p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">১২০ কিলোমিটার</p></td>							
								</tr>
								<tr class="danger">
									<td><p class="text-color3 glyphicon glyphicon-question-sign">&nbsp;<strong>প্রশ্নঃ</strong></p></td>
									<td><p class="qus_text">পাঁচ অঙ্কের বৃহত্তম সংখ্যার সাথে কোন ক্ষুদ্রতম সংখ্যা যোগ করলে যোগফল ৬, ৮, ১০ ও ১৪ দ্বারা বিভাজ্য হবে?</p></td>																		
								</tr>
								<tr class="info">
									<td><p class="text-color3 glyphicon glyphicon-ok-sign">&nbsp;<strong>উত্তরঃ</strong></p></td>								
									<td><p class="qus_text">৮০৩</p></td>							
								</tr>
								
								
								
							</tbody>
						</table>                                                                                                     
					</div>				
				</div>
			</div>		
		</section>
		<section class="footer">
			<div class="container footer-color">
				<div class="text-right fotter_social">
					<a href="#" target="_blank"><i class="fa fa-facebook-square  fa-2x"></i></a>
					<a href="#" target="_blank"><i class="fa fa-google-plus-square  fa-2x"></i></a>
					<a href="#" target="_blank"><i class="fa fa-twitter-square  fa-2x"></i></a> 
					<a href="#" target="_blank"><i class="fa fa-pinterest  fa-2x"></i></a>
				</div>
				<div class="row">
						<div class="col-md-12" align="center"><a href="#"><img src="../images/logo-small.png" alt="job preparation logo" class="img-responsive"></a></div>
						<div class="col-md-12" align="center"><span class="footer_txt">ɠ2016 <strong><a href="#" title="Job Preparation BD" target="_blank">Job Preparation</a></strong>. All rights reserved.<br>Developed and Maintenance by : <strong><a href="#" title="Best Website Design Company" target="_blank">Shapiqul Islam</a></strong></span></div>
					
				</div>
			</div>
			<a href="#" class="scrollToTop" title="Scroll To Top"><i class="fa fa-arrow-circle-up"></i></a>
		</section>
	
				
		<script src="../js/jquery-1.12.2.min.js"></script>
		<script src="../js/custom.js"></script>
		<script src="../js/bootstrap.min.js"></script>  			
		<script src="../js/wow.min.js"></script>  			
  	</body>
</html>





