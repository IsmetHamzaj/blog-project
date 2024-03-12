<?php
// error_reporting(0);
session_start();

if(isset($_SESSION['email'])) {
    header("Location: admin.php");
}
if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['fjalkalimi'];

    if($email == "" || $password == "") {
        echo "<script>alert('Ju lutem plotesoni te dhenat!')</script>";
    } else if($email == "admin" && $password == "admin123") {
        header("Location: admin.php");
    } else if($email != "admin" || $password != "admin123"){
        echo "<script>alert('Te dhenat jane te gabuara!')</script>";
    } else {
        echo "<script>alert('Diqka shkoi gabim!')</script>";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Ismet Blogs</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <div class="container">
            <h1 class="title">Ismet Blogs</h1>
            <form action="" method="post" class="login-form">
                <input type="text" placeholder="Email..." name="email">
                <input type="password" placeholder="Fjalkalimi..." name="fjalkalimi">
                <button name="submit" class="btn" id="btn">Kyqu</button>
            </form>
        </div>
    </body>

</html>