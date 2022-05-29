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

			<div style="text-align:center;    padding: 25px 0;">
  				<span class="dot" onclick="currentSlide(1)"></span> 
  				<span class="dot" onclick="currentSlide(2)"></span> 
  				<span class="dot" onclick="currentSlide(3)"></span> 
			</div>


		</div>


		<div class="publication" id="Publications">
			<h2>Publications</h2>
			<div class="publicationContents">
				<div>
				<a class="prev" onclick="plusSlides(-1)">❮</a>
				</div>
				<div class="publicationBody">
					
					<div class="tab">
						<button>Books</button>
						<button>Papers</button>
						<button>Talks</button>
					</div>

					<div id="London" class="tabcontent">
  						

  					<!-- Starting OF book Page-->
						<div class="bookGrid">


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

						<!-- End of Book Page-->

						<!-- Starting OF book Page-->
						<div class="bookGrid">


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

						<!-- End of Book Page-->

						<!-- Starting OF book Page-->
						<div class="bookGrid">


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

						<!-- End of Book Page-->

						<!-- Starting OF book Page-->
						<div class="bookGrid">


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

						<!-- End of Book Page-->

						<!-- Starting OF book Page-->
						<div class="bookGrid">


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

						<!-- End of Book Page-->

						<!-- Starting OF book Page-->
						<div class="bookGrid">


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

						<!-- End of Book Page-->
						<!-- End of tabContent-->
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
			<h2>Research</h2>
			<div class="researchContent">
			

			</div>
		</div>
		<!-- Start of Research -->
	</div><!-- Container end tag -->
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