<?php


    // chemin d'accès fichier JSON
/*$file = 'js/joueur.json'; 
// mettre le contenu du fichier dans une variable
$data = file_get_contents($file); 
//var_dump($data);
// décoder le flux JSON
$obj = json_decode($data,true); 
//var_dump($obj);
// accéder à l'élément approprié
//echo $obj[0]->nom;

$sql = $conn->prepare("INSERT INTO $dbtable (`nom`, `pseudo`, `xp`, `urlimg`) VALUES (:id, :nom, :pseudo, :xp, :urlimg)");
//var_dump($sql);

//use exec() because no results are returned
$conn->execute($sql);

echo 'Insertion OK';
//affiche tout //while($donnees = $sql->fetch());

$conn = null;*/

/*recuperer data*/
$response = 'SELECT * FROM joueurs';
$req = $conn->prepare($response);
$result = $req->execute();

$result = $req->fetchAll(PDO::FETCH_OBJ);
return $result[0];



/* CREATE TABLE*/
//ne fonctionne pas erreur de syntaxe
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   // set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
   // sql to create table
   $dbtable = 'CREATE TABLE IF NOT EXISTS joueurs
   (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(30) NOT NULL,
    pseudo VARCHAR(30) NOT NULL,
    xp VARCHAR(30) NOT NULL,
    img VARCHAR(30) NOT NULL,
   )';
   // use exec() because no results are returned
   $conn->exec($dbtable);
   echo "Table Joueurs created successfully";
 } catch(PDOException $e) {
echo $dbtable . "<br>" . $e->getMessage();
}
$conn = null;




  //creation base de donnée
try {
  $conn = new PDO("mysql:host=$servername", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Database created successfully<br>";
   // use exec() because no results are returned
 } catch(PDOException $e) {
   echo $sql . "<br>" . $e->getMessage();
 }
 $conn = null;