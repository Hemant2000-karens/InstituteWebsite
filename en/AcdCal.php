<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<link rel="icon" type="jpg/png" href="./logo_college.png" sizes="16x16">
			<title>Academics | IIITDMJ</title>
			<meta http-equiv="refresh" content="3000">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<link rel="stylesheet" href="./style.css">
    	<link rel="stylesheet" type="text/css" href="./mobile.css">
		</head>

	    <?php include './topheader.php';?>
	   	<div class="container">
	    	<body>
	    	<?php include './Header.php';?>

				<?php include "./navbar.php";?>

				<span class="br"></span>
	
				<div class="aboutHeader" id="adminHeader">
					<h2>Academic Calander</h2>
				</div>

				<span class="br"></span>
				<div class="cal_Nav">
					<button class="calTab" onclick="changeCal(event, 'odd')" id="defaultOpen">
						Semester 1
					</button>
  				<button class="calTab" onclick="changeCal(event, 'even')">Semester 2
  				</button>
				</div>

				<div class="AcMain">
					<div class="calMain">
						<h3>
							Academic Calendar for Session 
							<?php 
							include 'connectionDB.php';
							printf("2022-2023");
    					mysqli_close($link);
							?>
						</h3>
					</div>

						<div class="calTable" id="odd">
							<table id="tb1">
								 <caption>Semester &#x2160;</caption>
								  <tr>
    								<th>Events</th>
    								<th>Previous UG, PG, <span class="br"></span> New M.Des, & New P.hD</th>
    								<th>M.tech</th>
    								<th>New UG Batch</th>
  								</tr>
  								<!-- Heading of the tables-->



  								<tr>
    								<td>Pre-Registration</td>


    								<td>June 28 2021 - July 10 2021(Mon- Sat)</td>
    								<td>-</td>
    								<td>-</td>
  								</tr>

  								<tr>
    								<td>Online Registration/ Physical Reporting at the Institute [only if applicable]</td>


    								<td>July 16, 2021 (Fri)</td>
    								<td>July 27, 2021 (Fri)</td>
    								<td>As per CSAB</td>
  								</tr>

  								<tr>
    								<td>Late Physical Reporting</td>


    								<td>July 23, 2021 (Fri)</td>
    								<td>-</td>
    								<td>-</td>
  								</tr>

  								<tr>
    								<td>Orientation of New Students</td>


    								<td>-</td>
    								<td>August 27-28, 2021 (Fr - Sat)</td>
    								<td>Dec 13, 2021 (Mon)</td>
  								</tr>

  								<tr>
    								<td>Commencement of Classes</td>


    								<td>July 19, 2021 (Mon)</td>
    								<td>August 31, 2021 (Mon)</td>
    								<td>Dec 13, 2021 (Mon)</td>
  								</tr>

  								<tr>
    								<td>Last Date for Adding of courses</td>


    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>
  								<tr>
    								<td>Last Date for Dropping of courses</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>
  								<tr>

    								<td>Last Date for Documents submission(New Admission)</td>


    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>

  								<tr>

    								<td>Mid-Sem Examination</td>


    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>Feb 11, 2022(Fri)</td>
  								</tr>

  								<tr>
    								<td>Mid-Sem Recess</td>


    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>Jan 24-29, 2022(Mon-Sat)</td>
  								</tr>

  								<tr>
    								<td>
    									Last Date for showing Mid-Sem answer sheets to students & display of<b>compiled marks upto Mid-Semester</b>
    								</td>

    								
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>

  								<tr>
    								<td>Classes Ends</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>

  								<tr>
    								<td>End Semester Examination</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>

  								<tr>
    								<td>PG Presentation(Graduation/Research/Progress Seminar)</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>

  								<tr>
    								<td>Last Date for showing of compiled marks(Full Semester)</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>

  								<tr>
    								<td>Last Date of End Semester Grades submission for Courses</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>
  								<tr>
    								<td>Make-up Examination</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>
  								<tr>
    								<td>Last Date for Grades Submission of Make-up Exams, Conversion of I Grades, Graduate/Research/Progress Seminars</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>
  								<tr>
    								<td>Submission of grade moderation report from discipline</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>
  								<tr>
    								<td>Submission of moderation report by APCS</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>
  								<tr>
    								<td>Last date for Authentication of Grades</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>
  								<tr>
    								<td>Academic Pre-Registration for next semester</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>

  								<tr>
    								<td>Vacation for UG students</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>

  									<tr>
    								<td>Vacational leave applicable for faculty</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>

							</table>

							<div class="calNotice">

								<h4><sup>*</sup>It is mandatory to show answersheets and mark to students within 10 days of the evaluation</h4>


								<table>

									<tr>
										<th colspan="3">Adjustment of Classes on Saturday</th>
									</tr>

									<tr>
										<td>
											Monday Time table
										</td>
										<td>
											18/12/2021 
										</td>
										<td>
											05/02/2022
										</td>
									</tr>

									<tr>
										<td>
											Tuesday Time table
										</td>
										<td>
											01/01/2022
										</td>
										<td>
											12/02/2022
										</td>
									</tr>

									<tr>
										<td>
											Wednesday Time table
										</td>
										<td>
											08/01/2022 
										</td>
										<td>
											19/02/2022
										</td>
									</tr>

									<tr>
										<td>
											Thursday Time table
										</td>
										<td>
											15/01/2022
										</td>
										<td>
											26/02/2022
										</td>
									</tr>

									<tr>
										<td>
											Friday Time table
										</td>
										<td>
											22/01/2022
										</td>
										<td>
											 05/03/2022
										</td>
									</tr>

								</table>
							</div>
						</div>


							<div class="calTable" id="even">

							<table id="tb2">
								 <caption>Semester &#x2161;</caption>
								  <tr>
    								<th>Events</th>
    								<th>Previous UG, PG, <span class="br"></span> New M.Des, & New P.hD</th>
    								<th>M.tech</th>
    								<th>New UG Batch</th>
  								</tr>
  									<!-- Heading of the tables-->

  									<tr>
    								<td>Pre-Registration</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>

  								<tr>
    								<td>Online Registration/ Physical Reporting at the Institute [only if applicable]</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>

  								<tr>
    								<td>Late Physical Reporting</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>

  								<tr>
    								<td>Orientation of New Students</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>

  								<tr>
    								<td>Commencement of Classes</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>

  								<tr>
    								<td>Last Date for Adding of courses</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>
  								<tr>
    								<td>Last Date for Dropping of courses</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>
  								<tr>
    								<td>Last Date for Documents submission(New Admission)</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>

  								<tr>
    								<td>Mid-Sem Examination</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>Feb 11, 2022(Fri)</td>
  								</tr>

  								<tr>
    								<td>Mid-Sem Recess</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>Jan 24-29, 2022(Mon-Sat)</td>
  								</tr>

  								<tr>
    								<td>
    									Last Date for showing Mid-Sem answer sheets to students & display of<b>compiled marks upto Mid-Semester</b>
    								</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>

  								<tr>
    								<td>Classes Ends</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>

  								<tr>
    								<td>End Semester Examination</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>

  								<tr>
    								<td>PG Presentation(Graduation/Research/Progress Seminar)</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>

  								<tr>
    								<td>Last Date for showing of compiled marks(Full Semester)</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>

  								<tr>
    								<td>Last Date of End Semester Grades submission for Courses</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>
  								<tr>
    								<td>Make-up Examination</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>
  								<tr>
    								<td>Last Date for Grades Submission of Make-up Exams, Conversion of I Grades, Graduate/Research/Progress Seminars</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>
  								<tr>
    								<td>Submission of grade moderation report from discipline</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>
  								<tr>
    								<td>Submission of moderation report by APCS</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>
  								<tr>
    								<td>Last date for Authentication of Grades</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>
  								<tr>
    								<td>Academic Pre-Registration for next semester</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>

  								<tr>
    								<td>Vacation for UG students</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>

  									<tr>
    								<td>Vacational leave applicable for faculty</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>
							</table>

													<div class="calNotice">

								<h4><sup>*</sup>It is mandatory to show answersheets and mark to students within 10 days of the evaluation</h4>


								<table>

									<tr>
										<th colspan="3">Adjustment of Classes on Saturday</th>
									</tr>

									<tr>
										<td>
											Monday Time table
										</td>
										<td>
											18/12/2021 
										</td>
										<td>
											05/02/2022
										</td>
									</tr>

									<tr>
										<td>
											Tuesday Time table
										</td>
										<td>
											01/01/2022
										</td>
										<td>
											12/02/2022
										</td>
									</tr>

									<tr>
										<td>
											Wednesday Time table
										</td>
										<td>
											08/01/2022 
										</td>
										<td>
											19/02/2022
										</td>
									</tr>

									<tr>
										<td>
											Thursday Time table
										</td>
										<td>
											15/01/2022
										</td>
										<td>
											26/02/2022
										</td>
									</tr>

									<tr>
										<td>
											Friday Time table
										</td>
										<td>
											22/01/2022
										</td>
										<td>
											 05/03/2022
										</td>
									</tr>

								</table>
							</div>

						</div>
				</div>
			</body>
		</div>

			<?php include './footer.php'?>
			<script type="text/javascript">
				window.onscroll = function()
{
  stickyFunction()
};


var nbar = document.getElementById("adminHeader");
var sticky = nbar.offsetTop;
function stickyFunction() {
  if (window.pageYOffset >= sticky) {
    nbar.classList.add("sticky");
  } else {
    nbar.classList.remove("sticky");
 		}
	}



	function changeCal(evt, calName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("calTable");
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

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();



			</script>
</html>