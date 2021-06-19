<?php

require "model/customerModel.php";
require "model/entity/Customer.php";

$customersModel= new customerModel();
$customers= $customersModel->getCustomers();

include "view/customersView.php";

?>