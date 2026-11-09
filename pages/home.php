<?php 
require_once __DIR__ . "/../repositories/posts-repository.php";
$posts = getPosts(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home - ArtSpace</title>

   <!-- font -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
   <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
   <!-- font -->

   <link rel="stylesheet" href="/style/base.css">
   <link rel="stylesheet" href="/style/home.css">
   <link rel="stylesheet" href="/style/posts.css">

</head>

<body class="bg-fish">
   <?php require_once __DIR__ . "/../components/navbar.php" ?>
   <div class="content">
      <?php require_once __DIR__ . "/../components/sidebar.php" ?>
      <div class="mainContent">
         <ul>
            <?php foreach ($posts as $post):?>
            <a href="#">
               <li>
                  <div class="post">
                     <img src="<?= $post['imageLocation'];?>" alt="">
                     <div class="description">
                        <p><?= $post['postTitle'] ?></p>
                        <span><img src="/assets/icons/view.png" alt="view:">
                           <p><?= $post['views'] ?></p>
                        </span>
                     </div>
                  </div>
               </li>
            </a>
            <?php endforeach; ?>
         </ul>
      </div>
   </div>
   <?php require_once __DIR__ . "/../components/footer.php" ?>

</body>

</html>