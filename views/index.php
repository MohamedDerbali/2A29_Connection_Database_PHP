<?php
require_once "../models/connection.php";
require "../controllers/userC.php";
require "../models/user.php";
if (isset($_POST) && !empty($_POST)) {
    $user = new user($_POST["nom"], $_POST["prenom"]);
    $user->setAge($_POST["age"]);
    $userC = new userC();
    $userC->addUser($user, $pdo);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ajouter un utilisateur</h1>
    <form method="Post" action="index.php">
        Nom:<input type="text" name="nom" id=""></br></br>
        Prenom:<input type="text" name="prenom" id=""></br></br>
        Age:<input type="number" name="age" id=""></br></br>
        <button type="submit" style="background-color: green;color:white">ajouter user</button>
    </form>
</body>

</html>