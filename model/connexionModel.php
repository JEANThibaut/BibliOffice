<?php

abstract class Connexion {
  const HOST = "localhost";
  const DB = "biblioffice_php";
  const USER = "BibliOffice";
  const PASSWORD = "MdPadmin";
  private static ?PDO $db = null;

  public static function getPDOConnexion() {
    try {
      // Make a factory to create a single instance of PDO (see singleton pattern)
      // We need to always get the same instance of PDO for the transactions (lock issue)
      if(!self::$db) {
        $db = new PDO("mysql:host=" . self::HOST . ";dbname=" . self::DB, self::USER, self::PASSWORD);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$db = $db;
      }
      return self::$db;
    } 
    catch (\Exception $e) {
      echo "Erreur lors de la connexion à la base de donée: " . $e->getMessage() . "<br/>";
      die();
    }
  }

}
?>