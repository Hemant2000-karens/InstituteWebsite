<section class="home">
<div class="slider">
        

    <?php include './connectionDB.php';


    $sqlF = "SELECT * from slideshow;";

    $result = $link->query($sqlF);

    if ($result->num_rows > 0) 
    {
        
      while($row = $result->fetch_assoc()) 
      {
        echo ("<div class = '".$row['class']."'"."style='background-image:url(\"./Images/Slider/".$row['image']."\")'>"."<div class='SlideshowContainer'><div class='caption'><h1>".$row['heading']."</h1><p>".$row['paragraph']."</p></div></div></div>");
        }
    } 
    else 
    {
      echo "No Current update";
    }
    $link ->close();
    ?>

     </div>
  <!-- controls  -->
    <div class="controls">
        <div class="prew"><</div>
        <div class="next">></div>
    </div>

</section>


     <script type="text/javascript">
         

 const slides=document.querySelector(".slider").children;
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
             slides[i].classList.remove("active");
           }

       slides[index].classList.add("active");
   }

   function resetTimer(){
      // when click to indicator or controls button 
      // stop timer 
      clearInterval(timer);
      // then started again timer
      timer=setInterval(autoPlay,8000);
   }
 
  
  function autoPlay(){
      nextSlide();
  }

  let timer=setInterval(autoPlay,8000);


     </script>