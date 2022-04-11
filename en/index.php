
<!DOCTYPE html>
<html lang="en">
    <head>

       <link rel="icon" type="jpg/png" href="./logo_college.png" sizes="16x16">
        <title>IIITDMJ | Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
       <link rel="stylesheet" type="text/css" href="mobile.css">
    </head>

    <body>
      <div id="overlay" onclick="off()">
        <img  id="welcomeNotice" src="./Images/vaccination.jpg">
    </div>
    <?php include 'topheader.php';?>
    <div class="container">
   <?php include 'Header.php'?>

<?php include "./navbar.php" ?>

<span class="br"></span>

<div class="combined">
  
  <div class="slideshowMain">
    <div class="banner">
      <?php include "./SlideShow.php" ?>
  </div>
</div>

<!--News Notice-->
  <div class="newsTab">
    <button class="newsTab_button" onclick="openCity(event, 'news')" id="defaultOpen">News</button>
    <button class="newsTab_button" onclick="openCity(event, 'notice')">Notice</button>
    <button class="newsTab_button" onclick="openCity(event, 'achievement')">Achievment</button>
  </div>

  <div id="news" class="newsContent">
    <h3>London</h3>
    <p>London is the capital city of England.</p>
  </div>

  <div id="notice" class="newsContent">
    <h3>Paris</h3>
    <p>Paris is the capital of France.</p> 
  </div>

  <div id="achievment" class="newsContent">
    <h3>Tokyo</h3>
    <p>Tokyo is the capital of Japan.</p>
  </div>


</div>

  <!-- BANNER-->

<span class="br"></span>
<!--
<div class="current_update_main">
  <div class="current_update">
    <fieldset>
      <legend>Current updates</legend>
        <marquee behavior="scroll" direction="right" 
                   Scrollamount=3>
          <a href="<?php //echo("Null");?>">
            <h4>
              <?php //include 'currentupdate.php' ?><sup class="glow">New</sup>
            </h4>
          </a>
        </marquee>
    </fieldset>
  </div>
</div>-->
<br>

  <!--<div class="thought_for_Day">
    <fieldset>
      <legend>Thought for the Day</legend>
      <h1 style="text-align:center; color:#6b6b6b;font-family:'Varela Round', sans-serif;font-weight: 250;">
      "<?php //   include 'thought.php' ?>" 
      </h1>
    </fieldset>
  </div>-->


<!-- Message from Director and Deans-->
<span class="br"></span>


<?php include './notice.php';?>


<span class="br"></span>


<?php include './messageDesk.php'; ?>
<span class="br"></span>
<?php include './misc.php';?>
</div>
</body>
<?php include './footer.php';?>
<script>
document.getElementById("overlay").style.display = "block";
function off() {
  document.getElementById("overlay").style.display = "none";
}
</script>
</html>