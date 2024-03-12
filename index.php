<?php
include 'config.php';
error_reporting(0);
session_start();
if(isset($_SESSION['emri'])) {
    header("Location: ballina.php");
}
if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['fjalkalimi']);

    if($email && $password) {
        $sql = "SELECT * FROM users WHERE email='$email' AND fjalkalimi='$password'";
        $result = mysqli_query($conn, $sql);
        if($result->num_rows>0) {
           $row = mysqli_fetch_assoc($result);
           $_SESSION['emri'] = $row['emri'];
           $_SESSION['id'] = $row['id'];
           header("Location: ballina.php");
        } else{
            echo "<script>alert('Oops!!! Te dhenat jane te gabuara')</script>";
        }
    } else {
        echo "<script>alert('Ju duhet te jepni te dhenat tuaja per tu kyqur!')</script>";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ismet Blogs</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <h1 class="title">Ismet Blogs</h1>
            <form action="" method="post" class="login-form">
                <input type="email" placeholder="Email..." name="email">
                <input type="password" placeholder="Fjalkalimi..." name="fjalkalimi">
                <button name="submit" class="btn" id="btn">Kyqu</button>
                <p class="register-login-text">Ske llogari? <a href="register.php">Regjistrohu tani!</a></p>
            </form>
        </div>
    </body>
</html>