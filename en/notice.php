<div class="noticebody">
	<div class="noticeTitle">
		<span>News & <strong>Notice</strong></span>
		<span style="padding: 0 18px;"><a href="#">View All</a></span>
	</div>


	
	<div class="noticeSlider">
	<img class="prev" src="./Images/left_arr.png"/>
	<div class="noticeContent">Hello I am here</div>
	<div class="noticeContent">You are not</div>
	<div class="noticeContent">Hello I am here 2</div>
	<div class="noticeContent">You are not 2</div>
	<div class="noticeContent">Hello I am here 3</div>
	<div class="noticeContent">You are not 3</div>
	<div class="noticeContent">Hello I am here 4</div>
	<div class="noticeContent">You are not 4</div>
	<div class="noticeContent">Hello I am here 5</div>
	<div class="noticeContent">You are not 5</div>
	
	
	<img src="./Images/right_Arr.png" class="forw"/>
	</div>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("noticeContent");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }

  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1} 
  slides[slideIndex-1].style.display = "inline-flex";
  slides[slideIndex].style.display = "inline-flex";  
  
  setTimeout(showSlides, 2000); // Change image every 2 seconds

}
</script>