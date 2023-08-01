<!DOCTYPE html>
<html>
<head>
	<?php include_once './headTag.php';?>
	<title>Local Administration | IIITDMJ</title>
</head>
	<?php include './topheader.php';?>
	<div class="container">
		<body>
			<?php include './header2.php';?>

			<span class="br"></span>

			<div class="aboutHeader" id="adminHeader">
				<h2>Local Administration</h2>
			</div>

			<div class="adminPageContent">
				<br>
				<button class="adminDetails">Counseling Cell</button>
					<div class="adminProfile">

							<div class="localAdminProfile">
	    					<img src="../Images/ladmins/aojha.png" alt="apojha" >
								<h5>Prof. Aparajita Ojha</h5>
								<h4>Head</h4>
	  					</div>
					</div>


					<span class="br"></span>


				<button class="adminDetails">Training & Placement</button>
					<div class="adminProfile">

					  	<div class="profile">

					  		<div class="localAdminProfile">
    							<img src="../Images/ladmins/pka.png" alt="Preeti Khanna" >
									<h5>Prof. Pritee Khanna</h5>
									<h4>Chairperson</h4>
								</div>
					
								<div class="localAdminProfile">
	    						<img src="../Images/ladmins/omvir.png" alt="Omvir Singh" >
									<h5>Mr. Omvir Singh Bhadauria </h5>
									<h4>Placement Officer</h4>
								</div>

							</div>
						</div>


					<span class="br"></span>


				<button class="adminDetails">International Affairs</button>
					<div class="adminProfile">
					  	
							<div class="localAdminProfile">
    							<img src="../Images/ladmins/dineshk.png" alt="Dinesh K" >
								<h5>Prof. Dinesh Kumar V</h5>
								<h4>Professor In-charge</h4>
							</div>


					</div>

					<span class="br"></span>

				<button class="adminDetails">Alumni Cell</button>
					<div class="adminProfile">
							<div class="localAdminProfile">
    						<img src="../Images/ladmins/puneetT.png" alt="Puneet T" >
								<h5>Prof. Puneet Tandon</h5>
								<h4>Professor In-charge</h4>
							</div>
					</div>

					<span class="br"></span>

				<button class="adminDetails">Innovation and Incubation Cell & Patent and Copyright Cell</button>
					<div class="adminProfile">
					  	<div class="localAdminProfile">
    						<img src="../Images/ladmins/rkjha.png" alt="Swapnali" >
								<h5>Dr. Rakesh Kumar Jha </h5>
								<h4>Professor In-charge</h4>
							</div>
					</div>

					<span class="br"></span>

				<button class="adminDetails">Communication Cell</button>
					<div class="adminProfile">
					  	<div class="localAdminProfile">
    						<img src="../Images/ladmins/varunB.png" alt="Varun B" >
								<h5>Dr. Varun Bajaj</h5>
								<h4>Professor In-charge</h4>
							</div>
					</div>

					<span class="br"></span>

				<button class="adminDetails">Science & Technology Counselor</button>
					<div class="adminProfile">
					  	<div class="localAdminProfile">
    						<img src="../Images/ladmins/akk.png" alt="Asish Kundu" >
								<h5>Dr. Asish K. Kundu</h5>
								<h4>Professor In-charge</h4>
							</div>
					</div>

					<span class="br"></span>

				<button class="adminDetails">Registrar (Acting)Finance & Accounts</button>
					<div class="adminProfile">
					  	<div class="localAdminProfile">
    						<img src="../Images/ladmins/swapnali.png" alt="Swapnali" >
								<h5>Mrs. Swapnali Gadekar</h5>
								<h4>Deputy Registrar</h4>
							</div>
					</div>


					<span class="br"></span>

				<button class="adminDetails">Establishment, General Administration and Internal Audit</button>
					<div class="adminProfile">
					  	<div class="localAdminProfile">
    						<img src="../Images/ladmins/rizwanA.png" alt="rizwan A" >
								<h5>Mr. Rizwan Ahmed</h5>
								<h4>Deputy Registrar</h4>
							</div>
					</div>

					<span class="br"></span>

				<button class="adminDetails">Academics, Student Affairs, Official Language Officer, CPIO</button>
					<div class="adminProfile">
					  	<div class="localAdminProfile">
    						<img src="../Images/ladmins/santosh.png" alt="santosh M" >
								<h5>Mr. Santosh Mahobia</h5>
								<h4>Assistant Registrar</h4>
							</div>
					</div>

			</div>


			<section class="secondAbout">
				<div class="otherPage">
					
				</div>
			</section>

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



	function changeCal(evt, calName) {
	  var i, tabcontent, tablinks;
	  tabcontent = document.getElementsByClassName("calTable");
	  for (i = 0; i < tabcontent.length; i++) {
	    tabcontent[i].style.display = "none";
	  }
	  tablinks = document.getElementsByClassName("calTab");
	  for (i = 0; i < tablinks.length; i++) {
	    tablinks[i].className = tablinks[i].className.replace(" active", "");
	  }
	  document.getElementById(calName).style.display = "block";
	  evt.currentTarget.className += " active";
	}



	var collButton = document.getElementsByClassName("adminDetails");


	for (i = 0; i < collButton.length; i++) {
	  collButton[i].addEventListener("click", function() {
	    this.classList.toggle("visibleldTab");
	    var content = this.nextElementSibling;
	    if (content.style.maxHeight){
	      content.style.maxHeight = null;
	    } else {
	      content.style.maxHeight = content.scrollHeight + "px";
	    } 
	  });
	}


document.getElementById('defaultOpen').click();
</script>
</html>
