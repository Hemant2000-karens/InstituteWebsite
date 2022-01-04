<div class="noticebody">
	<div class="noticeTitle">
		<span>News & <strong>Notice</strong></span>
		<span style="padding: 0 18px;"><a href="viewall.php">View All</a></span>
	</div>

	<div class="noticeSlider">
	<img class="prev" src="./Images/left_arr.png" onclick="plusSlides(-1)" />


	<div class="noticeContent">
	<p>
		<img src="./icons/clock.png" alt= "date"/>
		<span class="date">8
			<sup style="text-transform: lowercase">th</sup>
			May,2021
		</span>
		<span class="message">
		Hello I am here 1
		</span>
	</p>
	</div>
	<div class="noticeContent">
	<p>
		<img src="./icons/clock.png" alt= "date"/>
		<span class="date">9
			<sup style="text-transform: lowercase">th</sup>
			May,2021
		</span>
		<span class="message">
		Hello I am here 2
		</span>
	</p>
	</div>
	<div class="noticeContent">
	<p>
		<img src="./icons/clock.png" alt= "date"/>
		<span class="date">10
			<sup style="text-transform: lowercase">th</sup>
			May,2021
		</span>
		<span class="message">
		Hello I am here 3
		</span>
	</p>
	</div>
	<div class="noticeContent">
	<p>
		<img src="./icons/clock.png" alt= "date"/>
		<span class="date">11
			<sup style="text-transform: lowercase">th</sup>
			May,2021
		</span>
		<span class="message">
		Hello I am here 4
		</span>
	</p>
	</div>
	<div class="noticeContent">
	<p>
		<img src="./icons/clock.png" alt= "date"/>
		<span class="date">12
			<sup style="text-transform: lowercase">th</sup>
			May,2021
		</span>
		<span class="message">
		Hello I am here 5
		</span>
	</p>
	</div>
	<div class="noticeContent">
	<p>
		<img src="./icons/clock.png" alt= "date"/>
		<span class="date">13
			<sup style="text-transform: lowercase">th</sup>
			May,2021
		</span>
		<span class="message">
		Hello I am here 6
		</span>
	</p>
	</div>
	<div class="noticeContent">
	<p>
		<img src="./icons/clock.png" alt= "date"/>
		<span class="date">14
			<sup style="text-transform: lowercase">th</sup>
			May,2021
		</span>
		<span class="message">
		Hello I am here 7
		</span>
	</p>
	</div>
	
	<div class="noticeContent">
	<p>
		<img src="./icons/clock.png" alt= "date"/>
		<span class="date">15
			<sup style="text-transform: lowercase">th</sup>
			May,2021
		</span>
		<span class="message">
		Hello I am here 8
		</span>
	</p>
	</div>

	<img src="./Images/right_arr.png" class="forw" onclick="plusSlides(1)"/>
	</div>
</div>



<script type="text/javascript">
	var slideIndex = 0;
showSlides();

function showSlides() {
  var i;

  var slides = document.getElementsByClassName("noticeContent");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }slideIndex++;
  if (slideIndex >= slides.length) {slideIndex = 1} 
  slides[slideIndex-1].style.display = "inline-flex";
  if(window.screen.width > 960)
  slides[slideIndex].style.display = "inline-flex";  
  setTimeout(showSlides, 3000); // Change image every 3 seconds

}
</script>