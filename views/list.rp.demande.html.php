<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="list.demande.css"> -->
    <link rel="stylesheet" href="css/list.demande.prime.css">
    <title>Validation</title>
</head>

<body>
    <?php
    include("header.rp.html.php");
    ?>
    <main>
        <!-- <form action="#" method="post" >
            <div class="boxForm">
                <select name="etat">
                    <option value="Susp. & Annul" selected><?= $filterValue ?> -> All</option>
                    <option value="suspension">Suspension</option>
                    <option value="annulation">Annulation</option>
                </select>
            </div>
            <input class="submitFilter" name="submitFilter" type="submit" value="filtrer">
        </form> -->
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
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($Demandes as $demande) {
                        if ($demande["etat"] == "en cours") {
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
                            <td><a href="<?= "/?idDem=" . $demande["id"] ?>">Voir détails</a></td>
                            <?php

                            echo '</tr>';
                        }
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </main>
</body>

</html>