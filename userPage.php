<?php
<<<<<<< HEAD

session_start(); 
   

if (!isset($_SESSION['username'])) { 

	

	echo '<script type="text/javascript">alert("You Must Log in!");
	
	</script>';

	?>

	<BODY onload="ref()">

   

	<?php
} 
   

if (isset($_GET['logout'])) { 
    session_destroy(); 
    unset($_SESSION['username']); 
    header("location: login.php"); 
} 
=======
session_start();
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075

?>
<!DOCTYPE html>

<html>
<head>

<title>Xegger Xpress</title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">



</head>


  <body>





  <script type="text/javascript">

function openCourse(){

document.getElementById("wideOption1").style.display="block";

}

function closeCourse(){



document.getElementById("wideOption1").style.display="none";



}

<<<<<<< HEAD
function ref(){
	location.assign("index.php"); 
}

=======
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075



function openProgram(){

document.getElementById("wideOption1").style.display="block";

}

function closeProgram(){



document.getElementById("wideOption1").style.display="none";



}

function openCampus(){

document.getElementById("wideOption1").style.display="block";

}

function closeCampus(){



document.getElementById("wideOption1").style.display="none";



}

function openTimeTable(){

document.getElementById("wideOption1").style.display="block";

}

function closeTimeTable(){



document.getElementById("wideOption1").style.display="none";



}

function openMore(){

document.getElementById("wideOption2").style.display="block";

}

function closeMore(){



document.getElementById("wideOption2").style.display="none";

}

</script>











  <div id="whole" onclick="closure()">

    <div id="entie" style="z-index: 1; ">









      <div id="navContain">
        <div id="topnuz">








        </div>
      </div>




      <div id="menuNav">











        <div id="menuNav">





          <div id="over">

          <div id="wideMenu">

		  <ul id="wideMenuContain">
<<<<<<< HEAD
              <li id="child" onclick="openCourse()">Home</li>
              <li id="child" onclick="openCourse()">Zed Places</li>
              <li id="child" onclick="openAdmin_Portal()">Zed Stories</li>
              <li id="child" onclick="openStudent_Portal()">About us</li>

            </ul>

            <div id="mansfield" onclick="refresh()" style="cursor:pointer;background-image: url(IMAGES/logo-design-xegger-xpress.png); width: 63px; height: 60px; background-size: contain;z-index: 1; position: absolute;margin-left: 10px;margin-top: -1px; background-size:cover;"></div>
           
		   
		    <div id="logImage"></div>

            <?php  if(isset($_SESSION['username'])) { ?>  <h6 id="logValidate" style="margin-right:20px;margin-left:60px;font-family: Trebuchet MS; color: grey; font-weight: lighter; padding: 13px; margin-top: 4px; float: right; font-size: 19px; position: static; z-index: 1;"> 
			 Welcome  
                <strong> 

                    <?php echo $_SESSION['username']; ?> 

                </strong> </h6>

			<?php }else{
				echo "Must Login";
			}
			
			
			?> 

		
			<img onclick="openMore()" width="30px" height=30px" style="cursor:pointer;margin-top:14px;margin-left:1360px; position:absolute; z-index:1;" src="IMAGES/more.png">
			<div id="wideOption2" style="border-radius:20px;;background-color: black; width: 150px; height:250px; display:none;margin-left:1250px;margin-top:37px; z-index: 1; position: absolute;opacity: 0.8; border-bottom: 2px solid orange; overflow: hidden;">

            <a href="javascript:void(0)" class="closebtn" onclick="closeMore()">×</a>
          </div>
			<img width="40px" height="40px" style="margin-top:10px;margin-left:1300px; position:absolute; z-index:1;" src="IMAGES/user.png">
