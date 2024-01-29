<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="list.demande.css"> -->
    <link rel="stylesheet" href="css/list.demande.prime.css">
    <title>Detail Professeur</title>
</head>

<body>
    <?php
    include("header.rp.html.php");
    ?>
    <main>


        <div class="contain">
            <h3>Classes d'un professeur</h3>
            <a href="<?= PORT . "/?affecter=classe&id=".$_GET["Detail"] ?>" style="margin-bottom: 10px; z-index: 1000">
                <!-- Bouton Integrée -->
                <button type="button">
                    <span class="text">Affecter Classe</span>
                </button>
                <!-- Fin -->
            </a>
            <table style="margin-top: 10px;">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Classes</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($classProf as $ind => $cp) {
                        echo '<tr>';
                        ?>
                        <td>
                            <?= $ind + 1 ?>
                        </td>
                        <td>
                            <?= substr($cp, 0, strlen($cp) - 2) ?>
                        </td>
                        <?php

                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>

            <!-- table detail 2  -->
            <h3>Module du professeur</h3>
            <a href="<?= PORT . "/?affecter=module&id=".$_GET["Detail"] ?>" style="margin-bottom: 10px; z-index: 1000">
                <!-- Bouton Integrée -->
                <button type="button">
                    <span class="text">Affecter Module</span>
                </button>
                <!-- Fin -->
            </a>
            <table style="margin-top: 10px;" >
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Module</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($modulProf as $ind => $mp) {
                        echo '<tr>';
                        ?>
                        <td>
                            <?= $ind + 1 ?>
                        </td>
                        <td>
                            <?= $mp ?>
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