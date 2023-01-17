const inputSearch = document.querySelector("[placeholder='search']");
const doc = document.getElementById("retour");



// a faire lundi 
/* inputSearch.addEventListener("blur", ()=> {
    doc.innerHTML="";
}); */

inputSearch.addEventListener(
    "keyup",
    (e) => {
        const inputText = e.target.value;
        console.log(` voilà la suite ${inputText} `);
        fetch("{{ path('search_api') }}?resultat=" + inputText)
            .then((reponse) => {
                return reponse.json();

            })
            .then((json) => {

                affichage(json);
            })
    }

)

function affichage(json) {
    if (json.length !== 0) {
        doc.innerHTML = "";
        let retour = "";
        json.forEach(element => {

            retour += `<div onclick= "validComplete('${element.title}')"> ${element.title}</div>`;
        });
        doc.innerHTML = retour;
    }else{
        doc.innerHTML = "On a pas trouvé alors cherche ailleurs";
    }

}
function validComplete(value){
    console.log(value);
   inputSearch.value =value;
   doc.innerHTML = "";
}

