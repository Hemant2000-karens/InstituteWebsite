<!DOCTYPE html>
<html>
<head>
	<?php include_once './headTag.php';?>
	<title>Finance | IIITDMJ</title>
</head>
	<?php include './topheader.php';?>
	<div class="container">
		<body>
			<?php include './Header.php';?>
			<?php include "./navbar.php" ?>

			<span class="br"></span>

			<div class="aboutHeader" id="adminHeader">
				<h2>Finance Committee Agenda / Minutes</h2>
			</div>

				<br/>

				<div class="cal_Nav">
						<button class="calTab" onclick="changeCal(event, 'agenda')" id="defaultOpen">Agenda
						</button>
  					<button class="calTab" onclick="changeCal(event, 'minute')">Minutes
  					</button>
  				</div>

				
				<div class="AcMain">
						

					<div class="calTable" id="agenda">

						<table>
							<thead>
								<tr>
    							<th>Events</th>
    							<th>Date</th>
  							</tr>
  							</thead>
  							<tbody>
  								
  								<?php include './connectionDB.php';

  								$sql_query = "SELECT * FROM financAgenda";

										$result = $link->query($sql_query);

										if($result -> num_rows > 0)
											{
												while($rows = $result -> fetch_assoc())
												{
													echo ("<tr>
														<td><a target ='_blank' href='../Documents/finanAgenda/".$rows['link']."'>".$rows['EventName']."</a></td>
															<td>
															".$rows['date']."
														</td>
													</tr>");
												}
											}


									$link -> close();
  								?>

  							</tbody>
						</table>

					</div>



						<div class="calTable" id="minute">

						<table>
							<thead>
								<tr>
    							<th>Events</th>
    							<th>Date</th>
  							</tr>
  							</thead>
  							<tbody>
  								
  								<?php include './connectionDB.php';

  								$sql_query = "SELECT * FROM financMinute";

										$result = $link->query($sql_query);

										if($result -> num_rows > 0)
											{
												while($rows = $result -> fetch_assoc())
												{
													echo ("<tr>
														<td><a target ='_blank' href='../Documents/finanMinute/".$rows['link']."'>".$rows['EventName']."</a></td>
															<td>
															".$rows['date']."
														</td>
													</tr>");
												}
											}


									$link -> close();
  								?>

  							</tbody>
						</table>

					</div>






				</div>

		</body>
	</div>

<?php include './footer.php'?>

<script type="text/javascript" src="./script.js">
</script>
</html>