
<?php 
    include "view/template/header.php";
?>



<h2> Liste des livres </h2>
<?php foreach($books as $book): ?>
<p>Titre du livre : <?php echo $book->getTitle()?> </p>
<?php endforeach;?>






<?php
    include "view/template/footer.php";
?>