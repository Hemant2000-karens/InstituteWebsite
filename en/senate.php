<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BWC | IIITDMJ</title>
	<link rel="icon" type="jpg/png" href="./logo_college.png" sizes="16x16">
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
				<h2>Senate</h2>
			</div>

			<div class="senate">
				
			</div>

			<section class="secondAbout">
				<div class="otherPage">
				<a href="./bogMinutes">Senate Minutes</a> <a href="./bogAgenda">Senate Agenda</a>
				</div>
			</section>

		</body>

	</div>
<!--body ends here-->
<div class="footerContent">
	<span class=""><sup style="font-size:bolder" >*</sup> Constitution Of The Following New Senate Under Clause 16(I) Of The IIIT Act 2014</span>
		<ol start="1">
			<li><a href="#"> Matter</a></li>
			<li><a href="#"> Matter</a></li>
			<li><a href="#"> Matter</a></li>
		</ol>
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
