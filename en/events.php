<div class="events">
	<div class="reseachHighLights_sub">
	<h2>Events</h2>
		<p><a href="#">View All Events</a></p>
	</div>	

	<div class="event-grid">

		<?php include './connectionDB.php' ;
		$sqlQuery = "Select * from events Limit = 4;";
		?>

		<div class="event-body-main">
			<div class="event-image">
				
			</div>
			<div class="event-date">
				<span>June</span>
				<span>22, 2022</span>
			</div>
			<div class="event-content">
				<h4>Blood Donation Camp Organised by IIITDM Jabalpur</h4>
			</div>
		</div>
	</div>
</div>