
   function mainMenu() {
      const changeCourse = document.querySelector('.changeCourse')
      const toAll = document.querySelector(".toAllCourses")
      const to = document.querySelector(".to")
   
   
      changeCourse.addEventListener("change", (e) => {
         to.href = e.target.value
         to.click()
         console.log(to.href)
      })
   }
   
   mainMenu()




try {
   function filteringCourses ()  {

      const kind = document.querySelectorAll(".allCourses__filter__kind");
      const level = document.querySelectorAll('.allCourses__filter__level');
      const langs = document.querySelectorAll(".allCourses__filter__lang");
      function filter(visibleBtn, visibleKind, visibleLevel, visibleLang, kind, level, title) {
   
   
   
            kind.forEach(item => {
               item.style.display = "none";
            })
            level.forEach(item => {
               item.style.display = "none";
            })
            langs.forEach(item => {
               item.style.display = "none";
            })
         
            visibleBtn.addEventListener("click", () => {
               document.title = title
               if(visibleBtn.classList.contains("all")) {
          
                  kind.forEach(item => {
                     item.style.display = "none";
                  })
                  level.forEach(item => {
                     item.style.display = "none";
                  })
                  langs.forEach(item => {
                     item.style.display = "none";
                  })
                  return
               }
               
               
               kind.forEach(item => {
                  item.style.display = "none";
               })
               level.forEach(item => {
                  item.style.display = "none";
               })
               visibleKind.style.display = "block";
               visibleLevel.style.display = "block";
               visibleLang.style.display = "block";
            })
         
   
      }
      filter(document.querySelector(".all"), "",  "", "", kind, level, "Bütün kurslar")
      filter(document.querySelector(".web"), document.querySelector(".webDev"),  document.querySelector(".webDevLevel"), document.querySelector(".webLang"), kind, level, "web devolopment kursları")
      filter(document.querySelector(".english"), document.querySelector(".engLang"), document.querySelector(".engLangLevel"), document.querySelector(".englishCrLang"), kind, level, "ingilis dili kursları")
      filter(document.querySelector(".arabic"), document.querySelector(".arabLang"),  document.querySelector(".arabLangLevel"), document.querySelector(".arabigCrLang"), kind, level,  "ərəb dili kursları")
      filter(document.querySelector(".microsoft"), document.querySelector(".microsoftLes"),  document.querySelector(".microsoftLesLevel"), document.querySelector(".microsoftLang"), kind, level, "microsoft officce kursları")
   
      const allCourses = document.querySelectorAll(".allCourses__result__course")
   
      function filterourse(filterBtn, visibleCourse, hidden) {
        
         filterBtn.addEventListener("click", () => {
            if(filterBtn.classList.contains("all")) {
               document.querySelector(".empty").style.display = "none";
               hidden.forEach(course => {
                  course.style.display = "flex"
               })
               
            } else {
               if(visibleCourse !== "") {
                 document.querySelector(".empty").style.display = "none";
                  hidden.forEach(course => {
                     course.style.display = "none"
                  })
                  visibleCourse.forEach(item => {
                     item.style.display = "flex"
                  })
              
               } else {
                  hidden.forEach(course => {
                     course.style.display = "none"
                  })
                  document.querySelector(".empty").style.display = "block";
               }
              
            }
           
         })
      }
      
      
      filterourse(document.querySelector(".all"), "", allCourses)
   
   
   
      filterourse(document.querySelector(".web"), document.querySelectorAll(".webDevop"), allCourses)
      filterourse(document.querySelector(".frontendCourse"), document.querySelectorAll(".frontendDevop"), allCourses)
      filterourse(document.querySelector(".backendCourse"), "", allCourses)
      filterourse(document.querySelector(".noLevel"), document.querySelectorAll(".without"), allCourses)
      filterourse(document.querySelector(".junior"), "", allCourses)
      filterourse(document.querySelector(".middle"), "", allCourses)
      filterourse(document.querySelector(".senior"), "", allCourses)
      filterourse(document.querySelector(".projects"), "", allCourses)
      filterourse(document.querySelector(".azWeb"), document.querySelectorAll(".azerbaijanWEb"), allCourses)
      filterourse(document.querySelector(".rusWeb"), "", allCourses)
      filterourse(document.querySelector(".enWeb"), "", allCourses)
      
   
   
      filterourse(document.querySelector(".english"), document.querySelectorAll(".englishLesson"), allCourses)
      filterourse(document.querySelector(".grb"), document.querySelectorAll(".britainEnglish"), allCourses)
      filterourse(document.querySelector(".arb"), "", allCourses)
      filterourse(document.querySelector(".a1"), document.querySelectorAll(".a1Level"), allCourses)
      filterourse(document.querySelector(".a2"), "", allCourses)
      filterourse(document.querySelector(".b1"), "", allCourses)
      filterourse(document.querySelector(".b2"), "", allCourses)
      filterourse(document.querySelector(".c1"), "", allCourses)
      filterourse(document.querySelector(".c2"), "", allCourses)
      filterourse(document.querySelector(".azEnglish"), document.querySelectorAll(".azerbaijanEnglish"), allCourses)
      filterourse(document.querySelector(".rusEnglish"), "", allCourses)
   
   
   
      filterourse(document.querySelector(".arabic"), "", allCourses)
      filterourse(document.querySelector(".microsoft"), "", allCourses)
   
   
   }
   
   filteringCourses()
}catch{}



