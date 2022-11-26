<?php

$host ="localhost";
$user ="root";
$pass ="";
$db ="group";

$conn = mysqli_connect($host, $user, $pass, $db); 
if (!$conn){
    echo("Failed to connect to the database.<br>");
    die("<script>alert('Connection failed.')</script>");

}
?>