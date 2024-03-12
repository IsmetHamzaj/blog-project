<?php
include '../config.php';
// error_reporting(0);
session_start();
if(!isset($_SESSION['emri'])) {
    header("Location: index.php");
    exit();
}
if(isset($_POST['submit'])) {
    $userId = $_SESSION['id'];
    $name = $_POST['name'];
    $content = $_POST['content'];

    if(!empty($_POST['name']) || !empty($_POST['content'])) {
        if($userId == $_SESSION['id']){
            $sql = "INSERT INTO blogs (userId, name, content)
            VALUES ('$userId', '$name', '$content')";
            $result = mysqli_query($conn, $sql);
            if($result) {
                echo "<script>alert('Blogu u postua me sukses!')</script>";
                $name = "";
                $content = "";
                header("Location: posts-profile.php");
            } else {
                echo "<script>alert('Diqka shkoi gabim, provoni perseri me vone!')</script>";
            }
        }else{
            echo "<script>alert('Gabim!')</script>";
        }
    } else {
        echo "<script>alert('Ju lutem plotesoni te gjitha fushat!')</script>";
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
        <button class="btn"><a href="../ballina.php">Mbrapa</a></button>
        <h1 class="title">Jeni duke krijuar nje post te ri</h1>
        <form action="" method="post" class="create-post">
            <input type="number" name="userId" value="<?php echo $_SESSION['id'];?>"  hidden>
            <input type="text" placeholder="Titulli i postit" name="name">
            <input type="text" placeholder="Kontenti" name="content">
            <button name="submit">Shto</button>
        </form>
    </body>
</html>