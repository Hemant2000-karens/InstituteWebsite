<?php
include 'connectionDB.php';
$sqlF = "SELECT * from c_update;";

$result = $link->query($sqlF);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "<a href='".$row['link']."'> <h4>";
        echo $row['curr_update']."<sup class='glow'>New</sup></h4></a>";
        echo "<br>";
    }
} else {
    echo "No Current update";
}

$link ->close();
?>