<?php 

include '../inc/cle.php';

    $nom = htmlspecialchars($_POST['nom']);
    $age = htmlspecialchars($_POST['age']);
    $sex = htmlspecialchars($_POST['sex']);
    $espece = htmlspecialchars($_POST['espece']);
    $race = htmlspecialchars($_POST['race']);
    $description = htmlspecialchars($_POST['description']);


$sql = "INSERT INTO animaux (nom,sex,espece,race,description)VALUES ('$nom','$age','$sex','$race','$espece','$description')";

if($cle-->query($sql)){
    header('location:admin.php');
}
else{
    header('location:admin.php');
}
