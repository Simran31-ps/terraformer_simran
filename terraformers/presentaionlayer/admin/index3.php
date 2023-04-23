<?php include ('../../datalayer/bookserver.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="style5.css" type="text/css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>Terra<span>former</span></h1>
		<nav>
		


		
		<ul> 
			<li><a href="index3.php">Add/Delete Terraformers</a></li>
			<li><a href="viewemp.php">View Terraformers</a></li>
			<!--<li><a href=" viewpatients.php">View Patients</a></li>-->
			<li><a href="viewappointments.php">View Meetings</a></li>
			<!--<li><a href="searchdonoradmin.php">Search Donor</a></li>-->
			<!--<li><a href="feedback.php">FeedBack</a></li>-->
  			<li><a href="../../applicationlayer/main.php">Logout</a></li>
		</ul>
		



	</nav>




</header>
<body>

		<div class="headerA">
	<h2>Add Terraformer</h2>
</div>

<form method="post" action="index3.php">

	<?php include ('../../datalayer/errors.php'); ?>

	<div class="input-groupA">
		<label>Terraformer ID</label>
		<input type="text" name="addID" >

	</div>


	<div class="input-groupA">
		<label>Teraformer Name</label>
		<input type="text" name="addname" >


	</div>

	<div class="input-groupA">
		<label>Address</label>
		<input type="text" name="addAddress">

	</div>

	<div class="input-groupA">
		<label>Contact Number</label>
		<input type="text" name="addContactNumber">


	</div>


	<div class="input-groupA">
		<label>Email address</label>
		<input type="text" name="addEmail">

	</div>

	<div class="input-groupA">
		<label>Password</label>
		<input type="text" name="addpassword">

	</div>
<div class="input-groupA">
	<label>Department</label>
	   	<select name="addcategory" class="xd">
	   		<option value="bone" >Finance</option>
	   		<option value="heart">IT</option>
	   		<option value="Dentistry">Development</option>
	   		<option value="MentalHealth">Testing</option>
	   		<option value="Surgery">QA</option>

	   		


	   	</select>
	   	</div>

	<div class="input-groupA">
		<button type="submit" name="Add" class="btnA">Add Terraformer</button>
	</div>


	




</form>
	<div class="headerAD">
	<h2>Delete Terraformer</h2>
</div>

<form method="post" action="index3.php" class="delete">

	<div class="input-groupA">
		<label>Terraformer ID</label>
		<input type="text" name="deleteID" >

	</div>

	<div class="input-groupA">
		<button type="submit" name="Delete" class="btnA">Delete</button>
	</div>

</form>





	

</body>
</html>
