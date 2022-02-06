document.addEventListener("DOMContentLoaded", () => {

  const redirect_page2 = document.querySelector(".redirect_page2");
  const image_header = document.querySelector(".image_header");
  const first_image = document.querySelector(".first_image")
 
  

  redirect_page2.addEventListener("click", (e) =>{
    e.preventDefault;
    window.location.href="page2.html"
  })

  image_header.addEventListener("click", (e) =>{
    e.preventDefault;
    window.location.href="page1.html"
    first_image.src="./asset/affiche/affiche_2.jpg";
  })

  first_image.addEventListener("click", (e) =>{
    e.preventDefault;

      first_image.src="./asset/affiche/affiche_2.jpg";

  })

  

  });
  