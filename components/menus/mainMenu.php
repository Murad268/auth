<?php
   session_start();
   if(isset($_SESSION['user']) == null) {
      header('Location: ../../index.php');
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link rel="stylesheet" href="./menus.css">
   <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Bebas+Neue&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Mukta:wght@200;300;400;500;600;700;800&family=Open+Sans:wght@300;400;500;600;700;800&family=Raleway:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&family=Russo+One&display=swap" rel="stylesheet">
   <title>Ana səhifə</title>
</head>
<body>
   <a class="to" href=""></a>
   <header class="header">
   <div class="container">
      <nav class="nav">
         <div class="nav__wrapper">
            <div class="nav__logo"><a href="./mainMenu.php">Logo</a></div>
               <div class="nav__list">
                  <ul>
                     <li><a href="./mainMenu.php">Ana səhifə</a></li>
                     <li><select class="changeCourse">
                        <option value="">Kurslarımız</option>
                        <option value="./allCourses.php">Bütün Kurslarımız</option>
                        <option value="./webCourses.php">Web development</option>
                        <option value="./engLishCourses.php">İngilis dili</option>
                        <option value="">Ərəb dili</option>
                        <option value="">Microsof Officce</option>
                     </select></li>
                     <li><a href="">Müəllimlər</a></li>
                     <li><a href="">Xidmətlərimiz</a></li>
                     <li><a href="">Əlaqə</a></li>
                  </ul>
               </div>
               <div class="btn btn-danger nav__cabinet">
                  <a href="../../vendor/logout.php">exit</a>
               </div>
         </div>
      </nav>
      <div class="header__body">
            <h1 class="header__body__title">Azərbaycanda ilk dəfə</h1>
            <h2 class="header__body__secondTitle">Pulsuz online təhsil platforması</h2>
            <h3 class="header__body__thirdTitle">Digərlərindən əsas fərqimiz sadəcə video dərslər təqdim etməyimiz deyil</h3>
            <h4 class="header__body__fifthTitle">Biz kariyeranızın hər addımında sizinləyik. Hər zaman suallarınıza cavab verməyə və dəstək olmağa hazırıq</h4>
            <div class="header__body__desc">Əgər ailəmizin bir üzvü olmaq istəyirsənsə</div>  
            <a class="btn btn-success" href="../../register.php">Bizə qoşul</a>
            
      </div>
      </div>
   </header>
   <script src="./menus.js"></script>
</body>
</html>