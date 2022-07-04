<div class="secondPartmain">
	<div class="secondPartGrid">





		<div class="aboutUsMain">
			<div class="aboutBackground">
				<div class="aboutSub">
					<h2>About IIITDMJ</h2>

					<div class="aboutContent">
				<p>
				Founded in 2005 as the Jabalpur Engineering College, Indian Institute of Information Technology, Jabalpur focuses on Information Technology enabled Design and Manufacturing.

					It is a Institute of National Importance under the IIIT Act of the Government of India. The institute appears in the list of top 100 engineering colleges in India.
				</p>
					</div>
					<center>
						<button onclick="viewMore()" id="viewAllButton">Read More</button>
					</center>
				</div>

			</div>
		</div>



		<div class="messageDesk">
			<div class="messageDesk_main">
			<div class="deskTitle">
				
					Message from <strong>Director's Desk</strong>
			</div>

			<div class="messageDeskCombined">
				<img class="imagedirector" src="./Images/director_msg.jpeg" alt="Director Image" width="600" height="400">

			<div class="deskSpeech">


				<img src="./icons/opquote.png" style = "height:20px; width: 20px">
			I hope that our students and faculty will carry the flag of IIITDM Jabalpur to greater heights by applying their knowledge in an inter-disciplinary manner to provide solutions for various industrial, research and development projects. I hope they will stand as responsible and dedicated technocrats in the nation building.
			<img src="./icons/clquote.png" style ="height:20px; width:20px;">
			 ~ (Acting)
			
					</div>
				</div>
			</div>
		</div>





			<div class="campusTour">
			<div class="campusTour_sub">
				<h2>Campus Tour</h2>

			</div>
		</div>	


		<div class="reseachHighLights">
			<div class="reseachHighLights_sub">
				<h2>Research Highlight</h2>
			</div>
			<div class="rContentMain">
				
				<div class="rBackButton">
					<button onclick="moveRes(-1)"> < </button>
				</div>


				<div class="rContentbody">
					

					<div class="resBody animFade">

						<div class="resImage">
							<img src="./Images/rsImage/mlid.jpg">
						</div>
						<div class="resText">
							
							<h4>Machine Learning Based Intrusion Detection Systems for IoT Applications</h4>

							<h5>Internet of Things (IoT) and its applications are the most popular research areas at present. The characteristics of IoT on one side make it easily applicable to real-life applications, whereas on the other side expose it to cyber threats.</h5>

								<button>Read More</button>
						</div>

					</div>

					<div class="resBody animFade">

						<div class="resImage">
							<img src="./Images/rsImage/mlid.jpg">
						</div>
						<div class="resText">
							
							<h4>Machine Learning Based Intrusion Detection Systems for IoT Applications</h4>

							<h5>Internet of Things (IoT) and its applications are the most popular research areas at present. The characteristics of IoT on one side make it easily applicable to real-life applications, whereas on the other side expose it to cyber threats.</h5>

								<button>Read More</button>
						</div>

					</div>

				

				</div>


				<div class="rForwButton">
					<button onclick="moveRes(1)"> > </button>
				</div>


			</div>
		</div>


	</div>
</div>


<script>

let reSlideIndex = 1;
changeResSlide(reSlideIndex);

function moveRes(n) {
  changeResSlide(reSlideIndex += n);
}

function viewMore() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("viewAllButton");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}



function changeResSlide(n) {
  let i;
  let slides = document.getElementsByClassName("resBody");
  if (n > slides.length) {reSlideIndex = 1}    
  if (n < 1) {reSlideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  // slides[reSlideIndex-1].style.display = "block";
  if(1074 <= screen.width && screen.width <= 1425)
  {
  	slides[reSlideIndex-1].style.display = "flex";  
  }
  else
  {
  	slides[reSlideIndex-1].style.display = "block";
  }
}



</script>





























