<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/form.demande.css">
    <title>Ajout Professeur</title>
</head>

<body>
    <?php
        include("header.rp.html.php");
    ?>

    <main>

        <div class="card">
            <span class="title">Ajouter Un Professeur</span>
            <form class="form" action=<?= PORT."/?action=professeur" ?> method="post">
                <div class="group">
                    <input type="text" name="nom" id="nom" required>    
                    <label for="nom">Nom</label>
                </div>
                <div class="group">
                    <input type="text" name="grade" id="grade" required>    
                    <label for="grade">Grade</label>
                </div>
                <input type="submit" name="add.professeur" value="Enregistrer">
            </form>
        </div>
    </main>


</body>

</html>