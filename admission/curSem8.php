<?php include '../en-in/connectionDB.php'; ?>

<table class="table">
	<caption>Semester 8</caption>

	<thead>
		<tr>
	    	<th scope="col">Code</th>
	    	<th scope="col">Course Name</th>
	    	<th scope="col">Offered By</th>
	    	<th scope="col">Discipline</th>
	  	</tr>
	</thead>
	<tbody>

		<?php 
		$query = "Select * from curriculum where semester = 1";

		$result = $link->query($query);
		if($result -> num_rows > 0)
			{
				while($rows = $result -> fetch_assoc())
				{
					echo ("<tr>
					<td style='color:".$rows['color']."'>".$rows['code']."</td>
					<td style='color:".$rows['color']."'>".$rows['CourseName']."</td>
					<td style='color:".$rows['color']."'>".
					$rows['offerredBy']."</td>
					<td style='color:".$rows['color']."'>".$rows['Discipline']."</td>
					</tr>");
				}
			}
			?>
            
        </tbody>
  	<!-- Heading of the tables-->

</table>


<?php $link -> close();?>