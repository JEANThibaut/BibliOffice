<?php

require_once "model/dataBase.php";
// require "model/entity/Customer.php";

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
    $query= $this->db->prepare(
      "SELECT b.* FROM books AS b
      WHERE b.id=:id");
    $query->execute([
      "id"=>$id
    ]);
    $result= $query->fetch(PDO::FETCH_ASSOC);
    $result= new Book($result);
    return $result;
  }
   

  // Ajoute un nouveau livre
  public function addBook() {

  }

  public function deleteBook(Book $data){
    $query=$this->db->prepare(
      "DELETE FROM books WHERE id=:id");
    $query->execute([
      "id"=> $data->getId()
    ]);
  }

  // Met à jour le statut d'un livre emprunté
  public function updateBookStatus() {

  }

}
?>
