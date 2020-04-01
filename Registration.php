<!DOCTYPE html>
<html>
        <head>
                  <title>time table</title>
        </head>
        <body >
                 <form action="" method="POST";>
                     <marquee> <h2> WELCOME</h2> </marquee> 
                      <center><table border="1" width="400" height="300">
                      <tr>
                      <td colspan="5" align="center" bgcolor="grey">Student Information</td>
                      <tr>
                      <td  align="right">Name</td><td> <input type="text"  name="names"></td>
                      </tr>
                      <tr>
                      <td  align="right">Fathers's Name</td><td><input type="text" name="fname"></td>
                      </tr>
                      <tr>
                      <td  align="right">Roll No</td><td><input type="text" name="roll_number"></td>
                      </tr>
                      <tr>
                      <td  align="right">Result</td><td><input type="text" name="results"></td>
                      </tr>
                      <tr>
                      <td colspan="5" align="center"> <input type="submit" name="submit" value="submit"></td>
                      </tr>
                     


                      </table></center>
                  </form>
          </body>
</html>

<?php
$con = mysqli_connect("localhost","root","", "student");



              $names=$_POST['names'];
              $fname=$_POST['fname'];
              $roll=$_POST['roll_number'];
              $results=$_POST['results'];

            
              
              $stmt = $con->prepare("INSERT INTO `students` (names,fname,roll_number,results) VALUES (?,?,?,?)");
              $stmt->bind_param("ssii", $names,$fname,$roll,$results);
              $stmt->execute();

              $stmt->close();
              


?>