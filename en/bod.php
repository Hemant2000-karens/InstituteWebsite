<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BOG | IIITDMJ</title>
		<meta http-equiv="refresh" content="3000">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style.css">
       <link rel="stylesheet" type="text/css" href="./mobile.css">
</head>
	<?php include './topheader.php';?>
	<div class="container">
		<body>
			<?php include './Header.php';?>
			<?php include "./navbar.php" ?>

			<span class="br"></span>

			<div class="aboutHeader" id="adminHeader">
				<h2>Board of Governors</h2>
			</div>

			<div class="Directors">

				<div class="profile">

					<div class="members">
						<img src="./Images/BOD/dpgs.png">
						<h3>Shri Deepak Ghaisas</h3>
					     <p>Chairman of the Board</p>
					</div>
					<div class="members">
						<h3>Shri Manish Rastogi</h3>
					     <p>Member</p>
					     <p>Principal Secretary<br>Department of Science and Technology Government of MP</p>
					</div>
					<div class="members">
						<h3>Shri Rakesh Ranjan</h3>
					     <p>Member</p>
					     <p>Additional Secretary<br>(IITs/IIITs/<br>TE/TC/TEQUIP)</p>
					</div>
					<div class="members">
						<img src="./Images/BOD/jpm.png">
						<h3>Dr. Jaideep Kumar Mishra</h3>
					     <p>Member</p>
					     <p>Joint Secretary & Group Coordinator<br>Ministry of Electronics and Information Technology</p>
					</div>

					<div class="members">
						<img src="./Images/BOD/prvj.png">
						<h3>Prof. R. V. Raja kumar</h3>
					     <p>Member</p>
					     <p> Director<br>Indian Institute of Technology Bhubaneswar</p>
					</div>

					<div class="members">
						<img src="./Images/BOD/psh.png">
						<h3>Prof. Shailendra Singh</h3>
					     <p>Member</p>
					     <p>Director<br>IIM Ranchi</p>
					</div>

					<div class="members">
						<img src="./Images/BOD/ABT.png">
						<h3>Ms. Atreyee Borooah Thekedath</h3>
					  <p>Member</p>
					  <p>Director<br>Web.com (India) Pvt. Ltd.</p>
					</div>

					<div class="members">
						<img src="./Images/BOD/pkp.png">
						<h3>Shri Prashant Pole</h3>
					    <p>Member</p>
					    <p>Director<br>Disha Consultants, Jabalpur</p>
					</div>
					<div class="members">
						<img src="./Images/BOD/subsmy.png">
						<h3>Shri Subrahmanya S V</h3>
					  <p>Member</p>
					  <p>Former VC<br>Infosys Ltd. Bengluru</p>
					</div>
					<div class="members">
						<img src="./Images/BOD/pkjain.png">
						<h3>Prof. Prashant K. Jain</h3>
					     <p>Member</p>
					     <p>Professor<br>PDPM IIITDM Jabaplpur</p>
					</div>
					<div class="members">
						<img src="./Images/BOD/sns.png">
						<h3>Prof. Sanjeev N. Sharma</h3>
					     <p>Member</p>
					     <p>Professor<br>PDPM IIITDM Jabaplpur</p>
					</div>
					<div class="members">
						<img src="./Images/BOD/pnkon.png">
						<h3>Prof. P.N Kondekar</h3>
					     <p>Member</p>
					     <p>Director(I/C)<br>PDPM IIITDM Jabaplpur</p>
					</div>
					<div class="members">
						<img src="./Images/BOD/swapnali.png">
						<h3>Ms. Swapnali D.Gadekar</h3>
					     <p>Secretary</p>
					     <p>Acting Registrar<br>PDPM IIITDM Jabalpur
					     </p>
					</div>
				</div>
			</div>
			<section class="secondAbout">
				<div class="otherPage">
					<a href="./bogMinutes">BOG Minutes</a> <a href="./bogAgenda">BOG Agenda</a> <a href="./bogRemumbered">BOG Renumbered</a> 
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

	var button = document.getElementsByClassName("card");
	button.addEventListener("Click",linkOpen);

</script>
</html>
