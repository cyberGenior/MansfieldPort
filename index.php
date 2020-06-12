
<?php

session_start();



<<<<<<< HEAD
if (isset($_SESSION['username'])) { 
	
	

?>

<BODY onload="logout()">

<?php





 
} 
   

if (isset($_GET['logout'])) { 
    session_destroy(); 
    unset($_SESSION['username']); 
    header("location: login.php"); 
} 

$username = ""; 
$email    = ""; 
$errors = ""; 
$_SESSION['log'] = "";
$_SESSION['success'] = ""; 



=======
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075
?>
<!DOCTYPE>
<html>
<head>

  <title>e-Velocity</title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body id="every">



  <script type="text/javascript">

  function closeWindow(){
window.close();
  }


  </script>

  <script type="text/javascript">

  function miniWindow(){
    window.innerWidth = 100;
    window.innerHeight = 100;
    window.screenX = screen.width;
    window.screenY = screen.height;
    alwaysLowered = true;

  }






  </script>


  <script type="text/javascript">

  function miniWindow(){
	window.resizeTo(0,0);
	window.moveTo(0,screen.height-50);


  }






  </script>



<<<<<<< HEAD
<script type="text/javascript">

function logout(){
	

	

	document.getElementById("logout").style.display= "block";

	document.getElementById("log").style.display= "none";

	document.getElementById("sign").style.display= "none";


}
</script>


 
=======


  <script type="text/javascript">
  	function logout(){
  		document.getElementById('Learn').style.display="none";

  		window.confirm("Do you eant to log out?");

  		document.getElementById("logout").style.display= "none";

  		document.getElementById("logImage").style.display= "none";

  		document.getElementById("page1").style.display= "block";
  		document.getElementById("log").style.display= "block";
  		document.getElementById("sign").style.display= "block";

  		document.getElementById("logValidate").innerHTML= "You must be logged in ";


  	}
  </script>
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075

  <script type="text/javascript">

  	if(document.getElementById('learn')==style.display="block"){
  		window.refresh(document.getElementById('learn'));
  	}
  </script>


  <script type="text/javascript">






  	function manu() {

    document.getElementById("side").style.width = "550px";

  }

  function closeNav() {

    document.getElementById("side").style.width = "0";

  }



  	function submit(){
		  if(document.getElementById('Password').value === document.getElementById('Password_verify').value){
			  alert('Password does not match!');


		  }
	  }


  function logForm(){

  	 document.getElementById("logFormC").style.display = "block";

  	  document.getElementById("logFormC").style.opacity = "0.9";

  	  document.getElementById("logFormC").style.transition = "1.8s";

  	   document.getElementById("logForm").style.display="block";

  	   document.getElementById("entire").style.backgroundColor="black";

  	   document.getElementById("entire").style.opacity="0.7";




  }

  function logForm2(){

  	 document.getElementById("logFormC").style.display = "block";

  	  document.getElementById("logFormC").style.opacity = "0.8";

  	  document.getElementById("logFormC").style.transition = "1.8s";

  	   document.getElementById("logForm2").style.display="block";

  	   document.getElementById("entire").style.backgroundColor="black";

  	   document.getElementById("entire").style.opacity="0.7";






  }


  function refresh(){
  	window.reload();
  }


  function closure(){

  	 document.getElementById("logform").style.display = "none";




  		}


  function closeLog(){


  	 document.getElementById("logFormC").style.display = "none";

  	  document.getElementById("logFormC").style.opacity = "1.8";

  	  document.getElementById("logForm").style.display="none";

  	  document.getElementById("logForm").style.transition="1s ease-in-out";


  }

  function closeLog2(){


  	 document.getElementById("logFormC").style.display = "none";

  	  document.getElementById("logFormC").style.opacity = "1.8";

  	  document.getElementById("logForm2").style.display="none";

  	  document.getElementById("logForm2").style.transition="1s ease-in-out";


  }

  function logFormTrans1(){


  	 document.getElementById("logForm2").style.display = "none";



  	  document.getElementById("logForm").style.display="block";

  	  document.getElementById("logForm2").style.transition="1s ease-in-out";


  }


  function logFormTrans2(){


  	 document.getElementById("logForm2").style.display = "block";



  	  document.getElementById("logForm").style.display="none";

  	  document.getElementById("logForm2").style.transition="1s ease-in-out";


  }


  function openCourse(){

  	 document.getElementById("wideOption1").style.display="block";

  }

  function closeCourse(){



  	document.getElementById("wideOption1").style.display="none";



  }




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

  function openMore(){

document.getElementById("wideOption2").style.display="block";

}

function closeMore(){



document.getElementById("wideOption2").style.display="none";



}







  function openTimeTable(){

  	 document.getElementById("wideOption1").style.display="block";

  }

  function closeTimeTable(){



  	document.getElementById("wideOption1").style.display="none";



  }



  </script>


  <script type="text/javascript">


  	function TransToAccount(){


  		document.getElementById("page1").style.display= "none";
  		document.getElementById("log").style.display= "none";
  		document.getElementById("sign").style.display= "none";











  	}


  }

</script>

