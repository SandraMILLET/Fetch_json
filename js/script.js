/* debut ca marche */


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
            .then(function (response) {
                return response.json();
            })
            //affiche le résultat de tel élément du json
            .then(function (data) {
                appendData(data);
            })
            //si erreur alors affiche ça
            .catch(function (err) {
                console.log('error: ' + err);
            });
            //boucle de données
        function appendData(data) {
            var mainContainer = document.getElementById("result");
            for (var i = 0; i < data.length; i++) {
                var div = document.createElement("div");
                div.innerHTML = 'Name: ' + data[i].nom + ' ' + 
                                'Pseudo: ' + data[i].pseudo + ' ' + 
                                'XP: ' + data[i].xp + ' ' + 
                                'Avatar :' + "<img src=" + data.urlimg + ">";
                                
                mainContainer.appendChild(div);
            }
        }
/* fin du "ca marche" */
