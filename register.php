<?php
include 'config.php';
error_reporting(0);
session_start();

if(isset($_SESSION['emri'])) {
    header('Location: index.php');
}

if(isset($_POST['submit'])) {
    $emri = $_POST['emri'];
    $mbiemri = $_POST['mbiemri'];
    $email = $_POST['email'];
    $password = md5($_POST['fjalkalimi']);
    $cpassword = md5($_POST['kfjalkalimi']);

    if(!empty($_POST['emri']) || !empty($_POST['mbiemri']) || !empty($_POST['email']) || !empty($_POST['fjalkalimi']) || !empty($_POST['kfjalkalimi'])) {
        if(strlen($_POST['fjalkalimi']) >= 6) {
        if($password == $cpassword) {
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
    
                if(!$result->num_rows>0) {
                    $sql = "INSERT INTO users (emri, mbiemri, email, fjalkalimi) VALUES ('$emri', '$mbiemri', '$email', '$password')";
                    $result = mysqli_query($conn, $sql);
                    if($result) {
                        echo "<script>alert('Urime, jeni regjistruar me sukses!')</script>";
                        $emri = "";
                        $mbiemri = "";
                        $email = "";
                        $_POST['password'] = "";
                        $_POST['cpassword'] = "";
                        header("Location: index.php");
                    } else {
                        echo "<script>alert('Diqka shkoi gabim, provoni perseri me vone!')</script>";
                    }
                } else {
                    echo "<script>alert('Ky email egziston!')</script>";
                }
            } else {
                echo "<script>alert('Fjalkalimet nuk perputhen!')</script>";
            }
        } else {
            echo "<script>alert('Fjalkalimi juaj duhet te kete 6 ose me shume karaktere!')</script>";
        }
    }
    else {
        echo "<script>alert('Ju lutem plotesoni te gjitha fushat!')</script>";
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
            <form action="" method="post" class="register-form">
                <input type="text" placeholder="Emri..." name="emri">
                <input type="text" placeholder="Mbiemri..." name="mbiemri">
                <input type="email" placeholder="Email..." name="email">
                <input type="password" placeholder="Fjalkalimi..." name="fjalkalimi" >
                <input type="password" placeholder="Konfirmo Fjalkalimin..." name="kfjalkalimi">
                <button class="btn" name="submit">Regjistrohu</button>
                <p class="login-register-text">Ke llogari? <a href="index.php">Kyqu tani!</a></p>
            </form>
        </div>
    </body>
</html>