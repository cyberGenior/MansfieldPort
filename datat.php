<!DOCTYPE html>
<html>
<head>
	<title>Steve</title>
</head>
<body>

<div id="nav"></div>
<div id="inputContain">


	<form align="center" id="data insert" method="POST" action="">


		<p style="font-family: Tw Cen MT; padding-top:20px;">TEACHER'S COURSE</p>

		<input id="text" type="text" name="ataz" required="">

		<div align="center">


			

		



		</div>

		<input type="submit" name="submit1" id="submit" value="submit to Monday">
		<input type="submit" name="submit2" id="submit" value="submit to tuesday">
		<input type="submit" name="submit3" id="submit" value="submit to wedneday">
		<input type="submit" name="submit4" id="submit" value="submit to thursday">
		<input type="submit" name="submit5" id="submit" value="submit to friday">

		



	</form>




<?php

			include_once 'connect.php';


			$ataz = $_POST['ataz'];

			


			

			
			if(isset($_POST['submit1'])){

				$sql_insert = ("INSERT INTO `monday` (course) VALUES(?)");

			$stmt = $con->prepare($sql_insert);

			$stmt->bind_param("s",$ataz);

			$stmt->execute();

			$stmt->close();



			}
			
			
			
		



?>


<?php

			include_once 'connect.php';


			$ataz = $_POST['ataz'];

			


			

			
			if(isset($_POST['submit2'])){

				$sql_insert = ("INSERT INTO `tuesday` (course) VALUES(?)");

			$stmt = $con->prepare($sql_insert);

			$stmt->bind_param("s",$ataz);

			$stmt->execute();

			$stmt->close();



			}
			
			
			
		



?>

<?php

			include_once 'connect.php';


			$ataz = $_POST['ataz'];

			


			

			
			if(isset($_POST['submit3'])){

				$sql_insert = ("INSERT INTO `wednesday` (course) VALUES(?)");

			$stmt = $con->prepare($sql_insert);

			$stmt->bind_param("s",$ataz);

			$stmt->execute();

			$stmt->close();



			}
			
			
			
		



?>



<?php

			include_once 'connect.php';


			$ataz = $_POST['ataz'];

			


			

			
			if(isset($_POST['submit4'])){

				$sql_insert = ("INSERT INTO `thursday` (course) VALUES(?)");

			$stmt = $con->prepare($sql_insert);

			$stmt->bind_param("s",$ataz);

			$stmt->execute();

			$stmt->close();



			}
			
			
			
		



?>

<?php

			include_once 'connect.php';


			$ataz = $_POST['ataz'];

			


			

			
			if(isset($_POST['submit5'])){

				$sql_insert = ("INSERT INTO `friday` (course) VALUES(?)");

			$stmt = $con->prepare($sql_insert);

			$stmt->bind_param("s",$ataz);

			$stmt->execute();

			$stmt->close();



			}
			
			
			
		



?>


















	

	



</div>

<div id="tableConatin">


	<div id="rowContain">

	<div id="row"></div>
	<div id="row">08:30-09:30</div>
	<div id="row">09:30-10:30</div>
	<div id="row">10:30-11:30</div>
	<div id="row">11:30-12:30</div>
	<div id="row">12:30-13:30</div>
	<div id="row">13:30-14:30</div>
	<div id="row">14:30-15:30</div>
	<div id="row">15:30-16:30</div>
	<div id="row">16:30-17:30</div>


	</div>

	<div id="rowContain">

	<div id="row"> Monday </div>
	<div id="row">
		
<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `tuesday` WHERE `ID` = 6";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 6) {
						echo $course;					}

					
				}





			?>


	</div>
	<div id="row">
			
       <?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `tuesday` WHERE `ID` = 1";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 1) {
						echo $course;					}

					
				}





			?>


	</div>
	<div id="row">
			<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `tuesday` WHERE `ID` = 9";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 9) {
						echo $course;					}

					
				}





			?>




	</div>
	<div id="row">
		
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `tuesday` WHERE `ID` = 8";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 8) {
						echo $course;					}

					
				}





			?>


	</div>
	<div id="row">
		
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `tuesday` WHERE `ID` = 5";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 5) {
						echo $course;					}

					
				}





			?>


	</div>
	<div id="row">
		
