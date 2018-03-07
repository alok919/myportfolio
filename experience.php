<?php include 'layouts/header.php'; ?>

<body> 
<?php include 'layouts/banner.php'; ?>
	<!-- experience -->
	<div class="about experience">
		<div class="container">
			<div class="w3ls-title">
				<h2 class="agileits-title">Experience</h2>
			</div>
			<div class="w3-agileits-expinfo">  
				<div class="experience-grids">
					<div class="experience-left">
						<h6>2015 - 2016 </h6>
						<h5>Nice Power & It Solution </h5>
					</div>
					<div class="experience-right">
						<h4>Learning Web Design</h4>
						<p>This institution i have learned about web design and development  and concept of web technology</p>
					</div>
					<div class="clearfix"> </div>
				</div> 
				<div class="experience-grids experience-grids-btm">
					<div class="experience-left">
						<h6>2016 - 2017</h6>
						<h5>LEDP Course</h5>
					</div>
					<div class="experience-right">
						<h4>Font End Development </h4>
						<p>It Is Course Of Ministry  Of Ict In Govt. Of Bangladesh . Here  I Have Learned About Freelencing And Intermedium Steps Of Web Development specially Font End Development</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="experience-grids w3-agileits">
					<div class="experience-left">
						<h6>2017 - Present</h6>
						<h5>Self Employed </h5>
					</div>
					<div class="experience-right">
						<h4>Php And Laravel Developer</h4>
						<p>In This Time Period I Will Try Learn About Back End Web Technology And Server Site Scripting Language Php . And Php Popular Framework Laravel, I Also Learn About Angulat Js, Ajax Technique how to use it in real project  Etc. I have completed Eight (8) project in Web Back End Development . Now , i am Doing 2 large Project  </p>
					</div>
					<div class="clearfix"> </div>
				</div> 
			</div>
		</div>
	</div>
	<!-- //experience -->
	<!-- footer -->  
	<?php include 'layouts/footer.php'; ?>
	<!-- //footer --> 
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