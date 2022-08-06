document.querySelectorAll(".frontendCourse__link__tittle").forEach((title, i) => {
   title.addEventListener('click', () => {
      document.querySelectorAll(".frontendCourse__link__block")[i].classList.toggle("frontendCourse__link__block__active")
      document.querySelectorAll(".frontendCourse__link__tittle")[i].classList.toggle("frontendCourse__link__tittle__active")
   })
})


document.querySelectorAll(".frontendCourse__link span").forEach((link, i) => {
   link.addEventListener("click", (e) => {
      e.stopPropagation()
      document.querySelectorAll(".frontendCourse__link__explanation")[i].classList.toggle("frontendCourse__link__explanation__active")
   })
})


