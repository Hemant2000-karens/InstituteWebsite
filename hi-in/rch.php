<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once './headTag.php';?>
	<title>Research Staff | IIITDMJ</title>
</head>
<?php include './topheader.php'; ?>
<div class = "container">
<body>

	<?php include "./Header.php"; ?>

	<?php include "./navbar.php"; ?>
	<span class="br"></span>
	
				<div class="aboutHeader" id="adminHeader">
					<h2>Research Staff @iiitdmj</h2>
				</div>
<!--Horizontal rule -->

	<div class="AcMain">


		<div class = "tableContainer">
			<div class="office_of_Dean">


					<?php include './connectionDB.php';

					$sql_query = "SELECT * FROM researchStaff";

					$result = $link->query($sql_query);

					if ($result->num_rows > 0)
					{
					    while ($rows = $result->fetch_assoc())
					    {

					    	echo("<div class='office_of_Dean profile1'>"."<img src='../Images/rsImage/researchStaffImg/".$rows['photo']."' alt ='".$rows['name']."'/><div class='office_of_Dean text'> <h2>".$rows['name']."</h2><h3>".$rows['post_branch']."</h3>
					    		<h3>".$rows['area_of_interest']."</h3> </div></div> <br>");

					    }
					}

					?>		

		</div>

	</div>
</div>

	</body>
</div>

<?php include './footer.php' ?>
<script type="text/javascript" src="./script.js"></script>
</html>
