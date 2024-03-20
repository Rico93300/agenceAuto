<?php

namespace App\Controllers;

use App\Models\Vehicule;
use App\Utils\AbstractController;
// use Dompdf\Dompdf;

class VehiculeController extends AbstractController
{
    public function index()
    {
        $vehicules = Vehicule::getAll();
        require_once(__DIR__ . "/../Views/vehicule/index.view.php");
    }
    public function read()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $vehicule = Vehicule::getById($id);
            if (!$vehicule) {
                ErrorController::internalServerError();
            }
            require_once(__DIR__ . "/../Views/vehicule/read.view.php");
        } else {
            ErrorController::notfound();
        }
    }
    // public function generatePdf()
    // {
    //     if (isset($_GET['id'])) {
    //         $id = $_GET['id'];
    //         $vehicule = Vehicule::getById($id);
    //         if (!$vehicule) {
    //             ErrorController::internalServerError();
    //         }
    //         $dompdf =new Dompdf();
    //         $dompdf->loadHtml();
    //         $dompdf->setPaper('A4', 'landscape');
    //         $dompdf->



    //         require_once(__DIR__ . "/../Views/vehicule/read.view.php");
    //     } else {
    //         ErrorController::notfound();
    //     }
    // }
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
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $vehicule = vehicule::getById($id);
            if (!$vehicule) {
                ErrorController::internalServerError();
            }
           
           
            if (isset($_POST['marque'], $_POST['modele'], $_POST['annee'])) {
                $vehicule ->setMarque($_POST['marque']);
                $vehicule ->setModele($_POST['modele']);
                $vehicule ->setAnnee($_POST['annee']);
                $vehicule->update();
    
                $this->redirectToRoute('/vehicule');
            }
            require_once(__DIR__ . "/../Views/vehicule/update.view.php");
        } else {
            ErrorController::notfound();
        }
        
    }
    public function delete()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            if (Vehicule::getById($id)) {
                Vehicule::delete($id);

                $this->redirectToRoute('/vehicule');
            } else {
                ErrorController::internalServerError();
            }
        } else {
            ErrorController::notfound();
        }
    }
}
