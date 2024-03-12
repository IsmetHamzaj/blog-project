<?php
include '../config.php';
session_start();

$blogs_query = "SELECT * FROM blogs";
$users_query = "SELECT * FROM users";

$blogs_result = mysqli_query($conn, $blogs_query);
$users_result = mysqli_query($conn, $users_query);
$blogs_rows = mysqli_num_rows($blogs_result);
$users_rows = mysqli_num_rows($users_result);

// if(!isset($_SESSION['email'])) {
//     header("Location: adminLogin.php");
//     exit();
// }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ismet Blogs</title>
        <link rel="stylesheet" href="admin.css">
    </head>
    <body>
        <header class="header">
            <a class="logo" href="admin.php">
                <p>Admin <span>Dashboard</span></p>
            </a>
            <nav class="navbar">
                <a href="#blogs">Blogs</a>
                <a href="#users">Users</a>
                <button class="header_btn"><a href="adminLogout.php" class="shkyqu">Shkyqu</a></button>
            </nav>
        </header>

        <section class="blogs" id="blogs">
            <h3>Total blogs - <?php echo $blogs_rows; ?></h3>
            <table border="2">
                <tr>
                    <th>ID</th>
                    <th>User Id</th>
                    <th>Blog Title</th>
                    <th>Blog content</th>
                    <th>Actions</th>
                </tr>
                <?php
                    while($row = mysqli_fetch_assoc($blogs_result)) {
                        ?>
                            <tr>
                                <td><?php echo $row['id']?></td>
                                <td><?php echo $row['userId']?></td>
                                <td><?php echo $row['name']?></td>
                                <td><?php echo $row['content']?></td>
                                <td><button><a href="updateBlogs.php?updateid=<?php echo $row['id'] ?>">Edit</a></button><button><a href="deleteBlogs.php?deleteid=<?php echo $row['id']; ?>">Fshi</a></button></td>
                            </tr>
                        <?php
                    }
                ?>
            </table>
        </section>
        <section class="users" id="users">
        <h3>Total users - <?php echo $users_rows; ?></h3>
            <table border="2">
                    <tr>
                        <th>ID</th>
                        <th>Emri</th>
                        <th>Mbiemri</th>
                        <th>Email</th>
                        <th>Fjalkalimi</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                        while($row = mysqli_fetch_assoc($users_result)) {
                            ?>
                                <tr>
                                    <td><?php echo $row['id']?></td>
                                    <td><?php echo $row['emri']?></td>
                                    <td><?php echo $row['mbiemri']?></td>
                                    <td><?php echo $row['email']?></td>
                                    <td><?php echo $row['fjalkalimi']?></td>
                                    <td><button><a href="updateUsers.php?updateid=<?php echo $row['id'] ?>">Edit</a></button><button><a href="deleteUsers.php?deleteid=<?php echo $row['id'];?>">Fshi</a></button></td>
                                </tr>
                            <?php
                        }
                    ?>
            </table>
        </section>
    </body>
</html>