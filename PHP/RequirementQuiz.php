<?php    

	//Start Session, to save User Information
	session_start();
	
	if(!(isset($_SESSION['ID']))){
		echo "<script>
				alert('Login First');
				window.location.href='Newlogin.html';
			  </script>";	
	}
	$_SESSION["Valid"] = "0";
	
?>

<!DOCTYPE html>
<html>

<!-- -------------------- Head section -------------------- -->
	<head>

	<!-- ---------- Title section ---------- -->
	<title>Requirement Quiz</title>

    <!-- --StyleSheets Link -- -->
    <link href="CSS/RequrStyle.css" rel="stylesheet"/>
    <link href="CSS/pagestyle.css" rel="stylesheet"/>
	
    <!-- --javaScript sheet Link -- -->
	<script src = "JS/FormProsses.js"></script>
	<script src = "JS/requirmentFormValidation.js"></script>
 
	</head>
	
	<!-- -------------------- Body section -------------------- -->
	<body>
	
	
    <!-- --------------- Header section --------------- -->
		<header>
		
			<nav class="topnav">
				<img src="Image/Logo.png" alt="logo">
				<a href="Index.php">Home</a>
				<a href="process.html">Donation Procees</a>
				<a href="PHP/RequirementQuiz.php">Requirement Quiz</a>
				<a href="PHP/bookAppointment.php">Book Appointment</a>
				<button onclick="document.location='Newlogin.html'" class="button" type="button">Login</button>
				<button onclick="document.location='Signup.html'" class="button" type="button">Sign up</button>
			</nav>
			
		</header>
		
	<!-- ------------ Introduction section ------------ -->
		<div class="section1"> <div class="title"> 
		     <p>You must take the Quiz <br> below to see if you are <br> eligible  to donate or not:</p> 
	    </div> </div>
		
		<img class="img" src="Image/Quiz.png" alt="user" />
		
		<br><br><br>
		
    <!-- ----------------- Form section --------------- -->
        <div class="box">
	 
        <table class="tableform"> <!--Form table-->
	 
	 
	    <!-- ------------ Form Detail ------------ -->
            <form id="RequirmentForm" action="PHP/ReqQuizResult.php" method="post" onsubmit="return FormValidation()">
		
		
		    <!-- ---------- Caution raw ---------- -->
		       <tr id="cautionRow" style="visibility:collapse; height: 40px; background-color:#FF6F6F;">
		         <div id="caution" style="text-align: center; font-size: 25px;"></div>
		        </tr>
		
		
		    <!-- ------------ Age & Weight raw ------------ -->
               <tr>
			
                 <td>
				   <div>
                     <label class="tablelabel" for="Age"><b>Age:</b></label>
				     <input style="font-size: 30px; margin:10px 90px;" type="text" onkeydown="color('red')" onkeyup="color('black')" id="Age" name="Age" required />
				     <p id="AgeFiled" style="margin-left: 70px;"></p>
				   </div>
				 </td>
				
			     <td>
			       <div>
				     <label class="tablelabel" for="Weight"><b>Weight:</b></label>
			         <input style="font-size: 30px; color: red;margin:10px 90px;" onchange="fontcolor()" type="text" id="Weight" name="Weight" required />
				     <p id="WeightFiled" style="margin-left: 70px;"></p>
				   </div>
			     </td>
				    
               </tr>
			
			
			<!-- ------------ infectious diseases & Last Donation raw ------------ -->
              <tr>
			  
                 <td>
			       <div>
				     <label class="tablelabel" for="Diseases"><b>infectious diseases:</b></label>
			         <input style="font-size: 30px; margin:10px 90px;" type="text" id="Disease" name="Disease"   onkeyup="UpperCaseLetter()"  required />
				     <p id="DiseasesFiled" style="margin-left: 70px;"></p>
				   </div>
			     </td>
			   
			     <td>
			       <div>
			        <label class="tablelabel" for="LastDon"><b>Last Donation:</b></label> 
				    <select class="selectt" style="font-size: 30px;margin:10px 90px;" name="LastDonation" id="LastDonation"> 
						<option value="1year">1 Year</option>			
						<option value="9Mon">9 Months</option>			
						<option value="6Mon">6 Months</option>    
						<option value="3Mon">3 Months</option>    
						<option value="None" selected="selected">None</option>    
					</select> 
				   </div>
                 </td>
			   
              </tr>
			
			
			<!-- -------- Antibiotics raw -------- -->
              <tr>
                 <td>
			       <div>
				     <label class="tablelabel" for="TakeAnti" style="margin-bottom:10px;"><b>Taking antibiotics?</b></label>
				     <input type="radio" id="Yes" name="answer" value="Yes"><label style="font-size: 35px;"for="Yes">Yes</label>
				     <input type="radio" id="No" name="answer" value="No"><label style="font-size: 35px;" for="No">No</label>
				     <p id="AntibioticsFiled" style="margin-left: 70px;"></p>
				  </div>
                 </td>
              </tr>
			
			
			<!-- ------ HelpText & Submet or Reset raw ------ -->
			  <tr>
			     <td>
			       <p id="helpText" style="margin-left: 30px; color: gray;"></p>
			     </td>
			   
			     <td style="margin-right: 10px;">
			       <input class="btn" id = "Reset" type = "reset" onclick="hideRow()">
				   <input class="btn" id="Submit" type="submit"> 
			     </td> 
			  </tr>
			
			
		<!-- ------------- Form end ------------- -->	
            </form>
			
        </table>
		
        </div>
  
  
		<!-- --------------- Footer section --------------- -->
		<footer class="footer-distributed">

			<div class="footer-left">
				<p class="footer-links">
					<a href="Index.php">Home</a>
				<a href="process.html">Donation Procees</a>
				<a href="PHP/RequirementQuiz.php">Requirement Quiz</a>
				<a href="PHP/bookAppointment.php">Book Appointment</a>
				</p>
			</div>
			
			<div class="footer-center"><h2>For more information:<a href="https://wateenapp.org/">Wateen</a></h2></div>
			
			<div class="footer-right">
				<p class="footer-company-about">
					<span>Group Members:</span>
						Elaf Aloufi, Manar Altaiary, Raghad Alzahrani , Khlood Alamri<br>
						Ealoufi0015@stu.kau.edu.sa, Maltaiary0001@stu.ka.edu.sa, Ralzahrani0689@stu.kau.edu.sa,kalamri0078@stu,kau,edu,sa
				</p>			
			</div>
			
		</footer>
      
	</body>
	
	<script>
    function hideRow(){
        var caution = document.getElementById("caution");
        var cautionRow = document.getElementById("cautionRow");
        setTimeout(function() {cautionRow.style.visibility="collapse";
        caution.style.display="none";}, 1000);
    }
	</script>
	</html>