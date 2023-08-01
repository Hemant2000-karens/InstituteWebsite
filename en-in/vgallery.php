<!DOCTYPE html>
<html>
<head>
	<?php include_once './headTag.php';?>
	<title>Gallery | IIITDMJ</title>
</head>
<?php include './topheader.php'?>
<div class="container">
	<body>
		<?php include './header2.php';?>
		<span class="br"></span>

			<div class="aboutHeader" id="adminHeader">
				<h2>Video Gallery</h2>
			</div>

		<div class="vcontainer">

			<div class="vCaption">
				<iframe src="https://www.youtube.com/embed/_4X9CcLmo7w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
				</iframe>
				<div class="videoTitle">
					<h4>DeW 8.0 :Future of Design Thinking and 3D Printing in Healthcare: 3rd day </h4>
				</div>
			</div>

			<div class="vCaption">
				<iframe src="https://www.youtube.com/embed/i1bjtCPNkwo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
				</iframe>
				<div class="videoTitle">
					<h4>Van Mahotsav 2021 || PDPM IIITDM Jabalpur</h4>
				</div>

			</div>

			<div class="vCaption">
					<iframe src="https://www.youtube.com/embed/793FXs-LiT4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
					</iframe>
					<div class="videoTitle">
						<h4>Celebration of International Yoga Day 2021</h4>
					</div>
				</div>

				<div class="vCaption">
					<iframe src="https://www.youtube.com/embed/P1DHOVwkTsA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
					</iframe>
					<div class="videoTitle">
						<h4>11th Convocation IIITDM Jabalpur</h4>
					</div>
				</div>

				<div class="vCaption">
					<iframe src="https://www.youtube.com/embed/P1DHOVwkTsA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
					</iframe>
					<div class="videoTitle">
						<h4>11th Convocation IIITDM Jabalpur</h4>
					</div>
				</div>






		</div>
	</body>
</div>
<?php include './footer.php'?>

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