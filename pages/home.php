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
            <a href="#">
               <li>
                  <div class="post">
                     <img src="/assets/Posts/spiderman.jpg" alt="">
                     <div class="description">
                        <p>A spiderman staring at you</p>
                        <span><img src="/assets/icons/view.png" alt="view:">
                           <p>0</p>
                        </span>
                     </div>
                  </div>
               </li>
            </a>
            <a href="#">
               <li>
                  <div class="post">
                     <img src="/assets/Posts/sunflowers.jpeg" alt="">
                     <div class="description">
                        <p>A pretty sunflower</p>
                        <span><img src="/assets/icons/view.png" alt="view:">
                           <p>0</p>
                        </span>
                     </div>
                  </div>
               </li>
            </a>
            <a href="#">
               <li>
                  <div class="post">
                     <img src="/assets/Posts/cat.jpeg" alt="">
                     <div class="description">
                        <p>A cat staring at the stars</p>
                        <span><img src="/assets/icons/view.png" alt="view:">
                           <p>0</p>
                        </span>
                     </div>
                  </div>
               </li>
            </a>
            <a href="#">
               <li>
                  <div class="post">
                     <img src="/assets/Posts/fishes.jpeg" alt="">
                     <div class="description">
                        <p>Fishes swing in the ocean</p>
                        <span><img src="/assets/icons/view.png" alt="view:">
                           <p>0</p>
                        </span>
                     </div>
                  </div>
               </li>
            </a>
            <a href="#">
               <li>
                  <div class="post">
                     <img src="/assets/Posts/angle.jpg" alt="">
                     <div class="description">
                        <p>A dramatic falling winged figure</p>
                        <span><img src="/assets/icons/view.png" alt="view:">
                           <p>0</p>
                        </span>
                     </div>
                  </div>
               </li>
            </a>
            <a href="#">
               <li>
                  <div class="post">
                     <img src="/assets/Posts/person.jpg" alt="">
                     <div class="description">
                        <p>A person looking at butterfly</p>
                        <span><img src="/assets/icons/view.png" alt="view:">
                           <p>0</p>
                        </span>
                     </div>
                  </div>
               </li>
            </a>
            <a href="#">
               <li>
                  <div class="post">
                     <img src="/assets/Posts/ships.jpeg" alt="">
                     <div class="description">
                        <p>A classic sailing ship at sea</p>
                        <span><img src="/assets/icons/view.png" alt="view:">
                           <p>0</p>
                        </span>
                     </div>
                  </div>
               </li>
            </a>
            <a href="#">
               <li>
                  <div class="post">
                     <img src="/assets/Posts/axolotl.jpeg" alt="">
                     <div class="description">
                        <p>Cute floating axolotl underwater art</p>
                        <span><img src="/assets/icons/view.png" alt="view:">
                           <p>0</p>
                        </span>
                     </div>
                  </div>
               </li>
            </a>
            <a href="#">
               <li>
                  <div class="post">
                     <img src="/assets/Posts/trees.jpeg" alt="">
                     <div class="description">
                        <p>Van Gogh's signature starry night sky</p>
                        <span><img src="/assets/icons/view.png" alt="view:">
                           <p>0</p>
                        </span>
                     </div>
                  </div>
               </li>
            </a>
            <a href="#">
               <li>
                  <div class="post">
                     <img src="/assets/Posts/artRooms.jpeg" alt="">
                     <div class="description">
                        <p>A cozy artist's studio setup.</p>
                        <span><img src="/assets/icons/view.png" alt="view:">
                           <p>0</p>
                        </span>
                     </div>
                  </div>
               </li>
            </a>
         </ul>
      </div>
   </div>
   <?php require_once __DIR__ . "/../components/footer.php" ?>

</body>

</html>