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
		<a href="#" class="tablinks active1" onclick="openCity(event, 'deanACD');">Dean Academic</a>
		<a href="#" class="tablinks" onclick="openCity(event, 'deanAStd');">Dean Students</a>
		<a href="#" class="tablinks" onclick="openCity(event, 'deanrpSC');">Dean RSPC</a>
		<a href="#" class="tablinks" onclick="openCity(event, 'deanPND');">Dean PND</a>
	</div>
<br>

	<div class="bodyContent" id = "deanACD" style="display:block">
			<div class="deanHeader" id ="NameofDean">
				<h2>Dean Academic</h2>
			</div>
		<br>

<div class = "tableContainer">
			<div class="rowDean">
				<div class="columnDean">
    			<img src="./Images/DeanACD/vijayG.jpg" alt="Vijay" >
					<h5>Prof. Vijay Kumar Gupta</h5>
  			</div>
  			<div class="columnDean">
    			<img src="./Images/DeanACD/santosh.jpg" alt="Santoash">
					<h5>Mr. Santosh Mahobia</h5>
  			</div>
  			<div class="columnDean">
    			<img src="./Images/DeanACD/sandeep.jpg" alt="Sandeep">
					<h5>Mr. Sandeep Awasthi</h5>
  			</div>
			</div>


			<div class="rowDean">
				<div class="columnDean">
					<img src="./Images/DeanACD/simanta.jpg" alt="Snow">
					<h5>Mr. Simanta Kar Gupta</h5>
				</div>
				<div class="columnDean">
					<img src="./Images/DeanACD/richard.jpg" alt="Forest">
					<h5>Mr. Richard Saberio</h5>
				</div>
				<div class="columnDean">
					<img src="./Images/DeanACD/nitin.jpg" alt="Mountains">
					<h5>Mr. Nitin Tripathi</h5>
				</div>
			</div>

			<div class="rowDean">
				<div class="columnDean">
    			<img src="./Images/DeanACD/simran.jpg" alt="Snow">
					<h5>Ms. Simran Kaur Kalra</h5>
  			</div>
  			<div class="columnDean">
    			<img src="./Images/DeanACD/shashank.jpg" alt="Forest">
					<h5>Mr. Shashank Patel</h5>
  			</div>
  			<div class="columnDean">
    			<img src="./Images/DeanACD/irshad.jpg" alt="Mountains">
					<h5>Mr. Irshad Ahmed</h5>
  			</div>
			</div>


	</div>
</div>


<div class="bodyContent" id = "deanAStd">
	<div class="deanHeader" id ="NameofDean">
		<h2>Dean Students</h2>
	</div>


</div>
<div class="bodyContent" id = "deanrpSC">
<h2>Dean RSPC</h2>
</div>
<div class="bodyContent" id = "deanPND">
<h2>Dean PND</h2>
</div>
</div>

</body>
<?php include './footer.php'?>


<script>
function openCity(evt, pageName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("bodyContent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active1", "");
  }
  document.getElementById(pageName).style.display = "block";
  evt.currentTarget.className += " active1";
}

window.onscroll = function(){
	myFunction()
};
var navbar = document.getElementById("NameofDean");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</html>
