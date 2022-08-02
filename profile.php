<?php
   session_start();
   if(isset($_SESSION['user']) == null) {
      header('Location: index.php');
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
   <form>
      <img src="<?= $_SESSION['user']['avatar'] ?>" width="100" alt="">
      <h2><?= $_SESSION['user']['full_name'] ?></h2>
      <a href=""><?= $_SESSION['user']['full_name'] ?></a>
      <a href="vendor/logout.php">cix</a>
      <a href="rr.php">link</a>
   </form>
</body>
</html>