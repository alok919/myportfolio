<?php include 'layouts/header.php'; ?>

<body> 
<?php include 'layouts/banner.php'; ?>
	<!-- contact -->
	<div class="about contact">
		<div class="container">
			<div class="w3ls-title">
				<h2 class="agileits-title">Contact Me</h2>
			</div>
			<div class="contact-agileinfo">
				<div class="col-md-7 w3agile-contact-grids">
					<div class="ctact-w3left">
						<form action="#" method="post">
							<span>
								<i>Name</i>
								<input type="text" name="Name" placeholder="" required="">
							</span>
							<span>
								<i>Email</i>
								<input type="email" name="Email" placeholder="" required="">
							</span>
							<span>
								<i>Subject</i>
								<input type="text" name="Subject" placeholder="" required="">
							</span>
							<span>
								<i>Message</i>
								<textarea name="Message" placeholder="" required=""></textarea>
							</span>
							<div class="w3_submit">
								<input type="submit" value="Submit Now">
							</div>
						</form>
					</div>
				</div> 
				<div class="col-md-5 w3agile-contact-grids"> 
					
					<div class="profile-grids">  
						<h5>Contact Info</h5>
						<ul> 
							<li> 
								<b>PHONE</b> : +8801859723995
							</li> 
							<li> 
								<b>Gmail</b> :  alok.cse919@gmail.com
							</li> 
							<li> 
								<b>ADDRESS</b> : Debidwar,Comilla .Post-3532
							</li>
						</ul>
					</div>
					<div class="profile-grids">  
						<h5>Social Media Info</h5>
						<ul> 
							<li> 
								<b>E-MAIL</b> : <a href="mailto:example@mail.com"> alok.cse919@gmail.com</a>
							</li>
							<li> 
								<b>WEBSITE</b> : <a href="www.alokghosh.info">www.alokghosh.info</a>
							</li>
							<li> 
								<b>TWITTER</b> : <a href="https://twitter.com/Alok9190Kumar" class="social-button twitter">twitter.com/Alok9190Kumar</a>
							</li> 
						</ul>
					</div>
					<div class="clearfix"> </div> 
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //contact -->
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