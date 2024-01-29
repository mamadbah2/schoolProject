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


// En changeant '

function generateurChaine(): string
{
   $char = 'AZERTYUIOPQSDFGHJKLMWXCVBN123456789azertyuiopqsdfghjklmwxcvbn';
   $val = '';
   for ($i = 0; $i < 5; $i++) {
      $nb = rand(0, strlen($char) - 1);
      $val = $val . $char[$nb];
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

function connection(string $login, string $password): int
{
   $etudiant = getDataEtudiant();
   foreach ($etudiant as $value) {
      if ($value["login"] == $login && $value["password"] == $password) {
         return $value["id"];

      }
   }
   return 0;
}



function getDataEtudiant()
{
   $tab = jsonToArray("../repositories/db.json");
   return $tab["Etudiants"];;
}

function getDataClasse(): array
{
   $tab = jsonToArray("../repositories/db.json");
   return $tab["Classes"];
}

function getDataAnnee(): array
{
   $tab = jsonToArray("../repositories/db.json");
   return $tab["Annees"];;
}


function getDataDemande(): array
{
   $tab = jsonToArray("../repositories/db.json");
   return $tab["Demandes"];
}

function jsonToArray(string $path): array {
   $content = file_get_contents($path);
   $tabDataDemande = json_decode($content, true);
   return $tabDataDemande;
}

function putInJson(array $data, string $category)
{
   $tab = jsonToArray("../repositories/db.json");
   $tab[$category][]= $data;
   $json = json_encode($tab);
   file_put_contents("../repositories/db.json", $json);
}
// connection("mamadbah", "passer123");
?>