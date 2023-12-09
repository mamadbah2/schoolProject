<?php
define("PORT", "http://localhost:8000");
require_once("../repositories/demande.repository.php");
if (connection("mamadbah", "passer123") != 0) {


    $idEtudiant = connection("mamadbah", "passer123");
    $etudiant = getDataEtudiant()[$idEtudiant - 1];
    $classe = getDataClasse()[$etudiant["classeId"] - 1];
    $allDemande = getDataDemande();
    $allAnnee = getDataAnnee();
    $mesDemandes = [];
    if (isset($_POST["submit"])) {
        $allDemande[] = [
            "id" => count($allDemande)+1,
            "numero" => generateurChaine(),
            "date" => date("d-m-Y"),
            "etat" => "en cours",
            "type" => $_POST["type"],
            "motif" => $_POST["motif"],
            "anneeId" => 2,
            "etudiantId" => $idEtudiant
        ];
    }
    foreach ($allDemande as $value) {
        if ($value["etudiantId"] == $idEtudiant && $allAnnee[$value["anneeId"] - 1]["etat"] == True) {
            $mesDemandes[] = $value;
        }
    }

    if (isset($_GET["action"])) {
        if ($_GET["action"] == "nouveau") {
            include("../views/form.demande.html.php");
        } elseif ($_GET["action"] == "list") {
            include("../views/list.demande.html.php");

        }
    } elseif (isset($_GET["idDem"])) {
        $idDem = intval($_GET["idDem"]);
        include("../views/detail.demande.html.php");
    } else {
        include("../views/list.demande.html.php");
    }

} else {
    echo "Login or Password incorrect";
}
?>