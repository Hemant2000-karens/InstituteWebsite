<!DOCTYPE html>
	<html>
		<head>
			<?php include_once './headTag.php';?>
			<title>Circulars | IIITDMJ</title>
		</head>

	    <?php include './topheader.php';?>
	   	<div class="container">
	    	<body>
	    	<?php include './Header.php';?>

				<?php include "./navbar.php";
				include './connectionDB.php';?>

				<span class="br"></span>
	
				<div class="aboutHeader" id="adminHeader">
					<h2>Circulars</h2>
				</div>

				<span class="br"></span>
				<div class="cal_Nav">
					<button class="calTab" onclick="changeCal(event, 'odd')" id="defaultOpen">
						Internal
					</button>
  				<button class="calTab" onclick="changeCal(event, 'even')">External
  				</button>
				</div>

				<div class="AcMain">
					

						<div class="calTable" id="odd">
							

							<?php 
							$sql = "SELECT  `name`, `date`, `filename` FROM `circulars` WHERE category = 'Internal'"; 
							$result = $link->query($sql);
							?>




							<table id="tb1">
								<tr>
								  	<th>Circulars</th>
								  	<th>Date</th>
								  	<th>File</th>
  								</tr>
  								<!-- Heading of the tables-->


										<?php

  											if($result -> num_rows > 0)
											{
												while($rows = $result -> fetch_assoc())
												{
													echo ("<tr>
														<td>".$rows['name']."</td>
														<td>".$rows['date']."</td>
														<td> <a class ='mouLink' target ='_parent' href ='../Documents/circulars/internal/".$rows['filename']."'><i class='bi bi-file-earmark-pdf'></i></a></td>
														</tr>");
												}
											}

										?>

							</table>
						</div>


							<div class="calTable" id="even">



							<?php 
							$sql = "SELECT  `name`, `date`, `filename` FROM `circulars` WHERE category = 'External'";
							$result = $link->query($sql);
							?>


							<table id="tb2">
								  <tr>
    								<th>Circulars</th>
								  	<th>Date</th>
								  	<th>File</th>
  								  </tr>
  									<!-- Heading of the tables-->


										<?php

  											if($result -> num_rows > 0)
											{
												while($rows = $result -> fetch_assoc())
												{
													echo ("<tr>
														<td>".$rows['name']."</td>
														<td>".$rows['date']."</td>
														<td> <a class ='mouLink' target ='_parent' href ='../Documents/circulars/external/".$rows['filename']."'><i class='bi bi-file-earmark-pdf'></i></a></td>
														</tr>");
												}
											}
										?>

							</table>
						</div>
				</div>
			</body>
		</div>
			<? mysqli_close($link); ?>
			<?php include './footer.php'?>
<script type="text/javascript" src="./script.js"></script>
<script type="text/javascript" src="./script1.js"></script>
</html>