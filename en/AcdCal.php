<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Academics | IIITDMJ</title>
			<meta http-equiv="refresh" content="3000">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<link rel="stylesheet" href="./style.css">
    	<link rel="stylesheet" type="text/css" href="./mobile.css">
		</head>

	    <?php include './topheader.php';?>
	   	<div class="container">
	    	<body>
	    	<?php include './Header.php';?>

				<?php include "./navbar.php";?>

				<span class="br"></span>
	
				<div class="aboutHeader">
					<h2>Academic Calander</h2>
				</div>

				<div class="AcMain">

					<div class="acdCalTabView">
  						<button class="acdCalButton" onclick="open(event, 'London')" id="defaultOpen">B.Tech</button>
  						<button class="acdCalButton" onclick="openCity(event, 'Paris')">Paris</button>
 					 		<button class="acdCalButton" onclick="openCity(event, 'Tokyo')">Tokyo</button>
					</div>
					<div id="London" class="tabcontent">
  					<h3>London</h3>
  					<p>London is the capital city of England.</p>
					</div>

					<div id="Paris" class="tabcontent">
  					<h3>Paris</h3>
  					<p>Paris is the capital of France.</p> 
					</div>

					<div id="Tokyo" class="tabcontent">
					  <h3>Tokyo</h3>
					  <p>Tokyo is the capital of Japan.</p>
					</div>
				</div>
			</body>
		</div>

			<?php include './footer.php'?>
		<script>
		var coll = document.getElementsByClassName("acdpB");
		var i;

		for (i = 0; i < coll.length; i++) {
		  coll[i].addEventListener("click", function() {
		    this.classList.toggle("show");
		    var content = this.nextElementSibling;
		    if (content.style.maxHeight){
		      content.style.maxHeight = null;
		    } else {
		      content.style.maxHeight = content.scrollHeight + "px";
		    } 
		  });
		}
		</script>
</html>