<?php


	
	$db = "velocity";
	$con=new mysqli('localhost','root', '',$db); 
	
	$Student1 = $_POST['Student1'];
	
	
	$pass1 = $_POST['pass1'];
	
	
	
	
	
		
	$checkUser="SELECT * FROM `student` WHERE FIRST_NAME = '$Student1' &&  Password1 =  '$pass1' ";
	
	
	
	$userResult=mysqli_query($con,$checkUser);
	
	if ($userResult->num_rows > 0) {
		echo "<script>alert('Welcome $Student1')</script> ";


		echo "<script>window.open('index.php')</script> ";
	
		$_SESSION["FIRST_NAME"] = $Student1;
	}else{
		echo "<script>alert('Username or password incorrect')</script> ";

		echo "<script>window.open('index.php')</script> ";
	}
	






	



 ?>
