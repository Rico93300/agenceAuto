<?php

require_once(__DIR__ . "/../partials/head.php");
?>

<h1>create vehicule</h1>


<form action="" method="POST">
  <div>
    <label for="marque">Marque</label>
    <input type="text" name='marque' value="<?php echo $vehicule->getMarque() ?>">
  </div>
  <div>
    <label for="modele">Modele</label>
    <input type="text" name='modele'value="<?php echo $vehicule->getModele() ?>">
  </div>

  <div>
    <label for="annee">annee</label>
    <input type="text" name='annee'value="<?php echo $vehicule->getAnnee() ?>">
  </div>

  <button type="submit">modifier</button>
</form>
<?php
require_once(__DIR__ . "/../partials/footer.php"); ?>