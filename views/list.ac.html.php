<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="list.demande.css"> -->
    <link rel="stylesheet" href="css/list.demande.prime.css">
    <title>Attaché</title>
</head>

<body>
    <?php
    include("header.ac.html.php");
    ?>
    <main>
        <form action="#" method="post">
            <div class="boxForm">
                <select name="matriculeId">
                    <option value="all" selected>
                       All
                    </option>
                    <?php foreach ($formDemandes as $demande): ?>
                        <option value="<?= $demande["id"] ?>">
                            <?= $Etudiants[$demande["etudiantId"] - 1]["matricule"] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <input class="submitFilter" name="submitSearch" type="submit" value="Search">
        </form>
        <div class="contain">
            <table>
                <thead>
                    <tr>
                        <th>Matricule</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Classe</th>
                        <th>Date Dem.</th>
                        <th>Etat</th>
                        <th>Type</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($Demandes as $demande) {
                        echo '<tr>';
                        ?>
                        <td>
                            <?= $Etudiants[$demande["etudiantId"] - 1]["matricule"] ?>
                        </td>
                        <td>
                            <?= $Etudiants[$demande["etudiantId"] - 1]["nom"] ?>
                        </td>
                        <td>
                            <?= $Etudiants[$demande["etudiantId"] - 1]["prenom"] ?>
                        </td>
                        <td>
                            <?php $mintab = [];
                            $mintab[] = $Etudiants[$demande["etudiantId"] - 1]["classeId"];
                            echo nameClasse($mintab)[0] ?>
                        </td>
                        <td>
                            <?= $demande["date"] ?>
                        </td>
                        <td>
                            <?= $demande["etat"] ?>
                        </td>
                        <td>
                            <?= $demande["type"] ?>
                        </td>
                        <?php

                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </main>
</body>

</html>