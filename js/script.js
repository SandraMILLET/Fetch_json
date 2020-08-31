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

/*fetch(urlAPI)
    .then(response => {
        //reponse est elle là?
        console.log(response);
        //retourne le résultat dans la console en json
        return response.json();
    })
    //prends les data
    .then(function (data) {
        appendData(data);
        //console.log(data);
    })
    .catch(error => {
        console.log(error);
        fetchResultjoueur.innerHTML = "<p>'ERREUR" + error.statusText + "</p>"
    });
    function appendData(data){
        for (var i = 0; i < data.length; i++){
            let fetchResultjoueur = document.getElementById("result");
            fetchResultjoueur.innerHTML = "<p>Nom : " + data.nom + "</p>" +
                "<p>Pseudo : " + data.pseudo + "</p>" +
                "<p>XP : " + data.xp + "</p>" +
                "<p>Avatar :" + "<img src=" + data.urlimg + ">" + "</p>";
                fetchResultjoueur.appendChild();
            }
        }*/
        //affiche le résultat de tel élément du json
        
    //si erreur alors affiche ça
    fetch(urlAPI)
            .then(function (response) {
                return response.json();
            })
            .then(function (data) {
                appendData(data);
            })
            .catch(function (err) {
                console.log('error: ' + err);
            });
        function appendData(data) {
            var mainContainer = document.getElementById("result");
            for (var i = 0; i < data.length; i++) {
                var div = document.createElement("div");
                div.innerHTML = 'Name: ' + data[i].nom + ' ' + 'Pseudo: ' + data[i].pseudo + ' ' + 'XP: ' + data[i].xp + ' ' + 'Avatar :' + "<img src=" + data.urlimg + ">";
                mainContainer.appendChild(div);
            }
        }