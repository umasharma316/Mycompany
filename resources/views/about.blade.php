<?php $thisPage="about"?>
@extends('layouts.master')
@section('title', 'about')

<!DOCTYPE html>
<html lang="en">
  <body>
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="Home">Home</a></li>
				<li>About Us</li>			
			</div>		
		</div>	
	</div>
	
	<div class="aboutus">
		<div class="container">
			<h3>Our company information</h3>
			<hr>
			<div class="col-md-7 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
				<img src="images/7.jpg" class="img-responsive">
				<h4>Experience you can count on...</h4>
				<p>For more than 20 years and counting, our mission has always been to be recognized as the commercial and institutional vendor preferred source for all kinds of materials required in textile packing. By providing the products, we’ve earned a reputation as being the experts in the field of supplying textile packaging materials and backed by our personal service and a guarantee of quality. </p>

				<p>Gurudev Traders has been instrumental in providing the quality products consisting of Grey Boards (with pasting and without pasting), Tapes, BOPP Bags, PP Bags, LD, Clips, Gunny Bags, Gold Paste, Bubble Wrap and every other minute products required in the packaging of the textile materials. An efficient and effective Quality Management System  and Timely Delivery of products within stipulated time ensures that the products are trustworthy, so you can be assured of enhanced durability, strength and longevity.</p>
			</div>
			<div class="col-md-5 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
				<div class="skill">
					<h2>Our Skills</h2>
					<p>Since the Textile packaging industry witnessed a boon, there seemed to be an over whelming demand for the products required in packing of textile goods. This has urged to have expertise in supply of all products with a sustainable good quality.</p>

					<div class="progress-wrap">
						<h3>Grey Boards Supply</h3>
						<div class="progress">
						  <div class="progress-bar  color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
							<span class="bar-width">75%</span>
						  </div>

						</div>
					</div>

					<div class="progress-wrap">
						<h4>BOPP,PP,LD Bags</h4>
						<div class="progress">
						  <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
						   <span class="bar-width">10%</span>
						  </div>
						</div>
					</div>

					<div class="progress-wrap">
						<h4>Bubble wraps,Gunny Bags,Tapes,Clips</h4>
						<div class="progress">
						  <div class="progress-bar color3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
							<span class="bar-width">10%</span>
						  </div>
						</div>
					</div>

					<div class="progress-wrap">
						<h4>Printed and Plain Poly Bags</h4>
						<div class="progress">
						  <div class="progress-bar color4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
							<span class="bar-width">5%</span>
						  </div>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</div>
	
	<div class="our-team">
		<div class="container">
			<h3>Our Team</h3>	
			<div class="text-center">
			<div class="row">
				<div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
					<img src="images/services/5.jpg" alt="">
					<h4>Suresh Sharma</h4>
					<p><b>Mobile:</b>1234567890 </br><b>Email:</b> suresh@gurudevtraders.com</p>
				</div>
				<div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
					<img src="images/services/2.jpg" alt="">
					<h4>Vijay Sharma</h4>
					<p><b>Mobile:</b>1234567890 </br><b>Email:</b> vijay@gurudevtraders.com</p>
				</div>
				<div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
					<img src="images/services/1.jpg" alt="">
					<h4>Sumit Sharma</h4>
					<p><b>Mobile:</b>1234567890 </br><b>Email:</b> sumit@gurudevtraders.com</p>
				</div>
				<div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
					<img src="images/services/3.jpg" alt="">
					<h4>Ronak Sharma</h4>
					<p><b>Mobile:</b>1234567890 </br><b>Email:</b> ronak@gurudevtraders.com</p>
				</div>
			</div>
			</div>
		</div>
	</div>
	
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-2.1.1.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>  
	<script src="js/wow.min.js"></script>
	<script src="js/functions.js"></script>
</body>
</html>