=======
              <li id="child" onclick="openCourse()">Courses</li>
              <li id="child" onclick="openCourse()">Programs</li>
              <li id="child" onclick="openAdmin_Portal()">Admin_Portal</li>
              <li id="child" onclick="openStudent_Portal()">Student_Portal</li>

            </ul>

            <div id="mansfield" onclick="refresh()" style="background-image: url(IMAGES/logo-ci.png); width: 75px; height: 75px; background-size: contain;z-index: 1; position: absolute;margin-left: 10px;margin-top: -3px;"></div>
            <div id="logImage"></div>
            <h6 id="logValidate" style="margin-right:60px;margin-left:60px;font-family: Trebuchet MS; color: grey; font-weight: lighter; padding: 13px; margin-top: 4px; float: right; font-size: 19px; position: static; z-index: 1;"><?php if(!isset($_SESSION["user"])){echo "User Login..";}else{echo $_SESSION["user"] ;  }   ?></h6>
			<img onclick="openMore()" width="40px" height="40px" style="cursor:pointer;margin-top:10px;margin-left:1000px; position:absolute; z-index:1;" src="IMAGES/more.png">
			<div id="wideOption2" style="background-color: black; width: 470px; height:640px; display:none;margin-left:900px;margin-top:37px; z-index: 1; position: absolute;opacity: 0.8; border-bottom: 2px solid orange; overflow: hidden;">

            <a href="javascript:void(0)" class="closebtn" onclick="closeMore()">×</a>
          </div>
			<img width="40px" height="40px" style="margin-top:10px;margin-left:1400px; position:absolute; z-index:1;" src="IMAGES/user.png">
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075
          </div>

          <div id="wideOption1" style="background-color: black; width: 470px; height:140px; display:none;margin-left:50px;margin-top:37px; z-index: 1; position: absolute;opacity: 0.8; border-bottom: 2px solid orange; overflow: hidden;">

            <a href="javascript:void(0)" class="closebtn" onclick="closeCourse()">×</a>
          </div>

          <div id="wideOption2" style="background-color: black; width: 470px; height:140px; display:none;margin-left:50px;margin-top:37px; z-index: 1; position: absolute;opacity: 0.8; border-bottom: 2px solid orange; overflow: hidden;">

            <a href="javascript:void(0)" class="closebtn" onclick="closeProgram()">×</a>
          </div>

          <div id="wideOption3" style="background-color: black; width: 470px; height:140px; display:none;margin-left:50px;margin-top:37px; z-index: 1; position: absolute;opacity: 0.8; border-bottom: 2px solid orange; overflow: hidden;">

            <a href="javascript:void(0)" class="closebtn" onclick="closeCampus()">×</a>
          </div>

          <div id="wideOption4" style="background-color: black; width: 470px; height:140px; display:none;margin-left:50px;margin-top:37px; z-index: 1; position: absolute;opacity: 0.8; border-bottom: 2px solid orange; overflow: hidden;">

            <a href="javascript:void(0)" class="closebtn" onclick="closeTimeTable()">×</a>
          </div>


<<<<<<< HEAD
         <form method="GET">
				
					<input type="submit" name="logout" value="Log out" name="logout" id="logout">

		 </form>

=======
         

          <div onclick="logout()" name="logout" id="logout">Log out</div>
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075

          </div>

		 
          </div>





</div>
</div>

<<<<<<< HEAD
<div style="width:100vw; height:320px; background-image:url(IMAGES/usertop.png);margin-top:67px;background-size:contain;"></div>

=======
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075

<div  id="Entertainment">

<div id="news" style="margin-top: 800px; ">

    <h2 id="newsHead" style="font-family: Trebuchet MS; padding-left: 60px; font-size: 30px; ">ENTERTAINMENT NEWS</h2>

    <hr style="margin-left: 48px; margin-right: 20px; height: 1.12px; background-color: orange; border: none;">

    <div id="newsContainer">


<?php 
$db = "126543db2";
	$con=new mysqli('localhost','126543', 'Godlypath98',$db); 
if ($con->connect_error) {
<<<<<<< HEAD
    die("Connection failed: " . $con->connect_error);
=======
    die("Connection failed: " . $con->connect_error);
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075
}



