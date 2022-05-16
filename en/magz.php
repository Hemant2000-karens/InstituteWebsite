<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gallery | IIITDMJ</title>
 	<link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" type="text/css" href="./mobile.css">
</head>
<?php include './topheader.php'?>
<div class="container">
	<body>
		<?php include './Header.php';?>
		<?php include "./navbar.php" ?>
		<span class="br"></span>

		<div class="aboutHeader">
				<h2>Magazine</h2>
			</div>

	<div class="magazine">
		
		<?php include './connectionDB.php';

			$sql_query = "SELECT * FROM magazine ORDER by magazine_year DESC";


			$result = $link->query($sql_query);

			if($result -> num_rows > 0)
			{
				while($rows = $result -> fetch_assoc())
				{
					echo "<div class='m_profile'>";

					echo "<a href='".$rows['magazine_link']."' target='_blank'>";
					
					echo "<img src='../Magazine/savitur-".$rows['magazine_year'].".png'/>";
					echo"<span>Savitur - ".$rows['magazine_year']."</span>";
					echo "</a>";
					echo "</div>";

				}
			}
			else
			{
				echo "View all - <a href='viewall.php'>View All</a>";
			}

			$link -> close();
		?>
	</div>

</div>

	</body>
</div>
<?php include './footer.php'?>
</html>