<div class = "stats">

	<div class="statsParents">
		
		<div class = "statsBody color1">
			<i class="bi bi-person-fill"></i>
			<span class="counter" data-target="500">0</span>
			<span class="countertag">Students</span>
		</div>

		<div class = "statsBody color1">
			<i class="bi bi-person-badge"></i>
			<span class="counter" data-target="500">0</span>
			<span class="countertag">Faculty</span>
		</div>

		<div class = "statsBody color1">
			<i class="bi bi-mortarboard-fill"></i>
			<span class="counter" data-target="500">0</span>
			<span class="countertag">Graduates</span>
		</div>

		<div class = "statsBody color1">
			<i class="bi bi-globe2"></i>
			<span class="counter" data-target="500">0</span>
			<span class="countertag">Placements</span>
		</div>

	</div>

</div>

<div class = "recruiter">
	<div class="reseachHighLights_sub">
		<h2>Our Recruiter</h2>
	</div>
	
	<div class="rcScroll">

		<div class="rctP">
			
			<div class="rct">
				<img src="../Images/recruiters/accenture.png" />
			</div>
				
			<div class="rct">
				<img src="../Images/recruiters/amazon.png" />
			</div>
	
			<div class="rct">
				<img src="../Images/recruiters/jio.png" />
			</div>

			<div class="rct">
				<img src="../Images/recruiters/itc.png" />
			</div>

		</div>
	</div>
</div>




<script type="text/javascript">
	const counters = document.querySelectorAll('.counter');
			const speed = 500;

        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;

                // Lower inc to slow and higher to slow
                const inc = target / speed;

                // console.log(inc);
                // console.log(count);

                // Check if target is reached
                if (count < target) {
                    // Add inc to count and output in counter
                    counter.innerText = count + inc;
                    // Call function every ms
                    setTimeout(updateCount, 1);
                } else {
                    counter.innerText = target;
                }
            };

            updateCount();
        });

</script>