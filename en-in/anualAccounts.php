<!DOCTYPE html>
<html>
<head>
	<?php include_once './headTag.php';?>
	<title>Annual Accounts | IIITDMJ</title>
</head>

	    <?php include './topheader.php';?>
	   	<div class="container">
	    	<body>
	    		<?php include './Header.php';?>

				<?php include "./navbar.php"; include './connectionDB.php';?>

				<span class="br"></span>
	
				<div class="aboutHeader" id="adminHeader">
					<h2>Annual Accounts</h2>
				</div>

				<div class="AcMain">

					<?php $sql = "SELECT date,filename from annualrpac where type = 'account';";
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
										<td> Annual Accounts </td>
										<td>".$rows['date']."</td>
										<td> <a href = '../Documents/annualAccount/hindi".$rows['filename']."' target ='_blank'>Hindi <a/> | <a href = '../Documents/annualAccount/english".$rows['filename']."' target ='_blank'>English<a/></td></tr>");
									}
								}
							?>


  					</table> 
  				</div>
				</div>
			</body>
		</div>
<?php include './footer.php'?>
<script type="text/javascript" src="./script.js"></script>
</html>