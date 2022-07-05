<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" type="jpg/png" href="./logo_college.png" sizes="16x16">
	<title>MOU | IIITDMJ</title>
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
					<h2>MOU</h2>
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
<script>

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

var coll = document.getElementsByClassName("acdpB");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("show");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
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

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</html>