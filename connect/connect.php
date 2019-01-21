<?php
$server ="localhost";
$username = "root";
$pass = "";
$database="project";
$conn = mysqli_connect($server, $username, $pass, $database);


// Change character set to utf8
mysqli_set_charset($conn,"utf8");
?>