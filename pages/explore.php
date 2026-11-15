<?php
require_once __DIR__ . "/../repositories/posts-repository.php";
$posts = getPosts();
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Explore - ArtSpace</title>

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
   <link rel="stylesheet" href="/style/posts.css">

</head>

<body class="bg-fish">
   <?php require_once __DIR__ . "/../components/navbar.php" ?>
   <div class="content">
      <?php require_once __DIR__ . "/../components/sidebar.php" ?>
      <div>
         <div class="search">
            <input class="searchInput" type="Search" placeholder="Search">
            <span class="search-tools">
               <i class="fa-solid fa-filter"></i>
               <i class="fa-solid fa-arrow-up-wide-short"></i>
               <i class="fa-solid fa-arrow-down-wide-short"></i>
            </span>
         </div>
         <?php require_once __DIR__ . "/../components/posts.php"; ?>
      </div>
   </div>
   <?php require_once __DIR__ . "/../components/footer.php" ?>

</body>

</html>