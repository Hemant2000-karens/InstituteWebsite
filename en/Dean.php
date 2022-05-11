<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dean | IIITDMJ</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
       <link rel="stylesheet" type="text/css" href="mobile.css">
</head>
<?php include './topheader.php';?>
<div class = "container">
<body>

	<?php include "./Header.php" ;?>

	<?php include "./navbar.php" ;?>

	<span class="br"></span> <!--Horizontal rule -->
	<br>
	<div class="DeanNav">
		<a href="#" class="tablinks active1" onclick="openTab(event, 'deanACD');">Dean Academic</a>
		<a href="#" class="tablinks" onclick="openTab(event, 'deanAStd');">Dean Students</a>
		<a href="#" class="tablinks" onclick="openTab(event, 'deanrpSC');">Dean RSPC</a>
		<a href="#" class="tablinks" onclick="openTab(event, 'deanPND');">Dean PND</a>
	</div>
	<br>

	<div class="bodyContent" id = "deanACD" style="display:block">

			<div class="deanHeader" id ="NameofDean-0">
				<h2>Dean Academic</h2>
			</div>
		<br>

		<div class = "tableContainer">
			<div class="office_of_Dean">
				<h3><span>Office of Dean</span></h3>
				
			</div>
		</div>

	</div>
	<div class="bodyContent" id = "deanAStd">

		<div class="deanHeader" id ="NameofDean-1">
			<h2>Dean Students</h2>
		</div>
		<br>

	<div class = "tableContainer">
			<div class="rowDean">
				<div class="columnDean">
    				<img src="./Images/DeanStd/tanuja.png" alt="tanuja" >
					<h5>Prof. Tanuja Sheroy</h5>
					<h4>Dean(Students)</h4>
  				</div>
  				<div class="columnDean">
    				<img src="./Images/DeanStd/santosh.jpg" alt="Santoash">
					<h5>Mr. Santosh Mahobia</h5>
					<h4>Assistant Registrar</h4>
  				</div>
  				<div class="columnDean">
    				<img src="./Images/DeanStd/sandeep.jpg" alt ="Sandeep">
					<h5>Mr. Sandeep Awasthi</h5>
					<h4>Junior Superintendent</h4>
  				</div>
			</div>


			<div class="rowDean">
				<div class="columnDean">
					<img src="./Images/DeanACD/simanta.jpg" alt="Snow">
					<h5>Mr. Rajesh Kanaujia</h5>
					<h4>Senior Assistant</h4>
				</div>
				<div class="columnDean">
					<img src="./Images/DeanACD/richard.jpg" alt="Forest">
					<h5>Mr. Talib Ahmed</h5>
					<h4>Clerk</h4>
				</div>
				<div class="columnDean">
					<img src="./Images/DeanACD/nitin.jpg" alt="Mountains">
					<h5>Mr. Amit Kashyap</h5>
					<h4>Office Assistant</h4>
				</div>
			</div>

				<div class="body">

  					Hearty congratulations on being taken a wise move of joining IIITDMJ community. I extend a warm welcome and assure you to take this treasured journey together in the right earnest.
						PDPM IIITDMJ is one of the unique academic Institutes with regard to its curriculum and emphasize on project-oriented learning. I am happy to write that Indian as well as Japanese industries are recognizing enhanced capabilities of our students due to the unique curriculum. The atmosphere on the campus is lively and I am sure you will enjoy every moment spent here and will cherish for the rest of your life.

  				</div>
		</div>

	</div>

	<div class="bodyContent" id = "deanrpSC">

		<div class="deanHeader" id ="NameofDean-2">
			<h2>Dean RSPC</h2>
		</div>
		<div class = "tableContainer">
			<div class="rowDean">
				<div class="columnDean">
    			<img src="./Images/DeanRSPC/pkpadhy.png" alt="Prabin" >
					<h5>Prof. Prabin Kumar Padhy</h5>
					<h4>Dean of RSPC</h4>
  			</div>
  			<div class="columnDean">
    			<img src="./Images/DeanRSPC/Priti.png" alt="Priti">
					<h5>Ms. Priti Patel</h5>
					<h4>Assistant Registrar</h4>
  			</div>
  			<div class="columnDean">
    			<img src="./Images/DeanRSPC/prashant.png" alt="Sandeep">
					<h5>Mr. Prashant Agnihotri</h5>
					<h4>Senior Assistant</h4>
  			</div>
			</div>

<div class="externalLink">
				<div class="externalheading">
					<span>About RSPC Office</span>
			</div>
			<p>
				The Office of Dean Research, Sponsored Projects and Consultancy (RSPC) is a unit of PDPM IIITDM Jabalpur specifically setup in the institute to provide specialized administrative and managerial support and awareness for the operation of Sponsored Research Projects, Consultancy, Fieldwork, IPR related issues as well as to co-ordinate and facilitates all Research & Development activities in the Institute.
			</p>
			<span class="fLink">For the Further Detail visit - <a href="https://www.iiitdmj.ac.in/rspc.iiitdmj.ac.in/index.php" target="_blank">https://www.iiitdmj.ac.in/rspc.iiitdmj.ac.in/index.php</a></span>
	</div>
	</div>
</div>


	<div class="bodyContent" id = "deanPND">

		<div class="deanHeader" id ="NameofDean-3">
			<h2>Dean P&D</h2>
		</div>

			<div class = "tableContainer">
				<div class="rowDean">

  				<div class="columnDean">
    				<img src="./Images/DeanPnD/pnkon.png" alt="Prof. P.N Kondekar" >
						<h5>Prof. P.N Kondekar</h5>
						<h4>Dean(Planning & Research)</h4>
  				</div>

					<div class="columnDean">
    				<img src="./Images/DeanPnD/atul.png" alt="Prof, Atul" >
						<h5>Prof. Atul Gupta</h5>
						<h4>Associate Dean(Planning & Research)</h4>
  				</div>

			</div>
		</div>
	</div>

	</body>
</div>


<?php include './footer.php'?>


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


var navbar = document.getElementById("NameofDean-0");
var navbar1 = document.getElementById("NameofDean-1");
var navbar2 = document.getElementById("NameofDean-2");
var navbar3 = document.getElementById("NameofDean-3");

	var sticky = navbar.offsetTop;
	var sticky1 = navbar1.offsetTop;
	var sticky2 = navbar2.offsetTop;
	var sticky3 = navbar3.offsetTop;

function stickyFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
    navbar1.classList.add("sticky");
    navbar2.classList.add("sticky");
    navbar3.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
    navbar1.classList.remove("sticky");
    navbar2.classList.remove("sticky");
    navbar3.classList.remove("sticky");
 		}
	}
</script>
</html>
