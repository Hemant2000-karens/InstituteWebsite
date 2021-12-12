<section class="home">
<div class="slider">
        <div class="slide active" style="background-image: url('./Images/img01.jpg')">
            <div class="SlideshowContainer">
                <div class="caption">
                    <h1>1. Winter Collection 2020</h1>
                    <p>Lorem ipsum dummy text goes here.</p>
                </div>
            </div>
        </div>
        <div class="slide" style="background-image: url('./Images/img02.jpg')">
            <div class="SlideshowContainer">
                <div class="caption">
                    <h1>2. Winter Collection 2020</h1>
                    <p>Lorem ipsum dummy text goes here.</p>
                </div>
            </div>
        </div>
        <div class="slide" style="background-image: url('./Images/img03.jpg')">
            <div class="SlideshowContainer">
                <div class="caption">
                    <h1>3. Winter Collection 2020</h1>
                    <p>Lorem ipsum dummy text goes here.</p>
                </div>
            </div>
        </div>


        <div class="slide" style="background-image: url('./Images/img04.jpg')">
            <div class="SlideshowContainer">
                <div class="caption">
                    <h1>3. Winter Collection 2020</h1>
                    <p>Lorem ipsum dummy text goes here.</p>
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