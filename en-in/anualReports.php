<!DOCTYPE html>
<html>
<head>
	<?php include_once './headTag.php';?>
	<title>Annual Reports | IIITDMJ</title>
</head>

	    <?php include './topheader.php';?>
	   	<div class="container">
	    	<body>

				<?php include "./header2.php";
				include './connectionDB.php';?>

				<span class="br"></span>
	
				<div class="aboutHeader" id="adminHeader">
					<h2>Annual Reports</h2>
				</div>

				<div class="AcMain">
					
					<?php $sql = "SELECT date,filename from annualrpac where type = 'report';";
					$result = $link->query($sql);
					?>

					<div class="calTable">
						<table>
							<tr>
    							<th>Name</th>
    							<th>Year</th>
    							<th>Language</th>
  							</tr>

  							<?php

  								if($result -> num_rows > 0)
								{
									while($rows = $result -> fetch_assoc())
									{
										echo ("<tr>
										<td> Annual Reports </td>
										<td>".$rows['date']."</td>
										<td> <a href = '../Documents/annualReport/hindi".$rows['filename']."' target ='_blank'>Hindi <a/> | <a href = '../Documents/annualReport/english".$rows['filename']."' target ='_blank'>English<a/></td></tr>");
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