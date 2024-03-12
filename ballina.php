<?php
include 'config.php';
session_start();
error_reporting(0);
if(!isset($_SESSION['emri'])) {
    header("Location: index.php");
    exit();
}
$emri = $_SESSION['emri'];
$id = $_SESSION['id'];
$query = "SELECT * FROM blogs";
$result = mysqli_query($conn, $query);
$num_rows = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ismet Blogs</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header class="header">
            <a href="ballina.php" class="logo">
                <p>Ismet <span>Blogs</span></p>
            </a>

            <nav class="navbar">
                <a href="ballina.php">Ballina</a>
                <a href="rrethnesh.php">Rreth nesh</a>
                <a href="./posts/createPost.php"><img class="addimg" src="./icons/add.png"></a>
                <a href="./posts/posts-profile.php">Postet</a>
                <a href="kontakti.php">Kontakti</a>
            </nav>
            <div class="profile-logout">
                <p class="name"><?php echo $emri;?></p>
                <div class="shkyqu-box">
                    <a href="logout.php" class="shkyqu">Shkyqu</a>
                </div>
            <div>
        </header>
        <section class="data-display">
        <table border="2" class="table">
            <tr>
                <td>Titulli i blogut</td>
                <td>Permbajtja e bllogut</td>
            </tr>
            <tr>
                <?php
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['content'] ?></td>
                        </tr>
                        <?php
                    }
                ?>
            </tr>
        </table>
        </section>
    </body>
</html>