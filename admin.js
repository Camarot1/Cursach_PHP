"use strict"
document.addEventListener('DOMContentLoaded', () => {
    let mainChoose = document.querySelector(".main__select")
    let popularChoose = document.querySelector(".popular")
    let promotionChoose = document.querySelector(".promotion")
    let newsChoose = document.querySelector(".news")
    promotionChoose.classList.add("hidden")
    popularChoose.classList.add("hidden")
    newsChoose.classList.add("hidden")
    mainChoose.addEventListener("change" ,()=>{
       let main = mainChoose.value
       if (main == "1"){
        promotionChoose.classList.add("hidden")
        popularChoose.classList.remove("hidden")
        newsChoose.classList.add("hidden")
       }else if (main =="2"){
        promotionChoose.classList.remove("hidden")
        popularChoose.classList.add("hidden")
        newsChoose.classList.add("hidden")
       }else if (main == "3"){
        promotionChoose.classList.add("hidden")
        popularChoose.classList.add("hidden")
        newsChoose.classList.remove("hidden")
       }
    })
})