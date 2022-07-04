<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Research Staff | IIITDMJ</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
       <link rel="stylesheet" type="text/css" href="mobile.css">
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

	<div class="bodyContent" id = "deanACD" style="display:block">


		<div class = "tableContainer">
			<div class="office_of_Dean">


					<?php include './connectionDB.php';

					$sql_query = "SELECT * FROM researchStaff";

					$result = $link->query($sql_query);

					if ($result->num_rows > 0)
					{
					    while ($rows = $result->fetch_assoc())
					    {

					    	echo("<div class='office_of_Dean profile1'>"."<img src='./Images/rsImage/researchStaffImg/".$rows['photo']."' alt ='".$rows['name']."'/><div class='office_of_Dean text'> <h2>".$rows['name']."</h2><h3>".$rows['post_branch']."</h3>
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


<script type="text/javascript">

	function openTab(evt, pageName) 
	{
  	var i, tabcontent, tablinks;
  	tabcontent = document.getElementsByClassName("bodyContent");
  	for (i = 0; i < tabcontent.length; i++) 
  	{
    	tabcontent[i].style.display = "none";
  	}
  	tablinks = document.getElementsByClassName("tablinks");
  	for (i = 0; i < tablinks.length; i++) 
  	{
    tablinks[i].className = tablinks[i].className.replace(" active1", "");
  }

  document.getElementById(pageName).style.display = "block";
  evt.currentTarget.className += " active1";
}

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
</script>
</html>
