<!DOCTYPE html>
<html>
	<head>
		<?php include_once './headTag.php';?>
		<title>Academics | IIITDMJ</title>
	</head>

	    <?php include './topheader.php';?>
	<div class="container">
	    <body>
	    	<?php include './header2.php';?>

			<?php include './connectionDB.php';?>

			<span class="br"></span>
			
			<div class="aboutHeader" id="adminHeader">
				<h2>Academic Guidelines</h2>
			</div>

			<div class="acgdl">

				<div class="aboutHeader">
					<h4>Guidelines for UnderGraduate</h4>
				</div>

				<div class="acgl_ug">

				<?php

					$sql_query0 = "SELECT * FROM guidelines where guideLine_type = 'UG' ORDER BY guideline_year DESC;";

					$result0 = $link->query($sql_query0);

				if($result0 -> num_rows > 0)
				{
					while($rows0 = $result0 -> fetch_assoc())
					{
						echo "<span class='acgl_ug_link'>";
					
						echo "<a href='../Documents/AG-".$rows0['name']."-".$rows0['guideline_year'].".pdf' target='_blank'>";
					
						echo "Academic Guidelines for ".$rows0['guideLine_type']."(".$rows0['guideline_year'].")</a>";
						echo "</span>";

					}
				}
				else
				{
					echo "<span class='acgl_ug_link'>";
					echo "<a href='#'> No Guidelines Available</a>";
					echo "</span>";
				}
				?>

				</div>

				<div class="aboutHeader">
					<h4>Guidelines for PostGraduate</h4>
				</div>
				<div class="acgl_pg">

				<?php 
					include './connectionDB.php';
					$sql_query1 = "SELECT * FROM guidelines where guideLine_type = 'PG' ORDER BY guideline_year DESC;";

					$result1 = $link->query($sql_query1);

				if($result1 -> num_rows > 0)
				{
					while($rows1 = $result1 -> fetch_assoc())
					{
						echo "<span class='acgl_pg_link'>";
					
						echo "<a href='../Documents/AG-".$rows1['name']."-".$rows1['guideline_year'].".pdf' target='_blank'>";
					
						echo "Academic Guidelines for ".$rows1['guideLine_type']."(".$rows1['guideline_year'].")</a>";
						echo "</span>";
					}
				}
				else
				{
					echo "<span class='acgl_pg_link'>";
					echo "<a href='#'> No Guidelines Available</a>";
					echo "</span>";
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
					echo "<span class='acgl_phd_link'>";
					
					echo "<a href='../Documents/AG-".$rows2['name']."-".$rows2['guideline_year'].".pdf' target='_blank'>";
					
					echo "Academic Guidelines for ".$rows2['guideLine_type']."(".$rows2['guideline_year'].")</a>";
					echo "</span>";

				}
			}
			else
			{
				echo "<span class='acgl_phd_link'>";
				echo "<a href='#'> No Guidelines Available</a>";
				echo "</span>";
			}

			?>

				</div>
					

			</div>
		</body>
	</div>
	
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
	<?php $link -> close();?>
	<?php include './footer.php'?>
</html>