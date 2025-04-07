<?php
include_once '../inc/cle.php'; 


if(isset($_GET['recherche']) && !empty($_GET['recherche'])){
    echo htmlspecialchars($_GET['recherche']);
}
else if (isset($_POST['lastname'])){
    $nom = htmlspecialchars($_POST['lastname']);
    $prenom = htmlspecialchars($_POST['firstname']);
    $email = htmlspecialchars($_POST['email']);
    $confemail = htmlspecialchars($_POST['confemail']);
    $mdp = htmlspecialchars($_POST['password']);
    $confmdp = htmlspecialchars($_POST['confpassword']);

    if(($email !== $confemail) && ($mdp !== $confmdp)){
        header('Location:failed_connexion.php');
        exit();
    } else {
        $sql = "INSERT INTO clients (nom, prenom, email) 
    VALUES
     ('$nom','$prenom','$email')";

    if($cle->query($sql)){
        $_SESSION['message'] = "Votre compte sur PawHeaven a été créé";
        header('Location:../index.php');
    }
    }

}
else{
    header('Location:../index.php');
}
