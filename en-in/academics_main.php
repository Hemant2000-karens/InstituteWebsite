<?php include './connectionDB.php';

	$sql_query = "SELECT notice,link,date FROM academics limit 5";


	$result = $link->query($sql_query);

	if($result -> num_rows > 0)
	{
		while($rows = $result -> fetch_assoc())
		{
			echo ("<div class='item3Content'>"."<span class='br'></span><a href = '".$rows['link']."'"."target='_blank'>".$rows['notice']."</a>"."<span class='br'></span> <div class='notice_date'> &nbsp; - ".$rows['date']."</div>"
			 ."</div> <hr class='new1'> ");
		}
	}
	else
	{
		echo ("<div class='item2Content0'>"."<span class='br'></span><a href = './newsAll.php' target='_blank'>"."No Data Available"."</a>"."</div>");
	}
?>