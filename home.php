<?php

	
	





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
  	window.print();
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
              <li id="child" onclick="openCourse()">Courses</li>
              <li id="child" onclick="openCourse()">Programs</li>
              <li id="child" onclick="openAdmin_Portal()">Admin_Portal</li>
              <li id="child" onclick="openStudent_Portal()">Student_Portal</li>

            </ul>

            <div id="mansfield" onclick="refresh()" style="background-image: url(IMAGES/download.png); width: 35px; height: 35px; background-size: contain;z-index: 1; position: absolute;margin-left: 38px;margin-top: 10px;"></div>
            <div id="logImage"></div>
            <h6 id="logValidate" style="font-family: Trebuchet MS; color: grey; font-weight: lighter; padding: 13px; margin-top: 4px; float: right; font-size: 19px; position: static; z-index: 1;">You must be logged in_</h6>

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

          <div onclick="logout()" id="logout">Log out</div>

          </div>


          </div>
































  <div id="page1">

      <div id="main">


        <h3 id="mainHeading">Mansfield <i style="color: orange">e</i>-Velocity</h3>



      </div>

      <p id="mainslogan">easy, anywhere, convinient</p>

      <div id="thumb">


  <div id="courseThumbnails1">




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








  </div>

  <div id="news" style="margin-top: 800px; ">

    <h2 id="newsHead" style="font-family: Trebuchet MS; padding-left: 60px; font-size: 30px; ">NEWS</h2>

    <hr style="margin-left: 48px; margin-right: 20px; height: 1.12px; background-color: orange; border: none;">

    <div id="newsContainer">

    <div id="newsImage1">
    </div>
    <div id="newsLine1">
      <p><b>The Student Of the Year</b></p>
      <br>
      <p>This student has proved to a prominent young individual with a bright future,
      so the school is very previlage to award him the Student of the year Award for his his outsatnding perfomance</p>
    </div>
    <div id="newsImage1">
    </div>
    <div id="newsLine1">
      <p><b>The Student Of the Year</b></p>
      <br>
      <p>This student has proved to a prominent young individual with a bright future,
      so the school is very previlage to award him the Student of the year Award for his his outsatnding perfomance</p>
    </div>
  </div>

  <div id="newsContainer2">

    <div id="newsImage2">
    </div>
    <div id="newsLine2">
      <p><b>The Student Of the Year</b></p>
      <br>
      <p>This student has proved to a prominent young individual with a bright future,
      so the school is very previlage to award him the Student of the year Award for his his outsatnding perfomance</p>



    </div>
    <div id="newsImage2">
    </div>
    <div id="newsLine2">
      <p><b>The Student Of the Year</b></p>
      <br>
      <p>This student has proved to a prominent young individual with a bright future,
      so the school is very previlage to award him the Student of the year Award for his his outsatnding perfomance</p>
    </div>


  </div>


  </div>




  <h2 id="newsHead" style="font-family: Trebuchet MS; padding-left: 50px; margin-top: 90PX;">STATUETS</h2>

    <hr style="margin-left: 48px; margin-right: 48px; height: 1.12px; background-color: orange; border: none;">


      <div class="side" id="side">

         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>

      </div>



  <div id="logFormC">


  </div>

  <form method="POST" action="Log_in.php" id="formlog">


    		<div id="logForm">

    			<div id="formTop">
    				<a href="javascript:void(0)" class="closebtn" onclick="closeLog()">×</a>

    			</div>

    			<div id="formData">

    				<legend style="padding: 30px;margin-left: 42px;font-size: 23px; font-family: Trebuchet MS;">Student ID :</legend>

    				<input type="text" name="Student1" accept="numerial" placeholder="Student ID "  id="name1">

    				<legend style="padding: 30px;margin-left: 42px;font-size: 23px; font-family: Trebuchet MS;">Password :</legend>

    				<input type="password" name="pass1" placeholder="password"  id="pass1">

    				<input id="submit1" onclick="TransToAccount()" type="submit" name="submit" value="LogIn">


    				<p style="padding-top: 14px;margin-left: 42px;font-size: 14px; padding-left: 30px;font-family: Trebuchet MS; ;
    				">Dont have an account?<b style="color:#1dca7e; cursor: pointer; " onclick="logFormTrans2()"> Create a free account</b></p>

    				<p style="padding-top: 14px;  padding-left: 30px;font-family: Trebuchet MS; font-size: 12px;
    				">Fogot password</p>




    			</div>








    		</div>
</form>


<?php












?>













<?php



?>


<form method="post" action="">

    <div id="logForm2">

      <div id="formTop">
        <a href="javascript:void(0)" class="closebtn" onclick="closeLog2()">×</a>

      </div>
      <div id="formData2" style="display: inline-block;">

        <legend style="padding: 30px;margin-left: 42px;font-size: 23px; font-family: Trebuchet MS;">First name:</legend>

          <input type="text" name="First_name" accept="text" required="" placeholder="i.e Jhn">

        <legend style="padding: 30px;margin-left: 42px;font-size: 23px; font-family: Trebuchet MS;">Surname :</legend>

        <input type="name" name="Surname" placeholder="i.e. Mbewe" required="">

        <legend style="padding: 30px;margin-left: 42px;font-size: 23px; font-family: Trebuchet MS;">Date of Birth :</legend>

        <input type="Date" name="DOB" placeholder="DD/MM/YY" required="">

        <legend style="padding: 30px;margin-left: 42px;font-size: 23px; font-family: Trebuchet MS;">Student ID  :</legend>

        <input type="number" name="SID" placeholder="i.e. 20170067" required="number">

        <legend style="padding: 30px;margin-left: 42px;font-size: 23px; font-family: Trebuchet MS;">Email Address :</legend>

        <input type="text" name="Email" placeholder="i.e. Student@gmail.com" required="email">

        <legend style="padding: 30px;margin-left: 42px;font-size: 23px; font-family: Trebuchet MS;">Program :</legend>

        <select name="Program">

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

			include ('connection.php');
			include('Sign_UP.php');
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
			background-image: url(IMAGES/img1.jpg);
			background-size: contain;
			box-shadow: 0px 0px 20px lightgrey;
		}
		#newsLine1{

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
			height: 780px;
			background-image: url(IMAGES/main.jpg);
			background-size: cover;
			margin-top: -60px;

		}
		#logout{
			width: 95px;
			height: 22px;
			display: none;
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








</body>

</body>
</html>
</style></body></html>
