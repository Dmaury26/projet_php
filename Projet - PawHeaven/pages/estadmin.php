<?php 

if (isset($_POST['identifiant']) && isset($_POST['password'])){
    $identifiant = htmlspecialchars($_POST['identifiant']);
    $mdp = htmlspecialchars($_POST['password']);

    if($_POST['identifiant']!== 'admin' && $_POST['password']!== 'admin'){
        header('location:echec.php');
    }
    else{
        header('location:adopter.php');
    }

}else{
    header('location:connexion.php');
}