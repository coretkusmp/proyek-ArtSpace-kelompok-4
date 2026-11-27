<?php 

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Settings - ArtSpace</title>

   <!-- font -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
   <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
   <!-- font -->
    
   <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">

   <!-- icon -->

   <link rel="stylesheet" href="/style/base.css">
   <link rel="stylesheet" href="/style/settings.css">

</head>

<body class="bg-fish">
   <?php require_once __DIR__ . "/../../components/navbar.php" ?>
   <div class="content">
      <?php require_once __DIR__ . "/../../components/sidebar.php" ?>
      <ul class="settings">
         <a href="profile.php">
            <li>Edit Profil & Informasi Akun</li>
         </a><a href="#">
            <li>Keamanan & Ubah Kata Sandi</li>
         </a><a href="#">
            <li>Preferensi Notifikasi</li>
         </a><a href="#">
            <li>Pengaturan Tampilan & Tema</li>
         </a>
      </ul>
   </div>
   <?php require_once __DIR__ . "/../../components/footer.php" ?>

</body>

</html>