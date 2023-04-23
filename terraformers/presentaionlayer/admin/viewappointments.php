<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="style5.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>Terra<span>formers</span></h1>
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
	<h1 style="margin-left:40% ;margin-top:80px"   class="asd"> Meetings </h1>
	<table class="table4">
		<tr>
		<th>Meeting ID</th>
		<th>Employee ID</th>
		<th>Guest ID</th>
		<th>Date</th>
		<th>Time</th>
		

		</tr>

		<?php $sql3="SELECT  * FROM  bookapp " ;
		$result3=$mysqli->query($sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["AppoID"]."</td><td>".$row3["docID"]."</td><td>".$row3["patientID"]."</td><td>".$row3["Date"]."</td><td>".$row3['Time']."</td></tr>";
			}


			echo "</table";
	


		}

		?>
		
	</table>
	   
    
    
</body>
</html>