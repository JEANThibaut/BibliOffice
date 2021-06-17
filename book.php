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
       $booksModel->deleteBook($book);
        header ("Location:index.php");
    }
    if(!empty($_POST["loaning"])){
        $book->setLoaning_status("Indisponible");
        $booksModel->updateBookStatus($book, $_POST["account_id"]);
        header ("Location:index.php");
    }
    

    include "view/bookView.php";
?>