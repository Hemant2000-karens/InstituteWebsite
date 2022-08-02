<?php
$link = mysqli_connect("localhost:3306", "website", "passWord@123", "Institute");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>