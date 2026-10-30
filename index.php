<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ArtSpace</title>

   
   <!-- font -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
   <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
   <!-- font -->

   <link rel="stylesheet" href="/style/base.css">
   <link rel="stylesheet" href="/style/landing.css">
   <link rel="stylesheet" href="/style/navbar.css">
   
</head>
<body class="bg-landing">
   <?php require_once __DIR__ . "/components/navbar.php"?>

   <div class="title-and-button">
      <h1>ArtSpace</h1>

      <span><a href="/pages/auth/signup.php"><button>Sign Up</button></a> <a href="/pages/auth/login.php"><button>Login</button></a></span>
   </div>

</body>
</html>