<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="form.demande.css">
    <title>Document</title>
</head>

<body>
    <header>
        <!-- <h1>DEMANDE</h1> -->

        <div class="container">
            <h1 class="heading">DEMANDE</h1>
        </div>

        <div class="profile">
            <div>
                <img src="img/profilH_rm.png" alt="#">
            </div>
            <h3>BAH Mamadou Bobo</h3>
        </div>

        <div class="card info">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="card-inner">
                <p><span>Classe</span><br> L2GLRS</p>
                <p><span>Année Scolaire</span><br> 2023-2024</p>

                <!-- Bouton Integrée -->
                <!-- <button>
                    <span class="circle1"></span>
                    <span class="circle2"></span>
                    <span class="circle3"></span>
                    <span class="circle4"></span>
                    <span class="circle5"></span>
                    <span class="text">Nouveau</span>
                </button> -->
                <!-- Fin -->
            </div>
        </div>


    </header>

    <main>

        <div class="card">
            <span class="title">Ajout Nouvelle Demande</span>
            <form class="form">
                <div class="group">
                    <select name="etat">
                        <option value="" selected>Etat</option>
                        <option value="en cours">En cours</option>
                        <option value="en cours">Accepter</option>
                        <option value="Refuser">Refuser</option>
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