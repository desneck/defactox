<?php 

$host = "localhost";
$user = "root";
$password = "";
$database = "defacto";

$con = mysqli_connect($host,$user,$password,$database);

if(!$con){
    echo "db baglanti hatasi !";
}
?>