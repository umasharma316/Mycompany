<?php $thisPage="contact"?>
@extends('layouts.master')
@section('title', 'about')
<!DOCTYPE html>
<html lang="en">

  <body>
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="Home">Home</a></li>
				<li>Contact</li>			
			</div>		
		</div>	
	</div>
	
	<div class="map">
		<div id="google-map" data-latitude="19.258070" data-longitude="73.043603"></div>
	</div>
	<div>
        @if(session()->has('message'))                
          <div class="alert alert-info" style="text-align: center;"> 
            {{ session()->get('message') }}
          </div>
        @endif                        
    </div>
	<section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Drop Your Message</h2>
                <p></p>
            </div> 
            <div class="row contact-wrap">  
                <div class="col-md-6 col-md-offset-3">
                    
                    <div id="errormessage"></div>
                    <form action="/savemessage" method="post" role="form" class="contactForm">
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                            <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:3" data-msg="Please enter at least 3 chars" />
                            </div>
                            <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            </div>
                            <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            </div>
                        <div class="text-center">
                        <button type="submit" value="Submit" class="btn btn-primary btn-lg" onclick='Javascript:checkEmail();'>Submit Message
                        </button>
                        </div>
                    </form>                       
                </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-2.1.1.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>  
	<script src="js/wow.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/functions.js"></script>
    <script src="contactform/contactform.js"></script>    
    <script type="text/javascript">
    function checkEmail() 
    {
        var email = document.getElementById('email');
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!filter.test(email.value)) {
        alert('Please provide a valid email address');
        email.focus;
        return false;
     }
    }
</script>
<!-- <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('google-map'), {
          center: {lat: 19.258070, lng: 73.043603},
          zoom: 8
        });
      }
</script>  -->   

<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCBiw_f5KMnRsk42XnBqxxw1MqVR9gIpAU"></script>;

</body>
</html>