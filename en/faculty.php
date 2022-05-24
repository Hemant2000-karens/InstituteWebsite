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


					<!-- Profile card Starts-->
					<div class="faculty_profile" onclick="changeActive(event);">

						<div class="rotateCard">

							<div class="facultyUpper">
								<img src="./Images/faculty/cse/abv.jpg" alt="Abhishek Verma">
							</div>


							<div class="facultyLower">
								<h4>Abhishek Verma</h4>
								<h5>Assistant Professor</h5>
								<span>Computer Networks, Information Security</span>
							</div>


							<div class="backLink">
								<a href="#">Visit Profile</a>
							</div>


						</div>

					</div>
					<!-- Profile card Ends-->

					<!-- Profile card Starts-->
					<div class="faculty_profile">

						<div class="rotateCard">

							<div class="facultyUpper">
								<img src="./Images/faculty/cse/abv.jpg" alt="Abhishek Verma">
							</div>


							<div class="facultyLower">
								<h4>Abhishek Verma</h4>
								<h5>Assistant Professor</h5>
								<span>Computer Networks, Information Security</span>
							</div>


							<div class="backLink">
								<a href="#">Visit Profile</a>
							</div>


						</div>

					</div>
					<!-- Profile card Ends-->

					<!-- Profile card Starts-->
					<div class="faculty_profile">

						<div class="rotateCard">

							<div class="facultyUpper">
								<img src="./Images/faculty/cse/abv.jpg" alt="Abhishek Verma">
							</div>


							<div class="facultyLower">
								<h4>Abhishek Verma</h4>
								<h5>Assistant Professor</h5>
								<span>Computer Networks, Information Security</span>
							</div>


							<div class="backLink">
								<a href="#">Visit Profile</a>
							</div>


						</div>

					</div>
					<!-- Profile card Ends-->

					<!-- Profile card Starts-->
					<div class="faculty_profile">

						<div class="rotateCard">

							<div class="facultyUpper">
								<img src="./Images/faculty/cse/abv.jpg" alt="Abhishek Verma">
							</div>


							<div class="facultyLower">
								<h4>Abhishek Verma</h4>
								<h5>Assistant Professor</h5>
								<span>Computer Networks, Information Security</span>
							</div>


							<div class="backLink">
								<a href="#">Visit Profile</a>
							</div>


						</div>

					</div>
					<!-- Profile card Ends-->


				</div>

				<br>
				<div class="deptHeading">
					<h3>Mechanical Enginnering</h3>
				</div>

				<br>
				<div class="faculty_grid">
					
					<?php include './connectionDB.php';

					?>


				<!-- Profile card Starts-->
					<div class="faculty_profile">

						<div class="rotateCard">

							<div class="facultyUpper">
								<img src="./Images/faculty/cse/abv.jpg" alt="Abhishek Verma">
							</div>


							<div class="facultyLower">
								<h4>Abhishek Verma</h4>
								<h5>Assistant Professor</h5>
								<span>Computer Networks, Information Security</span>
							</div>


							<div class="backLink">
								<a href="#">Visit Profile</a>
							</div>


						</div>

					</div>
					<!-- Profile card Ends-->

					<!-- Profile card Starts-->
					<div class="faculty_profile">

						<div class="rotateCard">

							<div class="facultyUpper">
								<img src="./Images/faculty/cse/abv.jpg" alt="Abhishek Verma">
							</div>


							<div class="facultyLower">
								<h4>Abhishek Verma</h4>
								<h5>Assistant Professor</h5>
								<span>Computer Networks, Information Security</span>
							</div>


							<div class="backLink">
								<a href="#">Visit Profile</a>
							</div>


						</div>

					</div>
					<!-- Profile card Ends-->

					<!-- Profile card Starts-->
					<div class="faculty_profile">

						<div class="rotateCard">

							<div class="facultyUpper">
								<img src="./Images/faculty/cse/abv.jpg" alt="Abhishek Verma">
							</div>


							<div class="facultyLower">
								<h4>Abhishek Verma</h4>
								<h5>Assistant Professor</h5>
								<span>Computer Networks, Information Security</span>
							</div>


							<div class="backLink">
								<a href="#">Visit Profile</a>
							</div>


						</div>

					</div>
					<!-- Profile card Ends-->


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
	<script type="text/javascript">
		var proCard, fac_grid;
		proCard = document.getElementsByClassName("faculty_profile");

		proCard.addEventListener("click",function(){
			for (i = 0; i < proCard.length; i++) 
  			{
  				if(hasClass(proCard,' active'))
  				{
  					proCard[i].className = proCard[i].className.remove(" active");
  				}
  				else
  				{
  					proCard[i].className = proCard[i].className.add(" active");
  				}
  			}
		});
	</script>
	<?php include './footer.php';?>
</html>