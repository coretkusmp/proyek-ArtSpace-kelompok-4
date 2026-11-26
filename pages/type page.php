<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Type Page - ArtSpace</title>

    <link rel="stylesheet" href="/style/base.css">
    <link rel="stylesheet" href="/style/artspace-pages.css">

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

            <section class="type-gallery">

                <a href="/pages/picture.php" class="type-card">
                    <img src="/assets/Posts/spiderman.jpg" alt="Spiderman">
                </a>

                <a href="/pages/picture.php" class="type-card">
                    <img src="/assets/Posts/sunflowers.jpeg" alt="Sunflowers">
                </a>

                <a href="/pages/picture.php" class="type-card">
                    <img src="/assets/Posts/cat.jpeg" alt="Cat">
                </a>

                <a href="/pages/picture.php" class="type-card">
                    <img src="/assets/Posts/fishes.jpeg" alt="Fishes">
                </a>

                <a href="/pages/picture.php" class="type-card">
                    <img src="/assets/Posts/trees.jpeg" alt="Trees">
                </a>

                <a href="/pages/picture.php" class="type-card">
                    <img src="/assets/Posts/person.jpg" alt="Portrait">
                </a>

                <a href="/pages/picture.php" class="type-card">
                    <img src="/assets/Posts/ships.jpeg" alt="Ships">
                </a>

                <a href="/pages/picture.php" class="type-card">
                    <img src="/assets/Posts/axolotl.jpeg" alt="Axolotl">
                </a>

                <a href="/pages/picture.php" class="type-card">
                    <img src="/assets/Posts/Senja.png" alt="Starry Night">
                </a>

                <a href="/pages/picture.php" class="type-card">
                    <img src="/assets/Posts/artRooms.jpeg" alt="Art Room">
                </a>

            </section>

        </main>

    </div>

    <?php require_once __DIR__ . "/../components/footer.php"; ?>

</body>
</html>
