<div class="item2">

<?php include './connectionDB.php';

	$sql_query = "SELECT * FROM achievement";


	$result = $link->query($sql_query);

	if($result -> num_rows > 0)
	{
		while($rows = $result -> fetch_assoc())
		{
			echo "<div class='item2Content'>";
			echo "<span class='br'></span><a href = '".$rows['link']."'"."target='_blank'>".$rows['ach_content']."</a>"."<span class='br'></span> <div class='notice_date'> &nbsp; - ".$rows['date']."</div>";
			echo "</div> <hr class='new1'> ";
		}

		echo "<div class='item2Content0'>";
			echo "<span class='br'></span><a href = '"."./viewall.php"."'"."target='_blank'>"."View All"."</a>";
			echo "</div>";
	}
	else
	{
		echo "<div class='item2Content0'>";
		echo "<span class='br'></span><a href = '"."./viewall.php"."'"."target='_blank'>"."View All"."</a>";
		echo "</div>";
	}
?>

</div>