<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Administrative Staff | IIITDMJ</title>
				<link rel="icon" type="jpg/png" href="./logo_college.png" sizes="16x16">
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
					<h2>Office Administration @iiitdmj</h2>
				</div>
<!--Horizontal rule -->

	<div class="bodyContent" id = "deanACD" style="display:block">


		<div class = "tableContainer">
			<div class="office_of_Dean">

				<div class="office_of_Dean profile1">
					<img src="./Images/DeanACD/vijayG.jpg" class="" alt="Dean Academic" />
					<div class="office_of_Dean text">
						<h2>Shri R P Dwivedi</h2>
						<h3>Joint Registrar</h3>
						<h3>Academics</h3>
					</div>
				</div>

					<br>

					<div class="office_of_Dean profile1">
					<img src="./Images/DeanACD/vijayG.jpg" class="" alt="Dean Academic" />
					<div class="office_of_Dean text">
						<h2>Mrs. Swapnali D Gadekar</h2>
						<h3>Deputy Registrar</h3>
						<h3>Finance & Accounts</h3>
					</div>
				</div>

						<br>

					<div class="office_of_Dean profile1">
					<img src="./Images/DeanACD/vijayG.jpg" class="" alt="Dean Academic" />
					<div class="office_of_Dean text">
						<h2>Shri Rizwan Ahmed</h2>
						<h3>Deputy Registrar</h3>
						<h3>Establishment, <br>General Administration <br> and Internal Audit</h3>
					</div>
				</div>

					<br>
					
					<div class="office_of_Dean profile1">
					<img src="./Images/DeanACD/vijayG.jpg" class="" alt="Dean Academic" />
					<div class="office_of_Dean text">
						<h2>Shri Santosh Mahobia</h2>
						<h3>Assistant Registrar</h3>
						<h3>Academics, Student Affairs,<br> Official Language Officer, CPIO</h3>
					</div>
				</div>

					<br>

					<div class="office_of_Dean profile1">
					<img src="./Images/DeanACD/vijayG.jpg" class="" alt="Dean Academic" />
					<div class="office_of_Dean text">
						<h2>Shri Shailesh Sharma</h2>
						<h3>Assistant Registrar</h3>
						<h3>Purchase and Store & PS to Director</h3>
					</div>
				</div>

					<br>

					<div class="office_of_Dean profile1">
					<img src="./Images/DeanACD/vijayG.jpg" class="" alt="Dean Academic" />
					<div class="office_of_Dean text">
						<h2>Mrs. Priti Patel</h2>
						<h3>Assistant Registrar</h3>
						<h3>Research, <br> Sponsored Projects & Consultancy (RSPC),<br>  Innovation & Incubation Cell and Patent <br> & Copyright Cell, International Affairs</h3>
					</div>
				</div>

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
