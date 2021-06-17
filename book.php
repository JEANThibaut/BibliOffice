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


    
   





    include "view/bookView.php";
?>