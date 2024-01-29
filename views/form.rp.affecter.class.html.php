<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/form.demande.css">
    <title>Affecter Classe</title>
</head>

<body>
    <?php
    include("header.rp.html.php");
    ?>

    <main>

        <div class="card">
            <span class="title">Affecter Classe</span>
            <form class="form" action=<?= PORT . "/?Detail=" . $_GET["id"] ?> method="post">
                <h3>
                    <?= $Professeurs[$_GET["id"] - 1]["nom"] ?>
                </h3>
                <div class="group">
                    <select name="classe">
                        <option value="" selected>Classe</option>
                        <?php foreach ($classes as $class): ?>
                            <option value="<?= $class["id"] ?>">
                                <?= $class["niveau"]." ".$class["filiere"]." ".$class["code"] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <label for="classe">classe</label>
                </div>
                <div class="group" style="display: none;">
                    <input type="texte" name="id" value="<?= $_GET["id"] ?>" >
                </div>
                <input type="submit" name="affecter.classe" value="Affecter">
            </form>
        </div>
    </main>


</body>

</html>