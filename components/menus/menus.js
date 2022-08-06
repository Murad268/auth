function mainMenu() {
   const changeCourse = document.querySelector('.changeCourse')
   const toAll = document.querySelector(".toAllCourses")
   const to = document.querySelector(".to")


   changeCourse.addEventListener("change", (e) => {
      to.href = e.target.value
      to.click()
  
   })
}

mainMenu()




try {
function filteringCourses ()  {

   const kind = document.querySelectorAll(".allCourses__filter__kind");
   const level = document.querySelectorAll('.allCourses__filter__level');
   
   function filter(visibleBtn, visibleKind, visibleLevel, kind, level, title) {



         kind.forEach(item => {
            item.style.display = "none";
         })
         level.forEach(item => {
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
            document.querySelector(".allCourses__filter__lang").style.display = "block"
            document.querySelector(".finCourses").style.display = "block"
         })
      

   }
   filter(document.querySelector(".all"), "",  "",  kind, level, "Bütün kurslar")
   filter(document.querySelector(".web"), document.querySelector(".webDev"),  document.querySelector(".webDevLevel"),  kind, level, "web devolopment kursları")
   filter(document.querySelector(".english"), document.querySelector(".engLang"), document.querySelector(".engLangLevel"),  kind, level, "ingilis dili kursları")
   filter(document.querySelector(".arabic"), document.querySelector(".arabLang"),  document.querySelector(".arabLangLevel"), kind, level,  "ərəb dili kursları")
   filter(document.querySelector(".microsoft"), document.querySelector(".microsoftLes"),  document.querySelector(".microsoftLesLevel"),  kind, level, "microsoft officce kursları")

 


}

let filterOptions = {
   kind: "",
   level:"",
   lang: ""
}




document.querySelectorAll(".checkInputKind").forEach(item => {
   item.addEventListener("change", (e) => {
      filterOptions.kind = e.target.value
   })
})

document.querySelectorAll(".checkInputLevel").forEach(item => {
   item.addEventListener("change", (e) => {
      filterOptions.level = e.target.value  
   })
})
document.querySelectorAll(".checkInputLang").forEach(item => {
   item.addEventListener("change", (e) => {
      filterOptions.lang = e.target.value
   })
})
const empty =  document.querySelector(".empty")
let foundCourses = []
document.querySelector(".filter__form").addEventListener("submit", (e) => {
   e.preventDefault()
  
   if(!filterOptions.kind || !filterOptions.level || !filterOptions.lang) {
      alert("Xahiş edirik istədiyiniz kursu tam təsvir edəsiniz")
      return
   }
   document.querySelectorAll(".allCourses__filter__kind").forEach(item => {
      item.style.display = "none"
   })
   document.querySelectorAll(".allCourses__filter__level").forEach(item => {
      item.style.display = "none"
   })
   document.querySelectorAll(".allCourses__filter__lang").forEach(item => {
      item.style.display = "none"
   })

   document.querySelectorAll(".allCourses__result__course").forEach(course => {
         if(course.dataset.kind === filterOptions.kind && course.dataset.level === filterOptions.level && course.dataset.lang === filterOptions.lang) {
            course.style.display = "flex"
            foundCourses.push(course)
      
         } else {
            course.style.display = "none"
         }
   })

   if(!foundCourses.length) {
      document.querySelector(".empty").style.display = "block"
   } else {
      document.querySelector(".empty").style.display = "none"
   }
   e.target.reset()
   foundCourses=[]
   console.log(foundCourses)
})

document.querySelector(".all").addEventListener("click", () => {
   document.querySelectorAll(".allCourses__result__course").forEach(item => {
      foundCourses.push(item)
      item.style.display = "flex"
      if(!foundCourses.length) {
         document.querySelector(".empty").style.display = "block"
      } else {
         document.querySelector(".empty").style.display = "none"
      }
      foundCourses=[]
   })
})

let seacrhTerm = ""
document.querySelector(".search").addEventListener("input", (e) => {
   seacrhTerm=e.target.value
   console.log(seacrhTerm.toLowerCase().replace(/\s/g, ""))
})

document.querySelector(".btn__search").addEventListener("click", () => {
   document.querySelectorAll(".allCourses__result__course").forEach(course => {
      if(course.dataset.name.includes(seacrhTerm)) {
         course.style.display = "flex"
      } else {
         course.style.display = "none"
      }
   })
   seacrhTerm=""
   document.querySelector(".search").reset()
})


filteringCourses()
}catch{}