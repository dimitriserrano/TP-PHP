<?php

require_once __DIR__ . '/db.php';

function insertcar(
  $nom,
  int $annee,
  int $nbkm
) {
  $pdo = getPdo();

  $query = "INSERT INTO voiture (nom, annee_sortie, nb_km) VALUES (:nom, :annee, :nbkm)";

  $stmt = $pdo->prepare($query);

  // On retourne le résultat d'execute car en cas de succès elle retourne TRUE, sinon en cas d'échec elle retourne FALSE
  return $stmt->execute([
    'nom' => $nom,
    'annee' => $annee,
    'nbkm' => $nbkm
  ]);
}
