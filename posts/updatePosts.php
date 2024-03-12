<?php
include '../config.php';
error_reporting(0);
session_start();
if(!isset($_SESSION['emri'])) {
    header("Location: index.php");
    exit();
}

$id = $_GET['updateid'];

if(isset($_POST['submit'])) {
    $userId = $_SESSION['id'];
    $name = $_POST['name'];
    $content = $_POST['content'];

    $sql = "UPDATE blogs set id=$id, name='$name', content='$content' WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if($result) {
        echo "<script>alert('Blogu u editua me sukses!')</script>";
        header("Location: posts-profile.php");
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
        <form action="" method="post" class="create-post">
            <input type="number" name="userId" value="<?php echo $_SESSION['id'];?>"  hidden>
            <input type="text" placeholder="Titulli i postit" name="name">
            <input type="text" placeholder="Kontenti" name="content">
            <button name="submit">Edit</button>
        </form>
    </body>
</html>

