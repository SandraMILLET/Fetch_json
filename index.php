<?php
echo 'salut';
    require 'class/player.php';
    require 'php/Database.php';
    $database = new Database();
    echo'connect bdd ok';
    $play1 = new Player('Sandra', 'Soara',5000, 'img/crow.jpg');
    $play2 = new Player('Océane', 'Océ', 2500, 'img/chat.png');
    
    
    echo 'Play1 ' . $play1->getNom();
    //$player = $database->insertPlayer();
    ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>JSON Joueur</title>
</head>

<body>

    <h1>Créer json, l'afficher en console puis dans la page web</h1>

    <h2>Le DOM se récupère-t-il?</h2>

    <div id="joueur"> </div>

    <!--<h2>Présentation du joueur :</h2>-->
    <!--<div id="result"> </div>-->

    <h2 class="choice">Choisissez vos joueurs</h2>

    <div class="container">
        <row class="choice">
            <div class="md-6" id="result">
            <a href="?action=insertPlayer()?>">Envoyer</a>
                <button id="player" class="btn btn-warning">Joueur 1</button>
                <button id="player" class="btn btn-warning">Joueur 2</button>
            </div>
            <div class="md-6 affichePlayer">
                <?php echo $play1->getNom()?>
                <?php echo $play2->getNom()?>
                
                <p class="nbre"> </p>
            </div>
        </row>
        <div class="save">
            <button class="btn btn-primary">Sauvegarder</button>
        </div>
    </div>




    <script src="js/script.js"></script>
</body>

</html>