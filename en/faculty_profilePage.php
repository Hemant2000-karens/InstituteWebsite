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

				<fieldset>
					<legend>2014</legend>
					<h4>Uttar Pradesh Technical University Lucknow, India</h4>
					<span>Bachelor of Technology</span>
				</fieldset>

				<fieldset>
					<legend>2014</legend>
					<h4>National Institute of Technology Kurukshetra, India</h4>
					<span>Master of Technology</span>
				</fieldset>

				<fieldset>
					<legend>2020</legend>
					<h4>National Institute of Technology Kurukshetra, India</h4>
					<span>PhD</span>
				</fieldset>

			</div>

		</div>

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