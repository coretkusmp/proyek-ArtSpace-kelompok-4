<?php
require_once __DIR__ . "/../repositories/posts-repository.php";
$posts = getPosts();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Type Page - ArtSpace</title>

    <link rel="stylesheet" href="/style/base.css">
    <link rel="stylesheet" href="/style/type.css">
    <link rel="stylesheet" href="/style/posts.css">


    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body class="bg-starry-night">

    <?php require_once __DIR__ . "/../components/navbar.php"; ?>

    <div class="content">

        <?php require_once __DIR__ . "/../components/sidebar.php"; ?>

        <main class="artspace-main type-main">

            <section class="category-list">

                <a href="/pages/type.php" class="category-active">Semua</a>
                <a href="/pages/type.php?category=Showcase">Showcase</a>
                <a href="/pages/type.php?category=Ilustrasi">Ilustrasi</a>
                <a href="/pages/type.php?category=3D">3D</a>
                <a href="/pages/type.php?category=Foto+Alam">Foto Alam</a>
                <a href="/pages/type.php?category=Anime">Anime & Karakter</a>
                <a href="/pages/type.php?category=Karya+Murni">Karya Murni</a>
                <a href="/pages/type.php?category=Seni+Digital">Seni Digital</a>
                <a href="/pages/type.php?category=Wallpaper">Wallpaper</a>

            </section>

            <?php require_once __DIR__ . "/../components/posts.php"  ?>

        </main>

    </div>

    <?php require_once __DIR__ . "/../components/footer.php"; ?>

</body>
</html>