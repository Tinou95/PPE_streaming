
document.addEventListener("DOMContentLoaded", () => {


const image_header2 = document.querySelector(".image_header2")


image_header2.addEventListener("click", () => {
    if (image_header2.innerHTML = `<img class="image_header2" src="./asset/sunny.png" alt="">`) {
        image_header2.innerHTML = `<img class="image_header2" src="./asset/moon.png" alt="">`;

    } else {
        image_header2.innerHTML = `<img class="image_header2" src="./asset/sunny.png" alt="">`;

    }
   
});





});