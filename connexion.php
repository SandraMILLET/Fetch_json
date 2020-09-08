<?php

session_start();

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <title>Formulaire de connexion</title>
</head>

<body>
    <h1>Formulaire de connexion</h1>
    <div class="col-md-12 border bg-light">
        <form class="col-md-12" action="php/dbco.php" method="post">
            <label>Votre pseudo</label>
            <input class="form-control" type="text" id="pseudo" name="pseudo" placeholder="Indiquez votre pseudo" required>
            <label>Votre password</label>
            <input class="form-control" type="password" id="password" name="password" placeholder="Indiquez votre password" required>
            <button type="submit" class="btn btn-primary" href="php/dbco.php">Envoyer</button>
        </form>
    </div>

</body>
<?php

  if(isset($_SESSION['success'])){
    echo '<br><div class="centrage">'. $_SESSION['success'] . ' </div>';
  }
  else if(isset($_SESSION['fail'])){
    echo '<br><div class="centrage">' . $_SESSION['fail'] . ' </div>';
  }
  else{
    echo '<br><div class="centrage">Authenfication requise</div>';
  }


session_destroy();

?>
</html>