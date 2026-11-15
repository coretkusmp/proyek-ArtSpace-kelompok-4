<?php
require_once __DIR__ . "/../repositories/posts-repository.php";
$posts = getPosts();
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Create - ArtSpace</title>

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
   <link rel="stylesheet" href="/style/home.css">
   <link rel="stylesheet" href="/style/create.css">

</head>

<body class="bg-ocean">
   <?php require_once __DIR__ . "/../components/navbar.php" ?>
   <div class="content">
      <?php require_once __DIR__ . "/../components/sidebar.php" ?>
      <div class="mainContent">
         <form method="post" action="">
            <div class="form-header">
               <label class="inputImage">Upload Image</label>
               <input type="file" class="inputImage" accept="image/png, image/jpg, image/jpeg">
               <ul>
                  <li><label for="">Title</label> <input type="text"></li>
                  <li><label for="">Description</label> <textarea></textarea></li>
               </ul>
            </div>

            <div class="tags">
               <label for="">Tag</label>
               <ul>
                  <li onclick="toggleTag(0)" class="" value="StreetWear">StreetWear</li>
                  <li onclick="toggleTag(1)" class="" value="Ilustrasi">Ilustrasi</li>
                  <li onclick="toggleTag(2)" class="" value="3D">3D</li>
                  <li onclick="toggleTag(3)" class="" value="Foto Alam">Foto Alam</li>
                  <li onclick="toggleTag(4)" class="" value="Anime & Karakter">Anime & Karakter</li>
                  <li onclick="toggleTag(5)" class="" value="Karya Kreatif">Karya Kreatif</li>
                  <li onclick="toggleTag(6)" class="" value="Seni Digital">Seni Digital</li>
                  <li onclick="toggleTag(7)" class="" value="Wallpaper">Wallpaper</li>
               </ul>
            </div>

            <span class="form-footer"><a href="">Cancel</a> <button type="submit">Upload</button></span>
         </form>
      </div>
   </div>
   <?php require_once __DIR__ . "/../components/footer.php" ?>

</body>
<script src="/script/tag.js"></script>

</html>