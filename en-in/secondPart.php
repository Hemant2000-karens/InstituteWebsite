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
				<img class="imagedirector" src="../Images/director_msg.jpeg" alt="Director Image" width="600" height="400">

			<div class="deskSpeech">


				<img src="../icons/opquote.png" style = "height:20px; width: 20px">
			I hope that our students and faculty will carry the flag of IIITDM Jabalpur to greater heights by applying their knowledge in an inter-disciplinary manner to provide solutions for various industrial, research and development projects. I hope they will stand as responsible and dedicated technocrats in the nation building.
			<img src="../icons/clquote.png" style ="height:20px; width:20px;">
			 ~ (Acting)
			
					</div>
				</div>
			</div>
		</div>





			<div class="campusTour">
			<div class="campusTour_sub">
				<h2>Cultural Fest Tour</h2>
			</div>
			<div class="campusDetail">

				<?php 

					$campusQuery = "SELECT * FROM campusTour";

					$result = $link->query($campusQuery);
				?>

				<div class="campusSlider" id="campusSliderID">
					
					<?php

					if($result -> num_rows > 0)
											{
												while($rows = $result -> fetch_assoc())
												{
													echo"
														<div class='tourBox' style='background: url(\"../Images/CampusTour/".$rows['image'].".jpg\");background-size: cover; background-position: center; background-repeat: no-repeat;'>


															<div class='tourDetail'>
																<h3 Hello World !! </h3>
															</div>



														 <div class='tourBoxCaption'>

														 <span> Lehar - Avartan </span>
														 	<div class='tourBoxCaptionSpan'>
														 		<span>Read</span>
														 	</div>


														  </div>
														  </div>";
												}
											}
					//echo("");



			mysqli_close($link);


											?>



				</div>
				

				<div class="campusNav">
					<button class="disable" id="prevShow">Prev</button>
					<button id="nextShow">Next</button>
				</div>
			</div>
		</div>	


		<div class="reseachHighLights">
			<div class="reseachHighLights_sub">
				<h2>Research Highlight</h2>
				<p><a href="./viewEvents.php"/>View All Research Highlights</a></p>
			</div>
			<div class="rContentMain">
				
				<div class="rBackButton">
					<button onclick="moveRes(-1)"> < </button>
				</div>


				<div class="rContentbody">
					




					<!-- Contentshow/hide -->
				<div class="resBodyParents animFade" id="defaultOpen">
					<div class="resBody">

						<div class="resImage">
							<img src="../Images/rsImage/mlid.jpg">
						</div>
						<div class="resText">
							
							<h4>Machine Learning Based Intrusion Detection Systems for IoT Applications</h4>

							<h5>Internet of Things (IoT) and its applications are the most popular research areas at present. The characteristics of IoT on one side make it easily applicable to real-life applications, whereas on the other side expose it to cyber threats.</h5>

								<button>Read More</button>
						</div>

					</div>

				</div>

			








					<div class="resBodyParents animFade">
					<div class="resBody">

						<div class="resImage">
							<img src="../Images/rsImage/iot.jpg">
						</div>
						<div class="resText">
							
							<h4>Security of RPL based 6LoWPAN Networks in the Internet of Things: A Review</h4>

							<h5>Internet of Things (IoT) is one of the fastest emerging networking paradigms enabling a large number of applications for the benefit of mankind.</h5>

								<button>Read More</button>
						</div>

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



<script type="text/javascript">
	let reSlideIndex = 1;

	function changeResSlide(n) {
    let i;
    let slides = document.getElementsByClassName("resBodyParents");
    if (n > slides.length) {reSlideIndex = 1}    
    if (n < 1) {reSlideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slides[reSlideIndex-1].style.display = "block";
  }

  function moveRes(n) {
      changeResSlide(reSlideIndex += n);
  }

  
	changeResSlide(reSlideIndex);

	document.getElementById('defaultOpen').click();
</script>