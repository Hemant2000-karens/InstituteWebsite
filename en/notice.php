<div class="item1">
<?php include './connectionDB.php';

	$sql_query = "SELECT * FROM Notice";


	$result = $link->query($sql_query);

	if($result -> num_rows > 0)
	{
		while($rows = $result -> fetch_assoc())
		{
			echo "<br> <a href = '".$rows['notice_link']."'"."target='_blank'>".$rows['notice_text']."</a>"."-".$rows['date']."<br>";
		}
	}
	else
	{
		echo "View all - <a href='viewall.php'>View All</a>";
	}


?>
</div>