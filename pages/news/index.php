<?php
require_once __DIR__ . "/../../repositories/posts-repository.php";
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
   <link rel="stylesheet" href="/style/news.css">

</head>

<body class="bg-ocean">
   <?php require_once __DIR__ . "/../../components/navbar.php" ?>
   <div class="content">
      <?php require_once __DIR__ . "/../../components/sidebar.php" ?>
      <div class="mainContent">
         <span class="header-news">
            <a href="#"><ul class="news">
               <li><img src="/assets/posts/flower.png" alt=""></li>
               <li><span class="description">
                  <h1>Pemenang dengan upvote terbanyak</h1>
                  <h2>Karya seni digital bertema flora dengan dominasi warna ungu mistis ini berhasil memikat hati komunitas dan meraih dukungan upvote tertinggi bulan ini.</h2>
               </span></li>
            </ul></a>
         </span>

         <span class="footer-news">
            <a href=""><ul class="news">
               <li><img src="/assets/posts/Senja.png" alt=""></li>
               <li>
                  <span>
                     <h1>Pemenang Kedua</h1>
                     <h2>Fotografis yang menangkap momen di langit yang senja dan menciptakan pesan mendalam bagi para penikmat seni.</h2>
                  </span>
               </li></ul>
            </a>
            <a href=""><ul class="news">
               <li><img src="/assets/posts/swing-ride.png" alt=""></li>
               <li>
                  <span>
                     <h1>Pemenang Ketiga</h1>
                     <h2>Karya visual yang unik yang menghibur dan  membawa keceriaan serta menjadi favorit di kalangan anak-anak.</h2>
                  </span>
               </li></ul>
            </a>
         </span>
      </div>
   </div>
   <?php require_once __DIR__ . "/../../components/footer.php" ?>

</body>
<script src="/script/tag.js"></script>

</html>