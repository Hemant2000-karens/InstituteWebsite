<!DOCTYPE html>
  <html lang="en">
    <head>
      <?php include_once './headTag.php';?>
      <title>Important Forms | IIITDMJ</title>
    </head>

      <?php include './topheader.php';?>
      <div class="container">
        <body>
        <?php include './header2.php';?>

        <span class="br"></span>
  
        <div class="aboutHeader" id="adminHeader">
          <h2>Important Downloads Forms</h2>
        </div>

        <div class="AcMain">
          

            
      </body>
    </div>

      <?php include './footer.php'?>
  <script type="text/javascript" src="./script.js"></script>
  <script type="text/javascript" src="./script.js"></script>
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