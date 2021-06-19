<?php
    require "model/entity/Book.php";
    require "model/bookModel.php";
    require "model/customerModel.php";
    require "model/entity/Customer.php";

   

    $bookModel= new bookModel();
    $customersModel= new customerModel();
    $customers =$customersModel->getCustomer($_GET["id"]);
    
    $customerAccount= new Customer($customers[0]);

    
    

include "view/customerView.php";

?>
