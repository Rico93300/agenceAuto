<?php

require_once(__DIR__ . "/../partials/head.php");
?>

<table>
    <thead>
        <tr>
            <th>id</th>
            <th>marque</th>
            <th>modele</th>
            <th>annee</th>
        </tr>
    </thead>
    <tbody>
        <?php  foreach ($vehicules as $vehicule) {
            echo "<tr>";
            echo "<td>" . $vehicule->getId() . "</td>";
            echo "<td>" . $vehicule->getMarque() . "</td>";
            echo "<td>" . $vehicule->getModele() . "</td>";
            echo "<td>" . $vehicule->getAnnee() . "</td>";
            echo "<tr>";
        }?>
    </tbody>
</table>






<?php
require_once(__DIR__ . "/../partials/footer.php"); ?>