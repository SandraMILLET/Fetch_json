window.onload = function () {
    console.log('page load');

    /*********FETCH METHOD*********/
/*récupère le DOM*/
let fetchResult = document.getElementById("joueur");
/*affiche dans l'HTML*/
fetchResult.innerHTML = '<p>OUI ! Le DOM est récupéré ! Ca marche !</p>';
}



 /*insertion API*/
 let urlAPI = "js/joueur.json";

fetch(urlAPI)
        .then(response => {
            //reponse est elle là?
            console.log(response);
            //retourne le résultat dans la console en json
            return response.json();
        })
        //prends les data
        .then(function (data) {
            console.log(data);
            //affiche le résultat de tel élément du json
            let fetchResultjoueur = document.getElementById("result");
            fetchResultjoueur.innerHTML = "<p>Nom : " + data.nom + "</p>" +
                "<p>Pseudo : " + data.pseudo + "</p>" +
                "<p>XP : " + data.xp + "</p>" +
                "<p>Avatar :" + "<img src="+ data.urlimg + ">" +"</p>";
        })
        //si erreur alors affiche ça
        .catch(error => {
            console.log(error);
            fetchResultjoueur.innerHTML = "<p>'ERREUR" + error.statusText + "</p>"
        });

