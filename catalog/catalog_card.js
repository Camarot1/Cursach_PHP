
// import {first,second,third,fourth,fifth,sixth} from "./database.js"
// let Bd = [first,second,third,fourth,fifth,sixth]
// let button = document.querySelectorAll(".card__button")
// let content = document.querySelector(".main__container")
// let card = document.querySelectorAll(".main__content")
// let windows = document.querySelector(".card__open-menu")
// let openBg = document.querySelectorAll(".main__active")
// button.forEach(function (event) {
//     event.addEventListener("click", () => {
//         let aa = 1

//         for ( aa in Bd){
//         if (event.value == aa) {
//             document.querySelector(".open-menu__name").innerHTML = 
//             document.querySelector(".open-menu__compound").innerHTML = Bd[aa].compound
//             document.querySelector(".open-menu__description").innerHTML = Bd[aa].description
//             document.querySelector(".open-menu__money").innerHTML = Bd[aa].money
//             document.querySelector(".open-menu__img").src = Bd[aa].img
//         } else if (event.value == 5) {
//             console.log(2)
//         }}

//     })
// })
// document.addEventListener("click", (e) => {
//     if (e.target === content) {
//         content.classList.remove("active")
//         windows.classList.remove('active')
//         openBg.forEach(function (e) {
//             e.classList.remove("active")
//         })
//     }
// })
// import { Bd } from "./database.js"
// let key = Object.keys(Bd)
// let bb = 1
// let check = 0
// for (bb in key){
//     document.querySelector(`.card__title${check}`).innerHTML = Bd[check].title
//     document.querySelector(`.card__img${check}`).src = Bd[check].img
//     document.querySelector(`.card__money${check}`).innerHTML = Bd[check].money

//     check++
//     console.log(check)
//     console.log("1121212"+ "!!" + check)

// }

// дописать вывод карточек из бд в независимости от кода в html при помощи конструкции выше. старый код удалить частично , проверки кнопок все дела