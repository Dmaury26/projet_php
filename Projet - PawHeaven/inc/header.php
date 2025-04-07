<?php 
session_start();
define('ROOT', '/ccphp/ccphp/'); 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Contrôle PHP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>css/style.css">
    </head>
<body>

    <header>
        <h1>
            <a href="<?= ROOT ?>index.php">
                <img src="<?= ROOT ?>images/image1.jpg" alt="">
            </a>
        </h1>
        <form action="<?= ROOT ?>pages/traitement.php" method="get">
            <input type="search" name="recherche" id="recherche" maxlength="200" placeholder="Recherche ...">
            <input type="image" src="<?= ROOT ?>images/cherche.svg">
        </form>
    </header>
    <nav>
        <a href="<?= ROOT ?>index.php">Accueil</a>
        <a href="<?= ROOT ?>pages/contact.php">Nous Contacter</a>
        <a href="<?= ROOT ?>pages/animals.php">Adoptez</a>
        <a href="<?= ROOT ?>pages/signup.php">S'incrire</a>
        <a href="<?= ROOT ?>pages/connexion.php">Connexion</a>
    </nav>