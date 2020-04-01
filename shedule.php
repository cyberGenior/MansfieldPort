<!DOCTYPE html>
<html>
<head>
	<title>ManS E</title>
</head>
<body>

	<form method="POST" action="">
		<select name="day" required="">
			<option>Select</option>
			<option>Monday</option>
			<option>Tuesday</option>
			<option>Wednesday</option>
			<option>Thursday</option>
			<option>Friday</option>
			
		</select>

		<input type="text" name="period">

		<input type="text" name="course">

		

		

		<input type="submit" value="submit">

		<?php

		if(isset($_POST['submit'])){

			include_once 'insert.php';
		}


		?>

		

		<?php

		require_once 'connect.php';


		$sql_show = ("SELECT * FROM `time` WHERE ID = 1");

		$results = mysqli_query($con,$sql_show);

		if ($row = (mysqli_fetch_array($results))) {
			

			$id = $row['ID'];

			$day = $row['Day'];

			$period = $row['Period'];

			$course = $row['Course'];

			if($row['ID'] < 4)




				echo "<tr>";
				echo "<td>"; echo $row['Day']; echo "</td>";
				echo "<td>"; echo $row['Period']; echo "</td>";


				echo "</tr";
			
			}

		

		?>




	




	</form>

</body>
</html>