<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sign up - Artspace</title>

   <!-- font -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
   <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
   <!-- font -->

   <link rel="stylesheet" href="/style/base.css">
   <link rel="stylesheet" href="/style/signupLogin.css">
   <link rel="stylesheet" href="/style/navbar.css">

</head>

<body class="bg-ocean">
   <?php require_once __DIR__ . "/../../components/navbar.php" ?>

   <div class="title-and-form">
      <h1>ArtSpace</h1>

      <form method="POST" action="">
         <div class="form-header">
            <div class="email-password-input">
               <label>Email:</label>
               <input type="text">
            </div>
            <div class="email-password-input">
               <label>Password:</label>
               <input type="text">
            </div>
         </div>

         <div class="form-footer">
            <a href="">
               <button>Sign Up</button>
            </a>
            <div class="auth">
               <span>
                  <p>Already have account?</p><a href="login.php">Click here to Login!</a>
               </span>
            </div>
         </div>
      </form>
   </div>
</body>

</html>