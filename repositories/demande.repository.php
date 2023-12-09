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
      if ($value["login"] == $login && $value["password"]==$password) {
         return $value["id"];
      }
   }
   return 0;
}

function getDataEtudiant(): array
{
   return [
      [
         "id" => 1,
         "matricule" => "M123",
         "nom" => "Bah",
         "prenom" => "Mamadou",
         "dateNaissance" => "21-02-2002",
         "login" => "mamadbah",
         "password" => "passer123",
         "classeId" => 1
      ],
      [
         "id" => 2,
         "matricule" => "M113",
         "nom" => "Camara",
         "prenom" => "Aly",
         "dateNaissance" => "01-05-2002",
         "login" => "alcam",
         "password" => "passal2",
         "classeId" => 2
      ],
      [
         "id" => 3,
         "matricule" => "M423",
         "nom" => "Bah",
         "prenom" => "Aissatou",
         "dateNaissance" => "28-02-2005",
         "login" => "aissba",
         "password" => "pas123#",
         "classeId" => 1
      ],
      [
         "id" => 4,
         "matricule" => "M567",
         "nom" => "Conde",
         "prenom" => "Mory",
         "dateNaissance" => "25-12-2004",
         "login" => "morcon",
         "password" => "mrConde3",
         "classeId" => 3
      ]
   ];
}

function getDataClasse(): array
{
   return [
      [
         "id" => 1,
         "niveau" => "L2",
         "filiere" => "GLRS",
         "code" => "A"
      ],
      [
         "id" => 2,
         "niveau" => "L2",
         "filiere" => "GLRS",
         "code" => "B"
      ],
      [
         "id" => 3,
         "niveau" => "L2",
         "filiere" => "ETSE",
         "code" => "A"
      ]
   ];
}

function getDataAnnee(): array
{
   return [
      [
         "id" => 1,
         "anneeScolaire" => "2021-2022",
         "etat" => False
      ],
      [
         "id" => 2,
         "anneeScolaire" => "2022-2023",
         "etat" => True,
      ]
   ];
}


function getDataDemande(): array
{
   return [
      [
         "id" => 1,
         "numero" => generateurChaine(),
         "date" => "31-03-2023",
         "etat" => "en cours",
         "type" => "suspension",
         "motif" => "probleme personnel",
         "anneeId" => 1,
         "etudiantId" => 2
      ],
      [
         "id" => 2,
         "numero" => generateurChaine(),
         "date" => "22-01-2021",
         "etat" => "en cours",
         "type" => "annulation",
         "motif" => "raisons medicales",
         "anneeId" => 2,
         "etudiantId" => 1
      ],
      [
         "id" => 3,
         "numero" => generateurChaine(),
         "date" => "09-05-2023",
         "etat" => "refuse",
         "type" => "suspension",
         "motif" => "motif social",
         "anneeId" => 2,
         "etudiantId" => 1
      ],
      [
         "id" => 4,
         "numero" => generateurChaine(),
         "date" => "31-03-2023",
         "etat" => "accepte",
         "type" => "suspension",
         "motif" => "probleme personnel",
         "anneeId" => 2,
         "etudiantId" => 3
      ],
      [
         "id" => 5,
         "numero" => generateurChaine(),
         "date" => "31-03-2023",
         "etat" => "en cours",
         "type" => "suspension",
         "motif" => "sans motif apparent",
         "anneeId" => 2,
         "etudiantId" => 4
      ]
   ];
}


?>