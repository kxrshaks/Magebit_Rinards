<?php
include "php/classes/emailview.class.php";
include "php/include/validate.inc.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="styles/reset.css">
   <link rel="stylesheet" href="styles/style.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="scripts/script.js"></script>

   <title>Task 3</title>
</head>

<body>
   <div class="wrapper">
      <div class="container">
         <div class="header">
            <header class="top_bar">
               <span class="pineapple_logo icon-pineapple_logo"></span>
               <span class="pineapple_text icon-pineapple_text"></span>
               <ul>
                  <li class="header_link">
                     <a href="#">About</a>
                  </li>
                  <li class="header_link">
                     <a href="#">How it works</a>
                  </li>
                  <li class="header_link">
                     <a href="#">Contact</a>
                  </li>
               </ul>
            </header>
         </div>
         <div class="content">
            <h1>Subscribe to newsletter</h1>
            <h2>Subscribe to our newsletter and get 10% discount on pineapple glasses.</h2>
            <div class="subscribe">
               <form id="form" action=" <?php $error = validation() ?> " method="post">
                  <div class="input">
                     <div class="input_line"></div>
                     <input id="email" type="text" name="email" placeholder="Type your email address here…" value="<?php if (isset($email)) echo $email ?>">
                     <button id="email_btn" type="submit"><span class="icon-arrow"></span></button>
                     <label for="email_btn"></label>
                  </div>
                  <?php
                  if (isset($error) && $error !== "") {
                     echo '<p style="padding: 5px 0px; font-size: 14px; color: rgb(255, 66, 66);">' . $error . '</p>';
                  }
                  ?>
                  <div class="tos">
                     <input type="checkbox" id="tos" name="checkbox" <?php if (isset($_POST['checkbox'])) echo 'checked="checked"'; ?>>
                     <label for="tos"><span class="icon-checkmark"></span></label>
                     <p>I agree to <a href="#">terms of service</a></p>
                  </div>
               </form>
            </div>
            <div class="line"></div>
            <div class="social">
               <ul>
                  <li class="social_link facebook">
                     <a href="#">
                        <span class="icon-facebook"></span>
                     </a>
                  </li>
                  <li class="social_link instagram">
                     <a href="#">
                        <span class="icon-instagram"></span>
                     </a>
                  </li>
                  <li class="social_link twitter">
                     <a href="#">
                        <span class="icon-twitter"></span>
                     </a>
                  </li>
                  <li class="social_link youtube">
                     <a href="#">
                        <span class="icon-youtube"></span>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <div class="bg">
         <img src="images/image_summer.png" alt="background_image">
      </div>
   </div>
</body>

</html>