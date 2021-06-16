<?php

    require "model/entity/Book.php";
    require "model/bookModel.php";
    require "model/customerModel.php";
    require "model/entity/Customer.php";


    $booksModel= new bookModel();
    $book= $booksModel->getBook($_GET["id"]);
    var_dump($book);
    

    $customerModel= new CustomerModel();

    if($book->getCustomer_id()){
    $customer= $customerModel->getCustomerById($book->getCustomer_id());
    var_dump($customer);}


    
   





    include "view/bookView.php";
?>