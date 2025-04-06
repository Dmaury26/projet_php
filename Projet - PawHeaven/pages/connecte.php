<?php 

if (isset($_POST['identifiant']) && isset($_POST['mdp'])){
    $identifiant = htmlspecialchars($_POST['identifiant']);
    $mdp = htmlspecialchars($_POST['mdp']);

    if($_POST['identifiant']!== 'admin' && $_POST['mdp']!== 'admin'){
        header('location:echeca.php');
    }
    else{
        header('location:liste.php');
    }

}else{
    header('location:connexion.php');
}