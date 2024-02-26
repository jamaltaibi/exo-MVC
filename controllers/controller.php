<?php
require_once "models/model.php";


class controller{

    function index(){
        require_once "views/header.php";
        require_once "views/base.php";
    }

    function affichageTaches(){
        require_once 'views/tabaffichage.php';
    }
    function soumettreTache(){
        require "views/tabtache.php";
    }

    function addApprenants(){
        $conn = new Bdd;
        $conn->insertBdd($_POST['tache']);
    }
    function suppBdd(){
        $conn = new Bdd;
        $conn->suppBdd();
    }

}



?>
