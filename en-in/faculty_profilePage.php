<!DOCTYPE html>
<?php
include 'connectionDB.php';
$data_result = $_GET['adm_no'];
// //Using POST
$data_result = $_POST['adm_no'];
// //Using GET, POST or COOKIE.
$data_result = $_REQUEST['adm_no'];
$master_query = "SELECT faculty.sl, PF_no, faculty.Adm_No, name, departmentFull, photo, position, Area_of_Research, bachelor, bachelor_year, master, master_year, doctral, doctral_year, email, phone, LinkedIn, googleScholar from faculty join facultyEducation join faculty_contact where faculty.Adm_No = " . "\"" . $data_result . "\"" . " and faculty.Adm_No = facultyEducation.adm_no and faculty_contact.adm_no= faculty.Adm_No;";
$result = $link->query($master_query);
$rows = $result->fetch_assoc();
?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $rows['name']; ?></title>
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

			<button class="active"><?php echo $rows['name']; ?></button>

			<button id="navbutton" class="faculty"  onclick="linkOpen('faculty')">Faculty</button>

			<button id="navbutton" onclick="linkOpen('home')">
				<i class="bi bi-house-fill"></i>
			</button>
		</div>
	</div>

	<div class="container">

		<div class="faculty_profile">

			<div class="about_faculty">
				
				<div class="faculty_profile_img_main">

					<div class="faculty_profile_img">
						

						<img src="../Images/faculty/<?php echo $rows['photo']; ?>">


					</div>
					<div class="faculty_cv">
						
					</div>
				</div>
				
				<div class="faculty_profile_details_master">
					
					<div class="faculty_profile_details">

						<h1> Dr. <?php echo $rows['name']; ?></h1>
						
						<div class="department_position">
							<h3><?php echo $rows['departmentFull']; ?> - <?php echo $rows['position']; ?></h3>
						</div>

						<div class="faculty_profile_contacts">
							
							<span class="contact"><i class="bi bi-telephone-fill"></i><a href='tel:<?php echo $rows['phone']; ?>'>Phone</a></span>

							<span class="contact">
								<i class="bi bi-envelope-at-fill"></i> <a href='mailto:<?php echo $rows['email']; ?>'>Email</a></span>

						</div>

						<div class="faculty_profile_contacts">
							
							<span class="contact"><i class="bi bi-linkedin"></i><a href="<?php echo $rows['LinkedIn']; ?>">LinkedIn</a></span>

							<span class="contact"><span class="bi bi-google"></span><a href='<?php echo $rows['googleScholar']; ?>'>Google Scholar</a></span>

						</div>


					<div class="faculty_profile_highlights">


					</div>

				</div>

			</div>
			
		</div> 

		<div class="qualification">
			<h2 class="classHeading">Qualification</h2>
		
			<div class="edu_yr">

				<div class="yr">
					<div class="sub_year">
						<h3>
							<?php echo $rows['doctral_year']; ?>
						</h3>
					</div>
					<div class="sub_degree">
						<span class="institution">
							<?php echo $rows['doctral']; ?>
						</span>
						<span class="degree">
							Ph.D
						</span>
					</div>
				</div>

				<div class="yr">
					<div class="sub_year">
						<h3>
							<?php echo $rows['master_year']; ?>
						</h3>
					</div>
					<div class="sub_degree">
						<span class="institution">
							<?php echo $rows['master']; ?>
						</span>
						<span class="degree">
							Master of Technology
						</span>
					</div>
				</div>

				<div class="yr">
					<div class="sub_year">
						<h3>
							<?php echo $rows['bachelor_year']; ?>
						</h3>
					</div>
					<div class="sub_degree">
						<span class="institution">
							<?php echo $rows['bachelor']; ?>
						</span>
						<span class="degree">
							Bachelor of Technology
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
					<span><?php echo $rows['Area_of_Research']; ?>
					</span>
				</div>
			</div>
		</div>

			<br>


		<!-- <div class="faculty_Nav_more">

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
 -->
			 

			 	<div class="publication" id="Publications">
						<h2 class="classHeading">Personal Informations</h2>
							<br>
							<div class="tab personaltab">

								<button id="defaultOpen4" class="tabButton4" onclick="openTabs4(event, 'p_experience')">Experience</button>
								<button class="tabButton4" onclick="openTabs4(event, 'p_admins')">Administrative Position</button>
								<button class="tabButton4" onclick="openTabs4(event, 'p_awards')">Honours & Awards</button>

							</div>

							<div class="tabcontent4" id="p_experience">

							</div>








							<div class="tabcontent4" id="p_admins">

							</div>








							<div class="tabcontent4" id="p_awards">
								
							</div>


					</div>
				



		<div class="achievement" id="achieve">
			<h2 class="classHeading">Courses</h2>
				<br>
			<div class="tab personaltab">

				<button id="defaultOpen3" class="tabButton3" onclick="openTabs3(event, 'curr_courses')">Current</button>
				<button class="tabButton3" onclick="openTabs3(event, 'prev_courses')">Previous</button>

			</div>
			

			<div class="tabcontent3" id="curr_courses">
				
			</div>

			<div class="tabcontent3" id="prev_courses">
				
			</div>

		</div>


		<div class="publication" id="Publications">
			<h2 class="classHeading">Publications</h2>

			<div class="publicationContents">

				<div>
					<a class="prev" onclick="plusSlides(-1)">❮</a>
				</div>

				<div class="publicationBody">
					
					<div class="tab">

						<button id="defaultOpen" class="tabButton" onclick="openTabs(event, 'book')">Journals</button>
						<button class="tabButton" onclick="openTabs(event, 'papers')">Papers</button>
						<button class="tabButton" onclick="openTabs(event, 'talks')">Talks</button>


					</div>



						<div id="book" class="tabcontent">
	  						
							<div class="contentGridPublication">


								<!-- Starting OF book Page-->

								<?php
								
								$journalsfetch = "SELECT * FROM `faculty_journals` WHERE name like '%". $rows['name'] ."%'"."and Status like 'Published';"; 
								$fetchJournals = $link->query($journalsfetch);
								if ($fetchJournals->num_rows > 0) {
								    while ($journRows = $fetchJournals->fetch_assoc()) {
								        echo (
								        
								        "<div class='bookFlex bookShow'>
								  			<div class='bookicon'>
								    			<i class='bi bi-book'></i>
								  			</div>
								  		<div class='bookContent'>
								    		<div class='bookName'>
								      			<span>".$journRows['citation_chicago'] ."</span>
								    		</div></div></div>");
								    }
								}

								?>
	  			
								<!-- End of Book Page FLex -->

							</div>
							<!-- End of bookGrid -->
						</div>
						<!-- End of tabContent-->


						<div id="papers" class="tabcontent">
	  						
							<div class="contentGridPublication">
	  					<!-- Starting OF book Page-->
							<?php
								
								$journalsfetch = "SELECT * FROM `faculty_journals` WHERE name like '%". $rows['name'] ."%'"."and Status like 'Published';"; 
								$fetchJournals = $link->query($journalsfetch);
								if ($fetchJournals->num_rows > 0) {
								    while ($journRows = $fetchJournals->fetch_assoc()) {
								        echo (
								        
								        "<div class='paperFlex paperShow'>
								  			<div class='bookicon'>
								    			<i class='bi bi-book'></i>
								  			</div>
								  			
								  			<div class='bookContent'>
								    			<div class='bookName'>
								      				<span>".$journRows['citation_chicago'] ."</span>
								    			</div>
								  			</div>
										</div>");
								    }
								}

								?>
							<!-- End of Book Page FLex -->

							</div>
							<!-- End of bookGrid -->
						</div>
						<!-- End of tabContent-->


						<div id="talks" class="tabcontent">
	  						
							<div class="contentGridPublication">
	  					<!-- Starting OF book Page-->
							<?php
								
								$journalsfetch = "SELECT * FROM `faculty_journals` WHERE name like '%". $rows['name'] ."%'"."and Status like 'Published';"; 
								$fetchJournals = $link->query($journalsfetch);
								if ($fetchJournals->num_rows > 0) {
								    while ($journRows = $fetchJournals->fetch_assoc()) {
								        echo (
								        
								        "<div class='talksFlex talkShow'>
								  			<div class='bookicon'>
								    			<i class='bi bi-book'></i>
								  			</div>
								  			
								  			<div class='bookContent'>
								    			<div class='bookName'>
								      				<span>".$journRows['citation_chicago'] ."</span>
								    			</div>
								  			</div>
										</div>");
								    }
								}

								?>

							</div>
							<!-- End of bookGrid -->
						</div>
						<!-- End of tabContent-->

				</div>
				
				<div>
					<a class="next" onclick="plusSlides(1)">❯</a>
				</div>

			</div>
		</div>

		<!-- End of Publication -->


		<!-- Start of Research -->

		<div class="research">
			<h2 class="classHeading">Research</h2>
			<div class="researchContent">

				<!-- <div class="rSdate">
					<span class="date">
						2018-2020
					</span>
				</div>

				<div class="researchBody">

					<div class="researchImage">
						<img src="../Images/rsImage/rs001.png"/>
					</div>

					<div class="researchText">
						<div class="rStitle">
							<h2>
								Device Free Target Localization in Wireless Networks Using Machine Learning
							</h2>
						</div>
						<div class="rsBody">
							 Dr. Munesh Singh Agency: SEED Grant from IIITDM Kancheepuram Status: Completed Budget Rs: 8,00,000 Duration 3 Year (2018-2020)
						</div>
						<span class="rsReadMore">
							Read More
						</span>
					</div>
				</div>
				<div class="navigation">
						<button class="btn1"><</button>
						<button class="btn2">></button>
				</div> -->

			</div>
		</div>

			<div class="publication" id="Publications">
				<h2 class="classHeading">Students</h2>
				<br/>
				<div class="tab">
					<button id="defaultOpen1" class="tabButton1" onclick="openTabs2(event, 'PHD')">Ph.D</button>
					<button class="tabButton1" onclick="openTabs2(event, 'masters')">M.Tech</button>
				</div>


				<div id="PHD" class="tabcontent1">

					<table>
						
						<caption>Ph.D Scholar</caption>

						<tr>
							<th>Photo</th>
    						<th>Name</th>
    						<th>Roll No.</th>
    						<th>Specialisation</th>
    						<th>Co-guide</th>
    						<th>Year</th>
    						<th>Status</th>
    						<th>Description</th>
						</tr>


						<?php 
						$sql = "SELECT * FROM `faculty_students` WHERE programme = 'phd' and adm_no =" . "\"" . $data_result . "\"" . ";"; 
							$result = $link->query($sql);

						if ($result->num_rows > 0) {
								    while ($students = $result->fetch_assoc()) {
								        echo ("<tr>
								<td><img class ='student_image' src ='../Images/faculty_students/".$students['photo'].".jpg' alt='".$students['photo']."'/></td>
    						<td>".$students['sName']."</td>
    						<td>".$students['sRoll']."</td>
    						<td>".$students['specialisation']."</td>
    						<td>".$students['co-guide']."</td>
    						<td>".$students['sYear']."</td>
    						<td>".$students['status']."</td>
    						<td>".$students['Description']."</td>
						</tr>
								");								    
								}
							}
						?>

					</table>



				</div>


				<div id="masters" class="tabcontent1">


					<table>
						
						<caption>Masters Students</caption>

						<tr>
							<th>Photo</th>
    						<th>Name</th>
    						<th>Roll No.</th>
    						<th>Specialisation</th>
    						<th>Co-guide</th>
    						<th>Year</th>
    						<th>Status</th>
    						<th>Description</th>
						</tr>

						<?php 
						$sql = "SELECT * FROM `faculty_students` WHERE programme = 'mtech' and adm_no = ". "\"" . $data_result . "\"" . ";"; 
							$result = $link->query($sql);

						if ($result->num_rows > 0) {
								    while ($students = $result->fetch_assoc()) {
								        echo ("<tr>
								<td><img class ='student_image' src ='../Images/faculty_students/".$students['photo'].".jpg' alt='".$students['photo']."'/></td>
    						<td>".$students['sName']."</td>
    						<td>".$students['sRoll']."</td>
    						<td>".$students['specialisation']."</td>
    						<td>".$students['co-guide']."</td>
    						<td>".$students['sYear']."</td>
    						<td>".$students['status']."</td>
    						<td>".$students['Description']."</td>
						</tr>
								");								    
								}
							}
						?>

					</table>


				</div>
				


			</div>



		<!-- Start of Research -->
	</div>
	<!-- Container end tag -->

	<!-- Footer Tags -->


<div class="footer">
	<div class="footer_main">
		<img src=""/>
		<h3></h3>
	</div>
</div>


<!-- Footer Tags -->
<?php mysqli_close($link); ?>
</body>
<script type="text/javascript">
		
	// let slideIndex = 1;

	var navigation = document.getElementById("navbutton");
	navigation.addEventListener('click', linkOpen);

	function linkOpen(link)
	{
		switch(str)
		{
			case 'faculty':
				window.open('./faculty.php','_self');
				break;
			case 'home':
				window.open('./index.php','_self');
				break;
		}
	}
	
	function openTabs(evt, pageName) 
	{
		var i, tabcontent, tablinks;


		tabcontent = document.getElementsByClassName("tabcontent");
		
	  	for (i = 0; i < tabcontent.length; i++) 
	  	{
	    	tabcontent[i].style.display = "none";
	  	}

	  	tablinks = document.getElementsByClassName("tabButton");

	  	for (i = 0; i < tablinks.length; i++) 
	  	{
	    	tablinks[i].className = tablinks[i].className.replace(" active", "");
	  	}


	  	document.getElementById(pageName).style.display = "block";
	  	evt.currentTarget.className += " active";

	  	//resetToOne();
	}


	function openTabs2(evt, pageName) {

		var i, studentTab, studentLinks;

		studentTab = document.getElementsByClassName("tabcontent1");

	  	for (i = 0; i < studentTab.length; i++) 
	  	{
	    	studentTab[i].style.display = "none";
	  	}
	  	
	  	studentLinks = document.getElementsByClassName("tabButton1");

	  	for (i = 0; i < studentLinks.length; i++) 
	  	{
	    	studentLinks[i].className = studentLinks[i].className.replace(" active", "");
	  	}

	  	document.getElementById(pageName).style.display = "block";
	  	evt.currentTarget.className += " active";
	}

	function openTabs3(evt, pageName) {

		var i, courses_tab, courses_link;

		courses_tab = document.getElementsByClassName("tabcontent3");

	  	for (i = 0; i < courses_tab.length; i++) 
	  	{
	    	courses_tab[i].style.display = "none";
	  	}
	  	
	  	courses_link = document.getElementsByClassName("tabButton3");

	  	for (i = 0; i < courses_link.length; i++) 
	  	{
	    	courses_link[i].className = courses_link[i].className.replace(" active", "");
	  	}

	  	document.getElementById(pageName).style.display = "block";
	  	evt.currentTarget.className += " active";
	}

	function openTabs4(evt, pageName) {

		var i, p_info_tab, p_info_links;

		p_info_tab = document.getElementsByClassName("tabcontent4");

	  	for (i = 0; i < p_info_tab.length; i++) 
	  	{
	    	p_info_tab[i].style.display = "none";
	  	}
	  	
	  	p_info_links = document.getElementsByClassName("tabButton4");

	  	for (i = 0; i < p_info_links.length; i++) 
	  	{
	    	p_info_links[i].className = p_info_links[i].className.replace(" active", "");
	  	}

	  	document.getElementById(pageName).style.display = "block";
	  	evt.currentTarget.className += " active";
	}
</script>
<script>

let slideIndex = 1;
let slides = document.getElementsByClassName("bookFlex");
let slides0 = document.getElementsByClassName("paperFlex");
let slides1 = document.getElementsByClassName("talksFlex");

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  if (n > slides.length){slideIndex = 1}    
  if (n > slides0.length) {slideIndex = 1} 
  if (n > slides1.length) {slideIndex = 1} 

  if (n < 1) {slideIndex = slides.length}   
  if (n < 1) {slideIndex = slides0.length}
  if (n < 1) {slideIndex = slides1.length}


  for (i = 0; i < slides.length; i++) {
    slides[i].classList.remove("bookShow");
    //slides[1+i].classList.remove("bookShow");
  }

    for (i = 0; i < slides0.length; i++) {
    slides0[i].classList.remove("paperShow");
  }

  for (i = 0; i < slides1.length; i++) {
    slides1[i].classList.remove("talkShow");
    //slides[i+1].classList.remove("bookShow");  
  }

  slides[slideIndex-1].classList.add("bookShow");
  slides[slideIndex].classList.add("bookShow");

  slides0[slideIndex-1].classList.add("paperShow");
  slides0[slideIndex].classList.add("paperShow");

  slides1[slideIndex-1].classList.add("talkShow");
  slides1[slideIndex].classList.add("talkShow");
}

// console.log(slides.length);
</script>

<script type="text/javascript">
	document.getElementById('defaultOpen').click();
	document.getElementById('defaultOpen1').click();
	document.getElementById('defaultOpen3').click();
	document.getElementById('defaultOpen4').click();
	showSlides(slideIndex);
</script>
</html> 