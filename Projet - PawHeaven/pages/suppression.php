<?php 

if(isset($_POST['id'])){
    $x = $_POST['id'];

    $sql = "DELETE FROM clients WHERE id=$x";

    include '../inc/cle.php';

    if($cle->query($sql)){
        header('location:admin.php');
    }else{
        header('location:admin.php');
    }
}