<script type="text/javascript">

	function openStudent_Portal(){

		function logForm2(){

			 document.getElementById("logFormC").style.display = "block";

				document.getElementById("logFormC").style.opacity = "0.8";

				document.getElementById("logFormC").style.transition = "1.8s";

				 document.getElementById("logForm2").style.display="block";

				 document.getElementById("entire").style.backgroundColor="black";

				 document.getElementById("entire").style.opacity="0.7";






		}


	}




</script>

















  <div id="whole" onclick="closure()">

    <div id="entie" style="z-index: 1; ">









      <div id="navContain">
        <div id="topnuz">








        </div>
      </div>




      





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
            <h6 id="logValidate" style="display:none;margin-left:30px;font-family: Trebuchet MS; color: grey; font-weight: lighter; padding: 13px; margin-top: 4px; float: right; font-size: 19px; position: static; z-index: 1;">User Login..</h6>
			

            <?php  if(isset($_SESSION['username'])) { ?>  <h6 id="logValidate" style="margin-right:60px;margin-left:60px;font-family: Trebuchet MS; color: grey; font-weight: lighter; padding: 13px; margin-top: 4px; float: right; font-size: 19px; position: static; z-index: 1;"> 
			 Welcome  
                <strong> 

                    <?php echo $_SESSION['username']; ?> 

                </strong> </h6>

			<?php }
			else{
				?>  <h6 id="logValidate" style="margin-right:10px;margin-left:60px;font-family: Trebuchet MS; color: grey; font-weight: lighter; padding: 13px; margin-top: 4px; float: right; font-size: 19px; position: static; z-index: 1;"> 
				 <strong> 

				<?php echo "You are not logged in" ?> 

				</strong> </h6>
				<?php
			}
			?> 

			
			
			<img onclick="openMore()" width="40px" height="40px" style="cursor:pointer;margin-top:10px;margin-left:970px; position:absolute; z-index:1;" src="IMAGES/more.png">
=======
              <li id="child" onclick="openCourse()">Courses</li>
              <li id="child" onclick="openCourse()">Programs</li>
              <li id="child" onclick="openAdmin_Portal()">Admin_Portal</li>
              <li id="child" onclick="openStudent_Portal()">Student_Portal</li>

            </ul>

            <div id="mansfield" onclick="refresh()" style="background-image: url(IMAGES/logo-design-xegger-xpress.png); width: 63px; height: 60px; background-size: contain;z-index: 1; position: absolute;margin-left: 10px;margin-top: -1px; background-size:cover;"></div>
            <div id="logImage"></div>
            <h6 id="logValidate" style="display:none;margin-left:30px;font-family: Trebuchet MS; color: grey; font-weight: lighter; padding: 13px; margin-top: 4px; float: right; font-size: 19px; position: static; z-index: 1;">User Login..</h6>
			
			<h6 id="logValidate" style="margin-left:70px;margin-right:50px;font-family: Trebuchet MS; color: grey; font-weight: lighter; padding: 13px; margin-top: 4px; float: right; font-size: 19px; position: static; z-index: 1;"><?php if(!isset($_SESSION["user"])){echo "User Login..";}else{echo $_SESSION["user"] ;  }   ?></h6>

			
			<img onclick="openMore()" width="40px" height="40px" style="margin-top:10px;margin-left:1000px; position:absolute; z-index:1;" src="IMAGES/more.png">
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075
			<div id="wideOption2" style="background-color: black; width: 470px; height:640px; display:none;margin-left:900px;margin-top:37px; z-index: 1; position: absolute;opacity: 0.8; border-bottom: 2px solid orange; overflow: hidden;">

            <a href="javascript:void(0)" class="closebtn" onclick="closeMore()">×</a>
          </div>
<<<<<<< HEAD
			<img width="40px" height="40px" style="cursor:pointer;margin-top:10px;margin-left:1300px; position:absolute; z-index:1;" src="IMAGES/user.png">
=======
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


            <div onclick="logForm2()" id="sign">Sign up</div>
          <div onclick="logForm()" id="log">Log in</div>

<<<<<<< HEAD
		  <form method="GET">
				
				<input onclick="logout()" type="submit" name="logout" value="Log out" name="logout" id="logout">

		 </form>
=======
          <div onclick="logout()" id="logout">Log out</div>
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075

          </div>


          </div>
































  <div id="page1">

      <div id="main">


        <h3 id="mainHeading">Xegger Xpress</h3>



      </div>

      <p id="mainslogan">The Zambian Frontier for Change</p>

      <div id="thumb">

<<<<<<< HEAD
	  <div style="display:flex">


	  <div id="zedQuotes" style="margin:-95px 10px 10px 40px;;border-radius:20px;background-color:#fdfdfd;box-shadow:0px 0px 12px #edecec; padding:50px; width:600px;; height:200px; display:flex;">

	  
			<img width="200px" height="200px" style="cursor:pointer;margin-top:10px;" src="IMAGES/user2.png">
          

			<p  style=" margin:20px; font-family:tw cen MT; font-size:26px; font-style:italic; "><strong>"The moment you have protected an individual, you have protected society." <br> <br> <emp>Kenneth David Kaunda<emp> <br <br> Zambia's First Republican President</strong></p>


			</div>

			
			<div id="zedQuotes" style="margin:-95px 10px 10px 40px;;border-radius:20px;background-color:#fdfdfd;box-shadow:0px 0px 12px #edecec; padding:50px; width:600px;; height:200px; display:flex;">

	  
