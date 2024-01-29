<header>
    <!-- <h1>DEMANDE</h1> -->

    <div class="container">
        <h1 class="heading">Resp. Ped.</h1>
    </div>

    <div class="profile">
        <div>
            <img src="img/profilH_rm.png" alt="#">
        </div>
        <h3>BAH Mamadou Bobo</h3>
    </div>

    <div class="card info">
        <a href="<?=PORT . "/?action=classe" ?>" style="margin-bottom: 10px; z-index: 1000">
            <!-- Bouton Integrée -->
            <button type="button">
                <span class="text">Classe</span>
            </button>
            <!-- Fin -->
        </a>

        <a href="<?=PORT . "/?action=professeur" ?>" style="margin-bottom: 10px; z-index: 1000">
            <!-- Bouton Integrée -->
            <button type="button" id="professeur">
                <span class="text">Professeur</span>
            </button>
            <!-- Fin -->
        </a>

        <a href="<?=PORT . "/?action=module" ?>" style="margin-bottom: 10px; z-index: 1000">
            <!-- Bouton Integrée -->
            <button type="button">
                <span class="text">Module</span>
            </button>
            <!-- Fin -->
        </a>

        <a href="<?=PORT . "/?action=traiterDem" ?>" style="margin-bottom: 10px; z-index: 1000">
            <!-- Bouton Integrée -->
            <button type="button">
                <span class="text">Traiter Demande</span>
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


</header>