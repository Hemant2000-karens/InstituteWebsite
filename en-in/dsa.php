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
				    <!-- <a href="./feesPay.php">Fees Payment</a>
				    <a href="./feesPay.php">People</a> -->
				  </div>

					<div class="office_of_Dean">
				<h3 class="hrclass"><span>Office of Dean(Academics)</span></h3></div>



				<div class="dsaDean">
					
				<div class="dsaDean1master">	
					
					<div class="members">
						<img src="../Images/dsaoffice/pkjain.jpg">
						<h3>Prof. P.K. Jain</h3>
					     <p>Dean Students</p>
					     <p>Professor, ME</p>
					</div>


					<div class="members">
						<img src="../Images/dsaoffice/mparihar.jpg">
						<h3>Dr. Manoj Singh Parihar</h3>
					     <p>Associate Dean</p>
					     <p>Asst. Prof., ECE</p>
					</div>


						<div class="members">
						<img src="../Images/dsaoffice/santosh.jpg">
						<h3>Mr. Santosh Mahobia</h3>
					     <p>Assistance Registrar</p>
					</div>

				</div>

					<div class="dsaDean1master">	
					
					<div class="members">
						<img src="../Images/dsaoffice/rajesh.jpg">
						<h3>Mr. Rajesh Kanaujia</h3>
					     <p>Senior Assistant</p>
					</div>

					<div class="members">
						<img src="../Images/dsaoffice/aishwarya.jpg">
						<h3>Ms. Aishwarya Pradhan</h3>
					     <p>Senior Assistant</p>
					</div>

					<div class="members">
						<img src="../Images/dsaoffice/amit.jpg">
						<h3>Amit Kashyap</h3>
					     <p>Office Assistant</p>
					</div>

					<div class="members">
						<img src="../Images/dsaoffice/monty.png">
						<h3>Monti Jatav</h3>
					     <p>Peon</p>
					</div>

				</div>

				<!-- Ends of DsaDean office -->
				</div>

					<div class="externalLink">
						<div class="externalheading">
							<span>Message from Dean Students</span>
						</div>
						<br>
						<span>Dear Students,</span>
				<p>
					Congratulations on joining the IIITDMJ community! We have a unique curriculum that emphasizes project-based learning, which has been recognized by Indian and Japanese industries. While our academic standards are high, we also encourage students to engage in extracurricular activities for a well-rounded experience. Please be aware of the rules and regulations that exist for everyone's benefit, and remember to say no to any acts of ragging. We have counseling services available if you need them. Stay focused on your studies and make the most of your time at IIITDMJ.
				</p>
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