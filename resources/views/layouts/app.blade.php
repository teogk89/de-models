<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Work Scout</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/colors/green.css') }}" id="colors">

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body>
<div id="wrapper">


<!-- Header
================================================== -->
<header class="sticky-header">
<div class="container">
	<div class="sixteen columns">

		<!-- Logo -->
		<div id="logo">
			<h1><a href="index.html"><img src="images/logo.png" alt="Work Scout" /></a></h1>
		</div>

		<!-- Menu -->
		@include('layouts.nav-bar')

		<!-- Navigation -->
		<div id="mobile-navigation">
			<a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
		</div>

	</div>
</div>
</header>
<div class="clearfix"></div>

<!-- Titlebar
================================================== -->
<div id="titlebar" class="single">
	<div class="container">

		<div class="sixteen columns">
			<h2>Blog</h2>
			<span>Keep up to date with the latest news</span>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">

	<!-- Blog Posts -->

	
		<div class="eleven columns">
			<div class="padding-right">
				@yield('content')
			</div>
		</div>
	<!-- Blog Posts / End -->


	<!-- Widgets -->
	<div class="five columns blog">

		<!-- Search -->
		<div class="widget">
			<h4>Search</h4>
			<div class="widget-box search">
				<div class="input"><input class="search-field" type="text" placeholder="To search type and hit enter" value=""/></div>
			</div>
		</div>

		<div class="widget">
			<h4>Got any questions?</h4>
			<div class="widget-box">
				<p>If you are having any questions, please feel free to ask.</p>
				<a href="contact.html" class="button widget-btn"><i class="fa fa-envelope"></i> Drop Us a Line</a>
			</div>
		</div>

		<!-- Tabs -->
		<div class="widget">

			<ul class="tabs-nav blog">
				<li class="active"><a href="#tab1">Popular</a></li>
				<li><a href="#tab2">Featured</a></li>
				<li><a href="#tab3">Recent</a></li>
			</ul>

			<!-- Tabs Content -->
			<div class="tabs-container">

				<div class="tab-content" id="tab1">
					
					<!-- Recent Posts -->
					<ul class="widget-tabs">
						
						<!-- Post #1 -->
						<li>
							<div class="widget-thumb">
								<a href="blog-single-post.html"><img src="images/blog-widget-01.png" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="blog-single-post.html">How to "Woo" a Recruiter and Land Your Dream Job</a></h5>
								<span>September 12, 2015</span>
							</div>
							<div class="clearfix"></div>
						</li>
						
						<!-- Post #2 -->
						<li>
							<div class="widget-thumb">
								<a href="blog-single-post.html"><img src="images/blog-widget-02.png" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="blog-single-post.html">Hey Job Seeker, It’s Time To Get Up And Get Hired</a></h5>
								<span>October 10, 2015</span>
							</div>
							<div class="clearfix"></div>

						</li>
						
						<!-- Post #3 -->
						<li>
							<div class="widget-thumb">
								<a href="blog-single-post.html"><img src="images/blog-widget-03.png" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="blog-single-post.html">11 Tips to Help You Get New Clients Through Cold Calling</a></h5>
								<span>August 27, 2015</span>
							</div>
							<div class="clearfix"></div>
						</li>
					</ul>
		
				</div>

				<div class="tab-content" id="tab2">
				
					<!-- Featured Posts -->
					<ul class="widget-tabs">

						<!-- Post #1 -->
						<li>
							<div class="widget-thumb">
								<a href="blog-single-post.html"><img src="images/blog-widget-02.png" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="blog-single-post.html">Hey Job Seeker, It’s Time To Get Up And Get Hired</a></h5>
								<span>October 10, 2015</span>
							</div>
							<div class="clearfix"></div>

						</li>
						
						<!-- Post #2 -->
						<li>
							<div class="widget-thumb">
								<a href="blog-single-post.html"><img src="images/blog-widget-01.png" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="blog-single-post.html">How to "Woo" a Recruiter and Land Your Dream Job</a></h5>
								<span>September 12, 2015</span>
							</div>
							<div class="clearfix"></div>
						</li>
						
						<!-- Post #3 -->
						<li>
							<div class="widget-thumb">
								<a href="blog-single-post.html"><img src="images/blog-widget-03.png" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="blog-single-post.html">11 Tips to Help You Get New Clients Through Cold Calling</a></h5>
								<span>August 27, 2015</span>
							</div>
							<div class="clearfix"></div>
						</li>
					</ul>
				</div>

				<div class="tab-content" id="tab3">
				
					<!-- Recent Posts -->
					<ul class="widget-tabs">
						
						<!-- Post #1 -->
						<li>
							<div class="widget-thumb">
								<a href="blog-single-post.html"><img src="images/blog-widget-03.png" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="blog-single-post.html">11 Tips to Help You Get New Clients Through Cold Calling</a></h5>
								<span>August 27, 2015</span>
							</div>
							<div class="clearfix"></div>
						</li>
						
						<!-- Post #2 -->
						<li>
							<div class="widget-thumb">
								<a href="blog-single-post.html"><img src="images/blog-widget-02.png" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="blog-single-post.html">Hey Job Seeker, It’s Time To Get Up And Get Hired</a></h5>
								<span>October 10, 2015</span>
							</div>
							<div class="clearfix"></div>

						</li>
						
						<!-- Post #3 -->
						<li>
							<div class="widget-thumb">
								<a href="blog-single-post.html"><img src="images/blog-widget-01.png" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="blog-single-post.html">How to "Woo" a Recruiter and Land Your Dream Job</a></h5>
								<span>September 12, 2015</span>
							</div>
							<div class="clearfix"></div>
						</li>
					</ul>
				</div>
				
			</div>
		</div>


		<div class="widget">
			<h4>Social</h4>
				<ul class="social-icons">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
				</ul>

		</div>
		
		<div class="clearfix"></div>
		<div class="margin-bottom-40"></div>

	</div>
	<!-- Widgets / End -->


