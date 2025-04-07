<?php 

$id = $_POST['id'];

include '../inc/cle.php';

$sql = "SELECT * FROM animals WHERE id=$id";

$reponse = $cle->query($sql);

foreach($reponse AS $r): ?>

    <form action="update.php" method="POST">
        <input type="text" name="nom" id="nom" value="<?= $r['nom'] ?>" maxlenght="200">
        <input type="text" name="espece" id="espece" value="<?= $r['espece'] ?>" maxlenght="200">
        <input type="text" name="race" id="race" value="<?= $r['race'] ?>" maxlenght="200">
        <input type="text" name="descrption" id="description" value="<?= $r['description'] ?>" maxlenght="1000">
        <input type="hidden" name="id" value="<?= $r['id'] ?>">
        <input type="submit" value="Modifier">
    </form>

<?php endforeach; 