<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Formulaire d'inscription</title>
</head>

<body>
    <h1>Formulaire d'inscription</h1>
    <div class="card-body">
        <form class="col-md-12" action="php/database.php" method="post">
            <label>Votre nom</label>
            <input class="form-control" type="text" id="nom" name="nom" placeholder="Indiquez votre nom" required>
            <label>Votre pseudo</label>
            <input class="form-control" type="text" id="pseudo" name="pseudo" placeholder="Indiquez votre pseudo"
                required>
            <label>Votre email</label>
            <input class="form-control" type="email" id="email" name="email" placeholder="Indiquez votre email"
                required>
            <label>Votre password</label>
            <input class="form-control" type="password" id="password" name="password"
                placeholder="Indiquez votre password" required>
            <button type="submit" class="btn btn-primary" name="submitconnexion">Envoyer</button>
        </form>
    </div>
    <div class="">
        <p class="bout_href">Si déjà inscrit : connectez-vous ci-dessous</p>
        <a href="connexion.php" class="btn btn-info" role="button">Se connecter</a>
        
    </div>



    <div class="joueur"></div>
    <script src="js/script.js"></script>
 
</body>

</html>