<?php

			include_once 'connect.php';


			$Data = $_POST['course'];

			

			$box = $_POST['box'];

			

			
			if(isset($_POST['box'] = 'monday') && isset($_POST['submit'])){

				$sql_insert = ("INSERT INTO `` (Day,Period,Course) VALUES(?,?,?)");

			$stmt = $con->prepare($sql_insert);

			$stmt->bind_param("sss", $day,$period,$course);

			$stmt->execute();

			$stmt->close();



			}
			
			
			
		



?>

<?php

$error = error();


?>