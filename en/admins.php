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

			<div class="bodyContent" style="display:block">
				<br>
				<button class="adminDetails">Director</button>
					<div class="adminProfile">
					  	<div class="columnDean">
    				<img src="./Images/DeanACD/vijayG.jpg" alt="Vijay" >
					<h5>Prof. Vijay Kumar Gupta</h5>
					<h4>Dean(Academics)</h4>
  				</div>
					</div>
				<button class="adminDetails">Deans</button>
					<div class="adminProfile">
					  	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
				<button class="adminDetails">Head of Disciplines</button>
					<div class="adminProfile">
					  	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
				<button class="adminDetails">Registrar</button>
					<div class="adminProfile">
					  	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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
