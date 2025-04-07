<?php include '../inc/header.php'; ?>
<main>
    <h2>Page Administrateur</h2>

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
                <td>
                    <form action="suppression.php" method="POST">
                        <input type="hidden" name="id" value="<?= $r['id'] ?>">
                        <input type="image" src="../images/supp.jpg"> <!-- images à rajouter -->
                    </form>
                </td>
                <td>
                    <form action="modification.php" method="POST">
                        <input type="hidden" name="id" value="<?= $r['id'] ?>">
                        <input type="image" src="../images/modif.jpg"> <!-- images à rajouter -->
                    </form>
                </td>
            </tr>


        <?php endforeach; ?>
        </tbody>
    </table>
</main>
<?php include '../inc/footer.php';