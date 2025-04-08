<?php include '../inc/header.php'; ?>
<main>
    <h2>Page Administrateur</h2>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Age</th>
                <th>Sex</th>
                <th>Race</th>
                <th>Espèce</th>
                <th>Description</th>
                <th>Ajouter</th>
                <th>Supprimer</th>
                <th>Modifier</th>
            </tr>
        </thead>
        <tbody>

        <?php

        include '../inc/cle.php';

        $sql = "SELECT * FROM animaux";
        $reponse = $cle->query($sql);

        foreach($reponse AS $r): ?>

            <tr>
                
                <td><?= $r['nom'] ?></td>
                <td><?= $r['age'] ?></td>
                <td><?= $r['sex'] ?></td>
                <td><?= $r['race'] ?></td>
                <td><?= $r['espece'] ?></td>
                <td><?= $r['description'] ?></td>
                <td>
                <form action="" method="POST">
        <input type="text" name="nom" id ="nom" placeholder="Nom" required>
        <select name="age" required>
            <option value="">Sélectionnez l'âge</option>
            <?php for ($i = 1; $i <= 20; $i++) : ?>
                <option value="<?= $i ?>"><?= $i ?> an(s)</option>
            <?php endfor; ?>
        </select>
        <select name="sex" required>
            <option value="">Sexe</option>
            <option value="Male">Mâle</option>
            <option value="Femelle">Femelle</option>
        </select>
        <input type="text" name="race" id="race" placeholder="Race" required>
        <input type="text" name="espece" id="espece" placeholder="Espèce" required>
        <textarea name="description" id="description"  placeholder="Description"></textarea>
        <input type="submit" value="Ajouter">
    </form>
                </td>
                <td>
                    <form action="suppression.php" method="POST">
                        <input type="hidden" name="id" value="<?= $r['id'] ?>">
                        <input type="image" src="../images/supp.jpg"> 
                    </form>
                </td>
                <td>
                    <form action="modification.php" method="POST">
                        <input type="hidden" name="id" value="<?= $r['id'] ?>">
                        <input type="image" src="../images/modif.jpg"> 
                    </form>
                </td>
                
            </tr>


        <?php endforeach; ?>
        </tbody>
    </table>
</main>
<?php include '../inc/footer.php';