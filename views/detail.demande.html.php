<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/detail.demande.css">
    <title>Document</title>
</head>

<body>
    <?php 
        include("header.demande.html.php");
    ?>

    <main>
        <div class="card">
            <div class="content">
                <h3>
                    Type
                </h3>
                <p>
                    <?= $allDemande[$idDem-1]["type"] ?>
                </p>
                <h3>
                    Motif
                </h3>
                <p class="para">
                <?= $allDemande[$idDem-1]["motif"] ?>
                </p>
                <h3>
                    Date
                </h3>
                <p>
                <?= $allDemande[$idDem-1]["date"] ?> 
                </p>
            </div>
        </div>
    </main>

</body>

</html>