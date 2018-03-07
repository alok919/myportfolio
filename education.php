<?php include 'layouts/header.php'; ?>

<body> 
<?php include 'layouts/banner.php'; ?>
			<!-- //header -->  
			<div class="w3agile-address"> 
				<div class="container"> 
					<ul>
						<li><i class="fa fa-map-marker" aria-hidden="true"></i>Broome St, Canada, NY 10002, New York</li>
						<li><i class="fa fa-phone" aria-hidden="true"> </i>  +01 111 222 3333</li>
						<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com"> mail@example.com</a></li>
					</ul>
				</div> 
			</div> 
		</div>
	</div>
	<!-- //banner -->  
	<!-- education -->
	<div class="about education">
		<div class="container">
			<div class="w3ls-title">
				<h2 class="agileits-title">Education</h2>
			</div>
			<div class="w3-agileits-expinfo">    
				<div class="experience-grids">
					<div class="experience-left">
						<h6>2018<span>(4 Years)</span> </h6>
						<h5>Britannia  University</h5>
					</div>
					<div class="experience-right">
						<h4>Bachelor Of Computer Science And Engineering</h4>
						<p>It Is Four Years Bachelor Degree Of Computer Science & Engineering(CSE) .
						I have Completd Here Computer Software, Hardware And Networking Basic Concepts with 156 credit Emginnering syllabus offered By UGC (University Grant Commission) and  also learn about Internet And Www(World Wide Web)</p>
					</div>
					<div class="clearfix"> </div>
				</div> 
				<div class="experience-grids experience-grids-btm">
					<div class="experience-left">
						<h6>2013<span>(2 Years)</span></h6>
						<h5> Adhyapak Abdul Majid College</h5>
					</div>
					<div class="experience-right">
						<h4>Higher School Certificate(H.S.C)</h4>
						<p>It Is Two Years Higher School Certificate(H.S.C).I have Completd Here H.S.C with Science Group and My CGP -3.80 </p>
					</div>
					<div class="clearfix"> </div>
				</div>  
				<div class="experience-grids w3-agileits">
					<div class="experience-left">
						<h6>2011<span>(5 Years)</span></h6>
						<h5>Barashalghar U. M.A High school</h5>
					</div>
					<div class="experience-right">
						<h4>Secondary  School Certificate(S.S.C)</h4>
						<p>It Is Five Years School period , I have achieved Secondary School Certificate(S.S.C) with Science Group and My CGP -4.81 </p>
					</div>
					<div class="clearfix"> </div>
				</div> 
			</div>
		</div>
	</div>
	<!-- //education -->
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