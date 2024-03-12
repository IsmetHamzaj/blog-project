<?php
error_reporting(0);
session_start();
$emri = $_SESSION['emri']
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ismet Blogs</title>
        <link rel="stylesheet" href="rrethnesh.css">
    </head>
    <body>
        <header class="header">
            <a href="ballina.php" class="logo">
                <p>Ismet <span>Blogs</span></p>
            </a>

            <nav class="navbar">
                <a href="ballina.php">Ballina</a>
                <a href="rrethnesh.php">Rreth nesh</a>
                <a href="./posts/createPost.php"><img class="addimg" src="icons/add.png"></a>
                <a href="./posts/posts-profile.php">Postet</a>
                <a href="kontakti.php">Kontakti</a>
            </nav>
            <div class="profile-logout">
                <p class="name"><?php echo $emri;?></p>
                <div class="shkyqu-box">
                    <a href="../logout.php" class="shkyqu">Shkyqu</a>
                </div>
            <div>
        </header>
        <div class="container">
            <h1>Miresevini ne bllogun tone</h1>
            <div>
                <p>Faleminderit që keni zgjedhur të vizitoni blogun tonë, një hapësirë digjitale ku shpërndajmë pasionin dhe njohuritë tona. Ne jemi një grup shkrimtarësh dhe pasionistë të fushave të ndryshme, të përqëndruar në krijimin e përmbajtjes së vlefshme dhe frytdhënëse për lexuesit tanë.</p>
            </div>
            <h1>Misioni yne:</h1>
            <div>
                <p>Blogu ynë ka një mision të qartë – të ofrojë përvojën më të mirë të leximit duke ndarë artikuj, shqyrtime dhe ide të frytshme. Ne shpresojmë të frymëzojmë dhe të ofrojmë një perspektivë unike në temat që trajtojmë.</p>
            </div>
            <h1>Vlerat tona:</h1>
            <div>
                <h3>Shperblimi kreativitetit:</h3>
                <p>Ne inkurajojmë shprehjen e lirë dhe ndarjen e mendimeve inovative.</p>
                <h3>Drejtesia dhe integriteti:</h3>
                <p>Jemi të përkushtuar të krijojmë përmbajtje të drejtë dhe transparente.</p>
                <h3>Përulësia ndaj lexuesve:</h3>
                <p>Çdo koment, pyetje apo sugjerim nga lexuesit vlerësohet dhe merret seriozisht.</p>
            </div>
            <div>
                <p>Faleminderit që po ndani këtë udhëtim me ne. Leximi juaj është burim frymëzimi për ne, dhe jemi këtu për të ndarë, mësuar dhe rritur së bashku. Mos hezitoni të na shkruani për çfarëdo pyetjeje apo sugjerimi. Lidhuni me ne në komentet e artikujve apo në faqen tonë të <a href="#">kontaktit</a>.</p>
            </div>
            <div>
                <p>Urojmë një udhëtim të këndshëm në botën tonë të blogut!</p>
            </div>
        </div>
    </body>
</html>