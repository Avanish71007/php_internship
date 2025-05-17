<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname="bloggerdb";

$conn = new mysqli($server, $user, $pass, $dbname);
if(!$conn){
    echo"error!: {$conn->connect_error}";
}
// else{
//     echo"Connnection is done!";}
?>