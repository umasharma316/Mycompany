<?php $thisPage="addorder"?>
@section('title', 'addorder')
<!DOCTYPE html>
<html lang="en">
  <body>
		<section id="itemadd">
			<div class="container">
				<form action = "/create" method = "post">
			         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">  
			         <table>
			            <tr>
			               <td>Name</td>
			               <td><input type='text' name='ItemName'/></td>
			            </tr>
			            <tr>
			               <td colspan = '2'>
			                  <input type = 'submit' value = "Add Item"/>
			               </td>
			            </tr>
			         </table>
			         <br>
			         <br>
			         <table border = 1>
				         <tr>
				            <td>ID</td>
				            <td>Name</td>
				         </tr>
				         @foreach ($items as $item)
				         <tr>
				            <td>{{ $item->ItemId }}</td>
				            <td>{{ $item->ItemName }}</td>
				         </tr>
				         @endforeach
				     </table>


				    <br/><br/><br/>

				     <table id="Quotationtab">
			            <tr>
			               <td>First Name</td>
			               <td><input type='text' name='FirstName'/></td>
			            </tr>
			            <tr>
			               <td>Last Name</td>
			               <td><input type='text' name='LastName'/></td>
			            </tr>
			            <tr>
			               <td>Company Name</td>
			               <td><input type='text' name='CompanyName'/></td>
			            </tr>
			            <tr>
			               <td>Mobile no.</td>
			               <td><input type='text' name='MobileNo'/></td>
			            </tr>
			            <tr>
			               <td>Email Id:</td>
			               <td><input type='text' name='EmailId'/></td>
			            </tr>
			            <tr>
			               <td>City</td>
			               <td><input type='text' name='City'/></td>
			            </tr>
			            <tr>
			               <td>Comments/Requests</td>
			               <td><input type='text' name='Comments' width="250px" height="200px" /></td>
			            </tr>
			            <tr>
			               <td colspan = '2'>
			                  <input type = 'submit' value = "Submit"/>
			               </td>
			            </tr>
			         </table>	
			    </form>
			 </div>
		 </section>

	<script src="js/jquery-2.1.1.min.js"></script>	
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>  
	<script src="js/wow.min.js"></script>
	<script src="js/functions.js"></script>
</body>
</html>

