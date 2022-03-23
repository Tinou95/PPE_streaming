document.addEventListener("DOMContentLoaded", () => {



    // Redirection vers la premiere page

    const image_header = document.querySelector(".image_header");

    image_header.addEventListener("click", (e) =>{
      e.preventDefault;
      window.location.href="page1.html"
    })



    // Formulaire de contact 

    let kcorpWin = document.querySelector("main p");
    let ville = document.getElementsByTagName("select")[0].value;
    let pays = document.getElementsByTagName("select")[1].value;
	  let nom = document.getElementsByTagName("input")[0].value;
	  let prenom = document.getElementsByTagName("input")[1].value;
	  let email = document.getElementsByTagName("input")[2].value;
    let btn = document.getElementsByTagName("input")[3];



	let formContact = () => {
    if (nom != "" && prenom != "" && email != "" && ville != "" && pays != "") {
      kcorpWin.classList.add("reussi");
			kcorpWin.innerText = "Formulaire bien envoyé";     
		} else {
      kcorpWin.classList.add("erreur");
			kcorpWin.innerText = "Champs incomplets, veuillez tous les remplir";			
		}
	};

  btn.addEventListener("click", e => {
		e.preventDefault();
		formContact();
	});
  
    
  
    });