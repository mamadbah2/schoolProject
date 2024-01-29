<?php
session_start();
define("PORT", "http://localhost:8000");
require_once("../repositories/demande.repository.php");


if (isset($_GET["logout"])) {
    unset($_SESSION["password"]);
    unset($_SESSION["login"]);
    session_destroy();
    header("location:" . PORT);

}

if (empty($_SESSION)) {

    include("../views/form.connexion.html.php");
    if (isset($_POST["Sign-in"])) {
        if (connection($_POST["login"], $_POST["password"]) == 0) {
            header("location:" . PORT . "/?logout");
        } else {

            $_SESSION["login"] = $_POST["login"];
            $_SESSION["password"] = $_POST["password"];
            $_SESSION["role"] = getDataEtudiant()[connection($_SESSION["login"], $_SESSION["password"]) - 1];
        }

        header("location:" . PORT . "/?action=list");
        exit();
    }
}



if (connection($_SESSION["login"], $_SESSION["password"]) != 0) {
    $idEtudiant = connection($_SESSION["login"], $_SESSION["password"]);
    // session_destroy();
    $etudiant = getDataEtudiant()[$idEtudiant - 1];
    $classe = getDataClasse()[$etudiant["classeId"] - 1];
    $allDemande = getDataDemande();
    $allAnnee = getDataAnnee();
    $mesDemandes = [];
    if (isset($_POST["submit"])) {
        $Demande = [
            "id" => count($allDemande) + 1,
            "numero" => generateurChaine(),
            "date" => date("d-m-Y"),
            "etat" => "en cours",
            "type" => $_POST["type"],
            "motif" => $_POST["comment"],
            "anneeId" => 2,
            "etudiantId" => $idEtudiant
        ];
        putInJson($Demande, "Demandes");
    }

    $filterValue = "Susp. & Annul";
    if (isset($_POST["submitFilter"])) {
        $filterValue = $_POST["etat"];
    }

    foreach ($allDemande as $value) {
        if ($value["etudiantId"] == $idEtudiant && $allAnnee[$value["anneeId"] - 1]["etat"] == True) {
            if ($filterValue == $value["type"]) {
                $mesDemandes[] = $value;

            } elseif ($filterValue == "Susp. & Annul") {
                $mesDemandes[] = $value;
            }
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
    } /* else {
      include("../views/form.connexion.html.php");
      if (isset($_POST["Sign-in"]) && $_SERVER['REQUEST_URI'] == "/") {
          $_SESSION["login"] = $_POST["login"];
          $_SESSION["password"] = $_POST["password"];
          header("location:" . PORT . "/?action=list");
      }
      var_dump($_SERVER['REQUEST_URI']);
  } */

}
?>