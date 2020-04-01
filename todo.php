

<!DOCTYPE html>
<html>
<head>
	<title>Xegger:ToDo List</title>
</head>
<body>

	<div id="Container">
		<div id="nav">

			<div id="name">

				<img style="width:300px;" src="logo.png" alt="">
			</div>
			<div id="toggle">

				
			</div>
			<div id="user">

				
			</div>
		</div>

		<div id="add">

		<form method="POST" action="">
			
			<input type="text" in="aplus" name="notes" placeholder="Add..." required="">
			<input id="plus" type="submit" name="submit" value="+">

		</form>

		</div>
        <div style="font-family:century gothic;margin-top:-250px;border-bottom:2px solid #79dbe1 ;border-top:2px solid #79dbe1;width:auto;font-weight:bold;font-style:italic;padding-left:12px;color:white; height:60px; background-color:#18929a;">
		<h4></h4>

		<?php

		


			if(isset($_POST['submit'])  ){
				$con = new mysqli('localhost' , 'root' , '' , 'xegger');


		

				$notes = $_POST['notes'];

				



				$stmt = $con->prepare("INSERT INTO `velocity` (`Task`) VALUES (?)");
	
				$stmt->bind_param("s",$notes);
	
				$stmt->execute();	
				
				$stmt->close();
			

			

			}
			

			

			

		

		?>


		<div id="TaskContain">

		<?php


$con = new mysqli('localhost' , 'root' , '' , 'xegger');


$sql_show ="SELECT * FROM velocity WHERE ID=1 ";

$result = mysqli_query($con,$sql_show);



while ($row = mysqli_fetch_array($result)){

	$id = $row['ID'];
	$tasks = $row['Task'];

	if ($id = $row['ID'] = 1) {
		echo  $tasks . '<br /><br /><br /><br />'  ;

	}

	


}
			
			
		?>



			

			

		</div>
	</div>

	<div style="font-family:century gothic;margin-top:2px;border-bottom:2px solid #79dbe1 ;border-top:2px solid #79dbe1;width:auto;font-weight:bold;font-style:italic;padding-top:16px;;padding-left:12px;color:white; height:40px; background-color:#18929a;">
	
	
	<?php
	
	$con = new mysqli('localhost' , 'root' , '' , 'xegger');


$sql_show ="SELECT * FROM velocity WHERE ID=2 ";

$result = mysqli_query($con,$sql_show);



while ($row = mysqli_fetch_array($result)){

	$id = $row['ID'];
	$tasks = $row['Task'];

	if ($id = $row['ID'] = 1) {
		echo  $tasks  ;

	}

	


}
			
			
		?>
	
	
	
	
	</div>


	<div style="font-family:century gothic;margin-top:2px;border-bottom:2px solid #79dbe1 ;border-top:2px solid #79dbe1;width:auto;font-weight:bold;font-style:italic;padding-top:16px;;padding-left:12px;color:white; height:40px; background-color:#18929a;">
	
	
	<?php
	
	$con = new mysqli('localhost' , 'root' , '' , 'xegger');


$sql_show ="SELECT * FROM velocity WHERE ID=3 ";

$result = mysqli_query($con,$sql_show);



while ($row = mysqli_fetch_array($result)){

	$id = $row['ID'];
	$tasks = $row['Task'];

	if ($id = $row['ID'] = 1) {
		echo  $tasks  ;

	}

	


}
			
			
		?>
	
	
	
	
	</div>

	<div style="font-family:century gothic;margin-top:2px;border-bottom:2px solid #79dbe1 ;border-top:2px solid #79dbe1;width:auto;font-weight:bold;font-style:italic;padding-top:16px;;padding-left:12px;color:white; height:40px; background-color:#18929a;">
	
	
	<?php
	
	$con = new mysqli('localhost' , 'root' , '' , 'xegger');


$sql_show ="SELECT * FROM velocity WHERE ID=4 ";

$result = mysqli_query($con,$sql_show);



while ($row = mysqli_fetch_array($result)){

	$id = $row['ID'];
	$tasks = $row['Task'];

	if ($id = $row['ID'] = 1) {
		echo  $tasks  ;

	}

	


}
			
			
		?>
	
	
	
	
	</div>

	<div style="font-family:century gothic;margin-top:2px;border-bottom:2px solid #79dbe1 ;border-top:2px solid #79dbe1;width:auto;font-weight:bold;font-style:italic;padding-top:16px;;padding-left:12px;color:white; height:40px; background-color:#18929a;">
	
	
	<?php
	
	$con = new mysqli('localhost' , 'root' , '' , 'xegger');


