<?php 
$server = "localhost";
$user = "root";
$pass = "";
$database = "zapatos_database";
$conn = mysqli_connect($server, $user, $pass, $database);
// $db = my_sql_selectdb("zapatos_database",$conn);
if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}?>