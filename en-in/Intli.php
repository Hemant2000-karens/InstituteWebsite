<!DOCTYPE html>
<html>
<head>
	<?php include_once './headTag.php';?>
	<title>MOU | IIITDMJ</title>
</head>

	    <?php include './topheader.php';?>
	   	<div class="container">
	    	<body>
	    		<?php include "./header2.php";?>

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

  								$sql_query = "SELECT EventName,date,IIITDMJCoordinator,filename FROM MoU where type = 'Institute' and category = 'National';";

										$result = $link->query($sql_query);

										if($result -> num_rows > 0)
											{
												while($rows = $result -> fetch_assoc())
												{
													echo("<tr><td>".$rows['EventName']."</td><td>".$rows['date']."</td><td>".$rows['IIITDMJCoordinator']."</td><td> <a class ='mouLink' target ='_parent' href ='../Documents/MoU/Institute/".$rows['filename']."'><i class='bi bi-file-earmark-pdf'></i></a></td></tr>");
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

  								$sql_query = "SELECT EventName,date,Country,IIITDMJCoordinator,filename FROM MoU where type = 'Institute' and category = 'International';";

										$result = $link->query($sql_query);

										if($result -> num_rows > 0)
											{
												while($rows = $result -> fetch_assoc())
												{
													echo("<tr><td>".$rows['EventName']."</td><td>".$rows['date']."</td><td>".$rows['Country']."<td>".$rows['IIITDMJCoordinator']."</td><td> <a class ='mouLink' target ='_parent' href ='../Documents/MoU/Institute/".$rows['filename']."'><i class='bi bi-file-earmark-pdf'></i></a></td></tr>");
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
document.getElementById('defaultOpen').click();
</script>

</html>