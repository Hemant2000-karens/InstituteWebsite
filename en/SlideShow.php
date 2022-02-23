<section class="home">
<div class="slider">
        <div class="slide active" style="background-image: url('./Images/img01.jpg')">
            <div class="SlideshowContainer">
                <div class="caption">
                    <h1>Lab Complex</h1>
                    <p>Looking Cool</p>
                </div>
            </div>
        </div>
        <div class="slide" style="background-image: url('./Images/img02.jpg')">
            <div class="SlideshowContainer">
                <div class="caption">
                    <h1>Lab Complex 2</h1>
                    <p>Looking Awesome</p>
                </div>
            </div>
        </div>
        <div class="slide" style="background-image: url('./Images/img04.jpg')">
            <div class="SlideshowContainer">
                <div class="caption">
                    <h1>Group Photograph</h1>
                    <p>All Faculty and Director sir with Vice President</p>
                </div>
            </div>
        </div>


        <div class="slide" style="background-image: url('./Images/img03.jpg')">
            <div class="SlideshowContainer">
                <div class="caption">
                    <h1>Institute Lectures Hall</h1>
                    <p>Front View</p>
                </div>
            </div>
        </div>

 <div class="slide" style="background-image: url('./Images/img05.jpeg')">
            <div class="SlideshowContainer">
                <div class="caption">
                    <h1>Administrative Building</h1>
                    <p> Side View</p>
                </div>
            </div>
        </div>

<div class="slide" style="background-image: url('./Images/img06.jpg')">
            <div class="SlideshowContainer">
                <div class="caption">
                    <h1>Design Workshop</h1>
                    <p>Detailed View</p>
                </div>
            </div>
        </div>


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
      timer=setInterval(autoPlay,5000);
   }
 
  
  function autoPlay(){
      nextSlide();
  }

  let timer=setInterval(autoPlay,5000);


     </script>