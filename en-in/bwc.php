<!DOCTYPE html>
<html>
<head>
	<?php include_once './headTag.php';?>
	<title>BWC | IIITDMJ</title>
	
</head>
	<?php include './topheader.php';?>
	<div class="container">
		<body>
			<?php include "./header2.php";?>

			<span class="br"></span>

			<div class="aboutHeader" id="adminHeader">
				<h2>Building & Works Committee</h2>
			</div>

			<div class="Directors">
				<div class="profile">
					<div class="members">
						<img src="../Images/BOD/pnkon.png">
						<h3>Prof. P.N Kondekar</h3>
					    <p>Director(L/C)</p>
               			<p>Chairperson(Ex-offico)</p>
					</div>
					<div class="members">
						<img src="../Images/BOD/.png">
						<h3>Shri Atul Kumar Pandey</h3>
					     <p>Member</p>
					     <p>Project Engineer-cum-Estate Officer<br>Indian Institute of Technology Indore</p>
					</div>
					<div class="members">
						<img src="../Images/BOD/.png">
						<h3>Shri Rakesh Ranjan</h3>
					     <p>Member</p>
					     <p>Additional Secretary<br>(IITs/IIITs/<br>TE/TC/TEQUIP)</p>
					</div>

					<div class="members">
						<img src="../Images/BOD/psh.png">
						<h3>Prof. Shailendra Singh</h3>
					     <p>Member</p>
					     <p>Director<br>IIM Ranchi</p>
					</div>
					<div class="members">
						<img src="../Images/BOD/ABT.png">
						<h3>Ms. Atreyee Borooah Thekedath</h3>
					     <p>Member</p>
					     <p>Director<br>Web.com (India) Pvt. Ltd.</p>
					</div>
					<div class="members">
						<img src="../Images/BOD/pkp.png">
						<h3>Shri Prashant Pole</h3>
					     <p>Member</p>
					     <p>Director<br>Disha Consultants, Jabalpur</p>
					</div>

					<div class="members">
						<img src="../Images/BOD/swapnali.png">
						<h3>Ms. Swapnali D.Gadekar</h3>
					     <p>Secretary</p>
					     <p>Acting Registrar<br>PDPM IIITDM Jabalpur
					     </p>
					</div>
				</div>
			</div>
			<section class="secondAbout">
				<div class="otherPage">
					<a href="./bwcAgm.php">BWC Agenda / Minutes</a>
				</div>
			</section>

		</body>
	</div>

<?php include './footer.php'?>

<script type="text/javascript" src="./script.js"></script>
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
