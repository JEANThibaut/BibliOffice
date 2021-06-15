<?php

require "model/dataBase.php";

class bookModel extends dataBase{

  // Récupère tous les livres
  public function getBooks() {
    $query= $this->db->prepare("SELECT * FROM books");
    $query->execute();
    $books=$query->fetchAll(PDO::FETCH_ASSOC);
    foreach ($books as $key=>$book){
      $books[$key]= new Book($book);
    }
    return $books;
  }

  // Récupère un livre
  public function getBook(int $id) {
    $query= $this->db->prepare("SELECT * FROM books WHERE id=:id");
    $query->execute([
      "id"=>$id
    ]);
    $result= $query->fetch(PDO::FETCH_ASSOC);
    return $result;
  }
   

  // Ajoute un nouveau livre
  public function addBook() {

  }

  // Met à jour le statut d'un livre emprunté
  public function updateBookStatus() {

  }

}
?>
