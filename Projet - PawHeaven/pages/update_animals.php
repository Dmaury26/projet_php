<?php 
if(isset($_POST['nom'])){

    $nom = htmlspecialchars($_POST['nom']);
    $espece = htmlspecialchars($_POST['espece']);
    $race = htmlspecialchars($_POST['prenom']);
    $description = htmlspecialchars($_POST['ville']);
    $id = htmlspecialchars($_POST['id']);

    include '../inc/cle.php';

    $sql  = "UPDATE animals SET nom = '$nom',espece='$espece',race='$race',description='description' WHERE id=$id";

    if($cle->query($sql)){
        header('location:animals.php');
    }
}