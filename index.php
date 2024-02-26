<?php
require_once "controllers/controller.php";

$controller = new Controller;

$controller->index();

if (isset($_GET['page']) && $_GET['page'] == "accueil"){
    $controller->affichageTaches();
}
if (isset($_GET['page']) && $_GET['page'] == "tache"){
    $controller->soumettreTache();
}

if (isset($_POST['submit'])){
    $controller->addApprenants();
}
if (isset($_POST['supp'])){
    $controller->suppBdd();
}

?>