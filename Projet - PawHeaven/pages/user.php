<?php 

if (isset($_POST['identifiant']) && isset($_POST['password'])){
    $identifiant = htmlspecialchars($_POST['identifiant']);
    $mdp = htmlspecialchars($_POST['password']);

    if($_POST['identifiant']== 'admin' && $_POST['password']== 'admin'){ //mettre ici les logins admin
        header('location:animals.php'); 
    }
    elseif(n){ //mettre ici les logins de la base de donnée clients
        header('localtion:adopter.php');
    }

    else{
        header('location:echec.php');
    }

}else{
    header('location:connexion.php');
}