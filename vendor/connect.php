<?php
   $connect = mysqli_connect("localhost", "root", "", "usersdata");
   if(!$connect) {
      die("Error connect to db");
   }