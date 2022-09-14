<!DOCTYPE html>
<html>
<head>
	<?php include_once './headTag.php';?>
	<title>About Us | IIITDMJ</title>
</head>
	<?php include './topheader.php';?>
	<div class="container">
		<body>
		
		<?php include './header2.php';?>

		<span class="br"></span>

			<div class="aboutHeader" id="adminHeader">
				<h2>About Us</h2>
			</div>
			<div class="body">
				Founded in 2005 as the Jabalpur Engineering College, Indian Institute of Information Technology, Jabalpur focuses on Information Technology enabled Design and Manufacturing. It is a Institute of National Importance under the IIIT Act of the Government of India. The institute appears in the list of top 100 engineering colleges in India.

				The institute offers BTech program for computer science engineering, mechanical engineering and electronics and communication engineering and Bachelor course in Design.

				Undergraduate students are admitted through Joint Entrance Examination(Main) (JEE MAIN) and the UCEED, while post graduate students are admitted through GATE( for MTech Courses) and CEED( for Design course).
			</div>

			<section class="secondAbout">

				<div>
					<h2>Mission</h2>
 					<p>The Mission of the Institute is to create a multidisciplinary academic environment to prepare and train manpower of excellence for nurturing and promoting knowledge-based activities and innovations in design, fabrication and manufacturing of products by bringing together a collaborative and mutually stimulating mix of different fields of science, engineering and arts. In doing so the Institute shall identify current and future agendas for scholarship, share knowledge and discoveries with the world community and actively cultivate individuals with the desire and capability to contribute to society.</p>
				</div>

				<div>
					<h2>Values</h2>

					<p>In planning for its future as well as for conducting its ongoing activities, the Institute seeks to act in a manner that is guided by a deep-rooted sense of shared values and aspirations. Built upon such a foundation, the Institute :-</p>


					<ul type="dot" class="aboutUsList">

						<li>Honours and rewards high performance in learning, teaching, scholarship, research and creative activities by encouraging intellectual curiosity and protecting the multiple expressions of academic freedom.</li>


						<li>Seeks to provide an environment conducive to imaginative innovation, experimentation and creativity by encouraging all members of the academic community to take intellectual and creative risks and to embrace changes that will enhance the fulfillment of the Institute’s mission.</li>

						<li>Aspires to build an environment of tolerance and reasoned debate without any gender-, cast-, religious- or regional- bias by affirming the worth and personal dignity of every member of the Institute community and contributing to a campus climate of civility.</li>

					</ul>
				</div>

			</section>

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
	

	// var nbar = document.getElementById("adminHeader");
 //  var sticky = nbar.offsetTop;

 //  window.onscroll = function()
	// {
	//   stickyFunction()
	// };


	// function stickyFunction() {
	//   if (window.pageYOffset >= sticky) {
	//     nbar.classList.add("sticky");
	//   } else {
	//     nbar.classList.remove("sticky");
	//  	}
	// }
	
</script>
</html>