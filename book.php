<?php

    require "model/entity/Book.php";
    require "model/bookModel.php";
    require "model/customerModel.php";
    require "model/entity/Customer.php";


    $booksModel= new bookModel();
    $book= $booksModel->getBook($_GET["id"]);
    var_dump($book);
    var_dump($_POST);

    $customerModel= new CustomerModel();

    if($book->getCustomer_id()){
        $customer= $customerModel->getCustomerById($book->getCustomer_id());
    }
    else {
        $customer=false;
    }

    if(!empty($_POST["delete"])){
       $deleteBook=$booksModel->deleteBook($book);
        header ("Location:index.php");
    }
    
   





    include "view/bookView.php";
?>