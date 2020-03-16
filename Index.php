<?php
$title = "Accueil";
require_once 'views/layout/header.php';
require_once 'function/db.php';
$voiture = getProducts();
?>

<div class="jumbotron">
  <h1 class="display-4">Si si ca vend de la belle caisse</h1>
  <hr class="my-4">
</div>

<form method="post" action="recherche.php">
    <input type="text" name="keywords">
    <input type="submit" value="Rechercher">
</form>

<?php
require_once __DIR__ . "/function/db.php";

function getProducts(): array
{
  $pdo = getPdo();

  $stmt = $pdo->query("SELECT * FROM voiture WHERE visible=1");
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<div class="container mt-4">
  <div class="row">
    <?php
    foreach ($voiture as $voiture) {
      require 'views/product/voiture.php';
    }
    ?>
  </div>
</div>

<?php require_once 'views/layout/footer.php'; ?>