</div>
<!-- End container -->

<!-- Footer
================================================== -->
<div class="margin-top-25"></div>

<div id="footer">
	<!-- Main -->
	<div class="container">

		<div class="seven columns">
			<h4>About</h4>
			<p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
			<a href="#" class="button">Get Started</a>
		</div>

		<div class="three columns">
			<h4>Company</h4>
			<ul class="footer-links">
				<li><a href="#">About Us</a></li>
				<li><a href="#">Careers</a></li>
				<li><a href="#">Our Blog</a></li>
				<li><a href="#">Terms of Service</a></li>
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Hiring Hub</a></li>
			</ul>
		</div>
		
		<div class="three columns">
			<h4>Press</h4>
			<ul class="footer-links">
				<li><a href="#">In the News</a></li>
				<li><a href="#">Press Releases</a></li>
				<li><a href="#">Awards</a></li>
				<li><a href="#">Testimonials</a></li>
				<li><a href="#">Timeline</a></li>
			</ul>
		</div>		

		<div class="three columns">
			<h4>Browse</h4>
			<ul class="footer-links">
				<li><a href="#">Freelancers by Category</a></li>
				<li><a href="#">Freelancers in USA</a></li>
				<li><a href="#">Freelancers in UK</a></li>
				<li><a href="#">Freelancers in Canada</a></li>
				<li><a href="#">Freelancers in Australia</a></li>
				<li><a href="#">Find Jobs</a></li>

			</ul>
		</div>

	</div>

	<!-- Bottom -->
	<div class="container">
		<div class="footer-bottom">
			<div class="sixteen columns">
				<h4>Follow Us</h4>
				<ul class="social-icons">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
				</ul>
				<div class="copyrights">©  Copyright 2015 by <a href="#">Work Scout</a>. All Rights Reserved.</div>
			</div>
		</div>
	</div>

</div>

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script src="{{ asset('assets/scripts/jquery-2.1.3.min.js') }}"></script>
<script src="{{ asset('assets/scripts/custom.js') }}"></script>
<script src="{{ asset('assets/scripts/jquery.superfish.js') }}"></script>
<script src="{{ asset('assets/scripts/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('assets/scripts/jquery.themepunch.revolution.min.js')  }}"></script>
<script src="{{ asset('assets/scripts/jquery.themepunch.showbizpro.min.js')}} "></script>
<script src="{{ asset('assets/scripts/jquery.flexslider-min.js') }}"></script>
<script src="{{ asset('assets/scripts/chosen.jquery.min.js') }}"></script>
<script src="{{ asset('assets/scripts/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/scripts/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/scripts/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/scripts/jquery.jpanelmenu.js') }}"></script>
<script src="{{ asset('assets/scripts/stacktable.js') }}"></script>
<script src="{{ asset('assets/scripts/headroom.min.js') }}"></script>



