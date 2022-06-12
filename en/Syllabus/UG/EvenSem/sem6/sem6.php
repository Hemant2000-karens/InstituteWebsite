<?php
include 'connectionDB.php';
$sqlF = "select * from syllabus where semester = 6 && programs = 'UG'";

$result = $link->query($sqlF);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        
        echo("<tr>
        		<td>".$row['fullName']."</td>
	        	<td>
	        		<a href='./Syllabus/UG/oddSem/sem".$row['semester']."/"."filename"."' target = '_blank'> View </a> 
	        		| 
	        		<a href='./Syllabus/UG/oddSem/sem".$row['semester']."/"."filename"."' download> Download </a> 
	        	</td>
        	</tr>");
    }
} else {
    echo "No Syllabus available for".$row['semester']."";
}

$link ->close();
?>