<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" type="jpg/png" href="./logo_college.png" sizes="16x16">
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

			<div class="aboutHeader" id="adminHeader">
				<h2>Finance Commitee</h2>
			</div>

			<div class="Directors">
				<div class="profile">
					<div class="members">
						<img src="./Images/FC/dpgs.png">
						<h3>Shri Deepak Ghaisas</h3>
					     <p>Chairman of the Board</p>
					</div>

          			<div class="members">
          				<img src="./Images/FC/ABT.png">
						<h3>Ms. Atreyee Borooah Thekedath</h3>
					    <p>Member</p>
					    <p>Director<br>Web.com (India) Pvt. Ltd.</p>
					</div>

					<div class="members">
						<img src="./Images/FC/pkp.png">
						<h3>Shri Prashant Pole</h3>
					     <p>Member</p>
					     <p>Director<br>Disha Consultants, Jabalpur</p>
					</div>

					<div class="members">
						<h3>Shri Rakesh Ranjan</h3>
					     <p>Member</p>
					     <p>Additional Secretary<br>(IITs/IIITs/TE/TC/TEQUIP)</p>
					</div>

					<div class="members">
						<h3>Shri Anil Kumar</h3>
					     <p>Member</p>
					     <p>Director(Finance)<br>Integrated Finance Division</p>
					</div>

          			<div class="members">
          				<img src="./Images/FC/pnkon.png">
						<h3>Prof. P.N Kondekar</h3>
					     <p>Member</p>
					     <p>Director(I/C)<br>PDPM IIITDM Jabaplpur</p>
					</div>


          			<div class="members">
          				<img src="./Images/FC/swapnali.png">
						<h3>Ms. Swapnali D.Gadekar</h3>
					     <p>Secretary</p>
					     <p>Acting Registrar<br>PDPM IIITDM Jabalpur
					     </p>
					</div>

				</div>
			</div>
			<section class="secondAbout">
				<div class="otherPage">
					<a href="./finanAgm.php">Finance Committee Agenda / Minutes</a>
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
	function stickyFunction() 
	{
	  if (window.pageYOffset >= sticky) {
	    nbar.classList.add("sticky");
	  } else 
	  	{
	    	nbar.classList.remove("sticky");
		}
	}

</script>
</html>