$sql = "SELECT * FROM news";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {


		
<<<<<<< HEAD
	
		
		if($_SESSION['selectedNews'] = $row['ID'] == 1){
		
		
			?>
			<div id="newsImage1">
	
			<?php
	
			
	
				//echo "<img src='images/'".$row['image']."'>";
			
				
				
				
			
				
			
			echo "</div>";
	
			?>
			
			<div id="newsLine1">
	
			<?php
	
	
			echo "<h1>"."<b>".$row["heading"]."</b>"."<h1>";
	
			
	
			
	
			?>
			
			
			
	
				<div id="newsinfo">
				<?php
	
				echo "<p>".$row["info"]."</p>";
				?>
				
	
				</div>
	
				</div>
			
	
	<?php
	
	
	
	
	
					
			}
			if($_SESSION['selectedNews'] != $row['ID'] = 2){
			
			
				?>
				<div id="newsImage1">
		
				<?php
		
				
		
					//echo "<img src='images/'".$row['image']."'>";
				
					
					
					
				
					
				
				echo "</div>";
		
				?>
				
				<div id="newsLine1">
		
				<?php
		
		
				echo "<h1>"."<b>".$row["heading"]."</b>"."<h1>";
		
				
		
				
		
				?>
				
				
				
		
					<div id="newsinfo">
					<?php
		
					echo "<p>".$row["info"]."</p>";
					?>
					
		
					</div>
		
					</div>
				
		
		<?php
		
		
		
		
		
						
				}
		
				if($row['ID'] == 3){
			
			
					?>
					<div id="newsImage1">
			
					<?php
			
					
			
						//echo "<img src='images/'".$row['image']."'>";
					
						
						
						
					
						
					
					echo "</div>";
			
					?>
					
					<div id="newsLine1">
			
					<?php
			
			
					echo "<h1>"."<b>".$row["heading"]."</b>"."<h1>";
			
					
			
					
			
					?>
					
					
					
			
						<div id="newsinfo">
						<?php
			
						echo "<p>".$row["info"]."</p>";
						?>
						
			
						</div>
			
						</div>
					
			
			<?php
			
			
			
			
			
							
					}
			
					if($row['ID'] == 5){
			
			
						?>
						<div id="newsImage1">
				
						<?php
				
						
				
							//echo "<img src='images/'".$row['image']."'>";
						
							
							
							
						
							
						
						echo "</div>";
				
						?>
						
						<div id="newsLine1">
				
						<?php
				
				
						echo "<h1>"."<b>".$row["heading"]."</b>"."<h1>";
				
						
				
						
				
						?>
						
						
						
				
							<div id="newsinfo">
							<?php
				
							echo "<p>".$row["info"]."</p>";
							?>
	
							
	
							
	
	
						
							
				
							</div>
				
							</div>
						
				
				<?php
				
				
				
				
				
								
						}
				
	
=======
		
		?>
		<div id="newsImage1">

		<?php
	 
			echo   " 
			
			<img src=".$row[''].">";
			
			
			
		
			
		
		echo "</div>";

		?>
		
		<div id="newsLine1">

		<?php


			echo "<h1>"."<b>".$row["heading"]."</b>"."<h1>";

					

					

			?>

		
			<br>

			<div id="newsinfo">
			<?php

			echo "<p>".$row["info"]."</p>";
			?>
			

			</div>

			</div>
		

<?php





				


>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075

    
} 


}


$con->close();


		
    
    
 






	





?>




</div>		



		






</div>









































<<<<<<< HEAD
<div id="fb-root"></div>
<script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6"></script>


<div style="display:flex;">

<div style="margin:50px; width="80px; height="500px;">

=======
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075




<<<<<<< HEAD
</div>

</div>



=======
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075


<footer id="footer-box" style="margin-top:500px;">

<div class="footer">
  <div class="contain">

<!-----------------About the University mission----------------------->
    <div class="col">
      <h1>About</h1>
        <ul>
          <li>Mission</li>
          <li>Services</li>
          <li></li>
          <li></li>
        </ul>
      </div>

