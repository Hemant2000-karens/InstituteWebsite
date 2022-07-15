<!DOCTYPE html>
  <html lang="en">
    <head>
      <?php include_once './headTag.php';?>
      <title>Important Forms | IIITDMJ</title>
    </head>

      <?php include './topheader.php';?>
      <div class="container">
        <body>
        <?php include './Header.php';?>

        <?php include "./navbar.php";?>

        <span class="br"></span>
  
        <div class="aboutHeader" id="adminHeader">
          <h2>Holidays</h2>
        </div>


        <br/>

        <div class="cal_Nav">
            <button class="calTab" onclick="changeCal(event, 'agenda')" id="defaultOpen">Closed Holidays
            </button>
            <button class="calTab" onclick="changeCal(event, 'minute')">Restricted Holidays
            </button>
          </div>


        <div class="AcMain">
          

          




        </div>
            
      </body>
    </div>

      <?php include './footer.php'?>
  <script type="text/javascript" src="./script.js"></script>
  <script type="text/javascript" src="./script.js"></script>
</html>