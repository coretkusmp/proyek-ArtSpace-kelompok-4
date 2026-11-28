<?php 

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Profile - ArtSpace</title>

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
   <link rel="stylesheet" href="/style/profile.css">

</head>

<body>
   <?php require_once __DIR__ . "/../../components/navbar.php" ?>
   <div class="content">
      <?php require_once __DIR__ . "/../../components/sidebar.php" ?>
      <div class="mainContent">
      <form action="" method="post">
      <ul>
         <li class="profile"><img src="" alt="Profil"></li>
         <li><p></p></li>
         <li><p></p></li>
         <i class="fa-regular fa-camera"></i>
         <li><input name="profile-picture" id="profile-picture" type="file" ></li>
      </ul>

      <ul class="footer-profile edit-profile">
         <li>Ganti username <input type="text"></li>
         <li>Ganti email <input type="text"></li>
      </ul>
      <button name="update" id="update-button" type="submit">Save</button>
      </form>
      </div>
   </div>
   <?php require_once __DIR__ . "/../../components/footer.php" ?>

</body>

</html>