<!---------------Courses that are offerd by the University------------>

      <div class="col">
        <h1>Courses</h1>
        <ul>
          <li>Teaching</li>
          <li>Business Administration</li>
          <li>Power Electrical</li>
          <li>Information Technology</li>
          <li>Teaching Methodology</li>
        </ul>
      </div>

<!----------------Links to the Books/Library-------------------------->

      <div class="col">
        <h1>Books</h1>
        <ul>
          <li>Principles of Networking</li>
          <li>HTML Notes For Profesionals</li>
          <li>Javascript Notes For Profesionals</li>
          <li>Learn C++ in 21 Days</li>
          <li>Tony Gaddis</li>
        </ul>
      </div>

<!-----------------Links to videos or tutorials----------------------->

      <div class="col">
        <h1>Tutorials</h1>
        <ul>
          <li>10 Days of Javascript</li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>
<!-------------------University Contacts Below------------------------>
      <div class="col">
        <h1>Contact us</h1>
        <ul>
          <li><img src="./new_files/Phone-icon.png" width="32" style="width: 32px;"> +260977-542882</li>
          <li><img src="./new_files/gmail-icon.png" width="32" style="width: 32;">mansfielduniversitycollege@gmail.com P.O.Box30858.Lusaka-Zambia</li>
        </ul>
      </div>

<!----------------------Social icons or links------------------------->

      <div class="col social">
        <h1>Social Media</h1>
        <ul>
          <li><img src="./new_files/Facebook-icon.png" width="32" style="width: 32px;"></li>
          <li><img src="./new_files/twitter-icon.png" width="32" style="width: 32px;"></li>
          <li><img src="./new_files/google-icon.png" width="32" style="width: 32px;"></li>
        </ul>
      </div>

    <div class="clearfix"></div>
  </div>


</div>






</footer>












	<style type="text/css">

	@media only screen and (min-width:400px){
		[class*="col-"]{

			width: 100%;
		}

		#newsImage1{

			margin-left: 50px;

			width: 400px;
			height: 300px;
			background-image: url(IMAGES/MWATI-UZIBA-LOGO.png);
			background-size: contain;
			box-shadow: 0px 0px 20px lightgrey;
			}
			#newsLine1{

			margin-left: 10px;
			font-family: Trebuchet MS;
			padding: 25px;
			font-size:14px;
			font-weight:light;
			width: 650px;
			height: 650px;
			background-color: white;
			box-shadow: 0px 0px 20px lightgrey;
			}


			#newsinfo{

			
			font-family: Trebuchet MS;
			
			font-size:16px;
			font-weight:lighter;
			
			}

				#Entertainment{
					margin-top:-700px;

				
				}

		body{
			margin: 0px;
			padding: 0px;
			box-sizing: content-box;
			width: auto;
		}

		#footer{

		}
		#footContainer{



			color: white;
			font-family: Trebuchet MS;
			font-size: 10px;
			margin-left: -62px;

		}
		#footinfo{

			float: right;
			 margin-left: -80px;




		}
		#main{
			text-align: center;
			font-family: Trebuchet MS;
			color: white;
			font-size: 70px;



			opacity: 0.9;
			width: auto;

			padding-top: 200px;

		}



		#mainHeading{


		}
		#mainslogan{

			position: relative;
			padding-bottom: 340px;
			color: white;
			text-align: center;
			margin-top: -460px;
			letter-spacing: 7px;
			font-style: italic;
			font-size: 28px;
			color:;

		}
		#whole{
			transition: 0.7s ease-in-out;
		}
		#wideMenuContain{
			display: flex;
			list-style-type: none;
			position: absolute;
			margin-left: 50px;

		}
		#wideMenu{
			z-index: 1;
			position: relative;
      color: white;
		}

		#child{
			color: orange;
			font-family: Trebuchet MS;
			padding: 10px;
			margin-right: 40px;
			font-size: 20px;
			cursor: pointer;
			position: relative;
			z-index: 1;
			margin-top: -14px;
		}
		#topuz{
			width: auto;
			position: sticky;
			height: 45px;

<<<<<<< HEAD
			box-shadow:0px 0px 30px light-grey;
