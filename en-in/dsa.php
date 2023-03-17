<!DOCTYPE html>
	<html>
		<head>
			<?php include_once './headTag.php';?>
			<title>DSA | IIITDMJ</title>
		</head>

	    <?php include './topheader.php';?>
	   	<div class="container">
	    	<body>
	    		<?php include './header2.php';?>

				<span class="br"></span>
	
				<div class="aboutHeader" id="adminHeader">
					<h2>Student Affairs Office</h2>
				</div>
				<div class="AcMain">



					<span class="br"></span>

					<div class="office_of_Dean">
				<h3 class="hrclass"><span>Office of Dean(Academics)</span></h3></div>

				<div class="dsaDean">
					
				<div class="dsaDean1master">	
					
					<div class="members">
						<img src="../Images/BOD/dpgs.png">
						<h3>Prof. P.K. Jain</h3>
					     <p>Dean Students</p>
					     <p>Professor, ME</p>
					</div>

				</div>



				<div class="dsaDean1master">	
					
					<div class="members">
						<img src="../Images/BOD/dpgs.png">
						<h3>Dr. Manoj Singh Parihar</h3>
					     <p>Associate Dean</p>
					     <p>Asst. Prof., ECE</p>
					</div>

				</div>

				<div class="dsaDean1master">	
					
					<div class="members">
						<img src="../Images/BOD/dpgs.png">
						<h3>Santosh Mahobia</h3>
					     <p>Assistance Registrar</p>
					</div>

				</div>


					<div class="dsaDean1master">	
					
					<div class="members">
						<img src="../Images/BOD/dpgs.png">
						<h3>Rajesh Kanaujia</h3>
					     <p>Assistance Registrar</p>
					</div>

					<div class="members">
						<img src="../Images/BOD/dpgs.png">
						<h3>Aisha </h3>
					     <p>Assistance Registrar</p>
					</div>

					<div class="members">
						<img src="../Images/BOD/dpgs.png">
						<h3>Santosh Mahobia</h3>
					     <p>Assistance Registrar</p>
					</div>

					<div class="members">
						<img src="../Images/BOD/dpgs.png">
						<h3>Santosh Mahobia</h3>
					     <p>Assistance Registrar</p>
					</div>

				</div>

				<!-- Ends of DsaDean office -->
				</div>


				<!-- Sub Navbar -->
<!-- 					<ul class="dsaNav">

						
						<li><a href="./hostel.php">Notices</a></li>
      			<li>  					

  					<li><a href="./hostel.php">Hostels</a></li>
      			<li>
      				


      					<div class="dsaDrop">
    							<button class="dsaDropbtn">Facilities</button>
    								<div class="dsaDrop-content">
      
      							<a href="./c_mess.php">Students Mess</a>	
      							<a href="./comingSoon.html">Primary Health Center</a							>							
      							<a href="./comingSoon.html">Library</a>							
      							<a href="./comingSoon.html">Computer Center</a>
      							<a href="./comingSoon.html">Bus Services</a>
  							  </div>
  							</div> 

      			</li>
      			
      			<li><a href="./antiRagg.php">Anti Ragging</a></li>
      					
      			<li><a href="./comingSoon.html">Gymkhana/ Clubs</a>	</li>		
      			<li><a href="./counselling.php">Counseling</a></li>
      			<li><a href="./counselling.php">Forms</a></li>

      			<li><a href="./counselling.php">Rules/ Guidelines</a></li>

      			<li><a href="./counselling.php">Events</a></li>
 
      			<li><a href="./feesPay.php">Fees Payment</a></li>



					</ul>	 -->


	<div class="dsaNav">

		
  	<a href="./hostel.php">Notices</a>
  	<a href="./hostel.php">Hostels</a>
  	<div class="dsaDrop">
    	<button class="dsaDropbtn">Facilities 
      	<i class="bi bi-caret-down-fill"></i>
    	</button>
    <div class="dsaDrop-content">
      <a href="./c_mess.php">Students Mess</a> 
      <a href="./comingSoon.html">Primary Health Center</a>             
      	<a href="./comingSoon.html">Library</a>          
      	<a href="./comingSoon.html">Computer Center</a>
      	<a href="./comingSoon.html">Bus Services</a>
    	</div>
  	</div> 


  	<a href="./antiRagg.php">Anti Ragging</a>
    <a href="./comingSoon.html">Gymkhana/ Clubs</a>		
    <a href="./counselling.php">Counseling</a>
    <a href="./counselling.php">Forms</a>
    <a href="./counselling.php">Rules/ Guidelines</a></li>
    <a href="./counselling.php">Events</a>
    <a href="./feesPay.php">Fees Payment</a>
    <a href="./feesPay.php">People</a>




	</div>





					<!-- Sub Navbar -->

				<span class="br"></span>

				<div class="dsaDean">
					
					<div class="office_of_Dean">
				<h3 class="hrclass"><span>Office of Dean(Academics)</span></h3>

				<div class="office_of_Dean profile1">
						<img src="../Images/DeanACD/vijayG.jpg" class="" alt="Dean Academic">
						<div class="office_of_Dean text">
							<h2>Prof. Vijay Kumar Gupta </h2>
									<h3>Professor, Mechanical Engineering Discipline<br>
									Dean (Academic)</h3>
						</div>
					</div>	
				</div>
				</div>

				<!-- End AcMain -->
				</div>
			</body>
		</div>

			<?php include './footer.php'?>
	
<script type="text/javascript">

	
  var indexNavBar = document.getElementById("mainNav");
  var stickynav = indexNavBar.offsetTop;
    window.onscroll = function()
    {
      stickyNavbar()
    };

    function stickyNavbar() {
    if (window.pageYOffset >= stickynav) {
      indexNavBar.classList.add("indexNav2");
    } else {
      indexNavBar.classList.remove("indexNav2");
    }
  }
</script>

</html>