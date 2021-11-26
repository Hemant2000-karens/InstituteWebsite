<!DOCTYPE html>
<html lang="en">
    <head>
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

  <img class="SlideShowImage fading" src="Images/img01.jpg" style="height:inherit; width: 100%;" alt="image"/>
  <img class="SlideShowImage fading" src="Images/img02.jpg" style="height:inherit; width: 100%;" alt="image"/>
  <img class="SlideShowImage fading" src="Images/img03.jpg" style="height:inherit; width: 100%;" alt="image"/>
  <img class="SlideShowImage fading" src="Images/img04.jpg" style="height:inherit; width: 100%;" alt="image"/>

  </div>
  <!-- BANNER-->

<span class="br"></span>

  <div class="thought_for_Day">
    <fieldset>
      <legend>Thought for the Day</legend>
        <h1 style="text-align:center; color:#6b6b6b;font-family:'Noto Sans', sans-serif;
  font-weight: 250;">It is very easy to defeat someone,
          But it is very hard to win Someone.</h1>
    </fieldset>
  </div>

<!-- Message from Director and Deans-->
<!--<?php include 'file';?>-->
<span class="br"></span>

<?php include './messageDesk.php'; ?>



<div class="article">
    <fieldset>
      <legend>Notice</legend>
      <div><h1>Hello</h1></div>
    </fieldset>

    <fieldset>
      <legend>Notice</legend>
      <div><h1>Hello</h1></div>
    </fieldset>

    <fieldset>
      <legend>Notice</legend>
      <div><h1>Hello</h1></div>
    </fieldset>
</div>
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
