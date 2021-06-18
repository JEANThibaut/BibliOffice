<?php

require_once "model/dataBase.php";
// require "model/entity/Customer.php";

class bookModel extends dataBase{

  // Récupère tous les livres
  public function getBooks() {
    $query= $this->db->query("SELECT * FROM books");
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
   

  //Ajoute un nouveau livre
  public function addBook(Book $data) {
    $query=$this->db->prepare(
      "INSERT INTO books (title, writter, release_date, category, book_description, editor, loaning_status)
      VALUES (:title, :writter, :release_date, :category, :book_descrition, :editor, 'Disponible')");
    $result=$query->execute([

      "title"=>$data->getTitle(),
      "writter"=>$data->getWritter(),
      "release_date"=>$data->getRelease_date(),
      "category"=>$data->getCategory(),
      "book_description"=>$data->getBook_description(),
      "editor"=>$data->getEditor()
    ]);
  }

  public function deleteBook(Book $data){
    $query=$this->db->prepare(
      "DELETE FROM books WHERE id=:id");
    $query->execute([
      "id"=> $data->getId()
    ]);
  }

  // Met à jour le statut d'un livre emprunté
  public function updateBookStatus(Book $data, ?int $id) {
    $query=$this->db->prepare(
      "UPDATE books SET loaning_status=:loaning_status, loaning_date=NOW(), customer_id=:customer_id  WHERE id=:id"
    );
    $query->execute([
      "id"=>$data->getId(),
      "loaning_status" => $data->getLoaning_status(),
      "customer_id" => $id
      
    ]);
  }

}
?>
