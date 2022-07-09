<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BOG | IIITDMJ</title>
		<meta http-equiv="refresh" content="3000">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style.css">
       <link rel="stylesheet" type="text/css" href="./mobile.css">
</head>
	<?php include './topheader.php';?>
	<div class="container">
		<body>
			<?php include './Header.php';?>
			<?php include "./navbar.php" ?>

			<span class="br"></span>

			<div class="aboutHeader" id="adminHeader">
				<h2>BWC Agenda / Minutes</h2>
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

  								$sql_query = "SELECT * FROM bwcAgenda";

										$result = $link->query($sql_query);

										if($result -> num_rows > 0)
											{
												while($rows = $result -> fetch_assoc())
												{
													echo ("<tr>
														<td><a target ='_blank' href='../Documents/bwcAgenda/".$rows['link']."'>".$rows['EventName']."</a></td>
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

  								$sql_query = "SELECT * FROM bwcMinute";

										$result = $link->query($sql_query);

										if($result -> num_rows > 0)
											{
												while($rows = $result -> fetch_assoc())
												{
													echo ("<tr>
														<td><a target ='_blank' href='../Documents/bwcMinute/".$rows['link']."'>".$rows['EventName']."</a></td>
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

<script type="text/javascript" src="./script.js"></script>
</html>