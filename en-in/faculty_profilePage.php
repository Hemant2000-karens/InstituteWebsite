<!DOCTYPE html>
<html>

<?php 

include 'connectionDB.php' ;
	
$data_result = $_GET['adm_no'];

// //Using POST
$data_result = $_POST['adm_no'];

// //Using GET, POST or COOKIE.
$data_result = $_REQUEST['adm_no'];
	
$master_query = "SELECT faculty.sl, PF_no, faculty.Adm_No, name, department,photo, position,departmentFull, Area_of_Research, bachelor, bachelor_year, master, master_year, doctral, doctral_year from faculty join facultyEducation where faculty.Adm_No = "."\"".$data_result."\""." and faculty.Adm_No = facultyEducation.adm_no;";

$result = $link ->query($master_query);

$rows = $result -> fetch_assoc();

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

			<button class="active"><?php echo $rows['name'] ?></button>

			<button id="nav_button" class="faculty"  onclick="linkOpen('faculty')">Faculty</button>

			<button id="nav_button" onclick="linkOpen('home')">
				<i class="bi bi-house-fill"></i>
			</button>
		</div>
	</div>

	<div class="container">

		<div class="faculty_profile">

			<div class="about_faculty">
				
				<div class="faculty_profile_img_main">

					<div class="faculty_profile_img">
						

						<img src="./Images/<?php echo "";?>">


					</div>
					<div class="faculty_cv">
						
					</div>
				</div>
				
				<div class="faculty_profile_details_master">
					
					<div class="faculty_profile_details">

						<h1> Dr. <?php echo $rows['name'];?></h1>
						
						<div class="department_position">
							<h4><?php echo $rows['departmentFull']; ?></h4> - <h5><?php echo $rows['position']; ?></h5>
						</div>

						<div class="faculty_profile_contacts">
							
							<ul>
								<li><a href="#">(+91)761-2794348</a></li>
								<li><a href="#">abhiverma@iiitdmj.ac.in</a></li>
								<li><a href="#">abhiverma@iiitdmj.ac.in</a></li>
								<li><a href="#">abhiverma@iiitdmj.ac.in</a></li>
							</ul>

						</div>

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
			<h2 class="classHeading">Achievments</h2>
			<div class="slider">
				<div>
					<a class="prev" onclick="plusSlides(-1)">❮</a>
				</div>


			<div class="sliderContent">


				<div class="SliderBox sliderbox1">
					<div class="subSlider1">
						<i class="bi bi-award"></i>
						<span>Awards</span>
					</div>
					<div class="subSlider2">

						<h3>Member of Advisory Board</h3>

						<p>IoT-Center of Excellence at SKIT, Jaipur</p>

						<h4>Read More</h4>

					</div>
				</div>


				<div class="SliderBox sliderbox2">
					<div class="subSlider1">
						<i class="bi bi-award"></i>
						<span>Awards</span>
					</div>
					<div class="subSlider2">

						<h3>Member of Advisory Board</h3>

						<p>IoT-Center of Excellence at SKIT, Jaipur</p>

						<h4>Read More</h4>

					</div>
				</div>


				<div class="SliderBox sliderbox3">
					<div class="subSlider1">
						<i class="bi bi-award"></i>
						<span>Awards</span>
					</div>
					<div class="subSlider2">

						<h3>Member of Advisory Board</h3>

						<p>IoT-Center of Excellence at SKIT, Jaipur</p>

						<h4>Read More</h4>

					</div>
				</div>
				




			</div>


				
				<div>
					<a class="next" onclick="plusSlides(1)">❯</a>
				</div>
			</div>

			<div style="text-align:center;padding: 25px 0;">
  				<span class="dot" onclick="currentSlide(1)"></span> 
  				<span class="dot" onclick="currentSlide(2)"></span> 
  				<span class="dot" onclick="currentSlide(3)"></span> 
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
						<button id="defaultOpen" class="tabButton" onclick="openTabs(event, 'book')">Books</button>
						<button class="tabButton" onclick="openTabs(event, 'papers')">Papers</button>
						<button class="tabButton" onclick="openTabs(event, 'talks')">Talks</button>
					</div>

						<div id="book" class="tabcontent">
	  						
							<div class="contentGridPublication">
	  					<!-- Starting OF book Page-->
							<div class="bookFlex">


								<div class="bookicon">
									<i class="bi bi-book"></i>
								</div>


								<div class="bookContent">


									<div class="bookName">
										<span>
											Network Expolitation
										</span>
									</div>

									<div class="readMore">
										<span>Read More</span>
									</div>
									
								</div>


							</div>

							<!-- End of Book Page FLex -->

								
							

							<!-- Starting OF book Page-->
							
							





							<!-- End of Book Page-->
							





							</div>
							<!-- End of bookGrid -->
						</div>
						<!-- End of tabContent-->


						<div id="papers" class="tabcontent">
	  						
							<div class="contentGridPublication">
	  					<!-- Starting OF book Page-->
							<div class="bookFlex">


								<div class="bookicon">
									<i class="bi bi-book"></i>
								</div>


								<div class="bookContent">


									<div class="bookName">
										<span>
											Network Expolitation
										</span>
									</div>

									<div class="readMore">
										<span>Read More</span>
									</div>
									
								</div>


							</div>

							<!-- End of Book Page FLex -->

								
							

							<!-- Starting OF book Page-->
							
							





							<!-- End of Book Page-->
							





							</div>
							<!-- End of bookGrid -->
						</div>
						<!-- End of tabContent-->


						<div id="talks" class="tabcontent">
	  						
							<div class="contentGridPublication">
	  					<!-- Starting OF book Page-->
							<div class="bookFlex">


								<div class="bookicon">
									<i class="bi bi-book"></i>
								</div>


								<div class="bookContent">


									<div class="bookName">
										<span>
											Network Expolitation
										</span>
									</div>

									<div class="readMore">
										<span>Read More</span>
									</div>
									
								</div>


							</div>

							<!-- End of Book Page FLex -->

								
							

							<!-- Starting OF book Page-->
							
							





							<!-- End of Book Page-->
							





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
			
				<div class="rSdate">
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
				</div>

			</div>
		</div>
		<!-- Start of Research -->
	</div><!-- Container end tag -->
<div class="footer">
	<div class="footer_main">
		<img src=""/>
		<h3></h3>
	</div>
</div>

<?php mysql_close($link); ?>
</body>
<script type="text/javascript">
	
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
}
	document.getElementById('defaultOpen').click();

</script>
</html> 