=======

>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075


			z-index: 1;
			margin-bottom: -50px;




		}


		#newsContainer{

			display: flex;

		}
		#newsContainer2{

			display: flex;
			margin-top: 10px;

		}

		#wideOption{
			transition: 0.6s ease-in-out;
		}
		

		#bars{

			width: 26px;
			height: 3px;
			background-color: orange;
			margin-bottom: 3px;


		}

		#menuLogo{
			padding-top: 60px ;
			margin-left: 40px;
			opacity: 0;
			cursor: pointer;


		}

		#thumb{
			display: flex;
			box-sizing: border-box;
			height: 400px;
			margin: 20px;
			position: absolute;
			z-index: -1;
		}

		#submit{
			width: 454px;;
			margin-top: 20px;
			background-color: #1dca7e;
			font-family: Trebuchet MS;
			color: white;
		}

    #submit1{
			width: 454px;;
			margin-top: 20px;
			background-color: #1dca7e;
			font-family: Trebuchet MS;
			color: white;
		}

		#formlog{
			transition: 0.6s ease-in-out;


		}

	


		#learn{
			transition: 0.6s ease-in-out;
		}

    #mansfield{
      animation: mansfield-spin infinite 20s linear;
    }

    keyframes mansfield-spin {
      from {
        transform: rotate(0deg);
      }
      to {
        transform: rotate(360deg);
      }
    }



		#thumb2{

			height: 400px;
			width: auto;
			align-content: center;
			margin-left: -137px;
			margin-top: 10px;
			display: flex;
			box-sizing: border-box;
		}


<<<<<<< HEAD
	
=======
		#courseThumbnails4{
			cursor: pointer;
			border-right: 1px solid lightgrey;
			box-shadow: 0px 0px 20px lightgrey;
			background-color: white;
			width: 500px;
			color: white;
			height: 250px;
			margin-right: 13px;
			z-index: 1;
			margin-top: 340px;
			margin-left: -1400px;
			border: 1.5px solid orange;
			background-size: cover;
			background-image: url(IMAGES/admin.png);
		}

		#courseThumbnails5{
			cursor: pointer;
			border-right: 1px solid lightgrey;
			box-shadow: 0px 0px 20px lightgrey;
			background-color: white;
			width: 500px;
			height: 250px;
color: white;
			margin-right: 18px;
			z-index: 1;
			margin-top: 340px;
			border: 1.5px solid orange;
			background-size: cover;
			background-image: url(IMAGES/psyc.jpg);

		}

		#courseThumbnails6{
			cursor: pointer;
			border-right: 1px solid lightgrey;
			box-shadow: 0px 0px 20px lightgrey;
			background-color: white;
			width: 500px;
			height: 250px;

			position: relative;
color: white;
			z-index: -1;
			margin-top: 340px;
			border: 1.5px solid orange;
			background-size: cover;
			background-image: url(IMAGES/log.jpg);

		}

