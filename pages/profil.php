
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile - ArtSpace</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="/style/base.css">
    <link rel="stylesheet" href="/style/profile.css">
</head>

<body>

    <!-- NAVBAR -->
    <header class="profile-navbar">

        <a href="/index.php" class="brand">
            ArtSpace
        </a>

        <a href="/pages/home.php">Home</a>

        <a href="/pages/explore.php">Explore</a>

        <form class="profile-search" action="/pages/explore.php">
            <input type="search" placeholder="Search">
            <button type="submit" aria-label="Search">
                <svg viewBox="0 0 24 24">
                    <circle cx="10.8" cy="10.8" r="6.5"/>
                    <path d="m16 16 5 5"/>
                </svg>
            </button>
        </form>

        <a href="/pages/create.php">Create</a>

        <a href="/pages/news/">News</a>

        <a href="/pages/profile.php" class="navbar-avatar">

            <!-- Minecraft-style avatar -->
            <svg viewBox="0 0 64 64" class="mini-avatar">
                <rect x="12" y="4" width="40" height="40" fill="#50301b"/>
                <rect x="16" y="10" width="32" height="28" fill="#d49a6a"/>
                <rect x="12" y="4" width="40" height="9" fill="#352113"/>
                <rect x="9" y="9" width="8" height="19" fill="#352113"/>
                <rect x="47" y="9" width="7" height="15" fill="#352113"/>
                <rect x="21" y="20" width="6" height="6" fill="#fff"/>
                <rect x="37" y="20" width="6" height="6" fill="#fff"/>
                <rect x="23" y="21" width="3" height="4" fill="#3986b7"/>
                <rect x="38" y="21" width="3" height="4" fill="#3986b7"/>
                <rect x="28" y="28" width="9" height="5" fill="#70422c"/>
                <rect x="22" y="35" width="20" height="7" fill="#4c291d"/>
                <path d="M8 50 L17 42 H47 L56 50 L50 61 H14 Z" fill="#16a9a1"/>
            </svg>

            <span>⌄</span>
        </a>

    </header>


    <!-- CONTENT -->
    <div class="profile-content">

        <!-- SIDEBAR -->
        <?php require_once __DIR__ . "/../components/sidebar.php"; ?>


        <!-- PROFILE MAIN -->
        <main class="profile-main">

            <!-- PROFILE INFORMATION -->
            <section class="profile-information">

                <div class="profile-photo">

                    <!-- Minecraft Avatar -->
                    <svg viewBox="0 0 128 128" class="main-avatar">

                        <!-- Hair -->
                        <rect x="28" y="5" width="72" height="17" fill="#382516"/>
                        <rect x="20" y="13" width="17" height="55" fill="#382516"/>
                        <rect x="93" y="14" width="15" height="50" fill="#382516"/>
                        <rect x="35" y="3" width="62" height="12" fill="#24180f"/>

                        <!-- Face -->
                        <rect x="30" y="25" width="68" height="62" fill="#d6a17b"/>

                        <!-- Eyes -->
                        <rect x="42" y="43" width="15" height="12" fill="#ffffff"/>
                        <rect x="71" y="43" width="15" height="12" fill="#ffffff"/>

                        <rect x="49" y="44" width="7" height="10" fill="#3982b4"/>
                        <rect x="77" y="44" width="7" height="10" fill="#3982b4"/>

                        <!-- Nose -->
                        <rect x="58" y="56" width="12" height="10" fill="#b77c5c"/>

                        <!-- Mouth / Beard -->
                        <rect x="45" y="71" width="40" height="10" fill="#69402b"/>
                        <rect x="52" y="80" width="26" height="8" fill="#49301f"/>

                        <!-- Neck -->
                        <rect x="48" y="87" width="32" height="13" fill="#c58c66"/>

                        <!-- Shirt -->
                        <path d="M27 95 L48 90 L80 90 L101 95 L119 115 L108 128 H20 L9 115 Z"
                              fill="#08aaa4"/>

                        <rect x="42" y="101" width="44" height="27" fill="#07938f"/>

                    </svg>

                </div>


                <h2 class="profile-name">
                    Pisuke
                </h2>

                <p class="profile-email">
                    pplpwl@gmail.com
                </p>


                <!-- CHANGE PROFILE PHOTO -->
                <label for="changePhoto" class="change-photo">

                    <svg viewBox="0 0 24 24">
                        <path d="M4 7h3l2-3h6l2 3h3a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2Z"/>
                        <circle cx="12" cy="13" r="4"/>
                    </svg>

                    Ganti Foto Profil

                </label>

                <input
                    type="file"
                    id="changePhoto"
                    accept="image/*"
                    hidden
                >

            </section>


            <!-- PROFILE BUTTONS -->
            <section class="profile-actions">

                <!-- EDIT PROFILE -->
                <a href="/pages/settings/profile.php" class="profile-action">

                    <svg viewBox="0 0 24 24">
                        <path d="m14 5 5 5"/>
                        <path d="M4 20l4.5-1 12-12a3 3 0 0 0-4.5-4.5l-12 12L4 20Z"/>
                    </svg>

                    <span>Edit Profil</span>

                </a>


                <!-- MANAGE POSTS -->
                <a href="/pages/explore.php" class="profile-action">

                    <svg viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="9"/>
                        <circle cx="12" cy="12" r="5"/>
                        <path d="M12 1v3M12 20v3M1 12h3M20 12h3"/>
                    </svg>

                    <span>Kelola Postingan</span>

                </a>


                <!-- LOGOUT -->
                <a href="/pages/auth/login.php" class="profile-action">

                    <svg viewBox="0 0 24 24">
                        <circle cx="10" cy="7" r="4"/>
                        <path d="M3 21v-2a7 7 0 0 1 14 0v2"/>
                        <path d="M17 12h6m-3-3 3 3-3 3"/>
                    </svg>

                    <span>Logout</span>

                </a>


                <!-- DELETE ACCOUNT -->
                <button type="button" class="profile-action delete-action"
                    onclick="alert('Fitur Delete Account menunggu integrasi backend.')">

                    <svg viewBox="0 0 24 24">
                        <circle cx="10" cy="7" r="4"/>
                        <path d="M3 21v-2a7 7 0 0 1 14 0v2"/>
                        <path d="m18 5 5 5m0-5-5 5"/>
                    </svg>

                    <span>Delete Account</span>

                </button>

            </section>

        </main>

    </div>


    <!-- FOOTER -->
    <footer class="profile-footer">

        <div class="profile-footer-about">

            <h1>ArtSpace</h1>

            <p>
                Tempat dimana orang-orang dapat berkarya
                dan melihat referensi karya. Bergabunglah
                dan bagikan berbagai inspirasi karya seni
                menakjubkan setiap hari. Mari dukung seniman
                lokal maupun internasional dengan
                mengapresiasi dan memberikan ulasan pada
                setiap karya yang diunggah.
            </p>

            <div class="footer-social">

                <a href="#">
                    <img src="/assets/icons/x.png" alt="X">
                </a>

                <a href="#">
                    <img src="/assets/icons/linkedin.png" alt="LinkedIn">
                </a>

                <a href="#">
                    <img src="/assets/icons/instagram.png" alt="Instagram">
                </a>

                <a href="#">
                    <img src="/assets/icons/facebook.png" alt="Facebook">
                </a>

            </div>

        </div>


        <div class="profile-footer-map">

            <h3>Site map</h3>

            <a href="/pages/home.php">Home</a>
            <a href="/pages/explore.php">Explore</a>
            <a href="/pages/create.php">Create</a>
            <a href="/pages/news/">News</a>
            <a href="/pages/type.php">Type</a>
            <a href="/pages/settings.php">Settings</a>
            <a href="#">About</a>

        </div>


        <div class="profile-footer-legal">

            <h3>Legal</h3>

            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Services</a>

        </div>

    </footer>


    <div class="profile-copyright">
        © Artspace
    </div>


    <!-- PHOTO PREVIEW -->
    <script>
        const changePhoto = document.getElementById("changePhoto");

        changePhoto.addEventListener("change", function () {

            const file = this.files[0];

            if (file) {

                const reader = new FileReader();

                reader.onload = function (event) {

                    document.querySelector(".main-avatar").style.display = "none";

                    const photo = document.querySelector(".profile-photo");

                    photo.style.backgroundImage =
                        "url('" + event.target.result + "')";

                    photo.style.backgroundSize = "cover";
                    photo.style.backgroundPosition = "center";

                };

                reader.readAsDataURL(file);

            }

        });
    </script>

</body>
</html>
