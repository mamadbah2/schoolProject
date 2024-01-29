<?php
session_start();
define("PORT", "http://localhost:8000");
require_once("../repositories/demande.repository.php");


if (isset($_GET["logout"])) {
    unset($_SESSION["password"]);
    unset($_SESSION["login"]);
    unset($_SESSION["role"]);
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
            $_SESSION["role"] = getDataEtudiant()[connection($_POST["login"], $_POST["password"]) - 1]["role"];
        }

        header("location:" . PORT . "/?action=list");
        exit();
    }
}



if ($_SESSION["role"] == "etudiant") {
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

} else if ($_SESSION["role"] == "rp") {
    if ($_GET["action"] == "list") {
        require_once("../views/home.rp.html.php");
    }
    if (isset($_GET["action"])) {
        if ($_GET["action"] == "classe") {
            if (isset($_POST["add_classe"])) {
                $class = [
                    "id" => getLastId("Classes"),
                    "niveau" => $_POST["niveau"],
                    "filiere" => $_POST["filiere"],
                    "code" => $_POST["code"],
                ];
                putInJson($class, "Classes");
            }

            $mesClasses = getDataClasse();
            require_once("../views/list.rp.classe.html.php");
        } else if ($_GET["action"] == "professeur") {
            // var_dump($_POST);
            if (isset($_POST["add_professeur"])) {
                $prof = [
                    "id" => getLastId("Professeurs"),
                    "nom" => $_POST["nom"],
                    "grade" => $_POST["grade"],
                    "classeId" => [],
                    "moduleId" => []
                ];
                putInJson($prof, "Professeurs");
            }
            $Professeurs = getDataProfesseur();
            require_once("../views/list.rp.professeur.html.php");


        } else if ($_GET["action"] == "module") {
            $modulProf = getDataModule();
            require_once("../views/list.rp.module.html.php");



        } else if ($_GET["action"] == "traiterDem") {
            if (isset($_GET["accepter"])) {
                $idDem = intval($_GET["accepter"]);
                putInJsonSousCategoryStr("accepter", "Demandes", "etat", $idDem - 1);
            } elseif (isset($_GET["refuser"])) {
                $idDem = intval($_GET["refuser"]);
                putInJsonSousCategoryStr("refuser", "Demandes", "etat", $idDem - 1);
            }
            $Etudiants = getDataEtudiant();
            $Demandes = getDataDemande();
            require_once("../views/list.rp.demande.html.php");

        }
    }

    if (isset($_GET["idDem"])) {
        // $idEtudiant = connection($_SESSION["login"], $_SESSION["password"]);
        $idDem = intval($_GET["idDem"]);
        $allDemande = getDataDemande();
        $etudiant = getDataEtudiant()[$allDemande[$idDem - 1]["etudiantId"] - 1];
        include("../views/detail.rp.demande.html.php");
    }

    if (isset($_GET["Detail"])) {
        if (isset($_POST["affecter_classe"])) {
            $classId = intval($_POST["classe"]);
            $id = intval($_POST["id"]);
            putInJsonSousCategory($classId, "Professeurs", "classeId", $id - 1);
        }
        if (isset($_POST["affecter_module"])) {
            $modulId = intval($_POST["module"]);
            $id = intval($_POST["id"]);
            putInJsonSousCategory($modulId, "Professeurs", "moduleId", $id - 1);
        }
        $classProf = getClasseProfesseur($_GET["Detail"]);
        $modulProf = getModuleProfesseur($_GET["Detail"]);
        require_once("../views/detail.rp.professeur.html.php");
    }

    if (isset($_GET["nouveau"])) {
        if ($_GET["nouveau"] == "classe") {
            require_once("../views/form.rp.classe.html.php");
        }
        if ($_GET["nouveau"] == "professeur") {
            require_once("../views/form.rp.professeur.html.php");
        }
    }

    if (isset($_GET["affecter"])) {
        if ($_GET["affecter"] == "classe") {
            $Professeurs = getDataProfesseur();
            $classes = getDataClasse();
            require_once("../views/form.rp.affecter.class.html.php");
        }
        if ($_GET["affecter"] == "module") {
            $Professeurs = getDataProfesseur();
            $modules = getDataModule();
            require_once("../views/form.rp.affecter.modul.html.php");
        }
    }



} else if ($_SESSION["role"] == "ac") {
    $idEtudiant = connection($_SESSION["login"], $_SESSION["password"]);
    // session_destroy();
    $etudiant = getDataEtudiant()[$idEtudiant - 1];
    $classe = getDataClasse()[$etudiant["classeId"] - 1];
    $Demandes = getDataDemande();
    $formDemandes = getDataDemande();
    $Etudiants = getDataEtudiant();
    if (isset($_POST["submitSearch"])) {
        if ($_POST["matriculeId"] != "all") {
            $idMatricule = intval($_POST["matriculeId"]);
            $Demandes = [getDataDemande()[$idMatricule - 1]];
        } else {
            $Demandes = getDataDemande();
        }
        
    }

    if ($_GET["action"] == "list") {
        require_once("../views/list.ac.html.php");
    }
}

