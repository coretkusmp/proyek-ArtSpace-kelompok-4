<?php

require_once __DIR__ . "/../../repositories/posts-repository.php";

$post = getPost($_GET['id']);
$title = $post['title'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?= $title ?></title>

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
   <link rel="stylesheet" href="/style/show.css">

</head>

<body>
   <?php require_once __DIR__ . "/../../components/navbar.php" ?>
   <div class="content">
      <?php require_once __DIR__ . "/../../components/sidebar.php" ?>
      <ul class="mainContent">
         <li>
            <div class="image">
               <img src="<?= $post['picture'] ?>" alt="">
            </div>
         </li>
         <li>
            <div class="description">
               <h1><?= $post['title'] ?></h1>
               <h2><?= $post['description'] ?? '' ?></h2>
               <div class="tags">
                  <ul>
                     <?php if (!empty($post['types'])): ?>
                        <?php foreach ($post['types'] ?? '' as $tag): ?>
                           <li><?= $tag ?></li>
                        <?php endforeach; ?>
                     <?php endif; ?>

                     <ul class="userInteraction">
                        <span class="upDownVote">
                           <li><button><i class="fa-solid fa-angle-up"></i> <p><?= $post['upvote'] ?></p></button>
                              <p></p>
                           </li>
                           <li><button><i class="fa-solid fa-angle-down"></i> <p><?= $post['downvote'] ?></p></button>
                              <p></p>
                           </li>
                        </span>
                        <li class="share"><button><i class="fa-solid fa-share-nodes"></i></button></li>
                     </ul>
                  </ul>
               </div>
         </li>

   </div>
   </ul>
   </div>
   <?php require_once __DIR__ . "/../../components/footer.php" ?>
</body>

</html>