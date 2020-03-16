<?php

(empty($_POST) ||
  empty($_POST['nom']) ||
  empty($_POST['annee_sortie']) ||
  empty($_POST['nb_km'])) && exit("Requête invalide");

require_once 'function/vehicule.php';
$title = "Contact";
require_once 'views/layout/header.php';

?>
<div class="container mt-4">
  <?php if (insertcar($_POST['nom'], $_POST['annee_sortie'], $_POST['nb_km'])) { ?>

  <?php } else { ?>
    <div class="alert alert-danger" role="alert">
      <h2>
        Une erreur est survenue lors de l'enregistrement de votre demande
      </h2>
    </div>
  <?php } ?>
</div>

<?php require_once 'views/layout/footer.php'; ?>