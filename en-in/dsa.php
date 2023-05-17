<?php ;?>
<!DOCTYPE html>
<html>
<head>
	<?php include_once './headTag.php';?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DSA | IIITDMJ</title>
</head>
<div class="dsa_nav_main">
	<div class="dsa_nav">
		<img src="./logo_college.png" class="dsa_nav_logo">
		<h5>Student Affairs Office</h5>

    <span class=""></span>
	</div>

	<div class="topnav2" id="myTopnav">
	 	<a href="./dsa.php">Home</a>
      
    <a href="./xyz.php">Notices</a>
    <a href="./hostel.php">Hostels</a>


      <div class="dropdown2">
        <button class="dropbtn">Facilities 
        </button>
        <div class="dropdown-content">
          <a href="./c_mess.php">Students Mess</a> 
          <a href="./comingSoon.html">Primary Health Center</a>             
          <a href="./comingSoon.html">Library</a>          
          <a href="./comingSoon.html">Computer Center</a>
          <a href="./comingSoon.html">Bus Services</a>
        </div>
      </div> 


      <a href="./antiRagg.php">Anti Ragging</a>
      <a href="./comingSoon.html">Gymkhana/ Clubs</a>   
      <a href="./counselling.php">Counseling</a>
      <a href="./counselling.php">Forms</a>
      <a href="./counselling.php">Rules/ Guidelines</a>
      <a href="./counselling.php">Events</a>

      <a href="javascript:void(0);" style="font-size:18px;" class="icon" onclick="myFunction()">&#9778;</a>

	 </div>
</div>
<body>
<section id="">
  


</section>











</body>


<script type="text/javascript">


function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className == "topnav2") {
    x.className += " responsive";
  } else {
    x.className = "topnav2";
  }
}
</script>
</html>