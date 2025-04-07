<?php include '../inc/header.php'; ?>
<main>
    <h2>Connexion</h2>

    <form action="<?=ROOT?>pages/user.php" method="post">
        <p class="admin">
            <?php
             if(isset($_SESSION['admin']) && !empty($_SESSION['admin'])){
                echo $_SESSION['admin'];
                $_SESSION['admin'] = '';
             }
             ?>
        </p>
        <input type="text" name="identifiant" id="identifiant" maxlength="200" placeholder="Identifiant">
        <input type="password" name="mdp" id="mdp" maxlength="200" placeholder="Mot de passe">

        <input type="submit">
</main>
<?php include '../inc/footer.php';