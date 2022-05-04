<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
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
	
				<div class="aboutHeader">
					<h2>Academic Calander</h2>
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
						<div class="calTable">
							<table id="tb1">
								 <caption>Semester &#x2160;</caption>
								  <tr>
    								<th>Events</th>
    								<th>Previous UG, PG, <span class="br"></span> New M.Des, & New P.hD</th>
    								<th>M.tech</th>
    								<th>New UG</th>
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
    								<td>Late Physical reporting</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>

  								<tr>
    								<td>Pre-Registration</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>

  								<tr>
    								<td>Pre-Registration</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>


							</table>
							<table id="tb2">
								 <caption>Semester &#x2161;</caption>
								  <tr>
    								<th>Events</th>
    								<th>Previous UG, PG, <span class="br"></span> New M.Des, & New P.hD</th>
    								<th>M.tech</th>
    								<th>New UG</th>
  								</tr>
  									<!-- Heading of the tables-->

  								<tr>
    								<td>Events</td>
    								<td>Previous UG</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>

  								<tr>
    								<td>Pre-Registration</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>

  								<tr>
    								<td>Pre-Registration</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>

  								<tr>
    								<td>Pre-Registration</td>
    								<td>April 06-10, 2020 (Mon-Fri)</td>
    								<td>M.tech + P.hD</td>
    								<td>New UG</td>
  								</tr>


							</table>
						</div>
				</div>
			</body>
		</div>

			<?php include './footer.php'?>
</html>