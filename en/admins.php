<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Administration | IIITDMJ</title>
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
				<h2>Administration</h2>
			</div>

			<div class="adminPageContent" style="display:block">
				<br>
				<button class="adminDetails">Director</button>
					<div class="adminProfile">
						<div class="localAdminProfile">
	    				<img src="./Images/DeanPnD/pnkon.png" alt="PnKondekar" >
							<h5>Prof. P.N Kondekar</h5>
							<h4>Director(Acting)/Dean(P&D)</h4>
	  				</div>
					</div>


					<span class="br"></span>


				<button class="adminDetails">Deans</button>
					<div class="adminProfile">


					  	<div class="gridprofile"> 
					  		<div class="localAdminProfile">
    							<img src="./Images/DeanACD/vijayG.jpg" alt="Vijay" >
									<h5>Prof. Vijay Kumar Gupta</h5>
									<h4>Dean(Academics)</h4>
								</div>
					
							<div class="localAdminProfile">
	    						<img src="./Images/DeanStd/tanuja.png" alt="tanuj" >
								<h5>Prof. Tanuja Sheorey</h5>
								<h4>Dean(Students)</h4>
							</div>

							<div class="localAdminProfile">
	    						<img src="./Images/DeanPnD/pnkon.png" alt="P.N Kondekar" >
								<h5>Prof. P.N Kondekar</h5>
								<h4>Dean(Planning & Development)</h4>
							</div>

							<div class="localAdminProfile">
    							<img src="./Images/DeanRSPC/pkpadhy.png" alt="Vijay" >
								<h5>Prof. Prabin Kumar Padhhy</h5>
								<h4>Dean(RSPC)</h4>
							</div>

							<div class="localAdminProfile">
	    						<img src="./Images/DeanPnD/atul.png" alt="Vijay" >
								<h5>Prof. Atul Gupta</h5>
								<h4>Associate Dean(Planning & Development)</h4>
							</div>
						</div>


					</div>


					<span class="br"></span>


				<button class="adminDetails">Head of Disciplines</button>
					<div class="adminProfile">
					  	
						<div class="gridprofile"> 
					  		<div class="localAdminProfile">
    							<img src="./Images/DeanPnD/atul.png" alt="Atul Gupta" >
								<h5>Prof. Atul Gupta</h5>
								<h4>CSE</h4>
							</div>
					
							<div class="localAdminProfile">
	    						<img src="./Images/Administrators/pkpadhy.png" alt="Dr.Prabir Mukhopadhyay" >
								<h5>Dr. Prabir Mukhopadhyay</h5>
								<h4>Design</h4>
							</div>

							<div class="localAdminProfile">
	    						<img src="./Images/Administrators/anilkr.png" alt="Anil Kumar" >
								<h5>Dr. Anil Kumar</h5>
								<h4>ECE</h4>
							</div>

							<div class="localAdminProfile">
    							<img src="./Images/Administrators/pkjain.png" alt="Prashant" >
								<h5>Prof. Prashant K. Jain</h5>
								<h4>ME</h4>
							</div>

							<div class="localAdminProfile">
	    						<img src="./Images/Administrators/mkroy.png" alt="Mukesh" >
								<h5>Dr. Mukesh Kumar Roy</h5>
								<h4>NS</h4>
							</div>

							<div class="localAdminProfile">
	    						<img src="./Images/Administrators/puneetT.png" alt="Puneet" >
								<h5>Prof. Puneet Tandon</h5>
								<h4>Smart Manufacturing</h4>
							</div>

							<div class="localAdminProfile">
								<img src="./Images/Administrators/sag.png" alt="Sunil" >
								<h5>Dr. Sunil Agrawal</h5>
								<h4>Liberal Arts</h4>
							</div>
						</div>


					</div>


					<span class="br"></span>

				<button class="adminDetails">Registrar</button>
					<div class="adminProfile">
						<div class="gridprofile">
					  	<div class="localAdminProfile">
    						<img src="./Images/Administrators/swapnali.png" alt="Swapnali" >
								<h5>Mrs. Swapnali Gadekar</h5>
								<h4>Deputy Registrar</h4>
							</div>
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

<script type="text/javascript" src="./script.js"></script>
</html>
