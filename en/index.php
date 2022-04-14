
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
   <?php include 'Header.php'?>
   <div class="container">
<?php include "./navbar.php" ?>

<span class="br"></span>
<div class="combined">
    <div class="banner">
      <?php include "./SlideShow.php" ?>
</div>

<!--News Notice-->

<div class="combined_2"style="display:block;margin-left: 12px;width:40%">
  <div class="newsTab">
    <button class="newsTab_button" onclick="openNews(event, 'news')" id="defaultOpen">News</button>
    <button class="newsTab_button" onclick="openNews(event, 'achievement')">Achievment</button>
    <button class="newsTab_button" onclick="openNews(event, 'notice')">Notice</button>
  </div>

  <div id="news" class="newsContent">
    <?php include'./news.php';?>
  </div>

  <div id="notice" class="newsContent">
    <?php include'notice.php';?>
  </div>

  <div id="achievement" class="newsContent">
    <?php include 'archievement.php';?>
  </div>


    <div class="current_update_main">
  <div class="current_update">
    <fieldset>
      <legend>Current updates</legend>
        <marquee behavior="scroll" direction="up" 
                   Scrollamount=3 style="height: -webkit-fill-available;">
          <a href="<?php //echo("Null");?>">
            <h4>
              <?php include 'currentupdate.php' ?><sup class="glow">New</sup>
            </h4>
          </a>
        </marquee>
    </fieldset>
  </div>
</div>

</div>

</div>

  <!-- BANNER-->

<span class="br"></span>
<!--
-->
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


<?php //include './notice.php';?>


<span class="br"></span>


<?php include './messageDesk.php'; ?>

<span class="br"></span>

<?php include './misc.php';?>
</div>
</body>
<?php include './footer.php';?>
<script>

function openNews(evt, tabname) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("newsContent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("newsTab_button");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabname).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();



document.getElementById("overlay").style.display = "block";
function off() {
  document.getElementById("overlay").style.display = "none";
}
</script>
</html>