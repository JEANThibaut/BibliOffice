<?php
// Controlleur qui gérer l'affichage de tous les livres
    
    require "model/entity/book.php";
    require "model/bookModel.php";

    $bookModel = new bookModel();
    $books = $bookModel->getBooks();

    require "view/indexView.php";

?>