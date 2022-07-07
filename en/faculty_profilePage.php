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

		<div class="faculty_profile">

			
			




		</div>

		<div class="qualification">
			<h2 class="classHeading">Qualification</h2>
		
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
						<button id="defaultOpen"class="tabButton" onclick="openTabs(event, 'book')">Books</button>
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
						










						<!-- End of Book Page-->
						





						</div>
						<!-- End of bookGrid -->
					



					</div>
					<!-- End of tabContent-->


					<div class="tabcontent" id="papers">
						
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








						</div>

					</div>

					<div class="tabcontent" id="talks">

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





						</div>

					</div>


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
						<img src="./Images/rsImage/rs001.png"/>
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
</body>
<script type="text/javascript">
	document.getElementById("defaultOpen").click();
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

	function openTabs(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tabButton");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
</html> 