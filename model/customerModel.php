<?php
  require_once "model/dataBase.php";

class customerModel extends dataBase {

  // Récupère tous les utilisateurs
  public function getCustomers() {
    $query=$this->db->prepare("SELECT * FROM customer");
    $query->execute();
    $result= $query->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as $key=>$customer){
      $result[$key] = new Customer($customer);
    }
    return $result;
  }

  // Récupère un utilisateur par son id
  public function getCustomerById(int $id) {
    $query=$this->db->prepare("SELECT * FROM customer WHERE id=:id");
    $query->execute([
      "id"=>$id
    ]);
    $result=$query->fetch(PDO::FETCH_ASSOC);
    $result= new Customer($result);
    return $result;
  }

  // Récupère un utilisateur par son code personnel
  public function getCustomer(int $id) {
    $query=$this->db->prepare(
      "SELECT c.*, b.title, b.writter, b.id AS book_id  FROM customer AS c 
      LEFT JOIN books AS b
      ON c.id=b.customer_id
      WHERE c.id=:id
      
      ");
    $query->execute([
      "id"=>$id
    ]);
    $result=$query->fetchall(PDO::FETCH_ASSOC);
    return $result;
  }


  public function addCustomer(Customer $data){
    $query=$this->db->prepare( 
      "INSERT INTO customer(firstname, lastname, birth_date, postal_code, city, phone, mail)
      VALUES (:firstname, :lastname, :birth_date, :postal_code, :city, :phone, :mail)");
      
    $query->execute([
      "firstname"=>$data->getFirstname(),
      "lastname"=>$data->getLastname(),
      "birth_date"=>$data->getBirth_date(),
      "postal_code"=>$data->getPostal_code(),
      "city"=>$data->getCity(),
      "phone"=>$data->getPhone(),
      "mail"=>$data->getMail()
    ]);
   
  }
}
