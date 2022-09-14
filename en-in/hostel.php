<!DOCTYPE html>
<html>
<head>
	<?php include_once './headTag.php';?>
	<title>Hostel | IIITDMJ</title>
</head>

	    <?php include './topheader.php';?>
	   	<div class="container">
	    	<body>
	    		
	    		<?php include './header2.php';?>
				<span class="br"></span>
	
				<div class="aboutHeader" id="adminHeader">
					<h2>Hostels@iiitdmj</h2>
				</div>



				<div class="AcMain">

					<div class="hostel_main">

							<div class="hostel_card" onclick="hostelLink('hall1')">
								<div class="hostel_card_image">
									<img src="../Images/Hostel/hall1.jpg" class="img" />
								</div>
								<div class="hostel_card_text">
									<h4>Vasishtha Hostel (Hall - 1)</h4>
								</div>
							</div>


							
							<div class="hostel_card" onclick="hostelLink('hall3')">
									<div class="hostel_card_image">
										<img src="../Images/Hostel/hall3.jpg" class="img" />
									</div>
									<div class="hostel_card_text">
										<h4>Aryabhatta Hostel (Hall - 3)</h4>
									</div>
							</div>


							<div class="hostel_card" onclick="hostelLink('hall4')">
									<div class="hostel_card_image">
										<img src="../Images/Hostel/hall4.jpg" class="img" />
									</div>
									<div class="hostel_card_text">
										<h4>Vivekananda Hostel (Hall - 4)</h4>
									</div>
							</div>


							<div class="hostel_card" onclick="hostelLink('pnn')">
									<div class="hostel_card_image">
										<img src="../Images/Hostel/hall3.jpg" class="img" />
									</div>
									<div class="hostel_card_text">
										<h4>Panini Hostel (PG)</h4>
									</div>
							</div>


							<div class="hostel_card" onclick="hostelLink('ng')">
								<div class="hostel_card_image">
									<img src="../Images/Hostel/hall3.jpg" class="img" />
								</div>
								<div class="hostel_card_text">
									<h4>Nagarjuna Hostel (PG- Married)</h4>
								</div>
							</div>

							<div class="hostel_card" onclick="hostelLink('ng')">
								<div class="hostel_card_image">
									<img src="../Images/Hostel/hall3.jpg" class="img" />
								</div>
								<div class="hostel_card_text">
									<h4>Nagarjuna Hostel (PG- Married)</h4>
								</div>
							</div>

							<div class="hostel_card" onclick="hostelLink('ng')">
								<div class="hostel_card_image">
									<img src="../Images/Hostel/hall3.jpg" class="img" />
								</div>
								<div class="hostel_card_text">
									<h4>Nagarjuna Hostel (PG- Married)</h4>
								</div>
							</div>

							<div class="hostel_card" onclick="hostelLink('ng')">
								<div class="hostel_card_image">
									<img src="../Images/Hostel/hall3.jpg" class="img" />
								</div>
								<div class="hostel_card_text">
									<h4>Nagarjuna Hostel (PG- Married)</h4>
								</div>
							</div>
							


						</div>

						<div class="hostel_brief"> 
							<p>IIITDM Jabalpur is a fully residential campus. All the students are required to be resident of Institute hostels. Hostel environment along with available amenities play very important role in students overall development during his/her stay at the campus. Presently Institute is having two hostels, Hall of Residence-1 "single seated" and Hall of Residence-3 " triple seated". Hall of Residence-4, a triple seated hostel will be made available. A team of two wardens in each hostel, one Warden-in-charge and the other mess-in-charge take care of hostel related matters.For all-round development of students, Institute promotes students to take part in smooth running of day-to-day activities of the hall. Each hostel is having an elected Hall president and Hall Executive Commitee (HEC), members for which are elected or nominated by the hall residents only. HEC is headed by respective Hall Wardens. In addition, for smooth running of all the amenities, there are other committees like mess Committee for each hall, bus committee, ambulance committee, reading room committee for each hall, etc.</p>
						</div>

				</div>
			</body>
		</div>

<?php include './footer.php'?>
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
	

	var Hostelbutton = document.getElementsByClassName("hostel_card");
  Hostelbutton.addEventListener("Click",hostelLink);
	function hostelLink(str) 
	{
		switch(str)
		{
			case 'hall1':
				window.open('https://www.iiitdmj.ac.in/hall1.iiitdmj.ac.in/', '_blank');
				break;
			case 'hall3':
				window.open('https://www.iiitdmj.ac.in/hall3.iiitdmj.ac.in/', '_blank');
				break;
			case 'hall4':
				window.open('https://www.instagram.com', '_blank');
				break;
			case 'pnn':
				window.open('https://www.twitter.com', '_blank');
				break;
			case 'ng':
				window.open('https://www.linkedin.com', '_blank');
				break;
			case 'ms':
				window.open('https://www.oracle.com', '_blank');
				break;
		}
		
	}
</script>
</html>