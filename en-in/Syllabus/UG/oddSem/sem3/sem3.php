<?php

include './connectionDB.php';

$sqlF = "SELECT semester,filename from syllabus where semester = 3 && programs = 'UG'";

$result = $link->query($sqlF);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        
        echo("<tr>
        		<td>".$row['fullName']."</td>
	        	<td>
	        		<a href='./Syllabus/UG/EvenSem/sem".$row['semester']."/".$row['filename']."' target = '_blank'> View </a> 
	        		| 

	        		<a href='./Syllabus/UG/EvenSem/sem".$row['semester']."/".$row['filename']."' download> Download </a> 
	        	</td>
        	</tr>");
    }
} else {

   echo("<tr>
        		<td colspan ='2'> Not Available
	        	</td>
        	</tr>");
}

	$link -> close();
?>