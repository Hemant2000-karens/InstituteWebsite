<div class="item1">

<?php include './connectionDB.php';

	$sql_query = "SELECT notice_link,notice_text,date FROM Notice limit 5";


	$result = $link->query($sql_query);

	if($result -> num_rows > 0)
	{
		while($rows = $result -> fetch_assoc())
		{
			echo ("<div class='item1Content'>"."<span class='br'></span><a href = '".$rows['notice_link']."'"."target='_blank'>".$rows['notice_text']."</a>"."<span class='br'></span> <div class='notice_date'> &nbsp; - ".$rows['date']."</div>"."</div> <hr class='new1'> ");
		}

		echo ("<div class='item2Content0'>"."<span class='br'></span><a href = './noticdAll.php' target='_blank'>"."View All"."</a>"."</div>");
	}
	else
	{
		echo ("<div class='item2Content0'>"."<span class='br'></span><a href = './noticdAll.php' target='_blank'>"."View All"."</a>"."</div>");
	}
?>

</div>