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
        <?php include './connectionDB.php';?>
        <?php include "./navbar.php";?>

        <span class="br"></span>
  
        <div class="aboutHeader" id="adminHeader">
          <h2>Holidays</h2>
        </div>


        <?php 
          $sqlQuery = "SELECT year,filename from holiday where type = 'closed';";
          $result = $link->query($sqlQuery);
        ?>

        <br/>

        <div class="cal_Nav">
            <button class="calTab" onclick="changeCal(event, 'closedHoliday')" id="defaultOpen">Closed Holidays
            </button>
            <button class="calTab" onclick="changeCal(event, 'restrictedHoliday')">Restricted Holidays
            </button>
          </div>


        <div class="AcMain">
          

          <div class="calTable" id="closedHoliday">

            <table>
              <tr>
                <th>Year</th>
              </tr>

                    <?php 

                      if($result -> num_rows > 0)
                      {
                        while($rows = $result -> fetch_assoc())
                        {
                          echo ("<tr>
                                <td><a href = './Documents/Holidays/closed".$rows['filename']."'>".$rows['year']."</a></td>
                                </tr>");
                        }
                      }
                    ?>

            </table>

          </div>


          <div class="calTable" id="restrictedHoliday">

              <table>
                <tr>
                  <th>Year</th>
                </tr>

                 <?php 
                        $sqlQuery = "SELECT year,filename from holiday where type = 'restricted';";
                        $result = $link->query($sqlQuery);
                      if($result -> num_rows > 0)
                      {
                        while($rows = $result -> fetch_assoc())
                        {
                          echo ("<tr>
                                <td><a href = './Documents/Holidays/restricted".$rows['filename']."'>".$rows['year']."</a></td>
                                </tr>");
                        }
                      }
                    ?>

              </table>

          </div>

        </div>
            
      </body>
    </div>
      <?php include './footer.php'?>

      <?php mysqli_close($link);?>
  <script type="text/javascript" src="./script.js"></script>
  <script type="text/javascript" src="./script1.js"></script>
</html>