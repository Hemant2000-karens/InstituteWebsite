<!DOCTYPE html>
<html lang="en">
    <head>
      <!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="./engine1/style.css" />
<script type="text/javascript" src="./engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->

       <link rel="icon" type="jpg/png" href="./logo_college.png" sizes="16x16">
        <title>IIITDMJ | Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
       <link rel="stylesheet" type="text/css" href="mobile.css">
      <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">

    </head>
    
    <body>
    <?php include 'topheader.php';?>
    <div class="container">
   <?php include 'Header.php'?>

<?php include "./navbar.php" ?>

<span class="br"></span>

<div class="banner">

 <!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
    <li><img src="data1/images/img01.jpg" alt="Administrative Building" title="Administrative Building" id="wows1_0"/></li>
    <li><img src="data1/images/img02.jpg" alt="Side View" title="Side View" id="wows1_1"/></li>
    <li><a href="http://wowslider.net"><img src="data1/images/img03.jpg" alt="jquery slideshow" title="Front View IIITDMJ" id="wows1_2"/></a></li>
    <li><img src="data1/images/img04.jpg" alt="Group Pictures" title="Group Pictures" id="wows1_3"/></li>
  </ul></div>
  <div class="ws_bullets"><div>
    <a href="#" title="Administrative Building"><span><img src="data1/tooltips/img01.jpg" alt="Administrative Building"/>1</span></a>
    <a href="#" title="Side View"><span><img src="data1/tooltips/img02.jpg" alt="Side View"/>2</span></a>
    <a href="#" title="Front View IIITDMJ"><span><img src="data1/tooltips/img03.jpg" alt="Front View IIITDMJ"/>3</span></a>
    <a href="#" title="Group Pictures"><span><img src="data1/tooltips/img04.jpg" alt="Group Pictures"/>4</span></a>
  </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">responsive slider</a> by WOWSlider.com v9.0m</div>
<div class="ws_shadow"></div>
</div>  
<script type="text/javascript" src="./engine1/wowslider.js"></script>
<script type="text/javascript" src="./engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->

  </div>
  <!-- BANNER-->

<span class="br"></span>

  <div class="thought_for_Day">
    <fieldset>
      <legend>Thought for the Day</legend>
        <h1 style="text-align:center; color:#6b6b6b;font-family:'Noto Sans', sans-serif;
  font-weight: 250;">When love is unconditional, there's no attachment, expectation, hidden agenda, or bookkeeping of who gives what to whom. Our love is unconditional for whatever we are and whatever they are. It is given without requirements.</h1>
    </fieldset>
  </div>

<!-- Message from Director and Deans-->
<!--<?php include 'file';?>-->
<span class="br"></span>


<?php include './notice.php';?>


<span class="br"></span>


<?php include './messageDesk.php'; ?>
</div>



 <script  type="text/javascript">
        var myIndex = 0;
carousel();
function carousel() {
  var i;
  var x = document.getElementsByClassName("SlideShowImage");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }


  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 7000); // Change image every 2 seconds
}
      </script>
<?php include './footer.php';?>
</body>
</html>
