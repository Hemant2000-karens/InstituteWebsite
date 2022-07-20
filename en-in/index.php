
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>IIITDMJ | Home</title>
        <?php include_once './headTag.php';?>
    </head>

    <body>
      <!-- <div id="overlay" onclick="off()">
        <img  id="welcomeNotice" src="../Images/csir.jpg">
    </div> -->
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
    <?php include'./notice.php';?>
  </div>

  <div id="achievement" class="newsContent">
    <?php include './ach.php';?>
  </div>


    <div class="current_update_main">
  <div class="current_update">
    <fieldset>
      <legend>Latest updates</legend>
        <marquee behavior="scroll" Scrollamount="1.2" direction="up" onmouseover="this.stop();"
           onmouseout="this.start();" style="height: -webkit-fill-available;height: 100%;overflow: hidden;">
                <?php include './currentupdate.php';?>
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

<!-- Message from Director and Deans-->
<span class="br"></span>


<?php //include './notice.php';?>


<span class="br"></span>


<?php include './secondPart.php'; ?>

<span class="br"></span>

<?php include './misc.php';?>
</div>

<?php include './events.php';?>
<?php include './extra.php';?>
</body>
<?php include './footer.php';?>
<script type="text/javascript" src="./script.js"></script>

<script type="text/javascript" src="./script1.js"></script>
</html>