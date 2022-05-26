<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" type="jpg/png" href="./logo_college.png" sizes="16x16">
	<title>Faculty | IIITDMJ</title>
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
			<?php include './connectionDB.php'; ?>
			<span class="br"></span>

			<div class="aboutHeader" id="adminHeader">
				<h2>Faculty</h2>
			</div>
			

			<div class="faculty_grid_main">

				<div class="deptHeading">
					<h3>Computer Science and Enginnering</h3>
				</div>
				<br>


				<div class="faculty_grid">
					
					<?php 

						$query = "SELECT * from faculty where department = 'cse' order by name";
						$result = $link ->query($query);

						if($result -> num_rows > 0)
						{
							while ($rows = $result -> fetch_assoc()) 
							{
								echo ("<div class='faculty_profile'>"."<div class ='rotateCard'> <div class='facultyUpper'> <img src='./Images/faculty/cse/".$rows['photo']."' alt='".$rows['name']."'> </div> <div class='facultyLower'> <h4>".$rows['name']."</h4> <h5>".$rows['position']."</h5> <span>".$rows['Area_of_Research']."</span> </div>". "<div class='backLink'> <a target='_blank' href='".$rows['Adm_No']."'>". "Visit Profile</a> </div> </div> </div>");
							}
						}
						
					?>

					<!-- Profile card Ends-->
						
				</div>

				<br>
				<div class="deptHeading">
					<h3>Mechanical Enginnering</h3>
				</div>

				<br>
				<div class="faculty_grid">
					
					<?php

					$query = "SELECT * from faculty where department = 'me' order by name";
						$result = $link ->query($query);

						if($result -> num_rows > 0)
						{
							while ($rows = $result -> fetch_assoc()) 
							{
								echo ("<div class='faculty_profile'>"."<div class ='rotateCard'> <div class='facultyUpper'> <img src='./Images/faculty/me/".$rows['photo']."' alt='".$rows['name']."'> </div> <div class='facultyLower'> <h4>".$rows['name']."</h4> <h5>".$rows['position']."</h5> <span>".$rows['Area_of_Research']."</span> </div>". "<div class='backLink'> <a target='_blank' href='".$rows['Adm_No']."'>". "Visit Profile</a> </div> </div> </div>");
							}
						}
						
					?>


				</div>

				<div class="deptHeading">
					<h3>Electrical and Electronics Engineering</h3>
				</div>
				<br>
				<div class="faculty_grid">
					
					<?php 

					$query = "SELECT * from faculty where department = 'ece' order by name";
						$result = $link ->query($query);

						if($result -> num_rows > 0)
						{
							while ($rows = $result -> fetch_assoc()) 
							{
								echo ("<div class='faculty_profile'>"."<div class ='rotateCard'> <div class='facultyUpper'> <img src='./Images/faculty/cse/".$rows['photo']."' alt='".$rows['name']."'> </div> <div class='facultyLower'> <h4>".$rows['name']."</h4> <h5>".$rows['position']."</h5> <span>".$rows['Area_of_Research']."</span> </div>". "<div class='backLink'> <a target='_blank' href='".$rows['Adm_No']."'>". "Visit Profile</a> </div> </div> </div>");
							}
						}

					?>
				</div>

				<br>
				<div class="deptHeading">
					<h3>Design</h3>
				</div>
				<br>
				<div class="faculty_grid">
					
					<?php

					$query = "SELECT * from faculty where department = 'des' order by name";
						$result = $link ->query($query);

						if($result -> num_rows > 0)
						{
							while ($rows = $result -> fetch_assoc()) 
							{
								echo ("<div class='faculty_profile'>"."<div class ='rotateCard'> <div class='facultyUpper'> <img src='./Images/faculty/cse/".$rows['photo']."' alt='".$rows['name']."'> </div> <div class='facultyLower'> <h4>".$rows['name']."</h4> <h5>".$rows['position']."</h5> <span>".$rows['Area_of_Research']."</span> </div>". "<div class='backLink'> <a target='_blank' href='".$rows['Adm_No']."'>". "Visit Profile</a> </div> </div> </div>");
							}
						}

					?>
				</div>
				<br>
				<div class="deptHeading">
					<h3>Natural Science</h3>
				</div>
				<br>
				<div class="faculty_grid">
					
					<?php 

					$query = "SELECT * from faculty where department = 'cse' order by name";
						$result = $link ->query($query);

						if($result -> num_rows > 0)
						{
							while ($rows = $result -> fetch_assoc()) 
							{
								echo ("<div class='faculty_profile'>"."<div class ='rotateCard'> <div class='facultyUpper'> <img src='./Images/faculty/cse/".$rows['photo']."' alt='".$rows['name']."'> </div> <div class='facultyLower'> <h4>".$rows['name']."</h4> <h5>".$rows['position']."</h5> <span>".$rows['Area_of_Research']."</span> </div>". "<div class='backLink'> <a target='_blank' href='".$rows['Adm_No']."'>". "Visit Profile</a> </div> </div> </div>");
							}
						}
					?>
				</div>
				<br>
				<div class="deptHeading">
					<h3>Liberal Arts</h3>
				</div>
				<br>
				<div class="faculty_grid">
					
					<?php
						$query = "SELECT * from faculty where department = 'cse' order by name";
						$result = $link ->query($query);

						if($result -> num_rows > 0)
						{
							while ($rows = $result -> fetch_assoc()) 
							{
								echo ("<div class='faculty_profile'>"."<div class ='rotateCard'> <div class='facultyUpper'> <img src='./Images/faculty/cse/".$rows['photo']."' alt='".$rows['name']."'> </div> <div class='facultyLower'> <h4>".$rows['name']."</h4> <h5>".$rows['position']."</h5> <span>".$rows['Area_of_Research']."</span> </div>". "<div class='backLink'> <a target='_blank' href='".$rows['Adm_No']."'>". "Visit Profile</a> </div> </div> </div>");
							}
						}
						$link -> close();

					?>
				</div>
				<br>

			</div>

		</body>
	</div>
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
	</script>
	<?php include './footer.php';?>
</html>