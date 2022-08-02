<?php
	include("DBConnection.php");
	if (isset($_POST['submit']))
	{
		$Name=$_POST['name'];
		$class=$_POST['class'];
		$Roll_Number=$_POST['Roll_Number'];
		$Age=$_POST['Age'];
		$Email=$_POST['Email'];
		$Password=$_POST['Password'];

		$sql="INSERT INTO `tour_form` (`Id`,`Name`,`Class`,`Roll_Number`,`Age`,`Email`,`Password`) VALUES ('','$Name','$class','$Roll_Number','$Age','$Email','$Password')";
		$result=mysqli_query($conn,$sql);
		if (!$conn) {
			die("there is a problem ");
		}
		else
			echo "successfully connected";
	}

  ?>
  
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trip form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<marquee behavior="slide" scrollamount="25">
<div class="container" id="container"><br>
	<h2>Fill the form for Tour</h2>

	<form id="form" method="POST" >
	<label><b>Name: </b></label>
	<input type="text" name="name" placeholder="Your Name" class="form-control" required>


	<label><b>Your Class: </b></label>
	<input type="text" name="class" placeholder="Your Class" class="form-control" required>


	<label><b>Roll Number: </b></label>
	<input type="text" name="Roll_Number" placeholder="Enter your roll number" class="form-control" required>


	<label><b>Age: </b></label>
	<input type="text" name="Age" placeholder="Enter your Age" class="form-control">


	<label><b>Email: </b></label>
	<input type="text" name="Email" placeholder="Enter your Email" class="form-control">


	<label><b>Password: </b></label>
	<input type="Password" name="Password" placeholder="Enter Password" class="form-control"><br>


	<button class="btn-primary" id="btn" name="submit">Submit</button>
	<br><br>
	</form>
	<br>
</div>
</marquee>
</body>
</html>