<?php 
include '../config.php';
error_reporting(0);
session_start();
if(!isset($_SESSION['emri'])) {
    header("Location: index.php");
    exit();
}
if(isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM blogs WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if($result) {
        echo "<script>alert('Blogu u fshi me sukses!')</script>";
        header("Location: posts-profile.php");
    } else {
        echo "<script>alert('Ndodhi nje gabim ju lutem provoni perseri!')</script>";
    }
}
?>