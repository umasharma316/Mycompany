<?php $thisPage="AddQuotation"?>
@extends('layouts.master')
@section('title', 'AddQuotation')
<!DOCTYPE html>
<html lang="en">
  <body>
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="Home">Home</a></li>
				<li>Services</li>			
			</div>		
		</div>	
	</div>
	
	<div class="services">
		<div class="container">
			<h3>Ask For Quotation</h3>
			<hr>
			<div class="col-md-6">
				<form action = "/createquot" method = "post">
			         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">  
				     <table>
			            <tr style="color: black">
			               <td>First Name: <span style="color: red">*</span></label></td>
			               <td><input type='text' name='FirstName' required/></td>
			            </tr>
			            <tr style="color: black">
			               <td>Last Name: <span style="color: red">*</span></label></td>
			               <td><input type='text' name='LastName' required/></td>
			            </tr>
			            <tr style="color: black">
			               <td>Company Name: <span style="color: red">*</span></label></td>
			               <td><input type='text' name='CompanyName' required/></td>
			            </tr>
			            <tr style="color: black">
			               <td>Mobile no.: <span style="color: red">*</span></label></td>
			               <td><input type='text' name='Mobile' required/></td>
			            </tr>
			            <tr style="color: black">
			               <td>Email Id: <span style="color: red">*</span></label></td>
			               <td><input type='text' name='EmailId' required/></td>
			            </tr>
			            <tr style="color: black">
			               <td>City: <span style="color: red">*</span></label></td>
			               <td><input type='text' name='City' required/></td>
			            </tr>
			            <tr style="color: black">
			               <td>Comments/Requests:</td>
			               <td><input type='text' name='Comments' width="250px" height="200px" /></td>
			            </tr>
			            <br>
			            <tr style="color: black" align="center"> 
			               <td colspan = '2'>
			                  <input type = 'submit' value = "Submit"/>
			               </td>
			            </tr>
			         </table>	
			    </form>
			</div>
			
			<div class="col-md-6">
				<div class="media">
					<ul>
						<li>
							<div class="media-left">
								<i class="fa fa-pencil"></i>						
							</div>
							<div class="media-body">
								<h4 class="media-heading">Enquiry</h4>
								<p>Please feel free to send an enquiry or ask for quotation for the product.</p>
							</div>
						</li>
					</ul>
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





























