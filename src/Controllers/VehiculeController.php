<?php

namespace App\Controllers;

use App\Models\Vehicule;
use App\Utils\AbstractController;

class VehiculeController extends AbstractController
{
    public function index()
    {
        $vehicules = Vehicule::getAll();
        require_once(__DIR__ . "/../Views/vehicule/index.view.php");
    }
    public function read()
    {
        require_once(__DIR__ . "/../Views/vehicule/read.view.php");
    }
    public function create()
    {
        if (isset($_POST['marque'], $_POST['modele'], $_POST['annee'])) {
            $vehicule = new Vehicule(null, $_POST['marque'], $_POST['modele'], $_POST['annee']);
            $vehicule->save();

            $this->redirectToRoute('/vehicule');
        }

        require_once(__DIR__ . "/../Views/vehicule/create.view.php");
    }
    public function update()
    {
        require_once(__DIR__ . "/../Views/vehicule/update.view.php");
    }
    public function delete()
    {
    }
}
