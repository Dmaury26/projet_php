<?php 

$id = $_POST['id'];

include '../inc/cle.php';

$sql = "SELECT * FROM clients WHERE id=$id";

$reponse = $cle->query($sql);


if (isset($_POST['identifiant']) && isset($_POST['password'])){
    $identifiant = htmlspecialchars($_POST['identifiant']);
    $mdp = htmlspecialchars($_POST['password']);

    if(($_POST['identifiant']== 'admin' && $_POST['password']== 'admin') ||
    ($_POST['identifiant']== 'dorian' && $_POST['password']== 'dorian') ||
    ($_POST['identifiant']== 'mariem' && $_POST['password']== 'mariem') ||
    ($_POST['identifiant']== 'maria' && $_POST['password']== 'maria')){
        header('location:admin.php'); 
    }
    elseif($_POST['identifiant']== '' && $_POST['password']== ''){ //mettre ici les logins de la base de donnée clients
        header('localtion:animals.php');
    }

    else{
        header('location:echec.php');
    }

}else{
    header('location:connexion.php');
}

//Créer une table admin manuellement et utiliser un boucle foreach pour les parcourir et vérifier si le mot de passe et l'ientifiant correspond à un id dans la table 