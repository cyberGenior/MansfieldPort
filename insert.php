<?php

if(isset($_POST['submit1'])){

	$con=new mysqli('localhsot','root', '','velocity'); 

	$First_name = $_POST['First_name'];

	$Surname = $_POST['Surname'];

	$DOB = $_POST['DOB'];

	$SID = $_POST['SID'];

	$Email = $_POST['Email'];

	$Program = $_POST['Program'];

	$MOS = $_POST['MOS'];

	$Password1 = $_POST['Password1'];

	$Password_verify = $_POST['Password_verify'];


	$stmt = $con->prepare("INSERT INTO `students` (FIRST_NAME, SURNAME, DOB, SID, EMAIL, PROGRAM, MOS,password) VALUES (?, ?, ?, ?, ?, ? ,?,?)");

	$stmt ->bind_param("sssisss",$First_name, $Surname, $DOB, $SID, $Email, $Program, $MOS, $Password1);

	$stmt->execute();





	$stmt->close();

	if($stmt->execute() == !error()){

		echo "Connected successfully";

	}




	$con->close();


}
elseif (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }





  header("Location: index.html");


?>