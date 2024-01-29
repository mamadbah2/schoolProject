<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="list.demande.css"> -->
    <link rel="stylesheet" href="css/list.demande.prime.css">
    <title>Module</title>
</head>

<body>
    <?php
    include("header.rp.html.php");
    ?>
    <main>

        <div class="contain">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Module</th>
                        <th>Professeurs Chargés</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($modulProf as $mod) {
                        echo '<tr>';
                        ?>
                        <td>
                            <?= $mod["id"] ?>
                        </td>
                        <td>
                            <?= $mod["nom"] ?>
                        </td>
                        <td>
                            <?php echo implode(", ", professeurDuModule($mod["id"]));  ?> 
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