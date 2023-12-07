<?php
//definir un tableau de 5  demandes
//une demande est caracterise
//numero, chaine genere aleatoirement
//date 
//Etat(Encours,Accepte,Refuse)
//Type (Suspension ou Annulation)
//motif
//etudiant (matricule,nom,prenom,
//dateNaiss(Date php),
//classe(filiere,niveau,code))

// fonction qui retourne le tableau de demande
// fonction qui retourne le tableau de demande par type
// fonction qui retourne le tableau de demande par etat


function generateurChaine(): string
{
   $char = 'AZERTYUIOPQSDFGHJKLMWXCVBN123456789azertyuiopqsdfghjklmwxcvbn';
   $val = '';
   for ($i = 0; $i < 5; $i++) {
      $nb = rand(0, strlen($char) - 1);
      $val += $char[$nb];
   }
   return $val;
}

function doublonData(array $table, $data): bool
{
   for ($i = 0; $i < count($table); $i++) {
      if ($table[$i] == $data) {
         return true;
      }
   }
   return false;
}


function giveDataDemande($type = "", $etat = ""): array
{
   $demande = [
      [
         "numero" => generateurChaine(),
         "date" => "31-03-2023",
         "etat" => "en cours",
         "type" => "suspension",
         "motif" => "probleme personnel",
         "etudiant" => [
            "matricule" => "M123",
            "nom" => "Bah",
            "prenom" => "Mamadou",
            "dateNaissance" => "21-02-2002",
            "classe" => [
               "niveau" => "L2",
               "filiere" => "GLRS",
               "code" => "A"
            ]
         ]
      ],
      [
         "numero" => generateurChaine(),
         "date" => "22-01-2023",
         "etat" => "en cours",
         "type" => "annulation",
         "motif" => "raisons medicales",
         "etudiant" => [
            "matricule" => "M113",
            "nom" => "Camara",
            "prenom" => "Aly",
            "dateNaissance" => "01-05-2002",
            "classe" => [
               "niveau" => "L2",
               "filiere" => "IAGE",
               "code" => "B"
            ]
         ]
      ],
      [
         "numero" => generateurChaine(),
         "date" => "09-05-2023",
         "etat" => "refuse",
         "type" => "suspension",
         "motif" => "motif social",
         "etudiant" => [
            "matricule" => "M423",
            "nom" => "Bah",
            "prenom" => "Aissatou",
            "dateNaissance" => "28-02-2005",
            "classe" => [
               "niveau" => "L2",
               "filiere" => "MAIE",
               "code" => "D"
            ]
         ]
      ],
      [
         "numero" => generateurChaine(),
         "date" => "31-03-2023",
         "etat" => "accepte",
         "type" => "suspension",
         "motif" => "probleme personnel",
         "etudiant" => [
            "matricule" => "M903",
            "nom" => "Gueye",
            "prenom" => "Moustapha",
            "dateNaissance" => "08-10-2005",
            "classe" => [
               "niveau" => "L1",
               "filiere" => "GLRS",
               "code" => "B"
            ]
         ]
      ],
      [
         "numero" => generateurChaine(),
         "date" => "31-03-2023",
         "etat" => "en cours",
         "type" => "suspension",
         "motif" => "sans motif apparent",
         "etudiant" => [
            "matricule" => "M567",
            "nom" => "Conde",
            "prenom" => "Mory",
            "dateNaissance" => "25-12-2004",
            "classe" => [
               "niveau" => "L2",
               "filiere" => "ETSE",
               "code" => "B"
            ]
         ]
      ]
   ];
   $tabFiltered = [];
   for ($i = 0; $i < count($demande); $i++) {
      if ($type == $demande[$i]["type"] && !doublonData($demande, $demande[$i])) {
         $tabFiltered[] = $demande[$i];
      }
   }
   for ($i = 0; $i < count($demande); $i++) {
      if ($etat== $demande[$i]["etat"] && !doublonData($demande, $demande[$i])) {
         $tabFiltered[] = $demande[$i];
      }
   }
   return $tabFiltered;
}

?>