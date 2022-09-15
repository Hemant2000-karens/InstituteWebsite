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

    <div class="fullBgBackground">
    <div class="fullBg">






      <div class="shadowIndex">
        <?php include 'Header.php'?>
        <div class="centerNav" id="mainNav">
          <?php include "./navbar.php" ?> 
        </div>
      </div>
    <div class="container">
      <span class="br"></span>
        <div class="combined rellax" data-rellax-speed="-4">
          <div class="banner">

            <h1>Welcome to Indian Institute of Information Technology, Design and Manufacturing Jabalpur</h1>

          </div>
          <!--News Notice-->

          



        </div>
    </div>

    <div class="controls">
        <div class="prew"><</div>
        <div class="next">></div>
    </div>


</div>
</div>
  <!-- BANNER-->

<span class="br"></span>
<!--

  <?php include './'?>
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












<script type="text/javascript">

  var indexNavBar = document.getElementById("mainNav");
  var stickynav = indexNavBar.offsetTop;
  window.onscroll = function()
  {
    stickyNavbar()
  };



  function stickyNavbar() {
      if (window.pageYOffset >= stickynav) {
        indexNavBar.classList.add("indexNav");
      } else {
        indexNavBar.classList.remove("indexNav");
      }
    }


    function viewMore()
    {
      window.open("./about.php","_self");
    }


    var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


  document.getElementById('defaultOpen').click();
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.0.0/rellax.min.js"></script>

<script type="text/javascript">
  var rellax = new Rellax('.rellax');
</script>






</html>