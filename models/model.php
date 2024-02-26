<?php 

class Bdd{

    public $connexion;

    public function __construct() {
        $dsn = "mysql:host=localhost;dbname=test";
        $username = "root";
        $password = "";
        $this->connexion = new PDO($dsn, $username, $password);
        $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "vous êtes connecté à la bdd";
    }

    function readAll(){
        $sql = "SELECT * FROM `Taches`";
        $request = $this->connexion->query($sql);
        return $request->fetchAll(PDO::FETCH_ASSOC);
    }

    function insertBdd($param1){
        $sql = "INSERT INTO `Taches`(`tache`) VALUES ('$param1')";
        $this->connexion->query($sql);
        echo "data bien ajouté à la bdd";
    }

    function suppBdd(){
        $sql = "DELETE FROM `Taches` WHERE `id`= ?";
        $this->connexion->query($sql);
        echo "data Supprimer";
    }

    }



?>