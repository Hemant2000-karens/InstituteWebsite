<!DOCTYPE html>
    <head>
      <title>IIITDMJ | Home</title>
      <?php include_once './headTag.php';?>

    </head>

    <body>
      
    <?php include 'topheader.php';?>


    <?php 

      include_once('./connectionDB.php');
      $sqlF = "SELECT image,heading from slideshow;";

      $result = $link->query($sqlF);


    if ($result->num_rows > 0) 
    {
      $row = $result->fetch_assoc();
    }
    else 
    {

    }
    $link ->close();

    ?>

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


<?php include './fistPart.php'?>

  <span class="br"></span>
  <span class="br"></span>
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
         

 const slides=document.querySelector(".fullBgBackground");
 const prev=document.querySelector(".prew");
 const next=document.querySelector(".next");
 let index=0;


   prev.addEventListener("click",function(){
       prevSlide();
       resetTimer();
   })

   next.addEventListener("click",function(){
      nextSlide(); 
      resetTimer();
      
   })


    function indicateSlide(element){
         index=element.id;
         changeSlide();
         resetTimer();
    }
     
   function prevSlide(){
     if(index==0){
        index=slides.length-1;
     }
     else{
        index--;
     }
     changeSlide();
   }

   function nextSlide(){
      if(index==slides.length-1){
        index=0;
      }
      else{
        index++;
      }
      changeSlide();
   }

   function changeSlide(){
           for(let i=0; i<slides.length; i++){
            // slides[i].classList.remove("active");

             document.fullBgBackground.style.backgroundImage = 'url("../Images/Slider/img09.jpg")';
           }

      // slides[index].classList.add("active");
   }

   function resetTimer(){
      // when click to indicator or controls button 
      // stop timer 
      clearInterval(timer);
      // then started again timer
      timer=setInterval(autoPlay,7000);
   }
 
  
  function autoPlay(){
      nextSlide();
  }

  let timer=setInterval(autoPlay,7000);


</script>


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

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
  google.charts.load("current", {packages:["corechart"]});
  google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Branch', 'Percent of Placements'],
        ['CSE',     11],
        ['ME',      2],
        ['ECE',  2],
        ['SM', 2],
        ['DS',    7]
      ]);
    var options = {
      title: 'Placements in 2021',
      is3D: true,
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
      chart.draw(data, options);
      }
      </script>




</html>