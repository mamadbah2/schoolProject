<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/form.demande.css">
    <title>Affecter Module</title>
</head>

<body>
    <?php
    include("header.rp.html.php");
    ?>

    <main>

        <div class="card">
            <span class="title">Affecter Module</span>
            <form class="form" action=<?= PORT . "/?Detail=" . $_GET["id"] ?> method="post">
                <h3>
                    <?= $Professeurs[$_GET["id"] - 1]["nom"] ?>
                </h3>
                <div class="group">
                    <select name="module">
                        <option value="" selected>module</option>
                        <?php foreach ($modules as $modul): ?>
                            <option value="<?= $modul["id"] ?>">
                                <?= $modul["nom"] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <label for="module">module</label>
                </div>
                <div class="group" style="display: none;" >
                    <input type="texte" name="id" value="<?= $_GET["id"] ?>" >
                </div>
                <input type="submit" name="affecter.module" value="Affecter">
            </form>
        </div>
    </main>


</body>

</html>