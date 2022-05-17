<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" type="jpg/png" href="./logo_college.png" sizes="16x16">
	<title>Central Mess | IIITDMJ</title>
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
	
				<div class="aboutHeader" id="adminHeader">
					<h2>Central Mess@iiitdmj</h2>
				</div>

				<div class="AcMain">
						
						<div class="messIntro">					
							<p>
								PDPM IIITDMJ dklfjalksfjjgfaffda
							</p>
						</div>

							<div class="office_of_Dean">
								
								<h3 class="hrclass"><span>Administration</span></h3>

								<div class="office_of_Dean profile1">
									<img src="./Images/DeanStd/tanuja.png" class="" alt="Dean Students" />
									<div class="office_of_Dean text">
										<h2>Prof. Tanuja Sheroy </h2>
										<h3>Professor, Mechanical Engineering Discipline<br>
									Dean (Students)</h3>
									</div>
								</div>

									<br>

							<div class="adminStaff">
							
								<div class="office_of_Dean profile2">
									<img src="./Images/DeanACD/santosh.jpg" class="" alt="Dean Academic" />
									<div class="office_of_Dean text">
										<h2>Dr. Harpreet Singh</h2>
										<h3>Faculty Incharge, Central Mess</h3>
									</div>
								</div>

								<div class="office_of_Dean profile2">
									<img src="./Images/DeanACD/sandeep.jpg" class="" alt="Dean Academic" />
									<div class="office_of_Dean text">
										<h2>Mr. Navjeet Bagga</h2>
										<h3>Associate faculty Incharge, Central Mess</h3>
									</div>
								</div>
						
							</div>
				
						</div>


















				</div>


			</body>
		</div>

<?php include './footer.php'?>
<script>
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