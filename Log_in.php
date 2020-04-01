<?php

include_once 'connection.php';

$error ="";

$Student1 = $_POST['Student1'];



$sql = "SELECT * FROM students WHERE First_name = '$Student1'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
          header("Location: profile.html");
    }
} else {
    header("Location: home.php");
}
?>











