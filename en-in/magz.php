<!DOCTYPE html>
<html>
<head>
	<?php include_once './headTag.php';?>
	<title>Magazine | IIITDMJ</title>Ï˝
</head>
<?php include './topheader.php'?>
<div class="container">
	<body>
		<?php include './header2.php';?>
		<span class="br"></span>

		<div class="aboutHeader" id="adminHeader">
				<h2>Magazine</h2>
			</div>

	<div class="magazine">
		
		<?php include './connectionDB.php';

			$sql_query = "SELECT magazine_link,magazine_year FROM magazine ORDER by magazine_year DESC";


			$result = $link->query($sql_query);

			if($result -> num_rows > 0)
			{
				while($rows = $result -> fetch_assoc())
				{
					echo ("<div class='m_profile'>"."<a href='".$rows['magazine_link']."' target='_blank'>"
					
					 ."<img src='../Magazine/savitur-".$rows['magazine_year'].".png'/>"
					 ."<span>Savitur - ".$rows['magazine_year']."</span>"
					 ."</a>"
					 ."</div>");
				}
			}
			else
			{
				echo("");
			}
			$link -> close();
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
<?php include './footer.php'?>
</html>