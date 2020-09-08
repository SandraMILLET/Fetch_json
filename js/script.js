
window.onload = function () {
    console.log('page load');

    
let urlAPI = "js/joueur.json";

const getUsers = async function(){
    try{
        let response = await fetch(urlAPI)
        if (response.ok){
            let data =await response.json()
            console.log(data)
        } else {
            console.log ('Retour du serveur : ',response.status)
        }
    } catch (e){
        console.log(e)
    }
}
const insertJoueur = async function (data){
    let response = await fetch(urlAPI, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
    
    let responseData = await response.json()
    console.log(responseData)
}
let ResultData = document.getElementById('joueur')
ResultData.innerHTML = getUsers();



    /*********FETCH METHOD*********/
    /*récupère le DOM*/
    let fetchResult = document.getElementById("dom");
    /*affiche dans l'HTML*/
    fetchResult.innerHTML = '<p>OUI ! Le DOM est récupéré ! Ca marche !</p>';
}

/*insertion data php*/
let urlphp = "php/database.php";
    
    fetch(urlphp)
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
            var mainContainer = document.getElementById("resultat");
            for (var i = 0; i < data.length; i++) {
                
                mainContainer.innerHTML = 'Name: ' + data[i].nom + ' ' + 
                                'Pseudo: ' + data[i].pseudo + ' ' + 
                                'XP: ' + data[i].xp + ' ' + 
                                'Avatar :' + "<img src=" + data.urlimg + ">";
                                
                //mainContainer.appendChild(div);
            }
        }