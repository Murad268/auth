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
   <link rel="stylesheet" href="../courses.css">
   <title>Document</title>
</head>
<body>
   <section class="frontendCourse">
   <nav class="nav">
         <div class="nav__wrapper">
            <div class="nav__logo"><a href="mainMenu.php">Logo</a></div>
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
      <div class="container">
         <div class="frontendCourse__wrapper">
            <div class="frontendCourse__player">
               <div class="player">
                  <img src="../../../assets/images/pngfind.com-tv-icon-png-54611.png" alt="">
                  <iframe class="iframe"  src="https://www.youtube.com/embed/izX85dVamHk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               </div>
            </div>
            <div class="frontendCourse__links">
               <div class="frontendCourse__link__tittle frontendCourse__link__tittle__active">İş sahəsinin düzənləndirilməsi</div>
               <div class="frontendCourse__link__block frontendCourse__link__block__active">
                  <div onclick='setSrc("www.youtube.com/embed/izX85dVamHk")' class="frontendCourse__link">Sublime Text proqramını yükləmək və quraşdırmaq.<span>⬇</span></div>
                  <div class="frontendCourse__link__explanation">
                     <p>Proqramı yükləmək üçün link: <a target="_blank" href="https://www.sublimetext.com/3">https://www.sublimetext.com/3</a></p>
                     <p>Proqramın əlavələri barəsində məlmat əldə etmək üçün sayt: <a target="_blank" href="https://packagecontrol.io">https://packagecontrol.io/</a></p>
                     <p>Emmet əlavəsi barəsində məlumat əldə etmək üçün link: <a href="https://emmet.io/">https://emmet.io/</a></p>
                  </div>
               </div>
               <div class="frontendCourse__link__tittle frontendCourse__link__tittle__active">İlkin şablon və semantika</div>
               <div class="frontendCourse__link__block frontendCourse__link__block__active">
                  <div onclick='setSrc("www.youtube.com/embed/__tTiL7YksU")' class="frontendCourse__link">Web proqramlaşdırmaya giriş. İlknin şablon<span>⬇</span></div>   
                  <div class="frontendCourse__link__explanation">
                     <p>Videoda istifadə etdiyim faylın linki: <a download href="../../../assets/textfiles/vacib.txt">yüklə</a></p>
                  </div>
                  <div onclick='setSrc("www.youtube.com/embed/cTB1Y5VLz3A")' class="frontendCourse__link">Əsas semantik təqlər<span>⬇</span></div>
                  <div class="frontendCourse__link__explanation">
                     <p>Videoda istifadə etdiyim faylın linki: <a download href="../../../assets/textfiles/semantika.txt">yüklə</a></p>
                  </div>
                  <div onclick='setSrc("www.youtube.com/embed/cTB1Y5VLz3A")' class="frontendCourse__link">ul, ol, l, br, p, pre, hr, h1, h2, h3,h4, h5, h6 teqləri.mp4<span>⬇</span></div>
                  <div class="frontendCourse__link__explanation">
                     <p>Videoda istifadə etdiyim faylın linki: <a download href="../../../assets/textfiles/Web proqramlaşdırma dərsləri. Dördüncü dərs.txt">yüklə</a></p>
                  </div>
                  <div onclick='setSrc("www.youtube.com/embed/Wp_gA03LgHA")' class="frontendCourse__link">Fraza (İfadə) teqləri<span>⬇</span></div>
                  <div class="frontendCourse__link__explanation">
                     <p>Videoda istifadə etdiyim faylın linki: <a download href="../../../assets/textfiles/Dersbes.txt">yüklə</a></p>
                  </div>
                  <div onclick='setSrc("www.youtube.com/embed/izX85dVamHk")' class="frontendCourse__link">Linklər<span>⬇</span></div>
                  <div  class="frontendCourse__link__explanation"></div>
                  <div onclick='setSrc("www.youtube.com/embed/izX85dVamHk")' class="frontendCourse__link">Saytımıza şəkil əlavə etmək.<span>⬇</span></div>
                  <div  class="frontendCourse__link__explanation"></div>
                  <div onclick='setSrc("www.youtube.com/embed/izX85dVamHk")' class="frontendCourse__link">Span teqi<span>⬇</span></div>
                  <div  class="frontendCourse__link__explanation"></div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <script>
      function setSrc(url) {
         document.querySelector(".iframe").src = "https://" + url
      }
     
   </script>
   <script src="../courses.js"></script>
</body>
</html>