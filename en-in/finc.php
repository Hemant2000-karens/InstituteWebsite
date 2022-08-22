<!DOCTYPE html>
<html>
<head>
	<?php include_once './headTag.php';?>
	<title>Financial Commitee | IIITDMJ</title>
</head>
	<?php include './topheader.php';?>
	<div class="container">
		<body>
			<?php include './header2.php';?>
			<span class="br"></span>

			<div class="aboutHeader" id="adminHeader">
				<h2>Finance Commitee</h2>
			</div>

			<div class="Directors">
				<div class="profile">
					<div class="members">
						<img src="../Images/FC/dpgs.png">
						<h3>Shri Deepak Ghaisas</h3>
					     <p>Chairman of the Board</p>
					</div>

          			<div class="members">
          				<img src="../Images/FC/ABT.png">
						<h3>Ms. Atreyee Borooah Thekedath</h3>
					    <p>Member</p>
					    <p>Director<br>Web.com (India) Pvt. Ltd.</p>
					</div>

					<div class="members">
						<img src="../Images/FC/pkp.png">
						<h3>Shri Prashant Pole</h3>
					     <p>Member</p>
					     <p>Director<br>Disha Consultants, Jabalpur</p>
					</div>

					<div class="members">
						<img src="../Images/BOD/avat.png">
						<h3>Shri Rakesh Ranjan</h3>
					     <p>Member</p>
					     <p>Additional Secretary<br>(IITs/IIITs/TE/TC/TEQUIP)</p>
					</div>

					<div class="members">
						<img src="../Images/BOD/avat.png">
						<h3>Shri Anil Kumar</h3>
					     <p>Member</p>
					     <p>Director(Finance)<br>Integrated Finance Division</p>
					</div>

          			<div class="members">
          				<img src="../Images/FC/pnkon.png">
						<h3>Prof. P.N Kondekar</h3>
					     <p>Member</p>
					     <p>Director(I/C)<br>PDPM IIITDM Jabaplpur</p>
					</div>


          			<div class="members">
          				<img src="../Images/FC/swapnali.png">
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

<script type="text/javascript">
  var indexNavBar = document.getElementById("mainNav");
  var stickynav = indexNavBar.offsetTop;
    window.onscroll = function()
    {
      stickyNavbar()
    };

    function stickyNavbar() {
    if (window.pageYOffset >= stickynav) {
      indexNavBar.classList.add("indexNav2");
    } else {
      indexNavBar.classList.remove("indexNav2");
    }
  }
</script>
</html>
