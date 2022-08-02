<?php
   session_start();
   require_once "./connect.php";
  

   $full_name = $_POST["full_name"];
   $login = $_POST["login"];
   $email = $_POST["email"];
   $password = $_POST["password"];
   $password_confirm = $_POST["password_confirm"];


   if($password === $password_confirm) {
      $path = 'uploads/' . time() .$_FILES['avatar']['name'];
      if(!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
         $_SESSION['message'] = 'Mesajin yuklenmesinde sehvlik';
         header('Location: ../register.php');
      }
      $password = md5($password);
      mysqli_query($connect, "INSERT INTO `users` 
      (`id`, `full_name`, `login`, `email`, `password`, `avatar`) 
      VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')");
      $_SESSION['message'] = 'Qeydiyyat ugurla bitmisdir';
      header('Location: ../index.php');
   } else {
      $_SESSION['message'] = 'Parollar ust uste uste-dusmur';
      header('Location: ../register.php');
   } 
?>




