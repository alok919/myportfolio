<?php include 'layouts/header.php'; ?>

<body> 
<?php include 'layouts/banner.php'; ?>
	<!-- projects -->
	<div class="about projects">
		<div class="container">
			<div class="w3ls-title">
				<h2 class="agileits-title">My Projects</h2>
			</div>
			<div class="w3ls_gallery_grids">	
				<div class="col-xs-4 agileits_w3layouts_gallery_grid">	
					<div class="agileits_w3layouts_gallery_grid1 w3layouts_gallery_grid1 hover14 column">
						<div class="w3_agile_gallery_effect view view-tenth">
							<a href="images/design.png" class="showcase" data-rel="lightcase:myCollection:slideshow" title="My Projects">
								<img src="images/design.png" alt=" " class="img-responsive" />
								<div class="mask">
									<h3>My projects</h3>
									<p>At vero eoset accusamus et iusto odio ducimus.</p>
								</div>
							</a>
						</div>
					</div>
					<div class="agileits_w3layouts_gallery_grid1 hover14 column">
						<div class="w3_agile_gallery_effect view view-tenth">
							<a href="images/crudlaravel.png" class="showcase" data-rel="lightcase:myCollection:slideshow" title="My Projects">
								<img src="images/crudlaravel.png" alt=" " class="img-responsive" />
								<div class="mask">
									<h3>My projects</h3>
									<p>At vero eoset accusamus et iusto odio ducimus.</p>
								</div>
							</a>
						</div>
					</div>
					<div class="agileits_w3layouts_gallery_grid1 hover14 column">
						<div class="w3_agile_gallery_effect view view-tenth">
							<a href="images/blog.png" class="showcase" data-rel="lightcase:myCollection:slideshow" title="My Projects">
								<img src="images/g3.jpg" alt=" " class="img-responsive" />
								<div class="mask">
									<h3>My projects</h3>
									<p>At vero eoset accusamus et iusto odio ducimus.</p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-xs-4 agileits_w3layouts_gallery_grid">	
					<div class="agileits_w3layouts_gallery_grid1 hover14 column">
						<div class="w3_agile_gallery_effect view view-tenth">
							<a href="images/g4.jpg" class="showcase" data-rel="lightcase:myCollection:slideshow" title="My Projects">
								<img src="images/g4.jpg" alt=" " class="img-responsive" />
								<div class="mask">
									<h3>My projects</h3>
									<p>At vero eoset accusamus et iusto odio ducimus.</p>
								</div>
							</a>
						</div>
					</div>
					<div class="agileits_w3layouts_gallery_grid1 hover14 column">
						<div class="w3_agile_gallery_effect view view-tenth">
							<a href="images/g5.jpg" class="showcase" data-rel="lightcase:myCollection:slideshow" title="My Projects">
								<img src="images/g5.jpg" alt=" " class="img-responsive" />
								<div class="mask">
									<h3>My projects</h3>
									<p>At vero eoset accusamus et iusto odio ducimus.</p>
								</div>
							</a>
						</div>
					</div> 
				</div>
				<div class="col-xs-4 agileits_w3layouts_gallery_grid">	
					<div class="agileits_w3layouts_gallery_grid1 w3layouts_gallery_grid1 hover14 column">
						<div class="w3_agile_gallery_effect view view-tenth">
							<a href="images/g6.jpg" class="showcase" data-rel="lightcase:myCollection:slideshow" title="My Projects">
								<img src="images/g6.jpg" alt=" " class="img-responsive" />
								<div class="mask">
									<h3>My projects</h3>
									<p>At vero eoset accusamus et iusto odio ducimus.</p>
								</div>
							</a>
						</div>
					</div>
					<div class="agileits_w3layouts_gallery_grid1 hover14 column">
						<div class="w3_agile_gallery_effect view view-tenth">
							<a href="images/g7.jpg" class="showcase" data-rel="lightcase:myCollection:slideshow" title="My Projects">
								<img src="images/g7.jpg" alt=" " class="img-responsive" />
								<div class="mask">
									<h3>My projects</h3>
									<p>At vero eoset accusamus et iusto odio ducimus.</p>
								</div>
							</a>
						</div>
					</div>
					<div class="agileits_w3layouts_gallery_grid1 hover14 column">
						<div class="w3_agile_gallery_effect view view-tenth">
							<a href="images/g8.jpg" class="showcase" data-rel="lightcase:myCollection:slideshow" title="My Projects">
								<img src="images/g8.jpg" alt=" " class="img-responsive" />
								<div class="mask">
									<h3>My projects</h3>
									<p>At vero eoset accusamus et iusto odio ducimus.</p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div> 
		</div>
	</div>
	<!-- //projects -->
	<!-- footer -->  
	<?php include 'layouts/footer.php'; ?>
	<!-- //footer --> 
	<!-- gallery light-case -->
	<script src="js/lightcase.js"></script>
	<script src="js/jquery.events.touch.js"></script>
	<script>
		$('.showcase').lightcase();
	</script>
	<!-- //gallery light-case -->
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