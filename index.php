<?php 
        include 'layouts/header.php';
?>


<body> 
		<!-- banner -->
	<div class="banner">
		<div class="banner-w3lsinfo"> 
			<!-- header -->
			<div class="header">
				<div class="container">
					<div class="logo">
						<h1><a href="index.html">Personal Site</a></h1>
						
					</div> 
					<div class="menu">
						<a href="#" class="navicon"></a> 
						<div class="toggle effect-3"> 
							<ul class="toggle-menu">
								<li><a href="index.php" class="active"> Home</a></li>
								<li><a href="about.php"> About</a></li>  
								<li><a href="skills.php"> Skills</a></li>
								<li><a href="experience.php">Experience</a></li> 
								<li><a href="education.php">Education</a></li>
								<li><a href="projects.php"> My Projects</a></li>							
								<li><a href="contact.php"> Contact Us</a></li>
							</ul>
						</div> 
					</div>   
					<div class="social-w3licon">
						<a href="https://twitter.com/Alok9190Kumar" class="social-button twitter"><i class="fa fa-twitter"></i></a>
						<a href="https://www.facebook.com/Arjunghosh919" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
						<a href="https://plus.google.com/110766554608950735137" class="social-button google"><i class="fa fa-google-plus"></i></a> 
						<a href="https://www.linkedin.com/in/alok-ghosh-053646158" class="social-button dribbble"><i class="fa fa-linkedin"></i></a> 
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //header --> 
			<!-- banner-text -->
			<div class="banner-text"> 
				<div class="container"> 
					<div class="banner-w3lstext"> 
						<h2>Alok Kumar Ghosh<span>Web Developer</span></h2>
						<p>Bachelor Of Computer Science And Engineering (CSE)</p>
					</div> 
				</div>
			</div>
			<!-- //banner-text -->
			<div class="w3agile-address"> 
				<div class="container"> 
					<ul>
					<li><i class="fa fa-map-marker" aria-hidden="true"></i>Paduar bazar, Comilla, Bangladesh</li>
					<li><i class="fa fa-phone" aria-hidden="true"> </i>  +8801859723995</li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com"> alok.cse919@gmail.com</a></li>
				</ul>
				</div> 
			</div> 
		</div>
	</div>

<?php include 'layouts/footer.php'; ?>
	
	<!-- menu-js -->
	<script>
		$('.navicon').on('click', function (e) {
		  e.preventDefault();
		  $(this).toggleClass('navicon--active');
		  $('.toggle').toggleClass('toggle--active');
		});
	</script> 
	<!-- //menu-js --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>