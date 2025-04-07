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
                <td><?= $r[''] ?></td>
                <td><?= $r['nom'] ?></td>
                <td><?= $r['espece'] ?></td>
                <td><?= $r['race'] ?></td>
                <td><?= $r['description'] ?></td>
            </tr>


        <?php endforeach; ?>
        </tbody>
    </table>
</main>
<?php include '../inc/footer.php';