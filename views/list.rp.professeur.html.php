<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="list.demande.css"> -->
    <link rel="stylesheet" href="css/list.demande.prime.css">
    <title>Professeur</title>
</head>

<body>
    <?php
    include("header.rp.html.php");
    ?>
    <main>
        <div class="boxForm">
            <a href="<?= PORT . "/?nouveau=professeur" ?>" style="margin-bottom: 10px; z-index: 1000">
                <!-- Bouton Integrée -->
                <button type="button">
                    <sp an class="text">NOUVEAU</span>
                </button>
                <!-- Fin -->
            </a>
        </div>

        <div class="contain">
            <table>
                <thead>
                    <tr>
                        <th>Nom et Prenom</th>
                        <th>Grade</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($Professeurs as $prof) {
                        echo '<tr>';
                        ?>
                        <td>
                            <?= $prof["nom"] ?>
                        </td>
                        <td>
                            <?= $prof["grade"] ?>
                        </td>
                        <td>
                            <a href="<?= "/?Detail=" . $prof["id"] ?>">Voir détails</a>
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