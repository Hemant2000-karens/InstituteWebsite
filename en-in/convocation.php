<!DOCTYPE html>
	<html>
		<head>
			<?php include_once './headTag.php'; ?>
			<title>Convocation | IIITDMJ</title>
		</head>

	    <?php include './topheader.php'; ?>
	   	<div class="container">
	    	<body>
	    	<?php include "./header2.php";
				include './connectionDB.php'; ?>

				<span class="br"></span>
	
				<div class="aboutHeader" id="adminHeader">
					<h2>Convocation</h2>
				</div>

				<span class="br"></span>

				<div class="AcMain">
					
					


					








				</div>
			</body>
		</div>
<?php include './footer.php' ;?>

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