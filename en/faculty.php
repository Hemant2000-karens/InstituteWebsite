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

			<span class="br"></span>

			<div class="aboutHeader">
				<h2>Faculty</h2>
			</div>
			

			<div class="faculty_grid_main">

				<div class="deptHeading">
					<h3>Computer Science and Enginnering</h3>
				</div>
				<br>
				<div class="faculty_grid">
					
					<?php include './connectionDB.php';
					?>



					<div class="faculty_profile">
						<div class="facultyUpper">
							<img src="./Images/faculty/cse/abv.jpg" alt="Abhishek Verma">
						</div>
						<div class="facultyLower">
							<h4>Abhishek Verma</h4>
							<h5>Assistant Professor</h5>			
						</div>
					</div>


					<div class="faculty_profile">
						<div class="facultyUpper">
							<img src="./Images/faculty/cse/apoj.png" alt="Arpita Ojha">
						</div>
						<div class="facultyLower">
							<h4>Arpita Ojha</h4>
							<h5>Professor</h5>			
						</div>
					</div>


					<div class="faculty_profile">
						<div class="facultyUpper">
							<img src="./Images/faculty/cse/abv.jpg" alt="Abhishek Verma">
						</div>
						<div class="facultyLower">
							<h4>Abhishek Verma</h4>
							<h5>Assistant Professor</h5>			
						</div>
					</div>


				</div>

				<div class="deptHeading">
					<h3>Mechanical Enginnering</h3>
				</div>
				<div class="faculty_grid">
					
					<?php include './connectionDB.php';

					






					?>
				</div>

				<div class="deptHeading">
					<h3>Electrical and Electronics Engineering</h3>
				</div>
				<div class="faculty_grid">
					
					<?php include './connectionDB.php';

					






					?>
				</div>

				<div class="deptHeading">
					<h3>Design</h3>
				</div>
				<div class="faculty_grid">
					
					<?php include './connectionDB.php';

					






					?>
				</div>

				<div class="deptHeading">
					<h3>Natural Science</h3>
				</div>
				<div class="faculty_grid">
					
					<?php include './connectionDB.php';

					






					?>
				</div>

				<div class="deptHeading">
					<h3>Liberal Arts</h3>
				</div>
				<div class="faculty_grid">
					
					<?php include './connectionDB.php';

					






					?>
				</div>


			</div>

		</body>
	</div>
	<?php include './footer.php';?>
</html>