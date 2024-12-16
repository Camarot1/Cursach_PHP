"use strict"

document.addEventListener('DOMContentLoaded', () => {
    let Bd = {
        "1": {
            title: document.querySelector(".title-1").innerHTML,
            img: document.querySelector(".img-1").src,
            compound: document.querySelector(".compound-1").innerHTML,
            description: document.querySelector(".description-1").innerHTML,
            money: document.querySelector(".money-1").innerHTML,
            value: document.querySelector(".value-1").innerHTML
        },
        "2": {
            title: document.querySelector(".title-2").innerHTML,
            img: document.querySelector(".img-2").src,
            compound: document.querySelector(".compound-2").innerHTML,
            description: document.querySelector(".description-2").innerHTML,
            money: document.querySelector(".money-2").innerHTML,
            value: document.querySelector(".value-2").innerHTML
        },
        "3": {
            title: document.querySelector(".title-3").innerHTML,
            img: document.querySelector(".img-3").src,
            compound: document.querySelector(".compound-3").innerHTML,
            description: document.querySelector(".description-3").innerHTML,
            money: document.querySelector(".money-3").innerHTML,
            value: document.querySelector(".value-3").innerHTML
        },
        "4": {
            title: document.querySelector(".title-4").innerHTML,
            img: document.querySelector(".img-4").src,
            compound: document.querySelector(".compound-4").innerHTML,
            description: document.querySelector(".description-4").innerHTML,
            money: document.querySelector(".money-4").innerHTML,
            value: document.querySelector(".value-4").innerHTML
        },
        "5": {
            title: document.querySelector(".title-5").innerHTML,
            img: document.querySelector(".img-5").src,
            compound: document.querySelector(".compound-5").innerHTML,
            description: document.querySelector(".description-5").innerHTML,
            money: document.querySelector(".money-5").innerHTML,
            value: document.querySelector(".value-5").innerHTML
        },
        "6": {
            title: document.querySelector(".title-6").innerHTML,
            img: document.querySelector(".img-6").src,
            compound: document.querySelector(".compound-6").innerHTML,
            description: document.querySelector(".description-6").innerHTML,
            money: document.querySelector(".money-6").innerHTML,
            value: document.querySelector(".value-6").innerHTML
        }
    }
    let button = document.querySelectorAll(".card__button")
    let content = document.querySelector(".main__container")
    let windows = document.querySelector(".card__open-menu")
    let openBg = document.querySelectorAll(".main__active")
    button.forEach(function (event) {
        event.addEventListener("click", () => {
            content.classList.add('active')
            windows.classList.add('active')
            let valueButton = document.querySelector(".open-menu__button")
            windows.classList.remove("hidden")
            let aa = 1
            for (aa in Bd) {
                if (event.value == aa) {
                    document.querySelector(".open-menu__name").innerHTML = Bd[aa].title
                    document.querySelector(".open-menu__compound").innerHTML = Bd[aa].compound
                    document.querySelector(".open-menu__description").innerHTML = Bd[aa].description
                    document.querySelector(".open-menu__money").innerHTML = Bd[aa].money
                    document.querySelector(".open-menu__img").src = Bd[aa].img
                    valueButton.value = Bd[aa].value
                    // document.querySelector(".open-menu__button").classList.add(Bd[aa].value)
                }
            }
        })
    })
    document.addEventListener("click", (e) => {
        if (e.target === content || e.target === button) {
            content.classList.remove("active")
            windows.classList.remove('hidden')
            openBg.forEach(function (e) {
                e.classList.remove("active")
                windows.classList.remove('active')
                windows.classList.add("hidden")
            })
        }
    })
    let addButton = document.querySelector(".open-menu__button")
    let a = 1
    addButton.addEventListener("click", ()=>{
        let title = document.querySelector(".open-menu__name").innerHTML
        let money = document.querySelector(".open-menu__money").innerHTML
        let add = "<div class='card'>"+ title + "<br>" + money + "</div>"
        let roll = localStorage.getItem("post")
        let global = roll + " " + add
        let storage = localStorage.setItem("post" , global)
        localStorage.setItem("global" , global)
        location.reload();
    })
    let key = Object.keys(Bd)
})
// let Bd = 5
// let button = document.querySelectorAll(".card__button")
// let content = document.querySelector(".main__container")
// let card = document.querySelectorAll(".main__content")
// button.forEach(function (event) {
//     event.addEventListener("click", () => {
//         let aa = 1
//         for ( aa in Bd){
//         if (event.value == aa) {
//             document.querySelector(".open-menu__name").innerHTML = Bd[aa].title
//             document.querySelector(".open-menu__compound").innerHTML = Bd[aa].compound
//             document.querySelector(".open-menu__description").innerHTML = Bd[aa].description
//             document.querySelector(".open-menu__money").innerHTML = Bd[aa].money
//             document.querySelector(".open-menu__img").src = Bd[aa].img
//         } else if (event.value == 5) {
//             console.log(2)
//         }}

//     })
// })
// let key = Object.keys(Bd)