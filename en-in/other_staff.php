<!DOCTYPE html>
	<html>
		<head>
			<?php include_once './headTag.php';?>
			<title>Staff | IIITDMJ</title>
		</head>

	    <?php include './topheader.php';?>
	   	<div class="container">
	    	<body>
	    		<?php include './header2.php';?>

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

  								$sql_query = "SELECT name,Designation,Department,contact FROM staff";

										$result = $link->query($sql_query);

										if($result -> num_rows > 0)
											{
												while($rows = $result -> fetch_assoc())
												{
													echo ("<tr>
														<td>".$rows['name']."</td>
														<td>".$rows['Designation']."</td>
														<td>".
													$rows['Department']."</td>
													<td><a href='mailto:".$rows['contact']."'>".$rows['contact']."</a>	
													</td>
													</tr>");
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

</html>