<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="notes";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Connection failed");
}


?>