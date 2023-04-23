
<?php include 'E:\Xampp\htdocs\Doctor_Patient\datalayer\bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>terraformers</title>
	<link rel="stylesheet"  href="style3.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>Terra<span>formers</span></h1>
		<nav>
		


		
		<ul > 
			
		
			<li><a href="index2.php">MyInfo</a></li>
			<li><a href="terapp.php">My Meetings</a></li>
			<!--<li><a href=" searchpatient.php">Search Patient</a></li>-->
			
			<li><a href="book.php">Add Meeting</a></li>
			<li><a href="../../applicationlayer/main.php">Logout</a></li>
			
			



	
			

		</ul>
		



	</nav>




</header>

<body>
	<h1 class="my1">My<span class="mys">&nbsp;&nbsp;Meetings</span></h1>

	<table class="table2">
		<tr>
		<th>Meeting ID</th>
		<th>DATE</th>
		<th>TIME</th>
		<th>GuestID</th>
		<th>GuestName</th>
		<!--<th>PatientAddress</th>
		<th>PatientEmail</th>
		<th>PatientContactNumber</th>
		<th>BloodGroup</th>-->

		

		</tr>
		<?php $sqldoc="SELECT  * FROM bookapp , patients   WHERE docID=('$doctorprofile') AND  patientID=UserID "  ;
		$resultdoc=$mysqli->query($sqldoc);
		if(mysqli_num_rows($resultdoc)>= 1){
			while ($rowdoc=$resultdoc->fetch_assoc()) {

				echo "<tr><td>".$rowdoc["AppoID"]."</td><td>".$rowdoc["Date"]."</td><td>".$rowdoc["Time"]."</td><td>".$rowdoc["UserID"]."</td><td>".$rowdoc['Name']."</td></tr>";
			}


			echo "</table";
	


		}

		?>
		
	</table>





</body>
</html>

<!--echo "<tr><td>".$rowdoc["AppoID"]."</td><td>".$rowdoc["Date"]."</td><td>".$rowdoc["Time"]."</td><td>".$rowdoc["UserID"]."</td><td>".$rowdoc['Name']."</td><td>".$rowdoc['Address']."</td><td>".$rowdoc['Email']."</td><td>".$rowdoc["ContactNumber"]."</td><td>".$rowdoc["Bloodtype"]."</td></tr>";
			}
		-->
		