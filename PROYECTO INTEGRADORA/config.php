<?php 

$server="localhost";
$user="INTEGRADORA";
$pass="";
$database="login";

$conn = mysqli_connect($server,$user,$pass,$database);

if(!$conn){
    die("Conexión fallida");
}

?>