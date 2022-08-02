<?php
$link = mysqli_connect("localhost:3306", "website", "password", "Institute");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>