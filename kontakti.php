<?php
error_reporting(0);
session_start();

$emri = $_SESSION['emri'];

if(isset($_GET['submit'])) {
    header("Location: ballina.php");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ismet Blogs</title>
        <link rel="stylesheet" href="kontakti.css">
    </head>
    <body>
    <header class="header">
            <a href="ballina.php" class="logo">
                <p>Ismet <span>Blogs</span></p>
            </a>

            <nav class="navbar">
                <a href="ballina.php">Ballina</a>
                <a href="rrethnesh.php">Rreth nesh</a>
                <a href="posts/createPost.php"><img class="addimg" src="icons/add.png"></a>
                <a href="posts/posts-profile.php">Postet</a>
                <a href="kontakti.php">Kontakti</a>
            </nav>
            <div class="profile-logout">
                <p class="name"><?php echo $emri;?></p>
                <div class="shkyqu-box">
                    <a href="../logout.php" class="shkyqu">Shkyqu</a>
                </div>
            <div>
        </header>
        <form method="get">
            <div class="container">
                <h1>Na kontaktoni</h1>
                <div>
                    <input type="text" placeholder="Emri juaj">
                    <input type="email" placeholder="Email i juaj">
                </div>
                <div>
                    <input type="text" placeholder="Mesazhi juaj" >
                </div>
                <button id="btn" name="submit">Dergo</button>
            </div>
        </form>
        <script src="kontakti.js"></script>
    </body>
</html>