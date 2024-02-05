<div class="secondPartmain">
	


		<div class="c a">
		<div class="campusTour ">
				<div class="campusTour_sub">
					<h2>News/Events</h2>
				</div>
				
					<div class="scrollbar_main Page">

						<?php 


						include './news.php';

						?>
						
						<div class="btn">	
							<button onclick="viewMore()" id="viewAllButton" >Read More</button>
						</div>
						
						
					</div>
					
					
		</div>
		</div>			
		
		<div class="c">
		<div class="campusTour">
				<div class="campusTour_sub">
					<h2>Placement</h2>
				</div>
				<div class=" placement_c">
					<div id="piechart_3d" style="height:204px; width: -webkit-fill-available; padding: 5% 0;">
					
					</div>
					<div class="p_btn">
						<button onclick="viewMore()" id="viewAllButton">Read More</button>
					</div>
				</div>	
		</div>
		</div>		

		<div class="c">
		<div class="campusTour">
				<div class="campusTour_sub">
					<h2>Academics</h2>
				</div>
				
					<div class="scrollbar_main Page">

						<?php 


						include './academics_main.php';

						?>
						<div class="a_btn">
							<button onclick="viewMore()" id="viewAllButton">Read More</button>
						</div >

					</div>


		</div>
		</div>	
	
		<div class="c">
		<div class="campusTour">
			<div class="campusTour_sub">
				<h2>Tender/Notices</h2>
			</div>
			
				<div class="scrollbar_main Page">


					<?php 


					include './tender_main.php';

					?>
				</div>

				<center>
					<button onclick="viewMore()" id="viewAllButton">Read More</button>
				</center>
				
		</div>
		</div>	

		<div class="c">
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
		</div>
	
				
				

</div>

<div class="status_btns">
	<div id="b" class="on" data-target="1"><h3> Notice 	</h3></div>
	<div id="b" data-target="2"><h3> Placement </h3></div>
	<div id="b" data-target="3"><h3> Academics</h3></div>
	<div id="b" data-target="4"><h3> Tender</h3></div>
	<div id="b" data-target="4"><h3> Cultural Fest</h3></div>
</div>

<script>
	const btns = document.querySelectorAll(".status_btns #b");
	const contents = document.querySelectorAll(".secondPartmain .c");

	const removeActiveClass = () => {
		btns.forEach((t) => {
			t.classList.remove("on");
		});

		contents.forEach((c) => {
			c.classList.remove("a");
		});
	};

	btns.forEach((t, i) => {
		t.addEventListener("click", () => {
			removeActiveClass();
			contents[i].classList.add("a");
			t.classList.add("on");
		});
	});



</script>