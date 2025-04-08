<?php 

include '../inc/cle.php';


$sql = "INSERT INTO animaux (nom,sex,espece,race,description)VALUES ('$nom','$age','$sex','$race','$espece','$description')";

if($cle-->query($sql)){
    header('location:admin.php');
}
else{
    header('location:admin.php');
}
