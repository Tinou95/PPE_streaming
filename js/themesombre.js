
document.addEventListener("DOMContentLoaded", () => {


const image_header2 = document.querySelector(".image_header2")
const body = document.querySelector("body");
const form = document.querySelector("main form");
const hache2 = document.querySelector("main section h2")


/*
image_header2.addEventListener("click", () => {
    if (image_header2.src = src="./asset/sunny.png") {
        image_header2.src = src="./asset/moon.png"

    } else {
        image_header2.src = src="./asset/sunny.png"
    }
});  */


image_header2.addEventListener("click", () => {

    //Si la classe est image_css afficher la classe image_css2
    if (image_header2.classList.contains("image_moon")) {
        image_header2.classList.remove("image_moon");
        image_header2.classList.add("image_sunny");
    } else {
        image_header2.classList.remove("image_sunny");
        image_header2.classList.add("image_moon");

    }

    body.classList.toggle("body")
    form.classList.toggle("form")
    hache2.classList.toggle("hache2")
});










});