<img width="200px" height="200px" style="cursor:pointer;margin-top:10px;" src="IMAGES/user2.png">


<p  style=" margin:20px; font-family:tw cen MT; font-size:26px; font-style:italic; "><strong>"The moment you have protected an individual, you have protected society." <br> <br> <emp>Kenneth David Kaunda<emp> <br <br> Zambia's First Republican President</strong></p>


</div>



=======

  <div id="courseThumbnails1">
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075




<<<<<<< HEAD


</div>



<div style="display:flex; margin-top:150px;">


	  <div id="zedQuotes" style="margin:-95px 10px 10px 40px;;border-radius:20px;background-color:#fdfdfd;box-shadow:0px 0px 12px #edecec; padding:50px; width:600px;; height:200px; display:flex;">

	  
			<img width="200px" height="200px" style="cursor:pointer;margin-top:10px;" src="IMAGES/user2.png">
          

			<p  style=" margin:20px; font-family:tw cen MT; font-size:26px; font-style:italic; "><strong>"The moment you have protected an individual, you have protected society." <br> <br> <emp>Kenneth David Kaunda<emp> <br <br> Zambia's First Republican President</strong></p>


			</div>

			
			<div id="zedQuotes" style="margin:-95px 10px 10px 40px;;border-radius:20px;background-color:#fdfdfd;box-shadow:0px 0px 12px #edecec; padding:50px; width:600px;; height:200px; display:flex;">

	  
<img width="200px" height="200px" style="cursor:pointer;margin-top:10px;" src="IMAGES/user2.png">


<p  style=" margin:20px; font-family:tw cen MT; font-size:26px; font-style:italic; "><strong>"The moment you have protected an individual, you have protected society." <br> <br> <emp>Kenneth David Kaunda<emp> <br <br> Zambia's First Republican President</strong></p>


</div>









</div>



  






=======
    <h4 style="margin: 210px 10px 2px;font-family: Trebuchet MS; font-size: 22px; text-align: center;">Facaulty of Natural Sciences</h4>

  </div>

  <div id="courseThumbnails2">




    <h4 style="margin: 210px 10px 2px;font-family: Trebuchet MS; text-align: center;font-size: 22px;">Facaulty of Computer Sciences</h4>

  </div>


  <div id="courseThumbnails3">



    <h4 style="margin: 210px 10px 2px;font-family: Trebuchet MS; text-align: center;font-size: 22px;">Facaulty of Teaching</h4>
  </div>




  <div id="thumb2">


  <div id="courseThumbnails4">



    <h4 style="margin: 210px 10px 2px;font-family: Trebuchet MS; text-align: center; font-size: 22px;">Facaulty of Business Administration</h4>
  </div>

  <div id="courseThumbnails5">



    <h4 style="margin: 210px 10px 2px;font-family: Trebuchet MS; text-align: center; font-size: 22px;">Facaulty of Psychology</h4>

  </div>



  <div id="courseThumbnails6">



    <h4 style="margin: 210px 10px 2px;font-family: Trebuchet MS; text-align: center; font-size: 22px;">Facaulty of Transport/Logistics</h4>
  </div>



  </div>
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075








  </div>

<<<<<<< HEAD





  <div id="news" style="margin-top: 800px; ">

    <h2 id="newsHead" style="font-family: Trebuchet MS; padding-left: 80px; font-size: 80px; text-align:center;">NEWS</h2>

    <hr style="margin-left: 458px; margin-right: 20px; width:800px; height: 1.12px; background-color: orange; border: none; text-align:center;margin-bottom:170px;">
=======
  <div id="news" style="margin-top: 800px; ">

    <h2 id="newsHead" style="font-family: Trebuchet MS; padding-left: 60px; font-size: 30px; ">NEWS</h2>

    <hr style="margin-left: 48px; margin-right: 20px; height: 1.12px; background-color: orange; border: none;">
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075

    <div id="newsContainer">


<?php 

<<<<<<< HEAD
$db = "news";
	$con=new mysqli('localhost','root', '',$db); 
=======
$con = new mysqli("localhost","root","","news");
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT * FROM news";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {


		
<<<<<<< HEAD
		if($row['ID'] == 1){
		
=======
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075
		
		?>
		<div id="newsImage1">

<<<<<<< HEAD
		<?php

		

			//echo "<img src='images/'".$row['image']."'>";
			
=======
		?><?php
	 
			echo   " 
			
			<img src=".$row['']."> ";
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075
			
			
			
		
			
		
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
			<a href="userPage.php"><p>Read more</p></a>

			</div>

			</div>
		

<?php





				
<<<<<<< HEAD
		}
		if($row['ID'] == 2){
		
		
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
				<a href="userPage.php"><p>Read more</p></a>
	
				</div>
	
				</div>
			
	
	<?php
	
	
	
	
	
					
			}
	
			if($row['ID'] == 3){
		
		
				?>
				<div id="newsImage1">
		
				?><?php
		
				
		
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
					<a href="userPage.php"><p>Read more</p></a>
		
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
						<a href="userPage.php"><p>Read more</p></a>
			
						</div>
			
						</div>
					
			
			<?php
			
			
			
			
			
							
					}
			
