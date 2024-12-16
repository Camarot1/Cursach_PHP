"use strict"
document.addEventListener('DOMContentLoaded', () => {
    let mainChoose = document.querySelector(".main__select")
    let popularChoose = document.querySelector(".popular")
    let promotionChoose = document.querySelector(".promotion")
    promotionChoose.classList.add("hidden")
    popularChoose.classList.add("hidden")
    mainChoose.addEventListener("change" ,()=>{
       let main = mainChoose.value
       if (main == "1"){
        promotionChoose.classList.add("hidden")
        popularChoose.classList.remove("hidden")
       }else if (main =="2"){
        promotionChoose.classList.remove("hidden")
        popularChoose.classList.add("hidden")
       }else{
        promotionChoose.classList.add("hidden")
        popularChoose.classList.add("hidden")
       }
    })
})