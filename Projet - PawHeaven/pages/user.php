<?php 

$id = $_POST['id'];

include '../inc/cle.php';

$sql = "SELECT * FROM admin WHERE id=$id";

$reponse = $cle->query($sql);

foreach($reponse AS $r):


if (isset($_POST['identifiant']) && isset($_POST['password'])){
    $identifiant = htmlspecialchars($_POST['identifiant']);
    $mdp = htmlspecialchars($_POST['password']);

    if(($_POST['identifiant']== 'admin' && $_POST['password']== 'admin') ||
    ($_POST['identifiant']== 'dorian' && $_POST['password']== 'dorian') ||
    ($_POST['identifiant']== 'mariem' && $_POST['password']== 'mariem') ||
    ($_POST['identifiant']== 'maria' && $_POST['password']== 'maria')){
        header('location:admin.php'); 
    }
    else{
        header('location:echec.php');
    }

}

endforeach;

//Créer une table admin manuellement et utiliser un boucle foreach pour les parcourir et vérifier si le mot de passe et l'ientifiant correspond à un id dans la table 