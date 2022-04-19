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
					<h2>Academic Programmes</h2>
				</div>



				<div class="AcMain">

					<p>
						The Institute offers academic programmes, at undergraduate and postgraduate levels, which encourage students to not only excel in course work but also carry out research in a chosen specialization.
					</p>
					<div class="AcademicsNav">
						<button class="acdpB">B.Tech Programmes</button>
						<div class="btechAcademic">
							<h4>
								Institute offers Four Year Undergraduate degree (B.Tech.) programme in:
							</h4>
							<ul>
								<li>
									<i class="bi bi-arrow-right-circle-fill"></i>
									Computer Science and Engineering
								</li>
								<li>
									<i class="bi bi-arrow-right-circle-fill"></i>
									Electronics and Communication Engineering
								</li>
								<li>
									<i class="bi bi-arrow-right-circle-fill"></i>
									Mechanical Engineering
								</li>
								<li>
									<i class="bi bi-arrow-right-circle-fill"></i>
									Smart Manufacturing
								</li>
								<li>
									<i class="bi bi-arrow-right-circle-fill"></i>
									Bachelor of Designing
								</li>
								<li>
									<i class="bi bi-arrow-right-circle-fill"></i>
									Liberal Arts
								</li>
							</ul>
						</div>
						<br>
						<button class="acdpB">B.Des Programmes</button>
						<div class="bdesAcademic">
							
						</div>
						<br>
						<button class="acdpB">M.Tech Programmes</button>
						<div class="mtechAcademic">
							
						</div>
						<br>
						<button class="acdpB">M.Des Programmes</button>
						<div class="mdesAcademic">
							
						</div>
						<br>
						<button class="acdpB">Ph.D Programmes</button>
						<div class="btechAcademic">
							
						</div>
						<button class="acdpB">Ph.D Programmes</button>
						<div class="btechAcademic">
							
						</div>
						<button class="acdpB">Ph.D Programmes</button>
						<div class="btechAcademic">
							
						</div>
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