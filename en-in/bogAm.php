<!DOCTYPE html>
<html>
<head>
	<?php include_once 'headTag.php';?>
	<title>BOG | IIITDMJ</title>
</head>
	<?php include './topheader.php';?>
	<div class="container">
		<body>
			<?php include './Header.php';?>
			<?php include "./navbar.php" ?>

			<span class="br"></span>

			<div class="aboutHeader" id="adminHeader">
				<h2>BOG Agenda / Minutes</h2>
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
    							<th>Extras</th>
    							<th>Date</th>
  							</tr>
  							</thead>
  							<tbody>
  								
  								<?php include './connectionDB.php';

  								$sql_query = "SELECT link,EventName,extra,date FROM bogAgenda";

										$result = $link->query($sql_query);

										if($result -> num_rows > 0)
											{
												while($rows = $result -> fetch_assoc())
												{
													echo ("<tr>
														<td><a target ='_blank' href='../Documents/BOGagenda/".$rows['link']."'>".$rows['EventName']."</a></td>
														<td>
															<a target ='_blank' href='../Documents/BOGagenda/".$rows['link1']."'>".$rows['extra']."</a></td>
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
    							<th>Anex - 1</th>
    							<th>Anex - 2</th>
    							<th>Date</th>
  							</tr>
  							</thead>
  							<tbody>
  								
  								<?php include './connectionDB.php';

  								$sql_query = "SELECT link,link1,link2,EventName,extra1,extra2,date FROM bogMinute";

										$result = $link->query($sql_query);

										if($result -> num_rows > 0)
											{
												while($rows = $result -> fetch_assoc())
												{
													echo ("<tr>
														<td><a target ='_blank' href='../Documents/BOGminute/".$rows['link']."'>".$rows['EventName']."</a></td>
														<td>
															<a target ='_blank' href='../Documents/BOGminute/Anexture1/".$rows['link1']."'>".$rows['extra1']."</a></td>
															<td>
															<a target ='_blank' href='../Documents/BOGminute/Anexture2/".$rows['link2']."'>".$rows['extra2']."</a></td>
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
<script type="text/javascript" src="./script1.js"></script>
</html>