<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/form.demande.css">
    <title>Ajout Classe</title>
</head>

<body>
    <?php
        include("header.rp.html.php");
    ?>

    <main>

        <div class="card">
            <span class="title">Creer Classe</span>
            <form class="form" action=<?= PORT."/?action=classe" ?> method="post">
                <div class="group">
                    <input type="text" name="filiere" id="filiere" required>    
                    <label for="filiere">Filiere</label>
                </div>
                <div class="group">
                    <input type="text" name="niveau" id="niveau" required>    
                    <label for="niveau">Niveau</label>
                </div>
                <div class="group">
                    <input type="text" name="code" id="code" required>    
                    <label for="code">Code</label>
                </div>
                <input type="submit" name="add.classe" value="Enregistrer">
            </form>
        </div>
    </main>


</body>

</html>