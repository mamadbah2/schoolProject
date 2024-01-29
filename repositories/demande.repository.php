<?php
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



function getDataEtudiant(): array
{
   $tab = jsonToArray("../repositories/db.json");
   return $tab["Etudiants"];
   ;
}

function getDataClasse(): array
{
   $tab = jsonToArray("../repositories/db.json");
   return $tab["Classes"];
}

function getDataModule(): array
{
   $tab = jsonToArray("../repositories/db.json");
   return $tab["Modules"];
}

function getDataAnnee(): array
{
   $tab = jsonToArray("../repositories/db.json");
   return $tab["Annees"];
   ;
}


function getDataDemande(): array
{
   $tab = jsonToArray("../repositories/db.json");
   return $tab["Demandes"];
}

function getDataProfesseur(): array
{
   $tab = jsonToArray("../repositories/db.json");
   return $tab["Professeurs"];
}

function getClasseProfesseur(int $id): array
{
   $tabClasse = getDataProfesseur()[$id - 1]["classeId"];
   // var_dump($tabClasse);
   $tabStr = nameClasse($tabClasse);
   return $tabStr;
}

function getModuleProfesseur(int $id): array
{
   $tabModule = getDataProfesseur()[$id - 1]["moduleId"];
   $tabStr = nameModule($tabModule);
   // var_dump($tabStr);
   return $tabStr;
}

function jsonToArray(string $path): array
{
   $content = file_get_contents($path);
   $tabDataDemande = json_decode($content, true);
   return $tabDataDemande;
}

function putInJson(array $data, string $category)
{
   $tab = jsonToArray("../repositories/db.json");
   $tab[$category][] = $data;
   $json = json_encode($tab);
   file_put_contents("../repositories/db.json", $json);
}

function putInJsonSousCategory(int $data, string $category, string $sousCategory, int $id)
{
   $tab = jsonToArray("../repositories/db.json");
   $tab[$category][$id][$sousCategory][] = $data;
   $json = json_encode($tab);
   file_put_contents("../repositories/db.json", $json);
}

function putInJsonSousCategoryStr(string $data, string $category, string $sousCategory, int $id)
{
   $tab = jsonToArray("../repositories/db.json");
   $tab[$category][$id][$sousCategory] = $data;
   $json = json_encode($tab);
   file_put_contents("../repositories/db.json", $json);
}

function getLastId(string $category): int
{
   $tab = jsonToArray("../repositories/db.json");
   return count($tab[$category]);
}

function getLastIdSousCategory(string $category, int $id, string $sousCategory): int
{
   $tab = jsonToArray("../repositories/db.json");
   return count($tab[$category][$id][$sousCategory]);
}

function nameClasse(array $ids): array
{
   $classes = getDataClasse();
   $nameClass = [];
   foreach ($ids as $id) {
      foreach ($classes as $classe) {
         if ($classe["id"] == $id) {
            $nameClass[] = $classe["niveau"] . " " . $classe["filiere"] . " " . $classe["code"] . ", ";
         }
      }
   }
   return $nameClass;
}



function professeurDuModule(int $idModule): array
{
   $profDuMod = [];
   $Professeurs = getDataProfesseur();
   foreach ($Professeurs as $prof) {
      foreach ($prof["moduleId"] as $mp) {
         if ($mp == $idModule) {
            $profDuMod[] = $prof["nom"];
         }
      }

   }
   return $profDuMod;
}

function nameModule(array $ids): array
{
   $modules = getDataModule();
   $nameModule = [];
   foreach ($ids as $id) {
      foreach ($modules as $mod) {
         if ($mod["id"] == $id) {
            $nameModule[] = $mod["nom"];
         }
      }
   }

   return $nameModule;
}

?>