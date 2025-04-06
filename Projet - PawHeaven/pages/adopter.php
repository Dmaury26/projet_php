<?php include '../inc/header.php'; ?>
<main>
    <h2>Nos animaux à adopter</h2>

    <table>
        <caption></caption>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>

        <?php
        // je me connecte à la DB
        include '../inc/cle.php';

        // je lis tout
        $sql = "SELECT * FROM clients";
        $reponse = $cle->query($sql);

        // j'affiche avec une boucle
        foreach($reponse AS $r): ?>

            <tr>
                <td><?= $r['nom'] ?></td>
                <td><?= $r['prenom'] ?></td>
                <td><?= $r['email'] ?></td>
            </tr>


        <?php endforeach; ?>
        </tbody>
    </table>
</main>
<?php include '../inc/footer.php';