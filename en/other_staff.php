<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Staff | IIITDMJ</title>
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
					<h2>Staff @iiitdmj </h2>
				</div>

				<div class="AcMain">
					
						<div class="calTable">
							<table id="tb1">
								  <tr>
    								<th>Name</th>
    								<th>Designation</th>
    								<th>Department</th>
    								<th>Contact</th>
  								</tr>
  								<!-- Heading of the tables-->

  								<?php include './connectionDB.php';

  								$sql_query = "SELECT * FROM staff";

										$result = $link->query($sql_query);

										if($result -> num_rows > 0)
											{
												while($rows = $result -> fetch_assoc())
												{
													echo "<tr>
														<td>".$rows['name']."</td>
														<td>".$rows['Designation']."</td>
														<td>".
													$rows['Department']."</td>
													<td><a href='mailto:".$rows['contact']."'>".$rows['contact']."</a>	
													</td>
													</tr>";
												}
											}


									$link -> close();
  								?>
  								
							</table>
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
			</script>
</html>