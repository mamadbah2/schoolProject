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
    include("header.demande.html.php");
    ?>
    <main>
        <form action="#" method="post" >
            <div class="boxForm">
                <select name="etat">
                    <option value="Susp. & Annul" selected><?= $filterValue ?> -> All</option>
                    <option value="suspension">Suspension</option>
                    <option value="annulation">Annulation</option>
                </select>
            </div>
            <input class="submitFilter" name="submitFilter" type="submit" value="filtrer">
        </form>
        <div class="contain">
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Type</th>
                        <th>Etat</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($mesDemandes as $demande) {
                        echo '<tr>';
                        ?>
                        <td>
                            <?= $demande["date"] ?>
                        </td>
                        <td>
                            <?= $demande["type"] ?>
                        </td>
                        <td>
                            <?= $demande["etat"] ?>
                        </td>
                        <td><a href="<?= "/?idDem=" . $demande["id"] ?>">Voir détails</a></td>
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