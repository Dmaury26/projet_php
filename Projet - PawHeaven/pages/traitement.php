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

    if($email !== $confemail){
        header('Location:echec.php');
        exit();
    } else {
        $sql = "INSERT INTO clients (nom, prenom, email) 
    VALUES
     ('$nom','$prenom','$email')";

    if($cle->query($sql)){
        $_SESSION['message'] = "OK tu es enregistré(e)";
        header('Location:contact.php');
    }
    }

}
else{
    header('Location:../index.php');
}
