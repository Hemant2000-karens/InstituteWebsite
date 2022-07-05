<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Syllabus | IIITDMJ</title>
		<meta http-equiv="refresh" content="3000">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style.css">
       <link rel="stylesheet" type="text/css" href="./mobile.css">
</head>

	    <?php include './topheader.php';?>
	   	<div class="container">
	    	<body>
	    		<?php include './Header.php';?>

				<?php include "./navbar.php";?>

				<span class="br"></span>
	
				<div class="aboutHeader" id="adminHeader">
					<h2>Syllabus</h2>
				</div>

				<span class="br"></span>
				<br>
				<div class="cal_Nav">
					<button class="calTab" onclick="changeCal(event, 'odd')" id="defaultOpen">
						Odd Sem
					</button>
  				<button class="calTab" onclick="changeCal(event, 'even')">Even Sem
  				</button>
				</div>

				<div class="AcMain">


					<div class="calMain">
						<h3>
							Syllabus for UG 
							<?php 
							include 'connectionDB.php';
							printf("2022-2023");
    					mysqli_close($link);
							?>
						</h3>
					</div>


						<div class="calTable" id="odd">
							

							<table>
								<caption>Semester &#x2160;</caption>
								  <tr>
    								<th>Branch</th>
    								<th>Document Link</th>
  								</tr>


  									<?php include './Syllabus/UG/oddSem/sem1/sem1.php';?>

							</table>



							<table>
								<caption>Semester &#x2162;</caption>
								  <tr>
    								<th>Branch</th>
    								<th>Document Link</th>
  								</tr>

  								<?php include './Syllabus/UG/oddSem/sem3/sem3.php';?>


							</table>



							<table>
								<caption>Semester &#x2164;</caption>
								  <tr>
    								<th>Branch</th>
    								<th>Document Link</th>
  								</tr>



  								<?php include './Syllabus/UG/oddSem/sem5/sem5.php';?>


							</table>


							<table>
								<caption>Semester &#x2166;</caption>
								  <tr>
    								<th>Branch</th>
    								<th>Document Link</th>
  								</tr>

  								<?php include './Syllabus/UG/oddSem/sem7/sem7.php';?>


							</table>



							<div class="calMain">
									<h3>
										Syllabus for PG 
										<?php 
											include 'connectionDB.php';
											printf("2022-2023");
    									mysqli_close($link);
										?>
									</h3>
								</div>


								<table>
								<caption>Semester &#x2160;</caption>
								  <tr>
    								<th>Branch</th>
    								<th>Document Link</th>
  								</tr>


  									<?php include './Syllabus/PG/oddSem/sem1/sem1.php';?>

								</table>


								<table>
								<caption>Semester &#x2162;</caption>
								  <tr>
    								<th>Branch</th>
    								<th>Document Link</th>
  								</tr>

  								<?php include './Syllabus/PG/oddSem/sem3/sem3.php';?>


							</table>

								<!-- End of Odd Sem -->
						
						</div>



						<div class="calTable" id="even">
							
							<table>
								<caption>Semester &#x2161;</caption>
								  <tr>
    								<th>Branch</th>
    								<th>Document Link</th>
  								</tr>

  								<?php include './Syllabus/UG/EvenSem/sem2/sem2.php';?>

							</table>



							<table>
								<caption>Semester &#x2163;</caption>
								  <tr>
    								<th>Branch</th>
    								<th>Document Link</th>
  								</tr>

  								<?php include './Syllabus/UG/EvenSem/sem4/sem4.php';?>


							</table>



							<table>
								<caption>Semester &#x2165;</caption>
								  <tr>
    								<th>Branch</th>
    								<th>Document Link</th>
  								</tr>


  								<?php include './Syllabus/UG/EvenSem/sem6/sem6.php';?>


							</table>


							<table>
								<caption>Semester &#x2167;</caption>
								  <tr>
    								<th>Branch</th>
    								<th>Document Link</th>
  								</tr>

  								<?php include './Syllabus/UG/EvenSem/sem8/sem8.php';?>

							</table>


								<div class="calMain">
									<h3>
										Syllabus for PG 
										<?php 
											include 'connectionDB.php';
											printf("2022-2023");
    									mysqli_close($link);
										?>
									</h3>
								</div>


								<table>
								<caption>Semester &#x2161;</caption>
								  <tr>
    								<th>Branch</th>
    								<th>Document Link</th>
  								</tr>

  								<?php include './Syllabus/PG/EvenSem/sem2/sem2.php';?>

							</table>



							<table>
								<caption>Semester &#x2163;</caption>
								  <tr>
    								<th>Branch</th>
    								<th>Document Link</th>
  								</tr>

  								<?php include './Syllabus/PG/EvenSem/sem4/sem4.php';?>


							</table>

						<!-- Even Call Table Ends Here -->
					</div>

						</div>
						
			</div>

		</body>

	</div>

<?php include './footer.php'?>
<script>


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

	
var coll = document.getElementsByClassName("acdpB");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("show");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}


function changeCal(evt, calName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("calTable");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("calTab");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(calName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</html>