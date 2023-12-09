<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/form.demande.css">
    <title>Document</title>
</head>

<body>
    <?php
        include("header.demande.html.php");
    ?>

    <main>

        <div class="card">
            <span class="title">Ajout Nouvelle Demande</span>
            <form class="form" action=<?= PORT ?> method="post">
                <div class="group">
                    <select name="etat">
                        <option value="" selected>Etat</option>
                        <option value="suspension">Suspension</option>
                        <option value="annulation">Annulation</option>
                    </select>
                    <label for="type">Type</label>
                </div>
                <div class="group">
                    <textarea placeholder="‎" id="comment" name="comment" rows="5" required=""></textarea>
                    <label for="comment">Motif</label>
                </div>
                <button type="submit">Enregistrer</button>
            </form>
        </div>
    </main>


</body>

</html>