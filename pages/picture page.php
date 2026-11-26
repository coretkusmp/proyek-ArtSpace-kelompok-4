<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Picture Page - ArtSpace</title>

    <link rel="stylesheet" href="/style/base.css">
    <link rel="stylesheet" href="/style/artspace-pages.css">

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body class="bg-fish">

    <?php require_once __DIR__ . "/../components/navbar.php"; ?>

    <div class="content">

        <?php require_once __DIR__ . "/../components/sidebar.php"; ?>

        <main class="artspace-main">

            <section class="picture-detail">

                <div class="picture-image">
                    <img src="/assets/Posts/flower.png" alt="Aesthetic Flower">
                </div>

                <div class="picture-information">

                    <h1>Aesthetic Flower</h1>

                    <p class="picture-subtitle">
                        Blooming Beauty
                    </p>

                    <div class="picture-tags">
                        <a href="/pages/type.php?category=Foto+Alam">Foto Alam</a>
                        <a href="/pages/type.php?category=Ilustrasi">Ilustrasi</a>
                        <a href="/pages/type.php?category=Wallpaper">Wallpaper</a>
                    </div>

                    <div class="picture-actions">
                        <button type="button" class="picture-action">
                            ♡ Like
                        </button>

                        <button type="button" class="picture-action">
                            ☆ Favorite
                        </button>

                        <button type="button" class="picture-action">
                            ↗ Share
                        </button>
                    </div>

                    <div class="picture-description">
                        <h3>About this artwork</h3>

                        <p>
                            Aesthetic Flower merupakan karya seni
                            yang menampilkan keindahan bunga dengan
                            perpaduan warna ungu yang lembut dan
                            memberikan kesan indah serta menenangkan.
                        </p>
                    </div>

                    <div class="picture-creator">
                        <div class="creator-avatar">A</div>

                        <div>
                            <strong>ArtSpace Creator</strong>
                            <p>Digital Artist</p>
                        </div>
                    </div>

                </div>

            </section>

            <section class="related-picture">

                <h2>Related Artwork</h2>

                <div class="related-grid">

                    <a href="/pages/picture.php">
                        <img src="/assets/Posts/sunflowers.jpeg" alt="Sunflowers">
                    </a>

                    <a href="/pages/picture.php">
                        <img src="/assets/Posts/trees.jpeg" alt="Nature">
                    </a>

                    <a href="/pages/picture.php">
                        <img src="/assets/Posts/angle.jpg" alt="Artwork">
                    </a>

                    <a href="/pages/picture.php">
                        <img src="/assets/Posts/Senja.png" alt="Sunset">
                    </a>

                </div>

            </section>

        </main>

    </div>

    <?php require_once __DIR__ . "/../components/footer.php"; ?>

</body>
</html>
