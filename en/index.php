<!DOCTYPE html>
<html lang="en">
    <head>

       <link rel="icon" type="jpg/png" href="./logo_college.png" sizes="16x16">
        <title>IIITDMJ | Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
       <link rel="stylesheet" type="text/css" href="mobile.css">
    </head>
    
    <body>
    <?php include 'topheader.php';?>
    <div class="container">
   <?php include 'Header.php'?>

<?php include "./navbar.php" ?>

<span class="br"></span>

<div class="banner">

<?php include "./SlideShow.php" ?>
  </div>
  <!-- BANNER-->

<span class="br"></span>

  <div class="thought_for_Day">
    <fieldset>
      <legend>Thought for the Day</legend>
        <h1 style="text-align:center; color:#6b6b6b;font-family:'Varela Round', sans-serif;
  font-weight: 250;">The Function Of Education Is To Teach One To Think Intensively And To Think Critically.</h1>
    </fieldset>
  </div>

<!-- Message from Director and Deans-->
<span class="br"></span>


<?php include './notice.php';?>


<span class="br"></span>


<?php include './messageDesk.php'; ?>
<span class="br"></span>
<?php include './other.php'?>
</div>

 <?php include './footer.php';?>
</body>
</html>
