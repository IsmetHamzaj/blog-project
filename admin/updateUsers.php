<?php
include "../config.php";
// error_reporting(0);
session_start();
$id = $_GET['updateid'];
$query = "SELECT * FROM users WHERE id='" . $id . "'";
$query_result = mysqli_query($conn, $query);

if(isset($_POST['submit'])) {
    $emri = $_POST['emri'];
    $mbiemri = $_POST['mbiemri'];
    $email = $_POST['email'];
    $password = $_POST['fjalkalimi'];
    $cpassword = $_POST['kfjalkalimi'];

    $sql = "UPDATE users set id='$id', emri='$emri', mbiemri='$mbiemri', email='$email', fjalkalimi='$password', kfjalkalimi='$cpassword' WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if($result) {
        echo "<script>alert('Perdoruesi u perditsua me sukses!')</script>";
        header("Location: admin.php");
    } else {
        echo "<script>alert('Ndodhi nje gabim ju lutem provoni perseri!')</script>";
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
            <h1 class="title">Profile Update</h1>
            <form action="" method="post" class="register-form">
                <?php 
                    while($row = mysqli_fetch_assoc($query_result)) {
                        ?>
                            <input type="text" placeholder="Emri..." name="emri" value="<?php echo $row['emri'] ?>">
                            <input type="text" placeholder="Mbiemri..." name="mbiemri" value="<?php echo $row['mbiemri'] ?>">
                            <input type="email" placeholder="Email..." name="email" value="<?php echo $row['email'] ?>">
                            <input type="password" placeholder="Fjalkalimi..." name="fjalkalimi" value="<?php echo $row['fjalkalimi'] ?>" >
                            <input type="password" placeholder="Konfirmo Fjalkalimin..." name="kfjalkalimi" value="<?php echo $row['kfjalkalimi'] ?>">
                            <button class="btn" name="submit">Update</button>
                        <?php
                    }
                ?>
            </form>
        </div>
    </body>
</html>