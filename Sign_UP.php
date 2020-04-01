<?php



require_once 'connection.php';

// This part of code connect the input names to thier respectives entities in the SQLiteDatabase.


$First_name = $_POST['First_name'];

$Surname = $_POST['Surname'];

$DOB = $_POST['DOB'];

$SID = $_POST['SID'];

$Email = $_POST['Email'];

$Program = $_POST['Program'];

$MOS = $_POST['MOS'];

$Password1 = $_POST['Password1'];

$Password_verify = $_POST['Password_verify'];








//This code create, binds and executes the sql query that is initiated bu the data inserted in the form.

$stmt = $con->prepare("INSERT INTO `students` (First_name, Surname, DOB, SID, Email, Program, MOS) VALUES (?, ?, ?, ?, ?, ?, ?)");

$stmt ->bind_param("sssisss",$First_name, $Surname, $DOB, $SID, $Email, $Program, $MOS);

$stmt->execute();





$stmt->close();


$stmt = $con->prepare("INSERT INTO `login_infor` (First_name,SID,Password1) VALUES (?, ?, ?)");

$stmt ->bind_param("sis",$First_name,$SID,$Password1,);

$stmt->execute();


$stmt->close();




$con->close();





?>