<!-- Style Switcher
================================================== -->
<script src="scripts/switcher.js"></script>

<div id="style-switcher" style="display:none">
	<h2>Style Switcher <a href="#"></a></h2>
	
	<div>
		<h3>Predefined Colors</h3>
		<ul class="colors" id="color1">
			<li><a href="#" class="green" title="Green"></a></li>
			<li><a href="#" class="blue" title="Blue"></a></li>
			<li><a href="#" class="orange" title="Orange"></a></li>
			<li><a href="#" class="navy" title="Navy"></a></li>
			<li><a href="#" class="yellow" title="Yellow"></a></li>
			<li><a href="#" class="peach" title="Peach"></a></li>
			<li><a href="#" class="beige" title="Beige"></a></li>
			<li><a href="#" class="purple" title="Purple"></a></li>
			<li><a href="#" class="celadon" title="Celadon"></a></li>
			<li><a href="#" class="pink" title="Pink"></a></li>
			<li><a href="#" class="red" title="Red"></a></li>
			<li><a href="#" class="brown" title="Brown"></a></li>
			<li><a href="#" class="cherry" title="Cherry"></a></li>
			<li><a href="#" class="cyan" title="Cyan"></a></li>
			<li><a href="#" class="gray" title="Gray"></a></li>
			<li><a href="#" class="olive" title="Olive"></a></li>
		</ul>
		
		<h3>Layout Style</h3>
		<div class="layout-style">
			<select id="layout-style"> 
				<option value="2">Wide</option>
				<option value="1">Boxed</option>
			</select>
		</div>
			
		<h3>Header Style</h3>
		<div class="layout-style">
			<select id="header-style"> 
				<option value="1">Style 1</option>
				<option value="2">Style 2</option>
				<option value="3">Style 3</option>
			</select>
		</div>
	
		<h3>Background Image</h3>
		<ul class="colors bg" id="bg">
			<li><a href="#" class="bg1"></a></li>
			<li><a href="#" class="bg2"></a></li>
			<li><a href="#" class="bg3"></a></li>
			<li><a href="#" class="bg4"></a></li>
			<li><a href="#" class="bg5"></a></li>
			<li><a href="#" class="bg6"></a></li>
			<li><a href="#" class="bg7"></a></li>
			<li><a href="#" class="bg8"></a></li>
			<li><a href="#" class="bg9"></a></li>
			<li><a href="#" class="bg10"></a></li>
			<li><a href="#" class="bg11"></a></li>
			<li><a href="#" class="bg12"></a></li>
			<li><a href="#" class="bg13"></a></li>
			<li><a href="#" class="bg14"></a></li>
			<li><a href="#" class="bg15"></a></li>
			<li><a href="#" class="bg16"></a></li>
		</ul>
		
		<h3>Background Color</h3>
		<ul class="colors bgsolid" id="bgsolid">
			<li><a href="#" class="green-bg" title="Green"></a></li>
			<li><a href="#" class="blue-bg" title="Blue"></a></li>
			<li><a href="#" class="orange-bg" title="Orange"></a></li>
			<li><a href="#" class="navy-bg" title="Navy"></a></li>
			<li><a href="#" class="yellow-bg" title="Yellow"></a></li>
			<li><a href="#" class="peach-bg" title="Peach"></a></li>
			<li><a href="#" class="beige-bg" title="Beige"></a></li>
			<li><a href="#" class="purple-bg" title="Purple"></a></li>
			<li><a href="#" class="red-bg" title="Red"></a></li>
			<li><a href="#" class="pink-bg" title="Pink"></a></li>
			<li><a href="#" class="celadon-bg" title="Celadon"></a></li>
			<li><a href="#" class="brown-bg" title="Brown"></a></li>
			<li><a href="#" class="cherry-bg" title="Cherry"></a></li>
			<li><a href="#" class="cyan-bg" title="Cyan"></a></li>
			<li><a href="#" class="gray-bg" title="Gray"></a></li>
			<li><a href="#" class="olive-bg" title="Olive"></a></li>
		</ul>
	</div>
	
	<div id="reset"><a href="#" class="button color">Reset</a></div>
		
</div>


</body>
</html>