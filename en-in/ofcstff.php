<!DOCTYPE html>
<html lang="en">
<head>
	<title>Administrative Staff | IIITDMJ</title>
	<?php include_once './headTag.php';?>
</head>
<?php include './topheader.php'; ?>
<div class = "container">
<body>

	<?php include './header2.php';?>
	<span class="br"></span>
	
				<div class="aboutHeader" id="adminHeader">
					<h2>Office Administration @iiitdmj</h2>
				</div>
<!--Horizontal rule -->

	<div class="AcMain">


		<div class = "tableContainer">
			<div class="office_of_Dean">

				<?php include './connectionDB.php';

					$sql_query = "SELECT photo,name,post,department FROM officeAdministration";

					$result = $link->query($sql_query);

					if ($result->num_rows > 0)
					{
					    while ($rows = $result->fetch_assoc())
					    {

					    	echo("<div class='office_of_Dean profile1'>"."<img src='../Images/rsImage/researchStaffImg/".$rows['photo']."' alt ='".$rows['name']."'/><div class='office_of_Dean text'> <h2>".$rows['name']."</h2><h3>".$rows['post']."</h3>
					    		<h3>".$rows['department']."</h3> </div></div> <br>");

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