=======
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075



    
} 


}


$con->close();


		
    
    
 






	





?>




</div>		


<<<<<<< HEAD
<div style="margin:230px 10px 0px 200px; display :flex;bottom: 90px;">

<div style="margin:20px;width:200px; height:200px; background-color:orange; border-radius:50%;;">

<h2 id="newsHead" style=";font-family:Trebuchet MS;padding-top:10px; color:white; padding-left: 10px ;text-align:center;font-size: 30px;"> <a "style="text-decoration:none; href="userPage.php"><p>MORE STORIES CLICK ME</p></a></h2>

</div>

<div style="margin:0px 0px 0px 200px;width:200px; height:200px; background-color:orange; border-radius:50%;;">

<h2 id="newsHead" style=";font-family:Trebuchet MS;padding-top:10px; color:white; padding-left: 10px ;text-align:center;font-size: 30px;"> <a "style="text-decoration:none; href="userPage.php"><p>ZED PLACCES CLICK ME</p></a></h2>

</div>

<div style="margin:0px 0px 0px 200px;width:200px; height:200px; background-color:orange; border-radius:50%;;">

<h2 id="newsHead" style=";font-family:Trebuchet MS;padding-top:10px; color:white; padding-left: 10px ;text-align:center;font-size: 30px;"> <a "style="text-decoration:none; href="userPage.php"><p>MORE ZED LIVESTYLE CLICK ME</p></a></h2>

</div>



</div>




=======

		
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075
	



  <h2 id="newsHead" style="font-family: Trebuchet MS; padding-left: 50px; margin-top: 90PX;">STATUETS</h2>

    <hr style="margin-left: 48px; margin-right: 48px; height: 1.12px; background-color: orange; border: none;">


      <div class="side" id="side">

         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>

      </div>



  <div id="logFormC">


  </div>

  <form method="POST" action="" id="formlog">


    		<div id="logForm">

    			<div id="formTop">
    				<a href="javascript:void(0)" class="closebtn" onclick="closeLog()">×</a>

    			</div>

    			<div id="formData">


<<<<<<< HEAD
					<p style="padding: 10px;text-align:center;font-size: 16px;  font-family: Trebuchet MS; color:red;" ><?php if($_SESSION['log']=""){ echo $_SESSION['log']=$er;} ?></p>


=======
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075
    				<legend style="padding: 30px;margin-left: 42px;font-size: 23px; font-family: Trebuchet MS;">Student ID :</legend>

    				<input type="text" name="Student1" accept="numerial" placeholder="Student ID "  id="name1">

    				<legend style="padding: 30px;margin-left: 42px;font-size: 23px; font-family: Trebuchet MS;">Password :</legend>

    				<input type="password" name="pass1" placeholder="password"  id="pass1">

<<<<<<< HEAD
    				<input style="background-color:#79df80;" id="submit2" onclick="TransToAccount()" type="submit" name="submit2" value="LogIn">
=======
    				<input id="submit2" onclick="TransToAccount()" type="submit" name="submit2" value="LogIn">
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075


    				<p style="padding-top: 14px;margin-left: 42px;font-size: 14px; padding-left: 30px;font-family: Trebuchet MS; ;
    				">Dont have an account?<b style="color:#1dca7e; cursor: pointer; " onclick="logFormTrans2()"> Create a free account</b></p>

    				<p style="padding-top: 14px;  padding-left: 30px;font-family: Trebuchet MS; font-size: 12px;
    				">Fogot password</p>




    			</div>








    		</div>
</form>

<script type='text/javascript' >










<?php

<<<<<<< HEAD
$er = "";