>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075


		#logForm{
			width: 600px;
			height: 450px;
			opacity: 0.9;
			overflow: hidden;
			transition: 2s ease-in-out;
			display: none;
			background-color: white;
			overflow-x: hidden;
			border-top:  50px grey ;
			margin-left: 30%;
			margin-top:10%;
			border-radius: 6px;
			z-index: 1;
			position: fixed;
			top: -100px;

			border-bottom: 50px solid #1dca7e;

		}

		#logForm2{
			width: 600px;
			height: 600px;

			opacity: 0.9;
			overflow-y:1px solid green ;
			transition: 2s ease-in-out;
			display: none;
			background-color: white;
			overflow-x: hidden;
			border-top:  50px grey ;
			margin-left: 30%;
			margin-top:10%;
			border-radius: 6px;
			z-index: 1;
			position: fixed;
			top: -100px;

			border-bottom: 50px solid #1dca7e;

		}

		#formData{

			float: middle;
		}
		#formTop{
			height: 80px;
			width: auto;
			background-color: #1dca7e;
		}
		#who{
			display: block;
		}

		input{
			width: 445px;
			padding-left: 25px;
			height: 50px;

			border-radius: 4px;
			margin-right:10px; ;
			margin-left:70px;
			margin-top: 10px;
			border: 1px solid orange;
			background-color: #e6e6e6;


		}

		select{
			width: 445px;
			padding-left: 20px;
			height: 50px;

			border-radius: 4px;
			margin-right:10px; ;
			margin-left:70px;
			margin-top: 10px;
			border: 1px solid orange;
			background-color: #e6e6e6;
			font-family: Trebuchet MS;
		}

		option{
			padding-top: 30px;
			padding-bottom: 30px;
		}

		#logFormC{
			width: 100vw;
			height: 5140px;
			display: none;

			background-color: black;

			z-index: 1;
			position: absolute;
			top: 0;
			transition: 0.7s ease-in-out;
		}
		.side{
			 height: 100%;
			  width: 0;
			  position: fixed;
			  z-index: 1;
			  top: 0;
			  left: 0;
			  background-color: black;
			  overflow-x: hidden;
			  transition: 0.5s;
			  padding-top: 60px;
			  opacity: 0.7;

		}
		.closebtn {
		  position: absolute;
		  top: 10px;
		  right: 25px;
<<<<<<< HEAD
		  font-size: 35px;
=======
		  font-size: 55px;
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075
		  margin-left: 50px;
		  text-decoration: none;
		  color: orange;
		}





		#menuNav{
<<<<<<< HEAD
			width: 100vw;
			height: 60px;
			background-color:white;

			box-shadow:0px 0px 15px lightgray;

			position: fixed;
=======
			width: auto;
			height: 60px;
			background-color:white;
      border-Bottom = 2px solid orange;
	  box-shadow: 0px 0px 20px lightgrey;


			position: static;
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075
			z-index: 1;
			top: 0;



<<<<<<< HEAD
=======




>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075
		}
		#navTitle{
			padding: 10px;
			font-family: Trebuchet MS;
			letter-spacing: 20px;
			text-align: center;
			color:#510606;
		}
		#navContain{



		}


		#Learn{
			display: block  ;
		}

		#page1{
			display: ;
		}

		#main{
			width: auto;
			z-index: -1;
			position: relative;
			height: 780px;
			background-image: url(IMAGES/main.jpg);
			background-size: cover;
			margin-top: -60px;

		}
		#logout{
<<<<<<< HEAD
			width: 85px;
			height: 35px;
=======
			width: 75px;
			height: 22px;
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075
			display: block;
			background-color: orange;
			border-radius: 30px;
			border: 1px solid white;
			float: right;
			margin-right: 70px;
			opacity: 0.9;
			font-family: Trebuchet MS;
			font-size: 10px;
<<<<<<< HEAD
			
			color: white;
			padding-right:20px;
=======
			padding-top: 9px;
			color: white;
			text-align: center;
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075
			margin-top: 12px;
			cursor: pointer;

		}

		#log{
			width: 95px;
			height: 22px;
			background-color: orange;
			border-radius: 30px;
			border: 1px solid white;
			float: right;
			margin-right: 20px;
			opacity: 0.9;
			font-family: Trebuchet MS;
			font-size: 10px;
			padding-top: 9px;
			color: white;
			text-align: center;
			margin-top: 12px;
			cursor: pointer;

		}

		/*#log:hover{
			width: 95px;
			height: 22px;
			background-color: orange;
			border-radius: 30px;
			border: 1px solid white;
			float: right;
			margin-right: 20px;
			opacity: 0.9;
			font-family: Trebuchet MS;
			font-size: 10px;
			padding-top: 9px;
			color: white;
			text-align: center;
			margin-top: 12px;
			cursor: pointer;
			box-shadow: 0px 0px 6px white;
			transition: 0.6s ease-in-out;
*/
		}


		#sign{
			width: 95px;
			height: 22px;
			background-color: orange;
			border-radius: 30px;
			border: 1px solid white;
			opacity: 0.5;
			float: right;
			opacity: 0.9;
			font-family: Trebuchet MS;
			font-size: 10px;
			padding-top: 9px;
			color: white;
			text-align: center;
			margin-top: 12px;
			margin-right: 40px;
			cursor: pointer;


		}
