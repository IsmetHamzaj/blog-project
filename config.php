<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "blog";


$conn = mysqli_connect($server, $user, $pass, $database);

if(!$conn) {
    die("<script>alert('Diqka shkoi gabim provoni perseri')</script>");
}
?>