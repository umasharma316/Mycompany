<?php $thisPage="Home"?>
@extends('layouts.master')
@section('title', 'Home')
<!DOCTYPE html>
<html lang="en">
  <!--<head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Company-HTML Bootstrap theme</title> -->

    <!-- Bootstrap -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" />	 -->
    <!-- =======================================================
        Theme Name: Company
        Theme URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  <!-- </head> -->
  <body>
	<!-- <header>		
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="index.blade.php"><h1><span>Com</span>pany</h1></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="index.blade.php" class="active">Home</a></li>
								<li role="presentation"><a href="about.blade.php">About Us</a></li>
								<li role="presentation"><a href="services.blade.php">Services</a></li>								
								<li role="presentation"><a href="portfolio.blade.php">Portfolio</a></li>
								<li role="presentation"><a href="blog.blade.php">Blog</a></li>
								<li role="presentation"><a href="contact.blade.php">Contact</a></li>
								<li data-toggle="tooltip" data-trigger="hover" data-placement="bottom" title="about us"><a href="#about">About Us</a>
            </li>					
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header> -->
	<section id="main-slider" class="no-margin">
        <div class="carousel slide">      
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2 class="animation animated-item-1">Gurudev <span>Traders</span></h2>
                                    <p class="animation animated-item-2">A remarkable place holder in the field of manufacturing and supplying textile packaging materials across the cities...</p>
                                    <!-- <a class="btn-slide animation animated-item-3" href="#">Read More</a> -->
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <!-- <div class="slider-img">
                                    <img src="images/slider/img3.png" class="img-responsive">
                                </div> -->
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->             
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->
	
	<div class="feature">
		<div class="container">
			<div class="text-center">
			<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" >
						<i class="fa fa-cloud"></i>	
						<h2>Mission Statement</h2>
						<p>Quality is what we Believe, Service is what we Give, Opportunity is what you Give, Satisfaction is what you Get.</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
						<i class="fa fa-book"></i>	
						<h2>Our Commitment </h2>
						<p>We are committed to producing Top Quality, Unique Packaging and Promotional materials. We recognize the importance of all our clients and have put structures in place to ensure everyone.</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
						<i class="fa fa-laptop"></i>	
						<h2>Our Capabilities </h2>
						<p>We have our hands on in supplying and manufacturing various grades of textile packaging materials.</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" >
						<i class="fa fa-heart-o"></i>	
						<h2>Quality Assurance </h2>
						<p>Our products are comprised of strong and sturdy characteristics required for packing the textile products.</p>
					</div>
				</div>				
			</div>
		</div>
	</div>
	
	<div class="about">
		<div class="container">
			<div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
				<h2>What We Offer</h2>
				<img src="images/6.jpg" class="img-responsive"/>
				<p>
				Gurudev Traders is a premier supplier to the diverse textile market place. Through our commitment to unmatched service and integrity, we become indispensable to our partners. 
				</p>
			</div>
			
			<div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
				<!-- <h2>Delivering Commited Results</h2> -->
				<br><br><br><br>
				<p>We offer a wide range of high quality packing materials whether you call for light weight or heavy weight, we supply the material you need at the best possible price.
				Long standing customer relationships spanning over decades because we ensure to deliver what we commit, which might mean working odd hours.
				Efficient mapping of needs of the customers in terms of perceived product deliverables. Consistant product pallet offering to satisfy the customer successfully.
				We ensure delivering committed results by making sure we work to deliver the optimum business performance to create greater business valuation.We reach out to our customers directly which ensures that our customers get what they want and there are no traders or middlemen in between.  We believe in building mutually beneficial relationship with our clients.  Right through the Designing, Manufacturing process of the Products to the Warehousing and Distribution we work in tandem with our customers. 
				</br>
				We are environmentally responsible and our Products are recycleable.
				</p>
			</div>
		</div>
	</div>
	
	<!-- <div class="lates">
		<div class="container">
			<div class="text-center">
				<h2>Lates News</h2>
			</div>
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
				<img src="images/4.jpg" class="img-responsive"/>
				<h3>Template built with Twitter Bootstrap</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat 
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				</p>
			</div>
			
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
				<img src="images/4.jpg" class="img-responsive"/>
				<h3>Template built with Twitter Bootstrap</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat 
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				</p>
			</div>
			
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">				
				<img src="images/4.jpg" class="img-responsive"/>
				<h3>Template built with Twitter Bootstrap</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat 
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				</p>
			</div>
		</div>
	</div> -->
	
	<!-- <section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Our Partners</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>    

            <div class="partners">
                <ul>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="images/partners/partner1.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="images/partners/partner2.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="images/partners/partner3.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="images/partners/partner4.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="images/partners/partner5.png"></a></li>
                </ul>
            </div>        
        </div>
    </section> -->
	
	<section id="conatcat-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h2>Have a question or need a custom quote?</h2>
					            <ul class="portfolio-filter text-center">
					                <a class="btn btn-default active" href='AddQuotation'>Ask Quotation</a>
					            </ul>
                            <p>Please feel free to send an enquiry or ask for quotation for the product.<br/> Email us at <u>support@gurudevtraders.in</u> or call us at 9987456321.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->    
    </section><!--/#conatcat-info-->
	<!-- <footer>
		<div class="footer">
			<div class="container">
				<div class="social-icon">
					<div class="col-md-4">
						<ul class="social-network">
							<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
						</ul>	
					</div>
				</div>
				
				<div class="col-md-4 col-md-offset-4">
					<div class="copyright">
						&copy; Company Theme. All Rights Reserved.
                        <div class="credits">
                            <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
					</div>
				</div>						
			</div>
			
			<div class="pull-right">
				<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
			</div>		
		</div>
	</footer> -->

	
	
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