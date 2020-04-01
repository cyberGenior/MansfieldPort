<?php

$con = new mysqli('localhost' , 'root' , '' , 'xegger');

	$sql_show ="SELECT * velocity ";

	$result = mysql_query($con,$sql_show);


	if ($row = mysqli_fetch_assoc($result)){
			echo trtd. $row['id'].</td></tr>.<tr><td>.$row['Task'].</td></tr>;
	




			
?>