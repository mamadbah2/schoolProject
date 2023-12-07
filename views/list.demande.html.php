<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="list.demande.css"> -->
    <link rel="stylesheet" href="list.demande.prime.css">
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
                <button>
                    <span class="circle1"></span>
                    <span class="circle2"></span>
                    <span class="circle3"></span>
                    <span class="circle4"></span>
                    <span class="circle5"></span>
                    <span class="text">Nouveau</span>
                </button>
                <!-- Fin -->
            </div>
        </div>


    </header>
    <main>
        <form action="">
            <div class="boxForm">
                <select name="etat">
                    <option value="" selected>Etat</option>
                    <option value="en cours">En cours</option>
                    <option value="en cours">Accepter</option>
                    <option value="Refuser">Refuser</option>
                </select>
            </div>
            <input class="submitFilter" type="submit" value="Filtrer">
        </form>
        <div class="contain">
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Type</th>
                        <th>Etat</th>
                        <th>Action</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>D12345</td>
                        <td>31-03-2023</td>
                        <td>Suspension</td>
                        <td>En cours</td>
                        <td><a href="#">Voir détails</a></td>
                    </tr>
                    <tr>
                        <td>D67890</td>
                        <td>31-03-2023</td>
                        <td>Annulation</td>
                        <td>Accepté</td>
                        <td><a href="#">Voir détails</a></td>
                    </tr>
                    <tr>
                        <td>D24680</td>
                        <td>31-03-2023</td>
                        <td>Suspension</td>
                        <td>En cours</td>
                        <td><a href="#">Voir détails</a></td>
                    </tr>
                    <tr>
                        <td>D13579</td>
                        <td>31-03-2023</td>
                        <td>Annulation</td>
                        <td>Accepté</td>
                        <td><a href="#">Voir détails</a></td>
                    </tr>
                    <tr>
                        <td>D98765</td>
                        <td>31-03-2023</td>
                        <td>Suspension</td>
                        <td>En cours</td>
                        <td><a href="#">Voir détails</a></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </main>
</body>

</html>