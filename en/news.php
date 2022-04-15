<div class="item3">

<?php include './connectionDB.php';

	$sql_query = "SELECT * FROM news";


	$result = $link->query($sql_query);

	if($result -> num_rows > 0)
	{
		while($rows = $result -> fetch_assoc())
		{
			echo "<div class='item3Content'>";
			echo "<span class='br'></span><a href = '".$rows['n_link']."'"."target='_blank'>".$rows['news']."</a>"."<span class='br'></span> <div class='notice_date'> &nbsp; - ".$rows['date']."</div>";
			echo "</div> <hr class='new1'> ";
		}

		echo "<div class='item3Content0'>";
			echo "<span class='br'></span><a href = '"."./viewall.php"."'"."target='_blank'>"."View All"."</a>";
			echo "</div>";
	}
	else
	{
		echo "<div class='item3Content0'>";
		echo "<span class='br'></span><a href = '"."./viewall.php"."'"."target='_blank'>"."View All"."</a>";
		echo "</div>";
	}
?>

</div>