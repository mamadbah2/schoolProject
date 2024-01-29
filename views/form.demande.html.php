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
            <form class="form" action=<?= PORT."/?action=list" ?> method="post">
                <div class="group">
                    <select name="type">
                        <option value="" selected>Type</option>
                        <option value="suspension">Suspension</option>
                        <option value="annulation">Annulation</option>
                    </select>
                    <label for="type">Type</label>
                </div>
                <div class="group">
                    <textarea placeholder="‎" id="comment" name="comment" rows="5" required=""></textarea>
                    <label for="comment">Motif</label>
                </div>
                <input type="submit" name="submit" value="Enregistrer">
            </form>
        </div>
    </main>


</body>

</html>