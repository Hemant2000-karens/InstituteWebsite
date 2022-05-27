<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php  ;?></title>
	<link rel="stylesheet" type="text/css" href="facultyPage.css">
</head>
<body>
	<div class="faculty_Nav">
        <img src="./logo_college.png" alt="header"/>
        <h3>IIITDM JABALPUR</h3>
	</div>
	<span class="br"></span>

	<div class="breadcrumbs_Main">

		<div class="breadcrumbs">

			<button class="active"><?php echo "Abhishek Verma"?></button>

			<button id="nav_button" class="faculty"  onclick="linkOpen('faculty')">Faculty</button>

			<button id="nav_button" onclick="linkOpen('home')">
				<i class="bi bi-house-fill"></i>
			</button>
		</div>
	</div>

	<div class="container">
		<div class="qualification">
			<h2>Qualification</h2>
		
			<div class="edu_yr">

				<div class="yr">
					<div class="sub_year">
						<h3>
							<?php echo "2013";?>
						</h3>
					</div>
					<div class="sub_degree">
						<span class="institution">
							Uttar Pradesh Technical University Lucknow, India
						</span>
						<span class="degree">
							Bachelor of Technology
						</span>
					</div>
				</div>

				<div class="yr">
					<div class="sub_year">
						<h3>
							<?php echo "2014";?>
						</h3>
					</div>
					<div class="sub_degree">
						<span class="institution">
							National Institute of Technology Kurukshetra, India
						</span>
						<span class="degree">
							Master of Technology
						</span>
					</div>
				</div>

				<div class="yr">
					<div class="sub_year">
						<h3>
							<?php echo "2020";?>
						</h3>
					</div>
					<div class="sub_degree">
						<span class="institution">
							National Institute of Technology Kurukshetra, India
						</span>
						<span class="degree">
							Ph.D
						</span>
					</div>
				</div>


			</div>

		</div>

			<br>

		<div class="interestArea">
			<div class="interestBody">
				<div class="arTitle">
					<span>Area of Interest</span>
				</div>
				<div class="interestContent">
					<span><?php echo "Internet of Things, Intrusion Detection, Network Security";?>
					</span>
				</div>
			</div>
		</div>

			<br>


		<div class="faculty_Nav_more">

			<div class="faculty_Nav_more_grid">

				<div class="Contentbox">
					<i class="bi bi-star"></i>
					<span>Achievment</span>
				</div>

				<div class="Contentbox">
					<i class="bi bi-journal"></i>
					<span>Publications</span>
				</div>

				<div class="Contentbox">
					<i class="bi bi-search"></i>
					<span>Research</span>
				</div>

				<div class="Contentbox">
					<i class="bi bi-journals"></i>
					<span>Courses</span>
				</div>

			</div>
		</div>



		<div class="achievement" id="achieve">
			<h2>Achievments</h2>



		</div>






	</div>
<div class="footer">
	<div class="footer_main">

	</div>
</div>
</body>
<script type="text/javascript">
	var button = document.getElementsById("card");
	button.addEventListener("nav_button",linkOpen);
	function linkOpen(str)
	{
		switch(str)
		{
			case 'home':
				window.open('./index.php','_self');
				break;
			case 'faculty':
				window.open('./faculty.php','_self');
				break;
		}

	}
</script>
</html> 