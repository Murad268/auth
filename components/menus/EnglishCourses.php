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
   <title>ingilis dili kursları</title>
</head>
<body>
   <a class="to" href=""></a>
   <section class="allCourses">
   <a class="to" href=""></a>
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
                        <option value="./EnglishCourses.php">İngilis dili</option>
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
                  <li class="frontendCourse">Frontend Development</li>
                  <li class="backendCourse">Backend Development</li>
               </ul>
            </div>
            <div class="engLang allCourses__filter__kind">
            <div class="allCourses__title">Kursun növü</div>
               <ul>
                  <li class="grb">Britain</li>
                  <li class="arb">American</li>
               </ul>
            </div>
            <div class="arabLang allCourses__filter__kind">
            <div class="allCourses__title">Kursun növü</div>
               <ul>
                  <li>Arabian</li>      
               </ul>
            </div>
            <div class="microsoftLes allCourses__filter__kind">
            <div class="allCourses__title">Kursun növü</div>
               <ul>
                  <li>Microsoft Word</li>    
                  <li>Microsoft Excel</li>  
                  <li>Microsoft PowerPoint</li>    
               </ul>
            </div>
            <div class="webDevLevel allCourses__filter__level">
            <div class="allCourses__title">Kursun səviyyəsi</div>
               <ul>
                  <li class="noLevel">Without Level</li>
                  <li class="junior">For juniors</li>
                  <li class="middle">For Middles</li>
                  <li class="senior">For seniors</li>
                  <li class="projects">Only Projects</li>
               </ul>
            </div>

            <div class="engLangLevel allCourses__filter__level">
            <div class="allCourses__title">Kursun səviyyəsi</div>
               <ul>
                  <li class="a1">A0/A1 English (Beginner/Elementary)</li>
                  <li class="a2">A2 English (Pre Intermediate)</li>
                  <li class="b1">B1 English (Intermediate)</li>
                  <li class="b2">B2 English (Upper Intermediate)</li>
                  <li class="c1">C1 English (Advanced)</li>
                  <li class="c2">C2 English (Proficient)</li>
               </ul>
            </div>
            <div class="arabLangLevel allCourses__filter__level">
            <div class="allCourses__title">Kursun səviyyəsi</div>
               <ul>
                  <li>Level 1: Elementary Arabic</li>
                  <li>Level 1.5: High Elementary Arabic</li>
                  <li>Level 2: Intermediate Arabic</li>
                  <li>Level 2.5: Intermediate Arabic II</li>
                  <li>Level 3: High Intermediate Arabic</li>
                  <li>Level 3.5: High Intermediate Arabic II</li>
                  <li>Level 4: Advanced Arabic</li>
                  <li>Level 4.5: Advanced Arabic II</li>
               </ul>
            </div>
            <div class="microsoftLesLevel allCourses__filter__level">
            <div class="allCourses__title">Kursun səviyyəsi</div>
               <div>Burda səviyyə yoxdur</div>
            </div>

            <div class="webLang allCourses__filter__lang">
            <div class="allCourses__title">Kursun dili</div>
               <ul>
                  <li class="azWeb">Azərbaycan</li>
                  <li class="rusWeb">Rus</li>
                  <li class="enWeb">İngilis</li>
               </ul>
            </div>
            

            <div class="englishCrLang allCourses__filter__lang">
            <div class="allCourses__title">Kursun dili</div>
               <ul>
                  <li class="azEnglish">Azərbaycan</li>
                  <li class="rusEnglish">Rus</li>
               </ul>
            </div>

            <div class="arabigCrLang allCourses__filter__lang">
            <div class="allCourses__title">Kursun dili</div>
               <ul>
                  <li class="az">Azərbaycan</li>
                  <li class="rus">Rus</li>
                  <li class="en">İngilis</li>
               </ul>
            </div>

            <div class="microsoftLang allCourses__filter__lang">
            <div class="allCourses__title">Kursun dili</div>
               <ul>
                  <li class="az">Azərbaycan</li>
                  <li class="rus">Rus</li>
                  <li class="en">İngilis</li>
               </ul>
            </div>

         </div>
         <div class="allCourses__result">
            <div class="empty">Hazırda belə bir kursumuz mövcud deyil. Amma çox tezliklə əlavə ediləcəkdir</div>
            <div class="allCourses__result__wrapper">
               <div style="display: none;" class="html webDevop frontendDevop azerbaijanWEb without allCourses__result__course">
                  <img src="../../assets/images/html.jfif" alt="" class="allCourses__result__course__bg">
                  <div class="allCourses__result__course__body">
                     <div class="allCourses__result__course__tittle">HTML5</div>
                     <div class="allCourses__result__course__desc">HTLM5 yazı dilinin əsaslarından tutmuş ali praktiki tapşırıqlara qədər.</div>
                     <div class="allCourses__result__course__teacher">müəllim: <a href="">Murad Agamedov</a></div>
                     <div class="btn btn-success"><a href="">Kursa daxil ol</a></div>
                  </div>
               </div>

               <div style="display: none;" class="html webDevop frontendDevop azerbaijanWEb without allCourses__result__course">
                  <img src="../../assets/images/css.png" alt="" class="allCourses__result__course__bg">
                  <div class="allCourses__result__course__body">
                     <div class="allCourses__result__course__tittle">CSS3</div>
                     <div class="allCourses__result__course__desc">CSS3 stillər cədvəlinin əsaslarından tutmuş ali praktiki tapşırıqlara qədər.</div>
                     <div class="allCourses__result__course__teacher">müəllim: <a href="">Murad Agamedov</a></div>
                     <div class="btn btn-success"><a href="">Kursa daxil ol</a></div>
                  </div>
               </div>


               <div style="display: none;" class="html webDevop frontendDevop azerbaijanWEb without allCourses__result__course">
                  <img src="../../assets/images/scss.jpg" alt="" class="allCourses__result__course__bg">
                  <div class="allCourses__result__course__body">
                     <div class="allCourses__result__course__tittle">SCSSS</div>
                     <div class="allCourses__result__course__desc">Burada biz scss preprosessorunda stillər yazmağı öyrənəcəyik</div>
                     <div class="allCourses__result__course__teacher">müəllim: <a href="">Murad Agamedov</a></div>
                     <div class="btn btn-success"><a href="">Kursa daxil ol</a></div>
                  </div>
               </div>

               <div style="display: none;" class="html webDevop frontendDevop azerbaijanWEb without allCourses__result__course">
                  <img src="../../assets/images/bootstrap.png" alt="" class="allCourses__result__course__bg">
                  <div class="allCourses__result__course__body">
                     <div class="allCourses__result__course__tittle">Bootstrap</div>
                     <div class="allCourses__result__course__desc">Bur kursda biz bootstrap kitabxanasından istifadə eləməyi öyrənəcəyik və öyrəndiklərimizi praktikada tədbiq edəcəyik</div>
                     <div class="allCourses__result__course__teacher">müəllim: <a href="">Murad Agamedov</a></div>
                     <div class="btn btn-success"><a href="">Kursa daxil ol</a></div>
                  </div>
               </div>

               <div style="display: none;" class="html webDevop frontendDevop azerbaijanWEb without allCourses__result__course">
                     <img src="../../assets/images/jquery.jfif" alt="" class="allCourses__result__course__bg" >
                  <div class="allCourses__result__course__body">
                     <div class="allCourses__result__course__tittle">jQuery</div>
                     <div class="allCourses__result__course__desc">Bu kursda biz jQuery kitabxanasından istifadə etməyi öyrənəcəyik</div>
                     <div class="allCourses__result__course__teacher">müəllim: <a href="">Murad Agamedov</a></div>
                     <div class="btn btn-success"><a href="">Kursa daxil ol</a></div>
                  </div>
               </div>

               <div class="html englishLesson britainEnglish azerbaijanEnglish a1Level allCourses__result__course">
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