<?php 
    require "model/customerModel.php";
    require "model/entity/Customer.php";

 if(!empty($_POST)){
     $newCustomerModel= new customerModel();
     $newCustomer = new Customer($_POST);
     var_dump($newCustomerModel);
     $newCustomerModel->addCustomer($newCustomer);
     
 }
 

    include "view/newCustomerView.php";
?>