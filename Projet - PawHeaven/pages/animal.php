<?php include '../inc/header.php'; ?>
<main>
    <h2>Nos animaux à adopter</h2>

    <table>
        <caption></caption>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Race</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>

        <?php

        include '../inc/cle.php';

        $sql = "SELECT * FROM animaux";
        $reponse = $cle->query($sql);

        foreach($reponse AS $r): ?>

            <tr>
                
                <td>Nom : <?= $r['nom'] ?></td>
                <td>Sex :<?= $r['sex'] ?></td>
                <td>Race :<?= $r['race'] ?></td>
                <td>Espèce :<?= $r['espece'] ?></td>
                <td>Description : <?= $r['description'] ?></td>
            </tr>


        <?php endforeach; ?>
        </tbody>
    </table>
</main>
<?php include '../inc/footer.php';