<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `tuesday` WHERE `ID` = 3";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 3) {
						echo $course;					}

					
				}





			?>

		



	</div>
	<div id="row">
		
<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `tuesday` WHERE `ID` = 2";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 2) {
						echo $course;					}

					
				}





			?>



	</div>
	<div id="row">
		
		
<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `tuesday` WHERE `ID` = 7";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 7) {
						echo $course;					}

					
				}





			?>




	</div>
	<div id="row">
			

<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `tuesday` WHERE `ID` = 4";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 4) {
						echo $course;					}

					
				}





			?>





	</div>


	</div>


	<div id="rowContain">

	<div id="row"> Tuesday</div>
	<div id="row">

		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `tuesday` WHERE `ID` = 5";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 5) {
						echo $course;					}

					
				}





			?>
		













	</div>
	<div id="row">
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `tuesday` WHERE `ID` = 2";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 2) {
						echo $course;					}

					
				}





			?>
	</div>
	<div id="row">
		
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `tuesday` WHERE `ID` = 9";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 9) {
						echo $course;					}

					
				}





			?>
	</div>
	<div id="row">
		
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `tuesday` WHERE `ID` = 1";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 1) {
						echo $course;					}

					
				}





			?>
	</div>
	<div id="row">
		
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `tuesday` WHERE `ID` = 6";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 6) {
						echo $course;					}

					
				}





			?>
	</div>
	<div id="row">
		

		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `tuesday` WHERE `ID` = 3";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 3) {
						echo $course;					}

					
				}





			?>
	</div>
	<div id="row">
		

		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `tuesday` WHERE `ID` = 4";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 4) {
						echo $course;					}

					
				}





			?>
	</div>
	<div id="row">
		
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `tuesday` WHERE `ID` = 8";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 8) {
						echo $course;					}

					
				}





			?>
	</div>
	<div id="row">
		
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `tuesday` WHERE `ID` = 7";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 7) {
						echo $course;					}

					
				}





			?>
	</div>


	</div>


	<div id="rowContain">

	<div id="row"> Wednesday</div>
	<div id="row">
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `tuesday` WHERE `ID` = 6";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 6) {
						echo $course;					}

					
				}





			?>

	</div>
	<div id="row">
		
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `tuesday` WHERE `ID` = 7";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 7) {
						echo $course;					}

					
				}





			?>
	</div>
	<div id="row">
		
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `Wednesday` WHERE `ID` = 8";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 8) {
						echo $course;					}

					
				}





			?>
	</div>
	<div id="row">
		
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `Wednesday` WHERE `ID` = 2";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 2) {
						echo $course;					}

					
				}





			?>
	</div>
	<div id="row">
		
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `Wednesday` WHERE `ID` = 1";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 1) {
						echo $course;					}

					
				}





			?>
	</div>
	<div id="row">
		
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `Wednesday` WHERE `ID` = 5";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 5) {
						echo $course;					}

					
				}





			?>
	</div>
	<div id="row">
		
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `Wednesday` WHERE `ID` = 3";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 3) {
						echo $course;					}

					
				}





			?>
	</div>
	<div id="row">
		
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `Wednesday` WHERE `ID` = 9";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 9) {
						echo $course;					}

					
				}





			?>
	</div>
	<div id="row">
		
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `Wednesday` WHERE `ID` = 4";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 4) {
						echo $course;					}

					
				}





			?>
	</div>


	</div>


	<div id="rowContain">

	<div id="row">Thursday</div>
	<div id="row">
		
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `thursday` WHERE `ID` = 4";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 4) {
						echo $course;					}

					
				}





			?>
	</div>
	<div id="row">
		
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `thursday` WHERE `ID` = 8";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 8) {
						echo $course;					}

					
				}





			?>
	</div>
	<div id="row">
		
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `thursday` WHERE `ID` = 7";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 7) {
						echo $course;					}

					
				}





			?>
	</div>
	<div id="row">
		
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `thursday` WHERE `ID` = 3";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 3) {
						echo $course;					}

					
				}





			?>
	</div>
	<div id="row">
		
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `thursday` WHERE `ID` = 9";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 9) {
						echo $course;					}

					
				}





			?>
	</div>
	<div id="row">
		
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `thursday` WHERE `ID` = 1";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 1) {
						echo $course;					}

					
				}





			?>
	</div>
	<div id="row">
		
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `thursday` WHERE `ID` = 2";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 2) {
						echo $course;					}

					
				}





			?>
	</div>
	<div id="row">
		
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `thursday` WHERE `ID` = 5";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 5) {
						echo $course;					}

					
				}





			?>
	</div>
	<div id="row">
		
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `thursday` WHERE `ID` = 6";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 6) {
						echo $course;					}

					
				}





			?>
	</div>


	</div>


	<div id="rowContain">

	<div id="row">Friday</div>
	<div id="row">
		
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `friday` WHERE `ID` = 7";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 7) {
						echo $course;					}

					
				}





			?>
	</div>
	<div id="row">
		
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `friday` WHERE `ID` = 9";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 9) {
						echo $course;					}

					
				}





			?>
	</div>
	<div id="row">
		
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `friday` WHERE `ID` = 2";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 2) {
						echo $course;					}

					
				}





			?>
	</div>
	<div id="row">
		
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `friday` WHERE `ID` = 6";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 6) {
						echo $course;					}

					
				}





			?>
	</div>
	<div id="row">
		
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `friday` WHERE `ID` = 8";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 8) {
						echo $course;					}

					
				}





			?>
	</div>
	<div id="row">
		
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `friday` WHERE `ID` = 5";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 5) {
						echo $course;					}

					
				}





			?>
	</div>
	<div id="row">
		
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `friday` WHERE `ID` = 3";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 3) {
						echo $course;					}

					
				}





			?>
	</div>
	<div id="row">
		
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `friday` WHERE `ID` = 1";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 1) {
						echo $course;					}

					
				}





			?>
	</div>
	<div id="row">
		
		<?php

			include_once 'connect.php';

				$sql_show ="SELECT * FROM `friday` WHERE `ID` = 4";

				$results = mysqli_query($con,$sql_show);

				if($row = mysqli_fetch_array($results)){

					$id = $row['ID'];

					$course = $row['course'];

					if ($row['ID'] = 4) {
						echo $course;					}

					
				}





			?>
	</div>


	</div>


	<div id="rowContain">

	<div id="row"></div>
	<div id="row"></div>
	<div id="row"></div>
	<div id="row"></div>
	<div id="row"></div>
	<div id="row"></div>
	<div id="row"></div>
	<div id="row"></div>
	<div id="row"></div>
	<div id="row"></div>


	</div>

</div>

<style type="text/css">


body{

	margin: 0px;
}

#radio{
	width: 17px;
	height: 17px;

}

#row{
	width: 120px;
	margin: 1px;
	height: 36px;
	background-color: red;
	font-family: Tw Cen MT;
	padding: 10px;
	padding-top: 20px;
	color: white;

}
#rowContain{
	display: flex;

}
#tableConatin{
	
	width: auto;
	height: 100vh;
	background-color: lightgrey;

}

	
#nav{
	background-color: navy;
	width: auto;
	height: 50px;
}

#inputContain{
	height: 220px;
	width: auto;
	background-color: yellow;


	margin-top: -17px;


}

#text{

	height: 40px;
	width: 370px;
	border-radius: 9px;
	border:3px solid navy;
	margin-top: 6px;
	position: relative;
	


}

#submit{
	
	
	
	margin-left: 24px;
	margin-top: 10px;
	height: 41.2px;
	width: 160px;
	border:1px solid white;
	border-radius: 17px;
	
	background-color: orange;
}

</style>

</body>
</html>