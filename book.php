<?php

    require "model/entity/Book.php";
    require "model/bookModel.php";

    $booksModel= new bookModel();
    $book= $booksModel->getBook($_GET["id"]);
    
    require "view/bookView.php";
?>