<?php
include '../config.php';
error_reporting(0);
session_start();
if(!isset($_SESSION['emri'])) {
    header("Location: ../index.php");
    exit();
}



$emri = $_SESSION['emri'];


$query = "SELECT * FROM blogs WHERE userId = '" . $_SESSION['id'] . "'";
$result = mysqli_query($conn, $query);
$num_rows = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Ismet Blogs</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <header class="header">
            <a href="ballina.php" class="logo">
                <p>Ismet <span>Blogs</span></p>
            </a>

            <nav class="navbar">
                <a href="../ballina.php">Ballina</a>
                <a href="../rrethnesh.php">Rreth nesh</a>
                <a href="createPost.php"><img class="addimg" src="../icons/add.png"></a>
                <a href="posts-profile.php">Postet</a>
                <a href="../kontakti.php">Kontakti</a>
            </nav>
            <div class="profile-logout">
                <p class="name"><?php echo $emri;?></p>
                <div class="shkyqu-box">
                    <a href="../logout.php" class="shkyqu">Shkyqu</a>
                </div>
            <div>
        </header>
        <section class="profile-data">
            <h3 class="profile-name"><?php echo $emri;?></h3>
            <button><a href="updateProfile.php?updateid=<?php echo $_SESSION['id']; ?>">Edit</a></button>
            <h3>Posts: <?php echo $num_rows; ?></h3>
        </section>
        <section class="data-display">
            <table border="2" class="table">
                <tr>
                    <td>Titulli i blogut</td>
                    <td>Permbajtja e bllogut</td>
                    <td>Edit/Delete</td>
                </tr>
                <tr>
                    <?php
                        while($row = mysqli_fetch_assoc($result))
                        {
                            ?>
                            <tr>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['content'] ?></td>
                            <td><button><a href="updatePosts.php?updateid=<?php echo $row['id']?>">Update</a></button>
                            <button id="editbtn"><a href="deletePosts.php?deleteid=<?php echo $row['id'] ?>">Fshi</a></button></td>
                            </tr>
                            <?php
                        }
                    ?>
                </tr>
            </table>
        </section>
        <script src="update.js"></script>
    </body>
</html>