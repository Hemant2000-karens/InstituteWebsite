<!DOCTYPE html>
<html>
<head>
	<?php include_once './headTag.php';?>
	<title>BOG | IIITDMJ</title>
</head>
	<?php include './topheader.php';?>
	<div class="container">
		<body>
			<?php include "./header2.php";?>

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

  								$sql_query = "SELECT link,EventName,date FROM bwcAgenda";

										$result = $link->query($sql_query);

										if($result -> num_rows > 0)
										{
											while($rows = $result -> fetch_assoc())
											{
												echo ("<tr><td><a target ='_blank' href='../Documents/bwcAgenda/".$rows['link']."'>".$rows['EventName']."</a></td><td>".$rows['date']."</td></tr>");
											}
										}
										else
										{
											echo("<tr><td colspan = '2'> No Data Available </td></tr>");
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

  								$sql_query = "SELECT link,EventName,date FROM bwcMinute";

										$result = $link->query($sql_query);

										if($result -> num_rows > 0)
										{
											while($rows = $result -> fetch_assoc())
											{
												echo ("<tr><td><a target ='_blank' href='../Documents/bwcMinute/".$rows['link']."'>".$rows['EventName']."</a></td><td>".$rows['date']."</td></tr>");
												}
										}

										else
										{
											echo("<tr><td colspan = '2'> No Data Available </td></tr>");
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
<script type="text/javascript" src="./script1.js"></script>
</html>