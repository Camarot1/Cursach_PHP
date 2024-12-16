"use strict"
let object = {}
function Complete() {
    let name = document.form.name.value
    let street = document.form.street.value
    let home = document.form.homeadress.value
    let none = document.form.none.value
    let phone = document.form.phone.value
    let promo = document.form.promo.value
    if (none == "") {
        alert( "Успешно!\n" + name + "\n" + street + "\n" + home + "\n" + phone + "\n" + promo)
    } else if (promo == "") {
        alert(name + "\n" + street + "\n" + home + "\n" + none + "\n" + phone + "\n")
    } else if (promo == "" && none == "") {
        alert(name + "\n" + street + "\n" + home + "\n" + phone + "\n")
    } else {
        alert(name + "\n" + street + "\n" + home + "\n" + none + "\n" + phone + "\n" + promo)
    }
    object = {
        "name": name,
        "street": street,
        "home": home,
        "none": none,
        "phone": phone,
        "promo": promo
    }
    console.log(object)
}