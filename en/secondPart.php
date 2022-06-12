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



		<div class="reseachHighLights">
			<div class="reseachHighLights_sub">
				<h2>Research Highlight</h2>
			</div>
			<div class="rContentMain">
				
				<div class="rBackButton">
					<button> < </button>
				</div>


				<div class="rContentbody">
					

					



				


				

				</div>


				<div class="rForwButton">
					<button> > </button>
				</div>


			</div>
		</div>


		<div class="reseachHighLights">
			<div class="reseachHighLights_sub">
				<h2>To be Decided</h2>

			</div>
		</div>		













	</div>
</div>


<script>
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
</script>

































