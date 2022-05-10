<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Local Administration | IIITDMJ</title>
		<meta http-equiv="refresh" content="3000">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style.css">
       <link rel="stylesheet" type="text/css" href="./mobile.css">
</head>
	<?php include './topheader.php';?>
	<div class="container">
		<body>
			<?php include './Header.php';?>
			<?php include "./navbar.php"; ?>

			<span class="br"></span>

			<div class="aboutHeader" id="adminHeader">
				<h2>Local Administration</h2>
			</div>

			<div class="adminPageContent">
				<br>
				<button class="adminDetails">Counseling Cell</button>
					<div class="adminProfile">

							<div class="localAdminProfile">
	    					<img src="./Images/ladmins/aojha.png" alt="apojha" >
								<h5>Prof. Aparajita Ojha</h5>
								<h4>Head</h4>
	  					</div>
					</div>


					<span class="br"></span>


				<button class="adminDetails">Training & Placement</button>
					<div class="adminProfile">

					  	<div class="profile">

					  		<div class="localAdminProfile">
    							<img src="./Images/ladmins/pka.png" alt="Preeti Khanna" >
									<h5>Prof. Pritee Khanna</h5>
									<h4>Chairperson</h4>
								</div>
					
								<div class="localAdminProfile">
	    						<img src="./Images/ladmins/omvir.png" alt="Omvir Singh" >
									<h5>Mr. Omvir Singh Bhadauria </h5>
									<h4>Placement Officer</h4>
								</div>

							</div>
						</div>


					<span class="br"></span>


				<button class="adminDetails">International Affairs</button>
					<div class="adminProfile">
					  	
							<div class="localAdminProfile">
    							<img src="./Images/ladmins/dineshk.png" alt="Dinesh K" >
								<h5>Prof. Dinesh Kumar V</h5>
								<h4>Professor In-charge</h4>
							</div>


					</div>

					<span class="br"></span>

				<button class="adminDetails">Alumni Cell</button>
					<div class="adminProfile">
							<div class="localAdminProfile">
    						<img src="./Images/ladmins/puneetT.png" alt="Puneet T" >
								<h5>Prof. Puneet Tandon</h5>
								<h4>Professor In-charge</h4>
							</div>
					</div>

					<span class="br"></span>

				<button class="adminDetails">Innovation and Incubation Cell & Patent and Copyright Cell</button>
					<div class="adminProfile">
					  	<div class="localAdminProfile">
    						<img src="./Images/ladmins/rkjha.png" alt="Swapnali" >
								<h5>Dr. Rakesh Kumar Jha </h5>
								<h4>Professor In-charge</h4>
							</div>
					</div>

					<span class="br"></span>

				<button class="adminDetails">Communication Cell</button>
					<div class="adminProfile">
					  	<div class="localAdminProfile">
    						<img src="./Images/ladmins/varunB.png" alt="Varun B" >
								<h5>Dr. Varun Bajaj</h5>
								<h4>Professor In-charge</h4>
							</div>
					</div>

					<span class="br"></span>

				<button class="adminDetails">Science & Technology Counselor</button>
					<div class="adminProfile">
					  	<div class="localAdminProfile">
    						<img src="./Images/ladmins/akk.png" alt="Asish Kundu" >
								<h5>Dr. Asish K. Kundu</h5>
								<h4>Professor In-charge</h4>
							</div>
					</div>

					<span class="br"></span>

				<button class="adminDetails">Registrar (Acting)Finance & Accounts</button>
					<div class="adminProfile">
					  	<div class="localAdminProfile">
    						<img src="./Images/ladmins/swapnali.png" alt="Swapnali" >
								<h5>Mrs. Swapnali Gadekar</h5>
								<h4>Deputy Registrar</h4>
							</div>
					</div>


					<span class="br"></span>

				<button class="adminDetails">Establishment, General Administration and Internal Audit</button>
					<div class="adminProfile">
					  	<div class="localAdminProfile">
    						<img src="./Images/ladmins/rizwanA.png" alt="rizwan A" >
								<h5>Mr. Rizwan Ahmed</h5>
								<h4>Deputy Registrar</h4>
							</div>
					</div>

					<span class="br"></span>

				<button class="adminDetails">Academics, Student Affairs, Official Language Officer, CPIO</button>
					<div class="adminProfile">
					  	<div class="localAdminProfile">
    						<img src="./Images/ladmins/santosh.png" alt="santosh M" >
								<h5>Mr. Santosh Mahobia</h5>
								<h4>Assistant Registrar</h4>
							</div>
					</div>

			</div>


			<section class="secondAbout">
				<div class="otherPage">
					<div class="card" onclick="linkOpen('bod')">
						<img src="./icons/about.png"/>
						<figcaption>About Us</figcaption>
					</div>
					<div class="card" onclick="linkOpen('adm')">
						<img src="./icons/admins.png"/>
						<figcaption>Administration</figcaption>
					</div>
					<div class="card" onclick="linkOpen('lad')">
						<img src="./icons/locala.png"/>
						<figcaption>Local Administration</figcaption>
					</div>
					</div>
					<div class="otherPage">
						<div class="card" onclick="linkOpen('ms')">
							<img src="./icons/senate.png"/>
						<figcaption>Members of Senate</figcaption>
						</div>
						<div class="card" onclick="linkOpen('fc')">
							<img src="./icons/finc.png"/>
						<figcaption>Finance Commitee</figcaption>
						</div>
						<div class="card" onclick="linkOpen('mv')">
							<img src="./icons/mivi.png"/>
						<figcaption>Mission & Vision</figcaption>
						</div>
				</div>
			</section>

		</body>
	</div>

<?php include './footer.php'?>

<script type="text/javascript">

window.onscroll = function()
{
  stickyFunction()
};


var nbar = document.getElementById("adminHeader");
var sticky = nbar.offsetTop;
function stickyFunction() {
  if (window.pageYOffset >= sticky) {
    nbar.classList.add("sticky");
  } else {
    nbar.classList.remove("sticky");
 		}
	}


var collButton = document.getElementsByClassName("adminDetails");
var i;

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







	var button = document.getElementsByClassName("card");
	button.addEventListener("Click",linkOpen);


	function linkOpen(str)
	{
		switch(str)
		{
			case 'bod':
				window.open('./about.php', '_blank');
				break;
			case 'adm':
				window.open('https://www.facebook.com', '_blank');
				break;
			case 'lad':
				window.open('https://www.instagram.com', '_blank');
				break;
			case 'ms':
				window.open('https://www.twitter.com', '_blank');
				break;
			case 'fc':
				window.open('https://www.linkedin.com', '_blank');
				break;
			case 'mv':
				window.open('https://www.oracle.com', '_blank');
				break;
		}

	}
</script>
</html>
