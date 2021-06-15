<?php
// Classe pour se connecter à la base de données
// Son usage n'est pas obligatoire, vous pouvez faire sans
require "model/connexionModel.php";

abstract class dataBase{
    protected PDO $db;

    public function __construct(){
        $this->db= Connexion::getPDOConnexion();
    }

}
?>