if (isset($_POST["submit2"])) {
	$db = "velocity";
	$con=new mysqli('localhost','root', '',$db);  
=======


if (isset($_POST["submit2"])) {
	$db = "velocity";
	$con=new mysqli('localhost','root', '',$db); 
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075
	
	$Student1 = $_POST['Student1'];
	
	
	$pass1 = $_POST['pass1'];
	
	
	
	
<<<<<<< HEAD

=======
	$_SESSION["user"] = $Student1;
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075
		
	$checkUser="SELECT * FROM `student` WHERE FIRST_NAME = '$Student1' &&  Password1 =  '$pass1' ";
	
	
	
	$userResult=mysqli_query($con,$checkUser);
	
<<<<<<< HEAD
	if ($userResult->num_rows == 1) {

		echo "<script>alert('Welcome $Student1')</script> ";


		
=======
	if ($userResult->num_rows > 0) {
		echo "<script>alert('Welcome $Student1')</script> ";


		echo "<script type='text/javascript' >window.open('userPage.php')</script> ";
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075
		

		echo "<script>document.getElementById('logForm').style.display='none';</script> ";

		
<<<<<<< HEAD
	 
            $_SESSION['username'] = $Student1; 
              
           
            $_SESSION['success'] = "You have logged in!"; 
              
           
			echo "<script>window.open('userPage.php')</script> ";
			
			$er = "Username or Password Incorrect";
		



		
	
		
	}elseif($userResult->num_rows != 1) {

	$er = "Username or Password Incorrect";

		echo "<script type='text/javascript'>alert('Password Mismatch');</script>";		

		

		
?>
	
	
     <BODY onLoad="logForm()">

<?php

		
		

	
=======
		$_SESSION["verfied"] = $Student1;



		
	
		
	}else{

		echo "<script type='text/javascript' >window.alert('Invalid Username or Password')</script> ";
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075
		
	}
	





}



?>

</script>



<form method="POST"  action=""  enctype="multipart/form-data">

    <div id="logForm2">

      <div id="formTop">
        <a href="javascript:void(0)" class="closebtn" onclick="closeLog2()">×</a>

      </div>
      <div id="formData2" style="display: inline-block;">

        <legend style="padding: 30px;margin-left: 42px;font-size: 23px; font-family: Trebuchet MS;">First name:</legend>

          <input type="text" name="FIRST_NAME" accept="text" required="" placeholder="i.e Jhn">

        <legend style="padding: 30px;margin-left: 42px;font-size: 23px; font-family: Trebuchet MS;">Surname :</legend>

        <input type="name" name="SURNAME" placeholder="i.e. Mbewe" required="">

        <legend style="padding: 30px;margin-left: 42px;font-size: 23px; font-family: Trebuchet MS;">Date of Birth :</legend>

        <input type="Date" name="DOB" placeholder="DD/MM/YY" required="">

        <legend style="padding: 30px;margin-left: 42px;font-size: 23px; font-family: Trebuchet MS;">Student ID  :</legend>

<<<<<<< HEAD
        <input readonly type="text" value="<?php echo uniqid() ?>" name="SID"  required=>
=======
        <input type="text" value="<?php echo(rand(1000,6000)); ?>" name="SID"  required=>
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075

        <legend style="padding: 30px;margin-left: 42px;font-size: 23px; font-family: Trebuchet MS;">Email Address :</legend>

        <input type="text" name="EMAIL" placeholder="i.e. Student@gmail.com" required="email">

        <legend style="padding: 30px;margin-left: 42px;font-size: 23px; font-family: Trebuchet MS;">Program :</legend>

        <select name="PROGRAM">

          <option>Select Program</option>

          <option>Dipl. Business Administration</option>

          <option>Deg. Business Administration</option>

          <option>Dipl. Primary Teaching</option>

          <option>Deg. Primary Teaching</option>

          <option>Dipl. Secondary Teaching</option>

          <option>Deg. Secondary Teaching</option>

          <option>Dipl. Information Technology</option>

          <option>Deg. Information Technology</option>

          <option>Dipl. Banking and Finance</option>

          <option>Deg. Banking and Finance</option>
        </select>

        <legend style="padding: 30px;margin-left: 42px;font-size: 23px; font-family: Trebuchet MS;">Year of Study :</legend>

        <select name="MOS">
          <option>Select Mode of Study</option>
          <option>Monday and Friday</option>
          <option>Wednesay and Saturday</option>
          <option>Monday and Tuesday</option>
          </option><option>Thursday and Saturday</option>
        </select>


        <legend style="padding: 30px;margin-left: 42px;font-size: 23px; font-family: Trebuchet MS;">Create password:</legend>

        <input type="password" name="Password1" id="Password1"  required="password">

        <legend style="padding: 30px;margin-left: 42px;font-size: 23px; font-family: Trebuchet MS;">Confirm Password:</legend>

        <input type="password" name="Password_verify"  id="Password_verify"  required="password">

		

        <legend style="padding: 30px;margin-left: 42px;font-size: 23px; font-family: Trebuchet MS;">Upload image:</legend>
		<input type="file" name="image" requred="">


        <input id="submit" type="submit" name="submit1" value="SignUp" onclick="submit">
        <p style="padding-top: 14px;margin-left: 42px;font-size: 23px; padding-left: 30px;font-family: Trebuchet MS;
        ">Already have an account?<b style="color:#1dca7e; cursor: pointer; " onclick="logFormTrans1()"> Log In</b></p>






      </div>

    </div>
    </form>

    <?php

if(isset($_POST['submit1'])){

	
<<<<<<< HEAD
$db = "velocity";
=======
	$db = "velocity";
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075
	$con=new mysqli('localhost','root', '',$db); 

	$FIRST_NAME = $_POST['FIRST_NAME'];

	$SURNAME = $_POST['SURNAME'];

	$DOB = $_POST['DOB'];

	$SID = $_POST['SID'];

	$EMAIL = $_POST['EMAIL'];

	$PROGRAM = $_POST['PROGRAM'];

	$MOS = $_POST['MOS'];

	$Password1 = $_POST['Password1'];

	$Password_verify = $_POST['Password_verify'];
	$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_txt = $_FILES['image']['name'];

<<<<<<< HEAD
	

	if($Password1 != $Password_verify){

		echo '<script type="text/javascript">alert("Password Mismatch");</script>';


	

		?>

	
	
     <BODY onLoad="logForm2()">

<?php
	
	}
	else{

	
=======
	?>

	<?php
	if($Password1 != $Password_verify){

	?>
		<script>alert("Your passwords do not match")</script>;

	<?php
	}


	else{
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075
		
	$stmt = $con->prepare("INSERT INTO `student` (`FIRST_NAME`, `SURNAME`, `DOB`, `SID`, `EMAIL`, `PROGRAM`, `MOS`, `Password1`,`image`,`image_txt`) VALUES (?, ?, ?, ?, ?, ? , ?, ?, ?, ?)");

	$stmt ->bind_param("sssissssss",$FIRST_NAME, $SURNAME, $DOB, $SID, $EMAIL, $PROGRAM, $MOS, $Password1, $image, $image_txt);

	$stmt->execute();


	?>



	<script>alert("Account Created Successfully, Please Login")</script>;
		<?php
<<<<<<< HEAD
		
		
		   $_SESSION['username'] = $FIRST_NAME; 
          
       
        $_SESSION['success'] = "You have logged in"; 
          
     
        header('location: /userPage.php'); 
=======
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075
	$stmt->close();
	}



	




	$con->close();


}



		



     ?>











    <div>

      <div style="font-family:Trebuchet MS;
        margin-top: 170px; margin-left: 750px;margin-right: 50px; background-image: url(IMAGES/free.png); height: 100px;width: 100px; border:3px ; background-size: contain;"></div>


        <h2 style="font-family:Trebuchet MS;
        margin-top: 60px; text-align: center;">WHY YOU SHOULD SIGN UP NOW</h2>

        <hr style="margin-left: 250px; margin-right: 250px; height: 1.4px; background-color: orange; border: none;">

        <p style="margin-left: 180px; margin-right: 180px; font-family:Trebuchet MS; text-align: center;">We believe that Education is a diverse pradignm in where tutors and student shouldnt be limited to classrooms but have a more relational and overtboard time.  </p>
      <div style="font-family:Trebuchet MS;
        margin-top: 200px; margin-left: 750px;margin-right: 50px; background-image: url(IMAGES/free.png); height: 100px;width: 100px; border:3px ; background-size: contain;"></div>


        <h2 style="font-family:Trebuchet MS;
        margin-top: 100px; text-align: center;">MISSION</h2>

        <hr style="margin-left: 250px; margin-right: 250px; height: 1.4px; background-color: orange; border: none;">

        <p style="margin-left: 180px; margin-right: 180px; font-family:Trebuchet MS;text-align: center;">We believe that Education is a diverse pradignm in where tutors and student shouldnt be limited to classrooms but have a more relational and overtboard time.  </p>

        <div style="font-family:Trebuchet MS;
        margin-top: 200px; margin-left: 750px;margin-right: 50px; background-image: url(IMAGES/free.png); height: 100px;width: 100px; border:3px ; background-size: contain;"></div>

        <h2 style="font-family:Trebuchet MS;
        margin-top: 100px; text-align: center;">ATTRIBUTION</h2>

        <hr style="margin-left: 250px; margin-right: 250px; height: 1.4px; background-color: orange; border: none;">

        <p style="margin-left: 180px; margin-right: 180px; font-family:Trebuchet MS;text-align: center;">We believe that Education is a diverse pradignm in where tutors and student shouldnt be limited to classrooms but have a more relational and overtboard time.  </p>


    </div>



  </div>



  <div id="Learn">


  <div id="pager" style="margin-left: 50px; padding: 50px;">



    <h5 style="font-family: Trebuchet MS;font-size: 22px;position: absolute; margin-left: 75px;margin-bottom: -15px; color: #cfcfd0;">
      Courses on Offer</h5>

    <div id="lessonContainer" style="margin: 67px;">


      <div id="lessonChoice" style="width: 200px;height: 240px;background-color: #cfcfd0; margin-top: 50px; margin-left: 7px; ">

        <a style="text-decoration: none;" href="" onclick="flip3d()"><p style=" font-size: 9px;font-family: Trebuchet MS; padding:  10px;color:red; text-decoration: none; margin-bottom: 10px;">Check Course-Outline</p></a>

        <h4 style="font-family: Trebuchet MS; padding: 6px; float: bottom;">Undergraduate || Information Technology</h4>


        <a style="text-decoration: none;" href=""><p style=" font-size: 9px;font-family: Trebuchet MS; padding:  10px;color:red; text-decoration: none; margin-top: -20px;">Narrow in Course</p></a>
      </div>




      <div id="lessonChoice" style="width: 200px;height: 240px;background-color: #cfcfd0; margin-top: 50px; margin-left: 7px;">

        <a style="text-decoration: none;" href=""><p style=" font-size: 9px;font-family: Trebuchet MS; padding:  10px;color:red; text-decoration: none; margin-bottom: 20px;">Check Course-Outline</p></a>

        <h4 style="font-family: Trebuchet MS; padding: 10px; float: bottom;">Undergraduate || Eduaction : Primary Teaching</h4>


        <a style="text-decoration: none;" href=""><p style=" font-size: 9px;font-family: Trebuchet MS; padding:  10px;color:red; text-decoration: none; margin-top: -20px;">Narrow in Course</p></a>
      </div>





      <div id="lessonChoice" style="width: 200px;height: 240px;background-color: #cfcfd0; margin-top: 50px;margin-left: 7px; ">

        <a style="text-decoration: none;" href=""><p style=" font-size: 9px;font-family: Trebuchet MS; padding:  10px;color:red; text-decoration: none; margin-bottom: 20px;">Check Course-Outline</p></a>

        <h4 style="font-family: Trebuchet MS; padding: 10px; float: bottom;">Undergraduate || Power ELectrical</h4>


        <a style="text-decoration: none;" href=""><p style=" font-size: 9px;font-family: Trebuchet MS; padding:  10px;color:red; text-decoration: none; margin-top: -20px;">Narrow in Course</p></a>
      </div>





      <div id="lessonChoice" style="width: 200px;height: 240px;background-color: #cfcfd0; margin-top: 50px;margin-left: 7px; ">

        <a style="text-decoration: none;" href=""><p style=" font-size: 9px;font-family: Trebuchet MS; padding:  10px;color:red; text-decoration: none; margin-bottom: 20px;">Request BookCheck Course-Outline</p></a>

        <h4 style="font-family: Trebuchet MS; padding: 10px; float: bottom;">Undergraduate || Business Administartion</h4>


        <a style="text-decoration: none;" href=""><p style=" font-size: 9px;font-family: Trebuchet MS; padding:  10px;color:red; text-decoration: none; margin-top: -20px;">Narrow in Course</p></a>
      </div>



  </div>


  <div id="lessonContainer" style="margin: 70px;">
      <div id="lessonChoice" style="width: 200px;height: 240px;background-color: #cfcfd0; margin-top: -40px;margin-left: 7px;">

        <a style="text-decoration: none;" href=""><p style=" font-size: 9px;font-family: Trebuchet MS; padding:  10px;color:red; text-decoration: none; margin-bottom: 20px;">Check Course-Outline</p></a>

        <h4 style="font-family: Trebuchet MS; padding: 10px; float: bottom;">Undergraduate || Nursing</h4>


        <a style="text-decoration: none;" href=""><p style=" font-size: 9px;font-family: Trebuchet MS; padding:  10px;color:red; text-decoration: none; margin-top: -20px;">Narrow in Course</p></a>
      </div>




      <div id="lessonChoice" style="width: 200px;height: 240px;background-color: #cfcfd0; margin-top: -40px;margin-left: 7px; ">

        <a style="text-decoration: none;" href=""><p style=" font-size: 9px;font-family: Trebuchet MS; padding:  10px;color:red; text-decoration: none; margin-bottom: 20px;">Check Course-Outline</p></a>

        <h4 style="font-family: Trebuchet MS; padding: 10px; float: bottom;">Undergraduate || Law</h4>


        <a style="text-decoration: none;" href=""><p style=" font-size: 9px;font-family: Trebuchet MS; padding:  10px;color:red; text-decoration: none; margin-top: -20px;">Narrow in Course</p></a>
      </div>





      <div id="lessonChoice" style="width: 200px;height: 240px;background-color: #cfcfd0; margin-top: -40px;margin-left: 7px;">

        <a style="text-decoration: none;" href=""><p style=" font-size: 9px;font-family: Trebuchet MS; padding:  10px;color:red; text-decoration: none; margin-bottom: 20px;">Check Course-Outline</p></a>

        <h4 style="font-family: Trebuchet MS; padding: 10px; float: bottom;">Undergraduate || Transport and Logistics</h4>


        <a style="text-decoration: none;" href=""><p style=" font-size: 9px;font-family: Trebuchet MS; padding:  10px;color:red; text-decoration: none; margin-top: -20px;">Narrow in Course</p></a>
      </div>





      <div id="lessonChoice" style="width: 200px;height: 240px;background-color: #cfcfd0; margin-top: -40px; margin-left: 7px;">

        <a style="text-decoration: none;" href=""><p style=" font-size: 9px;font-family: Trebuchet MS; padding:  10px;color:red; text-decoration: none; margin-bottom: 20px;">Check Course-Outline</p></a>

        <h4 style="font-family: Trebuchet MS; padding: -20px; float: bottom;">Undergraduate || Computer Science</h4>


        <a style="text-decoration: none;" href=""><p style=" font-size: 9px;font-family: Trebuchet MS; padding:  10px;color:red; text-decoration: none; margin-top: -20px;">Narrow in Course</p></a>
      </div>



  </div>



  </div>


  </div>
  </div>
  </div>




















  <footer id="footer-box">

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
			      <li><img src="Phone-icon.png" width="32" style="width: 32px;"> +260977-542882</li>
			      <li><img src="gmail-icon.png" width="32" style="width: 32;">mansfielduniversitycollege@gmail.com P.O.Box30858.Lusaka-Zambia</li>
			    </ul>
			  </div>

<!----------------------Social icons or links------------------------->

			  <div class="col social">
			    <h1>Social Media</h1>
			    <ul>
			      <li><img src="Facebook-icon.png" width="32" style="width: 32px;"></li>
			      <li><img src="twitter-icon.png" width="32" style="width: 32px;"></li>
			      <li><img src="google-icon.png" width="32" style="width: 32px;"></li>
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
			font-size: 120px;



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
			font-family:kindel;
			text-align: center;
<<<<<<< HEAD
			margin-top: -150px;
=======
			margin-top: -350px;
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075
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

			box-shadow:0px 0px 30px light-grey;


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

			width: 400px;
			height: 350px;
			background-color: white;
			box-shadow: 0px 0px 20px lightgrey;
		}


				#newsImage3{

		margin-left: 50px;

		width: 400px;
		height: 300px;
		background-image: url(IMAGES/HH.jpg);
		background-size: contain;
		box-shadow: 0px 0px 20px lightgrey;
		}
		#newsLine3{

		margin-left: 10px;
		font-family: Trebuchet MS;
		padding: 25px;

		width: 400px;
		height: 500px;
		background-color: white;
		box-shadow: 0px 0px 20px lightgrey;
		}	


		#newsImage4{

			margin-left: 50px;

			width: 400px;
			height: 300px;
			background-image: url(IMAGES/speech.jpg);
			background-size: contain;
			box-shadow: 0px 0px 20px lightgrey;
		}
		#newsLine4{

			margin-left: 10px;
			font-family: Trebuchet MS;
			padding: 25px;

			width: 400px;
			height: 500px;
			background-color: white;
			box-shadow: 0px 0px 20px lightgrey;
		}		




		#newsImage2{

			margin-left: 50px;


			width: 400px;
			height: 300px;
			background-image: url(IMAGES/img2.jpg);
			background-size: contain;
			box-shadow: 0px 0px 20px lightgrey;

		}
		#newsLine2{

			margin-left: 10px;
			font-family: Trebuchet MS;
			padding: 35px;

			width: 400px;
			height: 500px;
			background-color: white;
			box-shadow: 0px 0px 20px lightgrey;

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

		#newsinfo{

			
