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

			<div class="aboutHeader">
				<h2>Administration</h2>
			</div>
					<br>
				<div class="administor">
						<div class="adminProfile">
								<div class="personDetails">
									<img src="./Images/Administrators/pnkon.png" alt="Director Sir"/>
									<span class="adminName">
										Prof. P.N Kondekar
									</span>
									<span class="adminPost">
										Director / Dean(P&D)
									</span>
								</div>
						</div>

						<div class="adminProfile">
										<div class="personDetails">
												<img src="./Images/Administrators/vijayG.jpg" alt="V.K Gupta"/>
												<span class="adminName">
													Prof. Vijay Kumar Gupta
												</span>
												<span class="adminPost">
													Dean(Academics)
												</span>
										</div>
										<div class="personDetails">
												<img src="./Images/Administrators/tanuja.png" alt="Tanuja Sheroy"/>
												<span class="adminName">
													Prof. Tanuja Sheorey
												</span>
												<span class="adminPost">
													Dean(Students)
												</span>
										</div>
										<div class="personDetails">
												<img src="./Images/Administrators/atul.png" alt="Atul Sir"/>
												<span class="adminName">
													Prof. Atul Gupta
												</span>
												<span class="adminPost">
													HOD(CSE)<br>Dean(Planning & Development)
												</span>
										</div>
										<div class="personDetails">
												<img src="./Images/Administrators/pkpadhy.png" alt="Prabin Padhy"/>
												<span class="adminName">
													Prof. Prabin Kumar Padhy
												</span>
												<span class="adminPost">
													Dean(RSPC)
												</span>
										</div>
						</div>


						<div class="adminProfile">
									<div class="personDetails">
											<img src="./Images/Administrators/pkJain.png" alt="Prashant Jain"/>
											<span class="adminName">
												Prof. Prashant K. Jain
											</span>
											<span class="adminPost">
													HOD(ME)
											</span>
									</div>

									<div class="personDetails">
											<img src="./Images/Administrators/anilkr.png" alt="Dr. Anil Kr."/>
											<span class="adminName">
												Dr. Anil Kumar
											</span>
											<span class="adminPost">
													HOD(EC)
											</span>
									</div>

									<div class="personDetails">
											<img src="./Images/Administrators/mkroy.png" alt="Dr. Mukesh"/>
											<span class="adminName">
												Dr. Mukesh Kumar Roy
											</span>
											<span class="adminPost">
													HOD(NS)
											</span>
									</div>

									<div class="personDetails">
											<img src="./Images/Administrators/puneetT.png" alt="Puneet Tandon"/>
											<span class="adminName">
												Prof. Puneet Tandon
											</span>
											<span class="adminPost">
													HOD(SM)
											</span>
									</div>
									<div class="personDetails">
											<img src="./Images/Administrators/prabir.png" alt="Prabir Mukhopadhyay"/>
											<span class="adminName">
												Dr.Prabir Mukhopadhyay
											</span>
											<span class="adminPost">
													HOD(Design)
											</span>
									</div>
									<div class="personDetails">
											<img src="./Images/Administrators/sag.png" alt="sag"/>
											<span class="adminName">
												Dr. Sunil Agrawal
											</span>
											<span class="adminPost">
													HOD(Liberal Arts)
											</span>
									</div>

						</div>

						<div class="adminProfile">
							<div class="personDetails">
									<img src="./Images/Administrators/swapnali.png" alt="Ms. Swapnali"/>
									<span class="adminName">
										Mrs. Swapnali Gadekar
									</span>
									<span class="adminPost">
											Deputy Registrar
									</span>
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
