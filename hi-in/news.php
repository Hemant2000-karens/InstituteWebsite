<div class="item3">

<?php include './connectionDB.php';

	$sql_query = "SELECT * FROM news limit 5";


	$result = $link->query($sql_query);

	if($result -> num_rows > 0)
	{
		while($rows = $result -> fetch_assoc())
		{
			echo ("<div class='item3Content'>"."<span class='br'></span><a href = '".$rows['n_link']."'"."target='_blank'>".$rows['news']."</a>"."<span class='br'></span> <div class='notice_date'> &nbsp; - ".$rows['date']."</div>"
			 ."</div> <hr class='new1'> ");
		}

		echo ("<div class='item2Content0'>"."<span class='br'></span><a href = './newsAll.php' target='_blank'>"."View All"."</a>"."</div>");
	}
	else
	{
		echo ("<div class='item2Content0'>"."<span class='br'></span><a href = './newsAll.php' target='_blank'>"."View All"."</a>"."</div>");
	}
?>

</div>