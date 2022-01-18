<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>IIITDMJ | Financial Commitee</title>
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

			<div class="aboutHeader">
				<h2>Finance Commitee</h2>
			</div>

			<div class="Directors">
				<div class="profile">
					<div class="members">
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
						<h3>Dr. Jaideep Kumar Mishra</h3>
					     <p>Member</p>
					     <p>Joint Secretary & Group Coordinator<br>Ministry of Electronics and Information Technology</p>
					</div>


					<div class="members">
						<h3>Prof. R. V. Raja kumar</h3>
					     <p>Member</p>
					     <p> Director<br>Indian Institute of Technology Bhubaneswar</p>
					</div>
				</div>

				<div class="profile">
					<div class="members">
						<h3>Prof. Shailendra Singh</h3>
					     <p>Member</p>
					     <p>Director<br>IIM Ranchi</p>
					</div>
					<div class="members">
						<h3>Ms. Atreyee Borooah Thekedath</h3>
					     <p>Member</p>
					     <p>Director<br>Web.com (India) Pvt. Ltd.</p>
					</div>
					<div class="members">
						<h3>Shri Prashant Pole</h3>
					     <p>Member</p>
					     <p>Director<br>Disha Consultants, Jabalpur</p>
					</div>
					<div class="members">
						<h3>Shri Subrahmanya S V</h3>
					     <p>Member</p>
					     <p>Former VC<br>Infosys Ltd. Bengluru</p>
					</div>
					<div class="members">
						<h3>Prof. Prashant K. Jain</h3>
					     <p>Member</p>
					     <p>Professor<br>PDPM IIITDM Jabaplpur</p>
					</div>
				</div>

				<div class="profile">
					<div class="members">
						<h3>Prof. Sanjeev N. Sharma</h3>
					     <p>Member</p>
					     <p>Professor<br>PDPM IIITDM Jabaplpur</p>
					</div>
					<div class="members">
						<h3>Prof. P.N Kondekar</h3>
					     <p>Member</p>
					     <p>Director(I/C)<br>PDPM IIITDM Jabaplpur</p>
					</div>
					<div class="members">
						<h3>Ms. Swapnali D.Gadekar</h3>
					     <p>Secretary</p>
					     <p>Acting Registrar<br>PDPM IIITDM Jabalpur
					     </p>
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
	var button = document.getElementsByClassName("card");
	button.addEventListener("Click",linkOpen);


	function linkOpen(str)
	{
		switch(str)
		{
			case 'bod':
				window.open('https://www.google.com', '_blank');
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
