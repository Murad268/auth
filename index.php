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
   <form  action="vendor/signin.php" method="post">
      <label>login</label>
      <input type="text" placeholder="login" name="login">
      <label>password</label>
      <input type="password" placeholder="password"  name="password">
      <button type="submit">enter</button>
      <p>
         sizde akkaunt yoxdu? - <a  href="/auth/register.php">qeyd olun</a>
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