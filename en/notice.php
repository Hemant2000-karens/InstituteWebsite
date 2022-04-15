<div class="item1">



<?php include './connectionDB.php';

	$sql_query = "SELECT * FROM Notice";


	$result = $link->query($sql_query);

	if($result -> num_rows > 0)
	{
		while($rows = $result -> fetch_assoc())
		{
			echo "<div class='item1Content'>";
			echo "<span class='br'></span><a href = '".$rows['notice_link']."'"."target='_blank'>".$rows['notice_text']."</a>"."<span class='br'></span> <div class='notice_date'> &nbsp; - ".$rows['date']."</div>";
			echo "</div> <hr style='border-top: 0.25px solid #00579f;'> ";
		}

		echo "<div class='item1Content0'>";
			echo "<span class='br'></span><a href = '"."./viewall.php"."'"."target='_blank'>"."View All"."</a>";
			echo "</div>";
	}
	else
	{
		echo "<div class='item1Content0'>";
		echo "<span class='br'></span><a href = '"."./viewall.php"."'"."target='_blank'>"."View All"."</a>";
		echo "</div>";
	}


?>

</div>