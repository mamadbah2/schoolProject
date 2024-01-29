<header>
    <!-- <h1>DEMANDE</h1> -->

    <div class="container">
        <h1 class="heading">DEMANDE</h1>
    </div>

    <div class="profile">
        <div>
            <img src="img/profilH_rm.png" alt="#">
        </div>
        <h3>
            <?= $etudiant["nom"] . " " . $etudiant["prenom"] ?>
        </h3>
    </div>

    <div class="card info">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="card-inner">
            <p><span>Classe</span><br>
                <?= $classe["niveau"] . $classe["filiere"] . " " . $classe["code"] ?>
            </p>
            <p><span>Année Scolaire</span><br> 2023-2024</p>
            <a href="<?= PORT . "/?action=nouveau" ?>" style="margin-bottom: 10px;">
                <!-- Bouton Integrée -->

                <button type="reset">
                    <span class="circle1"></span>
                    <span class="circle2"></span>
                    <span class="circle3"></span>
                    <span class="circle4"></span>
                    <span class="circle5"></span>
                    <span class="text">Nouveau</span>
                </button>
                <!-- Fin -->
            </a>
            <a href="<?=PORT . "/?action=list" ?>" style="margin-bottom: 10px; z-index: 1000">
                <!-- Bouton Integrée -->
                <button type="button">
                    <span class="circle1"></span>
                    <span class="circle2"></span>
                    <span class="circle3"></span>
                    <span class="circle4"></span>
                    <span class="circle5"></span>
                    <span class="text">Liste</span>
                </button>
                <!-- Fin -->
            </a>
            <a href="<?= PORT . "/?logout" ?>" style="margin-bottom: 10px;">
                <!-- Bouton Integrée -->

                <button type="reset" style="background:red;" >
                    <span class="circle1"></span>
                    <span class="circle2"></span>
                    <span class="circle3"></span>
                    <span class="circle4"></span>
                    <span class="circle5"></span>
                    <span class="text">Log out</span>
                </button>
                <!-- Fin -->
            </a>
        </div>
    </div>

</header>