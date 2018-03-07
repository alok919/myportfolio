
<?php include 'layouts/header.php'; ?>

<body> 
	<?php include 'layouts/banner.php'; ?>


	<!-- about -->
	<div class="about">
		<div class="container">
			<div class="w3ls-title">
				<h2 class="agileits-title">About Me</h2>
			</div>
			<div class="about-agileinfo"> 
				<div class="col-md-4 col-sm-4 about-left ">
					<img src="images/arjun.jpg" class="img-responsive" alt=""/>
				</div>
				<div class="col-md-8 col-sm-8 about-right wthree">
					<h3>Hi, i'm <span>Alok Kumar Ghosh </span></h3>
					<h4>Web Designer & Developer </h4>
					<ul class="address">
						<li>
							<ul class="agileits-address-text ">
								<li><b>D.O.B :</b></li>
								<li>15-11-1995</li>
							</ul>
						</li>
						<li>
							<ul class="agileits-address-text">
								<li><b>PHONE : </b></li>
								<li> +8801859723995</li>
							</ul>
						</li>
						<li>
							<ul class="agileits-address-text">
								<li><b>ADDRESS :</b></li>
								<li>Paduar bazar, Comilla, Bangladesh</li>
							</ul>
						</li>
						<li>
							<ul class="agileits-address-text">
								<li><b>E-MAIL :</b></li>
								<li><a href="mailto:example@mail.com">alok.cse919@gmail.com</a></li>
							</ul>
						</li>
						<li>
							<ul class="agileits-address-text">
								<li><b>WEBSITE :</b></li>
								<li><a href="http://blog.alokghosh.info">www.myresume.com</a></li>
							</ul>
						</li>
					</ul> 
					<div class="social-wthree-icons">
						<ul>
							<li><a href="https://www.facebook.com/Arjunghosh919" class="fa fa-facebook icon icon-border facebook"> </a></li>
							<li><a href="https://twitter.com/Alok9190Kumar" class="fa fa-twitter icon icon-border twitter"> </a></li>
							<li><a href="https://plus.google.com/110766554608950735137" class="fa fa-google-plus icon icon-border googleplus"> </a></li>
							<li><a href="https://www.linkedin.com/in/alok-ghosh-053646158/" class="fa fa-linkedin icon icon-border linkedin"> </a></li> 
						</ul>
						<div class="clearfix"> </div>
					</div> 
					<div class="hire-w3lgrids">
						<a href="#" class="wthree-more nina" data-text="DOWNLOAD CV"> 
							<span>D</span><span>o</span><span>w</span><span>n</span><span>l</span><span>o</span><span>a</span><span>d</span> <span>c</span><span>v</span>					
						</a> 
						<a href="#" class="wthree-more w3more1 nina" data-text="hire me"> 
							<span>h</span><span>i</span><span>r</span><span>e</span> <span>m</span><span>e</span>
						</a>
					</div>  
				</div> 
				<div class="clearfix"> </div> 
				<div class="about-text agileits-w3layouts"> 
					<p>I am Alok.I am from Debodwar, comilla .Currently, i am pursuing my B.Sc in CSE from Britannia University, Comilla, Bangladesh.I got first class marks in Bachelor and Higher School Certificate(H.S.C).I also got 4.81 in Grade Point Average in Secondary  School Certificate(S.S.C)exam.My hobbies are playing indoor and outdoor games specially Cricket .My strength is my hard work, creativity, activeness and honesty.My weakness is that sometimes I take more than usual time due to my creation.My goal is to become a software engineer. 
							Thank you.
							</p>
				</div>
			</div> 
		</div>
	</div>
	<!-- //about -->
	<!-- footer -->  
	<div class="w3agile-footer">
		<div class="container"> 
			<p>© 2018 Alok CV. All rights reserved | Design by <a href="http://alokghosh.info/" target="_blank">Alok.</a></p>
		</div>
	</div>
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