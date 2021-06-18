<?php

    require "model/entity/Book.php";
    require "model/bookModel.php";
    require "model/customerModel.php";
    require "model/entity/Customer.php";


    $booksModel= new bookModel();
    $book= $booksModel->getBook($_GET["id"]);
    $customerModel= new CustomerModel();

    if($book->getCustomer_id()){
        $customer= $customerModel->getCustomerById($book->getCustomer_id());
    }
    else {
        $customer=false;
    }
    if($_POST){
        if(!empty($_POST) AND isset($_POST["delete"])){
            $booksModel->deleteBook($book);
             header ("Location:index.php");
             exit;
         }
         elseif(!empty($_POST) AND isset($_POST["loaning"])){
             $book->setLoaning_status("Indisponible");
             $booksModel->updateBookStatus($book, $_POST["account_id"]);
             header ("Location:index.php");
             exit;
         }
         elseif(!empty($_POST) AND isset($_POST["return"])){
             $book->setLoaning_status("Disponible");
             $booksModel->updateBookStatus($book, NULL);
             header ("Location:index.php");
             exit;
         }
    }
    
   

    
    

    include "view/bookView.php";
?>