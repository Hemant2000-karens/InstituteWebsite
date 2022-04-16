<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Academics | IIITDMJ</title>
		<meta http-equiv="refresh" content="3000">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" href="./style.css">
	    <link rel="stylesheet" type="text/css" href="./mobile.css">
	</head>

	    <?php include './topheader.php';?>
	<div class="container">
	    <body>
	    	<?php include './Header.php';?>

			<?php include "./navbar.php" ?>

		<span class="br"></span>
			
			<div class="aboutHeader">
				<h2>Academic Guidelines</h2>
			</div>

			<div class="acgdl">

		<?php include './connectionDB.php';?>


				<div class="aboutHeader">
					<h4>Guidelines for UnderGraduate</h4>
				</div>

				<div class="acgl_ug">

					<?
						$sql_query0 = "SELECT * FROM guidelines where guideLine_type = 'UG' ORDER BY guideline_year DESC;";

					$result0 = $link->query($sql_query);

					if($result -> num_rows > 0)
					{
						while($rows0 = $result -> fetch_assoc())
						{
					echo "<span class='acgl_ug_link'>";
					
					echo "<a href='../Documents/AG - ".$rows0['guideline_year'].".pdf' target='_blank'>";
					
					echo "Academic Guidelines for ".$rows0['guideLine_type']."(".$rows0['guideline_year'].")</a>";
					echo "</span>";

				}
			}
			else
			{
				echo "View all - <a href='viewall.php'>View All</a>";
			}

			?>

				</div>

				<div class="aboutHeader">
					<h4>Guidelines for PostGraduate</h4>
				</div>
				<div class="acgl_pg">


		<?php 
					$sql_query1 = "SELECT * FROM guidelines where guideLine_type = 'PG' ORDER BY guideline_year DESC;";

					$result1 = $link->query($sql_query1);

			if($result -> num_rows > 0)
			{
				while($rows1 = $result1 -> fetch_assoc())
				{
					echo "<span class='acgl_ug_link'>";
					
					echo "<a href='../Documents/AG - ".$rows['guideline_year'].".pdf' target='_blank'>";
					
					echo "Academic Guidelines for ".$rows['guideLine_type']."(".$rows['guideline_year'].")</a>";
					echo "</span>";
				}
			}
			else
			{
				echo "View all - <a href='viewall.php'>View All</a>";
			}
		?>


				</div>

					<div class="aboutHeader">
						<h4>Guidelines for Ph.D</h4>
					</div>
				<div class="acgl_phd">



		<?php 
				$sql_query2 = "SELECT * FROM guidelines where guideLine_type = 'PHD' ORDER BY guideline_year DESC;";

					$result2 = $link->query($sql_query2);

			if($result2 -> num_rows > 0)
			{
				while($rows2 = $result2 -> fetch_assoc())
				{
					echo "<span class='acgl_ug_link'>";
					
					echo "<a href='../Documents/AG - ".$rows2['guideline_year'].".pdf' target='_blank'>";
					
					echo "Academic Guidelines for ".$rows2['guideLine_type']."(".$rows2['guideline_year'].")</a>";
					echo "</span>";
				}
			}
			else
			{
				echo "View all - <a href='viewall.php'>View All</a>";
			}
		?>

				</div>

			</div>
		</body>
	</div>

	<?php include './footer.php'?>
</html>