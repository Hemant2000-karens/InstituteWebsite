<!DOCTYPE html>
<html>
<head>
	<title>Fees Payment | IIITDMJ</title>
	<?php include_once './headTag.php';?>
</head>

	    <?php include './topheader.php';?>
	   	<div class="container">
	    	<body>
	
	    		<?php include './header2.php';?>
				<span class="br"></span>
	
				<div class="aboutHeader" id="adminHeader">
					<h2>Fees Payment</h2>
				</div>
				
				<div class="AcMain">

					<h4>To Pay Fee, Kindly visit Given Link</h4>

					<b>Only for Existing students</b>


					<br/>

					<a href="https://easypay.axisbank.co.in/easyPay/makePayment?mid=MzY3NjY=">
						Axis Bank Payment Gateway

					</a>

					<br>
					New Addmission Students - Link 

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