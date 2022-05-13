<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hostel | IIITDMJ</title>
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
					<h2>Hostels@iiitdmj</h2>
				</div>



				<div class="AcMain">

					<div class="hostel_main">

							<div class="hostel_card">
								<div class="hostel_card_image">
									<img src="./Images/Hostel/hall3.jpg" class="img" />
								</div>
								<div class="hostel_card_text">
									<h4>Vasishtha Hostel (Hall - 1)</h4>
								</div>
							</div>


							
							<div class="hostel_card">
									<div class="hostel_card_image">
										<img src="./Images/Hostel/hall3.jpg" class="img" />
									</div>
									<div class="hostel_card_text">
										<h4>Aryabhatta Hostel (Hall - 3)</h4>
									</div>
							</div>


							<div class="hostel_card">
									<div class="hostel_card_image">
										<img src="./Images/Hostel/hall3.jpg" class="img" />
									</div>
									<div class="hostel_card_text">
										<h4>Vivekananda Hostel (Hall - 4)</h4>
									</div>
							</div>


							<div class="hostel_card">
									<div class="hostel_card_image">
										<img src="./Images/Hostel/hall3.jpg" class="img" />
									</div>
									<div class="hostel_card_text">
										<h4>Panini Hostel (PG)</h4>
									</div>
							</div>


							<div class="hostel_card">
								<div class="hostel_card_image">
									<img src="./Images/Hostel/hall3.jpg" class="img" />
								</div>
								<div class="hostel_card_text">
									<h4>Nagarjuna Hostel (PG- Married)</h4>
								</div>
							</div>


							<div class="hostel_card">
								<div class="hostel_card_image">
									<img src="./Images/Hostel/hall3.jpg" class="img" />
								</div>
								<div class="hostel_card_text">
									<h4>Maa Saraswati Girls Hostel</h4>
								</div>
							</div>


							<div class="hostel_card">
								<div class="hostel_card_image">
									<img src="./Images/Hostel/hall3.jpg" class="img" />
								</div>
								<div class="hostel_card_text">
									<h4>Vasishtha Hostel (Hall - 1)</h4>
								</div>
							</div>


							<div class="hostel_card">
								<div class="hostel_card_image">
									<img src="./Images/Hostel/hall3.jpg" class="img" />
								</div>
								<div class="hostel_card_text">
									<h4>Vasishtha Hostel (Hall - 1)</h4>
									</div>
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
</script>
</html>