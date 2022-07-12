<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" type="jpg/png" href="./logo_college.png" sizes="16x16">
	<title>About Us | IIITDMJ</title>
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
				<h2>About Us</h2>
			</div>
			<div class="body">
				Founded in 2005 as the Jabalpur Engineering College, Indian Institute of Information Technology, Jabalpur focuses on Information Technology enabled Design and Manufacturing. It is a Institute of National Importance under the IIIT Act of the Government of India. The institute appears in the list of top 100 engineering colleges in India.

				The institute offers BTech program for computer science engineering, mechanical engineering and electronics and communication engineering and Bachelor course in Design.

				Undergraduate students are admitted through Joint Entrance Examination(Main) (JEE MAIN) and the UCEED, while post graduate students are admitted through GATE( for MTech Courses) and CEED( for Design course).
			</div>

			<section class="secondAbout">
				<div class="otherPage">
					<div class="card" onclick="linkOpen('bod')">
						<img src="../icons/bod.png"/>
						<figcaption>Board Of Governors</figcaption>
					</div>
					<div class="card" onclick="linkOpen('adm')">
						<img src="../icons/admins.png"/>
						<figcaption>Administration</figcaption>
					</div>
					<div class="card" onclick="linkOpen('lad')">
						<img src="../icons/locala.png"/>
						<figcaption>Local Administration</figcaption>
					</div>
					<div class="card" onclick="linkOpen('ms')">
							<img src="../icons/senate.png"/>
						<figcaption>Members of Senate</figcaption>
					</div>
					<div class="card" onclick="linkOpen('fc')">
						<img src="../icons/finc.png"/>
						<figcaption>Finance Commitee</figcaption>
					</div>
					<div class="card" onclick="linkOpen('mv')">
						<img src="../icons/mivi.png"/>
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