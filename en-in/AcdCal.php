<!DOCTYPE html>
	<html>
		<head>
			<?php include_once './headTag.php';?>
			<title>Academics | IIITDMJ</title>
		</head>

	    <?php include './topheader.php';?>
	   	<div class="container">
	    	<body>
	    	<?php include './header2.php';?>

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
    					
							?>
						</h3>
					</div>

						<div class="calTable" id="odd">
							

							<?php 
							$sql = "SELECT event,dateFromUG,dateFromPG,dateFromNewUG,dateToUG,dateToPG,dateToNewUG from academicCalendar where semester = 1"; 
							$result = $link->query($sql);
							?>




							<table id="tb1">
								 <caption>Semester &#x2160;</caption>
								  <tr>
    								<th>Events</th>
    								<th>Previous UG, PG, <span class="br"></span> New M.Des, & New P.hD</th>
    								<th>M.tech</th>
    								<th>New UG Batch</th>
  								</tr>
  								<!-- Heading of the tables-->


										<?php

  											if($result -> num_rows > 0)
											{
												while($rows = $result -> fetch_assoc())
												{
													echo ("<tr>
														<td>".$rows['event']."</td>
														<td>".$rows['dateFromUG']." to ".$rows['dateToUG']."</td>
														<td>".$rows['dateFromPG']." to ".$rows['dateToPG']."</td>
														<td>".$rows['dateFromNewUG']." to ".$rows['dateToNewUG']."</td>
														</tr>");
												}
											}

										?>

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



								<?php 
								

									$sql = "SELECT event,dateFromUG,dateFromPG,dateFromNewUG,dateToUG,dateToPG,dateToNewUG from academicCalendar where semester = 2"; 
									$result = $link->query($sql);
								?>


								<table id="tb2">


										<caption>Semester &#x2161;</caption>
									<tr>
	    								<th>Events</th>
	    								<th>Previous UG, PG, <span class="br"></span> New M.Des, & New P.hD</th>
	    								<th>M.tech</th>
	    								<th>New UG Batch</th>
	  								</tr>
	  									<!-- Heading of the tables-->


											<?php

	  											if($result -> num_rows > 0)
												{
													while($rows = $result -> fetch_assoc())
													{
														echo ("<tr>
															<td>".$rows['event']."</td>
															<td>".$rows['dateFromUG']." to ".$rows['dateToUG']."</td>
															<td>".$rows['dateFromPG']." to ".$rows['dateToPG']."</td>
															<td>".$rows['dateFromNewUG']." to ".$rows['dateToNewUG']."</td>
															</tr>");
													}
												}

											?>
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

						<div class="calTable1">

							<div class="calNotice1">
								<h4><sup>*</sup>Late physical reporting is allowed only in exceptional cases with prior permission. Late reporting fee is Rs. 2000/-</h4>
							</div>

							<table>
								<tr>
									<th colspan="2">Calendar for PBI </th>
								</tr>
								<tr>
									<td>PBI Starts</td>
									<td>Anytime after Dec 01, 2022 but not later than 02-01-2023</td>
								</tr>
								<tr>
									<td>I Interim</td>
									<td>22-Feb-23</td>
								</tr>
								<tr>
									<td>Mid Term</td>
									<td>March 27-29, 2023</td>
								</tr>
								<tr>
									<td>II Interim</td>
									<td>24-Apr-23</td>
								</tr>

								<tr>
									<td>PBI End</td>
									<td>19-May-23</td>
								</tr>

								<tr>
									<td>Ends Terms</td>
									<td>May 24-26, 2023</td>
								</tr>

								<tr>
									<th colspan="2">Report Submission Dates</th>
								</tr>

								<tr>
									<td>1<sup>st</sup> Report</td>
									<td>May 24-26, 2023</td>
								</tr>
								<tr>
									<td>1<sup>st</sup> Interim Report</td>
									<td>May 24-26, 2023</td>
								</tr>
								<tr>
									<td>3<sup>rd</sup> Report</td>
									<td>May 24-26, 2023</td>
								</tr>
								<tr>
									<td>Mid Term Report</td>
									<td>May 24-26, 2023</td>
								</tr>
								<tr>
									<td>5<sup>th</sup> Report</td>
									<td>May 24-26, 2023</td>
								</tr>
								<tr>
									<td>2<sup>nd</sup> Interim Report</td>
									<td>May 24-26, 2023</td>
								</tr>

								<tr>
									<td>7<sup>th</sup> Report</td>
									<td>May 24-26, 2023</td>
								</tr>

								<tr>
									<td>Ends Term Report</td>
									<td>May 24-26, 2023</td>
								</tr>

							</table>


							<br>
							<br>

							<table>
								<tr>
									<th colspan="2">Calendar for BPT </th>
								</tr>
								<tr>
									<td>BPT Starts</td>
									<td>Anytime after Dec 01, 2022 but not later than 02-01-2023</td>
								</tr>
								<tr>
									<td>I Interim</td>
									<td>22-Feb-23</td>
								</tr>
								<tr>
									<td>Mid Term</td>
									<td>March 27-29, 2023</td>
								</tr>
								<tr>
									<td>II Interim</td>
									<td>24-Apr-23</td>
								</tr>

								<tr>
									<td>BPT End</td>
									<td>19-May-23</td>
								</tr>

								<tr>
									<td>Ends Terms</td>
									<td>May 24-26, 2023</td>
								</tr>


							</table>



							<br>
							<br>

							<table>
								<tr>
									<th colspan="2">Summer Term 2022-23</th>
								</tr>
								<tr>
									<td>Registration</td>
									<td>Anytime after Dec 01, 2022 but not later than 02-01-2023</td>
								</tr>
								<tr>
									<td>Commencement of Class</td>
									<td>22-Feb-23</td>
								</tr>
								<tr>
									<td>Mid Semester Examination</td>
									<td>March 27-29, 2023</td>
								</tr>
								<tr>
									<td>Classes Ends</td>
									<td>24-Apr-23</td>
								</tr>

								<tr>
									<td>End Semester Examination</td>
									<td>19-May-23</td>
								</tr>

								<tr>
									<td>Last Date of End Semester Grades Submission for courses</td>
									<td>May 24-26, 2023</td>
								</tr>


							</table>


						</div>

				</div>
			</body>
		</div>
					<? mysqli_close($link); ?>
			<?php include './footer.php'?>
<script type="text/javascript" src="./script.js"></script>
<script type="text/javascript" src="./script1.js"></script>
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
</script>
</html>