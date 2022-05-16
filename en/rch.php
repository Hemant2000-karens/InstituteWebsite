<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Research Staff | IIITDMJ</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
       <link rel="stylesheet" type="text/css" href="mobile.css">
</head>
<?php include './topheader.php'; ?>
<div class = "container">
<body>

	<?php include "./Header.php"; ?>

	<?php include "./navbar.php"; ?>
	<span class="br"></span>
	
				<div class="aboutHeader" id="adminHeader">
					<h2>Research Staff @iiitdmj</h2>
				</div>
<!--Horizontal rule -->

	<div class="bodyContent" id = "deanACD" style="display:block">


		<div class = "tableContainer">
			<div class="office_of_Dean">

				<div class="office_of_Dean profile1">
						<img src="./Images/DeanACD/vijayG.jpg" class="" alt="Dean Academic" />
						<div class="office_of_Dean text">
							<h2>Mr. Aditya Sharma</h2>
							<h3>Technical Officer, <br>Computer Science and Engineering Discipline</h3>
						</div>
					</div>

					<br>

					<div class="office_of_Dean profile1">
						<img src="./Images/DeanStd/tanuja.png" class="" alt="Dean Students" />
						<div class="office_of_Dean text">
							<h2>Mr. Awadhesh K. Singh</h2>
							<h3>Technical Officer, <br>Mechanical Engineering Discipline</h3>
							<h3>Design, Analysis and Development
									of<br>Interdisciplinary Systems (Mechatronics, MEMS and NEMS)
								</h3>
						</div>
					</div>

						<br>

					<div class="office_of_Dean profile1">
						<img src="./Images/DeanStd/tanuja.png" class="" alt="Dean Students" />
						<div class="office_of_Dean text">
							<h2>Mr. Dada Saheb Ramteke</h2>
							<h3>Technical Officer, <br>Mechanical Engineering Discipline</h3>
							<h3>Rotor Dynamics, Tribology</h3>
						</div>
					</div>

					<br>
		

		</div>

	</div>
</div>

	</body>
</div>

<?php include './footer.php' ?>


<script type="text/javascript">

	function openTab(evt, pageName) 
	{
  	var i, tabcontent, tablinks;
  	tabcontent = document.getElementsByClassName("bodyContent");
  	for (i = 0; i < tabcontent.length; i++) 
  	{
    	tabcontent[i].style.display = "none";
  	}
  	tablinks = document.getElementsByClassName("tablinks");
  	for (i = 0; i < tablinks.length; i++) 
  	{
    tablinks[i].className = tablinks[i].className.replace(" active1", "");
  }

  document.getElementById(pageName).style.display = "block";
  evt.currentTarget.className += " active1";
}

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
</script>
</html>