font-family: Trebuchet MS;

font-size:16px;
font-weight:lighter;

}

		#thumb{
<<<<<<< HEAD
		
=======
			display: flex;
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075
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

		#logImage{
			width: 40px;
			height: 40px;
			background-image: url(IMAGES/Avator.jpg);
			background-size: contain;
			display: none;

			position: absolute;
			border-radius: 30px;
			margin-top: 10px;
			right: 0px;
			z-index: 1;
			margin-right: 350px;
		}



<<<<<<< HEAD
	
=======
		#courseThumbnails1{
			cursor: pointer;
			color: white;
			width: 500px;
			border-right: 1px solid lightgrey;
			box-shadow: 0px 0px 20px lightgrey;
			height: 250px;
			background-color: white;
			z-index: 1;
			margin-top:80px;
			margin-right: 13px;
			border: 1.5px solid orange;
			background-size: cover;
			background-image: url(IMAGES/nat.jpg);

		}

		#courseThumbnails2{
			cursor: pointer;
			width: 500px;
			color: white;
			border-right: 1px solid lightgrey;
			box-shadow: 0px 0px 20px lightgrey;
			height: 250px;

			background-color: white;
			z-index: 1;
			margin-top:80px;
			margin-right: 18px;
			border: 1.5px solid orange;
			background-size: cover;
			background-image: url(IMAGES/tech.jpg);

		}

		#courseThumbnails3{
			cursor: pointer;
			box-shadow: 0px 0px 20px lightgrey;
			width: 500px;
			height: 250px;
			color: white;
			background-color: white;
			z-index: 1;
			margin-top: 80px;
			border: 1.5px solid orange;
			background-size: cover;
			background-image: url(IMAGES/teach.jpg);

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
			height: 620px;
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
			display: none;
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
		  font-size: 55px;
		  margin-left: 50px;
		  text-decoration: none;
		  color: orange;
		}





		#menuNav{
			width: auto;
			height: 60px;
			background-color:white;

			box-shadow:0px 0px 15px lightgray;

			position: sticky;
			z-index: 1;
			top: 0;







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
			display: none  ;
		}

		#page1{
			display: ;
		}

		#main{
			width: auto;
			z-index: -1;
			position: relative;
<<<<<<< HEAD
			height: 500px;
			background-image: url(IMAGES/main.jpg);
			background-size: cover;
			margin-top: px;
			background-repeat:no-repeat;

		}
		#logout{
			width: 85px;
			height: 35px;
=======
			height: 780px;
			background-image: url(IMAGES/tech.jpg);
			background-size: cover;
			margin-top: -60px;

		}
		#logout{
			width: 95px;
			height: 22px;
>>>>>>> 817448eedc48d8bdc4390a1f66c657bbc7982075
			display: none;
			background-color: orange;
			border-radius: 30px;
			border: 1px solid white;
			float: right;
<<<<<<< HEAD
			margin-right: 70px;
			opacity: 0.9;
			font-family: Trebuchet MS;
			font-size: 10px;
			
			color: white;
			padding-right:20px;
=======
			margin-right: 20px;
			opacity: 0.9;
			font-family: Trebuchet MS;
			font-size: 10px;
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







<script async defer src="//assets.pinterest.com/js/pinit.js"></script>
</body>

</body>
</html>
</style></body></html>
