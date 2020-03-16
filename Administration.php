<?php
$title = "administration";
require_once 'views/layout/header.php';
?>

<div class="container mt-4">
 <h1>Liste des machines</h1>
 <form method='POST' action='Administration.php'>
<input type="checkbox" name="visible" value="visible"> Visible<br>
<input type="checkbox" name="nonvisible" value="nonvisible"> Non visible<br>
<input type="submit" name="exple2" value="Mettre à jour">
</form>
</div>


<?php require_once 'views/layout/footer.php'; ?>