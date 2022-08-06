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
   <link rel="stylesheet" href="../../assets/css/reset.css">
   <link rel="stylesheet" href="./menus.css">
   <title>Bütün kurslar</title>
</head>
<body>
  
   <a class="to" href=""></a>
   <section class="allCourses">
   <a class="to" href=""></a>
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
      <div class="courses__wrapper">
         <div class="allCourses__filter">
         <div class="search"><input type="search" name="" id=""><button class="btn btn-warning btn__search">axtar</button></div>
            <form class="filter__form" action="">
              
               <div class="allCourses__filter__main">
                  <div class="allCourses__title">Tema</div>
                  <ul>
                     <li class="all">Bütün kurslar</li>
                     <li class="web">Web development</li>
                     <li class="english">İngilis dili</li>
                     <li class="arabic">Ərəb dili</li>
                     <li class="microsoft">Microsoft Officce</li>
                  </ul>
               </div>
               <div class="webDev allCourses__filter__kind">
               <div class="allCourses__title">Kursun növü</div>
                  <ul>
                     <li class="frontendCourse"><input class="checkInputKind" value="frontend" type="radio" name="kind" id="frontend"><label for="frontend">Frontend Development</label></li>
                     <li class="backendCourse"><input  class="checkInputKind" value="backend" type="radio" name="kind" id="backend"><label for="backend">Backend Development</label></li>
                  </ul>
               </div>
               <div class="engLang allCourses__filter__kind">
               <div class="allCourses__title">Kursun növü</div>
                  <ul>
                     <li class="grb"><input class="checkInputKind" value="britain" type="radio" name="kind" id="britain"><label for="britain">Britain</label></li>
                     <li class="arb"><input class="checkInputKind" value="american" type="radio" name="kind" id="american"><label for="american">American</label></li>
                  </ul>
               </div>
               <div class="arabLang allCourses__filter__kind">
               <div class="allCourses__title">Kursun növü</div>
                  <ul>
                     <li><input class="checkInputKind" value="arabic" type="checkbox" name="" id="arabic"><label for="arabic">Arabian</label></li>
                  </ul>
               </div>
               <div class="microsoftLes allCourses__filter__kind">
               <div class="allCourses__title">Kursun növü</div>
                  <ul>
                     <li><input class="checkInputKind" value="word" type="radio" name="kind" id="word"><label for="word">Microsoft Word</label></li>
                     <li><input class="checkInputKind" value="excel" type="radio" name="kind" id="excel"><label for="excel">Microsoft Excel</label></li>
                     <li><input class="checkInputKind" value="powerpoint" type="radio" name="kind" id="powerpoint"><label for="powerpoint">Microsoft PowerPoint</label></li>
                  </ul>
               </div>
               <div class="webDevLevel allCourses__filter__level">
               <div class="allCourses__title">Kursun səviyyəsi</div>
                  <ul>
                     <li class="noLevel"><input class="checkInputLevel" value="noLevel" type="radio" name="level" id="noLevel"><label for="noLevel">Without Level</label></li>
                     <li class="junior"><input class="checkInputLevel" value="junior" type="radio" name="level" id="junior"><label for="junior">For juniors</label></li>
                     <li class="middle"><input class="checkInputLevel" value="middle" type="radio" name="level" id="middle"><label for="middle">For Middles</label></li>
                     <li class="senior"><input class="checkInputLevel" value="senior" type="radio" name="level" id="senior"><label for="senior">For seniors</label></li>
                     <li class="projects"><input class="checkInputLevel" value="projects" type="radio" name="level" id="projects"><label for="projects">Only Projects</label></li>
                  </ul>
               </div>

               <div class="engLangLevel allCourses__filter__level">
               <div class="allCourses__title">Kursun səviyyəsi</div>
                  <ul>
                     <li class="a1"><input class="checkInputLevel" value="a1" type="radio" name="level" id="a1"><label for="a1">A0/A1 English (Beginner/Elementary)</label></li>
                     <li class="a2"><input class="checkInputLevel" value="a2" type="radio" name="level" id="a2"><label for="a2">A2 English (Pre Intermediate)</label></li>
                     <li class="b1"><input class="checkInputLevel" value="b1" type="radio" name="level" id="b1"><label for="b1">B1 English (Intermediate)</label></li>
                     <li class="b2"><input class="checkInputLevel" value="b2" type="radio" name="level" id="b2"><label for="b2">B2 English (Upper Intermediate)</label></li>
                     <li class="c1"><input class="checkInputLevel" value="c1" type="radio" name="level" id="c1"><label for="c1">C1 English (Advanced)</label></li>
                     <li class="c2"><input class="checkInputLevel" value="c2" type="radio" name="level" id="c2"><label for="c2">C2 English (Proficient)</label></li>
                  </ul>
               </div>
               <div class="arabLangLevel allCourses__filter__level">
               <div class="allCourses__title">Kursun səviyyəsi</div>
                  <ul>
                     <li><input class="checkInputLevel" value="ar1" type="radio" name="kind" id="ar1"><label for="ar1">Level 1: Elementary Arabic</label></li>
                     <li><input class="checkInputLevel" value="ar1.5" type="radio" namekind id="ar1.5"><label for="ar1.5">Level 1.5: High Elementary Arabic</label></li>
                     <li><input class="checkInputLevel" value="ar2" type="radio" name="kind" id="ar2"><label for="ar2">Level 2: Intermediate Arabic</label></li>
                     <li><input class="checkInputLevel" value="ar2.5" type="radio" name="kind" id="ar2.5"><label for="ar2.5">Level 2.5: Intermediate Arabic II</label></li>
                     <li><input class="checkInputLevel" value="ar3" type="radio" name="kind" id="ar3"><label for="ar3">Level 3: High Intermediate Arabic</label></li>
                     <li><input class="checkInputLevel" value="ar3.5" type="radio" name="kind" id="ar3.5"><label for="ar3.5">Level 3.5: High Intermediate Arabic II</label></li>
                     <li><input class="checkInputLevel" value="ar4" type="radio" name="kind" id="ar4"><label for="ar4">Level 4: Advanced Arabic</label></li>
                     <li><input class="checkInputLevel" value="ar4.5" type="radio" name="kind" id="ar4.5"><label for="ar4.5">Level 4.5: Advanced Arabic II</label></li>
                  </ul>
               </div>
               <div class="microsoftLesLevel allCourses__filter__level">
               <div class="allCourses__title">Kursun səviyyəsi</div>
                  <div>Burda səviyyə yoxdur</div>
               </div>

               <div style="display:none" class="allCourses__filter__lang">
               <div class="allCourses__title">Kursun dili</div>
                  <ul>
                     <li class="azWeb"><input class="checkInputLang" value="azerbaijani" type="radio" name="lang" id="azerbaijani"><label for="azerbaijani">Azərbaycan</label></li>
                     <li class="rusWeb"><input class="checkInputLang" value="russian" type="radio" name="lang" id="russian"><label for="russian">Rus</label></li>
                     <li class="enWeb"><input class="checkInputLang" value="english" type="radio" name="lang" id="english"><label for="english">İngilis</label></li>
                  </ul>
               </div>

               <button style="display:none" class="btn btn-success finCourses">Axtar</button>

            </form>
        

          

        

         </div>
         <div class="allCourses__result">
            <div style = "display:none" class="empty">Hazırda belə bir kursumuz mövcud deyil. Amma çox tezliklə əlavə ediləcəkdir</div>
            <div class="allCourses__result__wrapper">
               <div data-name="frontendwebhtmlcsshtml5css3javascript" data-theme="web" data-kind="frontend" data-level= "noLevel" data-lang="azerbaijani" class="allCourses__result__course">
                  <img src="../../assets/images/front.jfif" alt="" class="allCourses__result__course__bg">
                  <div class="allCourses__result__course__body">
                     <div class="allCourses__result__course__tittle">Frontend Development</div>
                     <div class="allCourses__result__course__desc">HTML5, CSS3, javaScript - ən əsaslardan real proyektlərə qədər.</div>
                     <div class="allCourses__result__course__teacher">müəllim: <a href="">Murad Agamedov</a></div>
                     <div class="btn btn-success"><a href="../courses/frontend/frontend.php">Kursa daxil ol</a></div>
                  </div>
               </div>



               <div data-name="englishingilisingilisdili" data-theme="english" data-kind="britain" data-level= "a1" data-lang="azerbaijani"  class="allCourses__result__course">
                  <img src="../../assets/images/a1.png" alt="" class="allCourses__result__course__bg" >
                  <div class="allCourses__result__course__body">
                     <div class="allCourses__result__course__tittle">English A1 level</div>
                     <div class="allCourses__result__course__desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum velit architecto amet neque non quasi.</div>
                     <div class="allCourses__result__course__teacher">müəllim: <a href="">Filankesov Filankes</a></div>
                     <div class="btn btn-success"><a href="">Kursa daxil ol</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </section>

   <script src="./menus.js"></script>
</body>
</html>