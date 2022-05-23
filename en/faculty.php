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