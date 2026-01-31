<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "college_notice_board";   // change ONLY if your DB name is different

$conn = mysqli_connect($host,$user,$pass,$db);

if(!$conn){
    die("Database connection failed");
}

?>