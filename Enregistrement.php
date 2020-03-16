<?php
$title = "Enregistrement";
require_once 'views/layout/header.php';
?>

<!-- CONTENU -->
<div class="container mt-4">
  <h1>Enregistrez le bolide lô !</h1>
  <form action="newcar.php" method="POST">
    <div class="form-group">
      <label for="nom">Nom cariole</label>
      <input type="text" class="form-control" id="nom" name="nom" aria-describedby="nomHelp">
      <small id="nomHelp" class="form-text text-muted">Entrez nom cariole</small>
    </div>
    <div class="form-group">
      <label for="annee_sortie">Année de sortie</label>
      <input type="text" class="form-control" id="annee_sortie" name="annee_sortie" aria-describedby="anneeHelp">
      <small id="aneeHelp" class="form-text text-muted">Entrez l'année de sortie</small>
    </div>
    <div class="form-group">
      <label for="nb_km">Nb de kilo</label>
      <input type="text" class="form-control" id="nb_km" name="nb_km" aria-describedby="nbHelp">
      <small id="nbHelp" class="form-text text-muted">Entrez le nb de kilo</small>
    </div>
    <button type="submit" class="btn btn-primary">Valider</button>
  </form>
</div>
<!-- FIN CONTENU -->

<?php require_once 'views/layout/footer.php'; ?>