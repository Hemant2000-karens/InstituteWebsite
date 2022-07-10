<!DOCTYPE html>
<html>
<head>
	<?php include_once './headTag.php';?>
	<title>MOU | IIITDMJ</title>
</head>

	    <?php include './topheader.php';?>
	   	<div class="container">
	    	<body>
	    		<?php include './Header.php';?>

				<?php include "./navbar.php";?>

				<span class="br"></span>
	
				<div class="aboutHeader" id="adminHeader">
					<h2>MOU | Institute</h2>
				</div>

				<div class="AcMain">


				<span class="br"></span>
				<div class="cal_Nav">
					<button class="calTab" onclick="changeCal(event, 'national')" id="defaultOpen">National
					</button>
  				<button class="calTab" onclick="changeCal(event, 'internationl')">International
  				</button>
  			</div>
  				<span class="br"></span>
  				<span class="br"></span>


  				<div class="calTable" id="national">
  					
  					<table>
							<thead>
								<tr>
    							<th>Event</th>
    							<th>Date(MoU)</th>
    							<th>IIITDMJ Co-ordinator</th>
    							<th>File</th>   				
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
													// echo ("<tr>
													// 	<td><a target ='_blank' href='../Documents/bwcAgenda/".$rows['link']."'>".$rows['EventName']."</a></td>
													// 		<td>
													// 		".$rows['date']."
													// 	</td>
													// </tr>");
												}
											}


									$link -> close();
  								?>

  							</tbody>
						</table>

  				</div>

  				<div class="calTable" id="internationl">
  					

  						<table>
							<thead>
								<tr>
    							<th>Event</th>
    							<th>Date(MoU)</th>
    							<th>Country</th>
    							<th>IIITDMJ Co-ordinator</th>
    							<th>File</th>   				
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
													// echo ("<tr>
													// 	<td><a target ='_blank' href='../Documents/bwcAgenda/".$rows['link']."'>".$rows['EventName']."</a></td>
													// 		<td>
													// 		".$rows['date']."
													// 	</td>
													// </tr>");
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