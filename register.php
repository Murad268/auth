<?php
   session_start();
   if(isset($_SESSION['user'])) {
      header('Location: profile.php');
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Auth and Regisration</title>
   <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
   <form  action="./vendor/signup.php" method="post" enctype="multipart/form-data">
      <label>FIO</label>
      <input type="text" placeholder="FIO" name="full_name">
      <label>login</label>
      <input type="text" placeholder="login" name="login">
      <label>email</label>
      <input type="email" placeholder="email" name="email">
      <label>Photo</label>
      <input type="file" name="avatar">
      <label>password</label>
      <input type="password" placeholder="password" name="password">
      <label>tekrarla</label>
      <input type="password" placeholder="tekrar password" name="password_confirm">
      <button type="submit">enter</button>
      <p>
         sizde akkaunt var? - <a  href="./index.php">daxil olun</a>
      </p>


      
      <?php
         if(
            isset($_SESSION['message'])) {
            echo '<p  class ="msg">' . $_SESSION['message'] . '</p>';
         } 
            unset($_SESSION['message']);
      ?>
   </form>
</body>
</html>