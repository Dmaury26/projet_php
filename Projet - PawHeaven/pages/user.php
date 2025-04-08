<?php 

include '../inc/cle.php';

$sql = "SELECT * FROM admin";
$reponse = $cle->query($sql);

if (isset($_POST['identifiant']) && isset($_POST['password'])) {
    $identifiant = htmlspecialchars($_POST['identifiant']);
    $mdp = htmlspecialchars($_POST['password']);


    if(($_POST['identifiant'] == 'admin' && $_POST['password'] == 'admin') 
       ($_POST['identifiant'] == 'dorian' && $_POST['password'] == 'dorian') 
       ($_POST['identifiant'] == 'mariem' && $_POST['password'] == 'mariem') ||
       ($_POST['identifiant'] == 'maria' && $_POST['password'] == 'maria')) {
        header('Location: admin.php'); 
        exit; 
    } else {
        header('Location: echec.php');
        exit; 
    }
}
?>