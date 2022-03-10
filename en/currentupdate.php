<?php
include 'connectionDB.php';
$sqlF = "SELECT thought from thought_of WHERE Date = curdate();";

$result = $link->query($sqlF);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo $row['thought'];
    }
} else {
    echo "No Current update";
}

$link ->close();
?>