/*
		#sign:hover{
			width: 95px;
			height: 22px;
			background-color: orange;
			border-radius: 30px;
			border: 1px solid white;

			float: right;
			opacity: 0.9;
			font-family: Trebuchet MS;
			font-size: 10px;
			padding-top: 9px;
			color: white;
			text-align: center;
			margin-top: 12px;
			margin-left: 62px;
			cursor: pointer;
			box-shadow: 0px 0px 6px white;
			margin-right: 40px;
			transition: 0.6s ease-in-out;

		}
*/

		#lessonContainer{
			display: flex;
			margin-right: 40px;
		}



		#footer-box{
		background-color: black;
		margin-top:1200px;
		width: auto;
		margin: 0;
		padding: 0;
	}

	.footer {
	  width: 100%;
	  position: relative;
	  height: auto;
	  padding-top: 15px;

	}

	/*--------The designing of the columns and links in the footer are in this section---------*/

	.footer .col {
	  width: 190px;
	  height: auto;
	  float: left;
	  box-sizing: border-box;
	  -webkit-box-sizing: border-box;
	  -moz-box-sizing: border-box;
	  padding: 0px 20px 20px 20px;
	}
	.footer .col h1 {
	  margin: 0;
	  padding: 0;
	  font-family: trebuchet MS;
	  font-size: 12px;
	  line-height: 17px;
	  padding: 20px 0px 5px 0px;
	  color: white;
	  font-weight: normal;
	  text-transform: uppercase;
	  letter-spacing: 1.5px;
	}
	.footer .col ul {
	  list-style-type: none;
	  margin: 0;
	  padding: 0;
	}
	.footer .col ul li {
	  color:grey;
	  font-size: 14px;
	  font-family: trebuchet MS;
	  font-weight: bold;
	  padding: 5px 0px 5px 0px;
	  cursor: pointer;
	  transition: .2s;
	  -webkit-transition: .2s;
	  -moz-transition: .2s;
	}

	/*Social links/icons should be displayed inline */

	.social ul li {
	  display: inline-block;
	  padding-right: 5px !important;
	}

	/*--------Hover over the links--------------*/

	.footer .col ul li:hover {
	  color: #fff;
	  transition: .1s;
	  -webkit-transition: .1s;
	  -moz-transition: .1s;
	}

	/*--This attribute makes all the content in the footer to be placed in the middle by clearing both left and right sides--*/

	.clearfix {
	  clear: both;
	}

	/*At this point the screen should change to different sizes of  screens according to the type of device width being used by the user*/

	@media only screen and (min-width: 1280px) {
	  .contain {
	    width: 1200px;
	    margin: 0 auto;
	  }

	/*If the device being used has a max screen width of 1139px the footer has to change its width to fit the screen*/

	@media only screen and (max-width: 1139px) {
	  .contain .social {
	    width: 1000px;
	    display: block;
	  }
	  .social h1 {
	    margin: 0px;
	  }
	}

	/*If the device being used has a max screen width of 950px the footer has to change its width to fit the screen*/

	@media only screen and (max-width: 950px) {
	  .footer .col {
	    width: 33%;
	  }
	  .footer .col h1 {
	    font-size: 14px;
	  }
	  .footer .col ul li {
	    font-size: 13px;
	  }
	}

	/*If the device being used has a max screen width of 500px the footer has to change its width to fit the screen*/

	@media only screen and (max-width: 500px) {
	    .footer .col {
	      width: 50%;
	    }
	    .footer .col h1 {
	      font-size: 14px;
	    }
	    .footer .col ul li {
	      font-size: 13px;
	    }
	}

	/*If the device being used has a max screen width of 340px the footer has to change its width to fit the screen*/

	@media only screen and (max-width: 340px) {
	  .footer .col {
	    width: 100%;
	  }
	}

	}
