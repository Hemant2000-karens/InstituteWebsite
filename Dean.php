<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dean | IIITDMJ</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
       <link rel="stylesheet" type="text/css" href="mobile.css">
</head>

	    <body>


		<?php include './topheader.php';?>

<div class ="container">

    <?php include './header.php'?>

<?php include "./navbar.php" ?>

<span class="br"></span> <!--Horizontal rule -->
	<br>
	<div class="DeanNav">
		<a href="#" class="tablinks" onclick="openCity(event, 'deanACD');">Dean Academic</a>
		<a href="#" class="tablinks" onclick="openCity(event, 'deanAStd');">Dean Students</a>
		<a href="#" class="tablinks" onclick="openCity(event, 'deanrpSC');">Dean RSPC</a>
		<a href="#" class="tablinks" onclick="openCity(event, 'deanPND');">Dean PND</a>
	</div>
<br>

<div class="bodyContent" id = "deanACD">
<h1>DeaN ACD</h1>
</div>
<div class="bodyContent" id = "deanAStd">
<h1>DeaN STD</h1>
</div>
<div class="bodyContent" id = "deanrpSC">
<h1>DeaN RSP</h1>
</div>
<div class="bodyContent" id = "deanPND">
<h1>DeaN PND</h1>
</div>
</div>

</body>
<?php include './footer.php'?>
<script>
function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("bodyContent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active1", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active1";
}
</script>
</html>