$sql_show ="SELECT * FROM velocity WHERE ID= 5";

$result = mysqli_query($con,$sql_show);



while ($row = mysqli_fetch_array($result)){

	$id = $row['ID'];
	$tasks = $row['Task'];

	if ($id = $row['ID'] = 1) {
		echo  $tasks  ;

	}

	


}
			
			
		?>
	
	
	
	
	</div>

	<div style="font-family:century gothic;margin-top:2px;border-bottom:2px solid #79dbe1 ;border-top:2px solid #79dbe1;width:auto;font-weight:bold;font-style:italic;padding-top:16px;;padding-left:12px;color:white; height:40px; background-color:#18929a;">
	
	
	<?php
	
	$con = new mysqli('localhost' , 'root' , '' , 'xegger');


$sql_show ="SELECT * FROM velocity WHERE ID=6 ";

$result = mysqli_query($con,$sql_show);



while ($row = mysqli_fetch_array($result)){

	$id = $row['ID'];
	$tasks = $row['Task'];

	if ($id = $row['ID'] = 1) {
		echo  $tasks  ;

	}

	


}
			
			
		?>
	
	
	
	
	</div>

	<div style="font-family:century gothic;margin-top:2px;border-bottom:2px solid #79dbe1 ;border-top:2px solid #79dbe1;width:auto;font-weight:bold;font-style:italic;padding-top:16px;;padding-left:12px;color:white; height:40px; background-color:#18929a;">
	
	
	<?php
	
	$con = new mysqli('localhost' , 'root' , '' , 'xegger');


$sql_show ="SELECT * FROM velocity WHERE ID=7 ";

$result = mysqli_query($con,$sql_show);



while ($row = mysqli_fetch_array($result)){

	$id = $row['ID'];
	$tasks = $row['Task'];

	if ($id = $row['ID'] = 1) {
		echo  $tasks  ;

	}

	


}
			
			
		?>
	
	
	
	
	</div>

	<div style="font-family:century gothic;margin-top:2px;border-bottom:2px solid #79dbe1 ;border-top:2px solid #79dbe1;width:auto;font-weight:bold;font-style:italic;padding-top:16px;;padding-left:12px;color:white; height:40px; background-color:#18929a;">
	
	
	<?php
	
	$con = new mysqli('localhost' , 'root' , '' , 'xegger');


$sql_show ="SELECT * FROM velocity WHERE ID=8 ";

$result = mysqli_query($con,$sql_show);



while ($row = mysqli_fetch_array($result)){

	$id = $row['ID'];
	$tasks = $row['Task'];

	if ($id = $row['ID'] = 1) {
		echo  $tasks  ;

	}

	


}
			
			
		?>
	
	
	
	
	</div>





	<style type="text/css">

		body{
			margin:0;
			padding: 0;
			box-sizing: content-box;
		}

		#Container{

			width: 470px;
			height: 100vh;
			background-color: #396a6e;
		}
		#nav{
			
			display: flex;

			width: auto;
			
			height: 50px;
			background:linear-gradient(to right, #16cbdb, #11a3b0);
			position: sticky;
			padding-bottom: 10px;
			border-bottom: 2px solid #79dbe1;
		}
		#bars{
			width: 30px;
			height: 4px;
			background-color: white;
			margin-bottom: 3px;
			border-radius: 30px;

		}

		#name{
			
			padding-left: 10px;
			margin-bottom: -15px;


		}
		#toggle{
			
			

		}
		#user{

		}
		#add{
			height: 300px;
			width: auto;
			margin: 30px;
		}
		input{
			width: 400px;
			height: 25px;
			position: absolute;
			border-radius: 12px;
			border:1px solid #79dbe1;
			background-color: #18929a;
			padding:10px;
			color: black;
			font-style: italic;
			font-family: century gothic;
		}
		input:focus{
			border:2px solid white;
			transition: 0.9s ease-in-out;
			background-color: white;
		}
		input:placeholder-shown{
			color: white;
			
		}
		#plus{
			width: 33px;
			color: white;
			height: 32px;
			font-weight: bolder;
			background-color: red;
			text-align: center;
			padding-top: 8px;
			border-radius: 30px;
			z-index: 1;
			position: absolute;
			margin-left: 380px;
			margin-top: 7px;
			cursor: pointer;
			border:none;


		}
	</style>

</body>
</html>
