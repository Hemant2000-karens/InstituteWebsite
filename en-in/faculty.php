<!DOCTYPE html>
<html>
<head>
	<?php include_once './headTag.php';?>
	<title>Faculty | IIITDMJ</title>
</head>
	<?php include './topheader.php';?>
	<div class="container">
		<body>
			<?php include './header2.php';?>
			<?php include './connectionDB.php'; ?>
			<span class="br"></span>

			<div class="aboutHeader" id="adminHeader">
				<h2>Faculty</h2>
			</div>
			

			<span class="br"></span>

			<div class="facultyTabs">
					<button class="calTab" onclick="changeFacultyBranch(event, 'cse')" id="defaultOpen">CSE
					</button>
  				<button class="calTab" onclick="changeFacultyBranch(event, 'me')">ME
  				</button>
  				<button class="calTab" onclick="changeFacultyBranch(event, 'ece')">ECE
  				</button>
  				<button class="calTab" onclick="changeFacultyBranch(event, 'des')">DES
  				</button>
  				<button class="calTab" onclick="changeFacultyBranch(event, 'ns')">NS
  				</button>
  				<button class="calTab" onclick="changeFacultyBranch(event, 'la')">LA
  				</button>
				</div>

			<div class="faculty_grid_main">


				<div class="facultyList animFade" id="cse">
					<div class="deptHeading">
						<h3>Computer Science and Enginnering</h3>
					</div>
					<br>

					<div class="faculty_grid">
						
						<?php 

							$query = "SELECT * from faculty where department like '%cse%' order by name";
							$result = $link ->query($query);

							if($result -> num_rows > 0)
							{
								while ($rows = $result -> fetch_assoc()) 
								{
									echo ("<div class='faculty_profile'>"."<div class ='rotateCard'> <div class='facultyUpper'> <img src='../Images/faculty/cse/".$rows['photo']."' alt='".$rows['name']."'> </div> <div class='facultyLower'> <h4>".$rows['name']."</h4> <h5>".$rows['position']."</h5> <span>".$rows['Area_of_Research']."</span> </div>". "<div class='backLink'> <a target='_blank' href='./faculty_profilePage.php?adm_no=".$rows['Adm_No']."'>"."Visit Profile</a> </div> </div> </div>");
								}
							}
							
						?>

						<!-- Profile card Ends-->
							
					</div>
				</div>
				<div class="facultyList animFade" id="me">
					<div class="deptHeading">
						<h3>Mechanical Enginnering</h3>
					</div>

					<br>
					<div class="faculty_grid">
						
						<?php

						$query = "SELECT * from faculty where department  like '%me%' order by name";
							$result = $link ->query($query);

							if($result -> num_rows > 0)
							{
								while ($rows = $result -> fetch_assoc()) 
								{
									echo ("<div class='faculty_profile'>"."<div class ='rotateCard'> <div class='facultyUpper'> <img src='../Images/faculty/me/".$rows['photo']."' alt='".$rows['name']."'> </div> <div class='facultyLower'> <h4>".$rows['name']."</h4> <h5>".$rows['position']."</h5> <span>".$rows['Area_of_Research']."</span> </div>". "<div class='backLink'> <a target='_blank' href='".$rows['Adm_No']."'>". "Visit Profile</a> </div> </div> </div>");
								}
							}
							
						?>


					</div>
				</div>
				<div class="facultyList animFade" id="ece">
					<div class="deptHeading">
						<h3>Electrical and Electronics Engineering</h3>
					</div>
					<br>
					<div class="faculty_grid">
						
						<?php 

						$query = "SELECT * from faculty where department like '%ece%' order by name";
							$result = $link ->query($query);

							if($result -> num_rows > 0)
							{
								while ($rows = $result -> fetch_assoc()) 
								{
									echo ("<div class='faculty_profile'>"."<div class ='rotateCard'> <div class='facultyUpper'> <img src='../Images/faculty/ece/".$rows['photo']."' alt='".$rows['name']."'> </div> <div class='facultyLower'> <h4>".$rows['name']."</h4> <h5>".$rows['position']."</h5> <span>".$rows['Area_of_Research']."</span> </div>". "<div class='backLink'> <a target='_blank' href='".$rows['Adm_No']."'>". "Visit Profile</a> </div> </div> </div>");
								}
							}

						?>
					</div>
				</div>
				<div class="facultyList animFade" id="des">
					<div class="deptHeading">
						<h3>Design</h3>
					</div>
					<br>
					<div class="faculty_grid">
						
						<?php

						$query = "SELECT * from faculty where department like '%des%' order by name";
							$result = $link ->query($query);

							if($result -> num_rows > 0)
							{
								while ($rows = $result -> fetch_assoc()) 
								{
									echo ("<div class='faculty_profile'>"."<div class ='rotateCard'> <div class='facultyUpper'> <img src='../Images/faculty/des/".$rows['photo']."' alt='".$rows['name']."'> </div> <div class='facultyLower'> <h4>".$rows['name']."</h4> <h5>".$rows['position']."</h5> <span>".$rows['Area_of_Research']."</span> </div>". "<div class='backLink'> <a target='_blank' href='".$rows['Adm_No']."'>". "Visit Profile</a> </div> </div> </div>");
								}
							}

						?>
					</div>
				</div>
				
				<div class="facultyList animFade" id="ns">
					<div class="deptHeading">
						<h3>Natural Science</h3>
					</div>
					<br>
					<div class="faculty_grid">
						
						<?php 

						$query = "SELECT * from faculty where department like '%ns%' order by name";
							$result = $link ->query($query);

							if($result -> num_rows > 0)
							{
								while ($rows = $result -> fetch_assoc()) 
								{
									echo ("<div class='faculty_profile'>"."<div class ='rotateCard'> <div class='facultyUpper'> <img src='../Images/faculty/ns/".$rows['photo']."' alt='".$rows['name']."'> </div> <div class='facultyLower'> <h4>".$rows['name']."</h4> <h5>".$rows['position']."</h5> <span>".$rows['Area_of_Research']."</span> </div>". "<div class='backLink'> <a target='_blank' href='".$rows['Adm_No']."'>". "Visit Profile</a> </div> </div> </div>");
								}
							}
						?>
					</div>
				</div>
				
				<div class="facultyList animFade" id="la">
				<div class="deptHeading">
					<h3>Liberal Arts</h3>
				</div>
				<div class="faculty_grid">
					
					<?php
						$query = "SELECT * from faculty where department like '%la%' order by name";
						$result = $link ->query($query);

						if($result -> num_rows > 0)
						{
							while ($rows = $result -> fetch_assoc()) 
							{
								echo ("<div class='faculty_profile'>"."<div class ='rotateCard'> <div class='facultyUpper'> <img src='../Images/faculty/la/".$rows['photo']."' alt='".$rows['name']."'> </div> <div class='facultyLower'> <h4>".$rows['name']."</h4> <h5>".$rows['position']."</h5> <span>".$rows['Area_of_Research']."</span> </div>". "<div class='backLink'> <a target='_blank' href='".$rows['Adm_No']."'>". "Visit Profile</a> </div> </div> </div>");
							}
						}
						$link -> close();

					?>
				</div>
			</div>
				<br>

			</div>

		</body>
	</div>
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

		  function changeFacultyBranch(evt, calName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("facultyList");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("calTab");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(calName).style.display = "block";
  evt.currentTarget.className += " active";
}

document.getElementById('defaultOpen').click();
	</script>
	<?php include './footer.php';?>
</html>