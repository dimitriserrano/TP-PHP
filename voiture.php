<?php
$title = "voiture";
require_once 'views/layout/header.php';
require_once 'functions/voiture.php';

$voiture = getProducts();
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