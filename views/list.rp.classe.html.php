<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="list.demande.css"> -->
    <link rel="stylesheet" href="css/list.demande.prime.css">
    <title>Document</title>
</head>

<body>
    <?php
    include("header.rp.html.php");
    ?>
    <main>
        <div class="boxForm">
            <a href="<?=PORT . "/?nouveau=classe"?>" style="margin-bottom: 10px; z-index: 1000">
                <!-- Bouton Integrée -->
                <button type="button">
                    <span class="text">NOUVEAU</span>
                </button>
                <!-- Fin -->
            </a>
        </div>

        <div class="contain">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Filière</th>
                        <th>Niveau</th>
                        <th>Code</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($mesClasses as $classe) {
                        echo '<tr>';
                        ?>
                        <td>
                            <?= $classe["id"] ?>
                        </td>
                        <td>
                            <?= $classe["niveau"] . " " . $classe["filiere"] . " " . $classe["code"] ?>
                        </td>
                        <td>
                            <?= $classe["niveau"] ?>
                        </td>
                        <td>
                            <?= $classe["filiere"] ?>
                        </td>
                        <td>
                            <?= $classe["code"] ?>
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