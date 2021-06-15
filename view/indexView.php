
<?php 
    include "view/template/header.php";
?>



<h2> Liste des livres </h2>


<table class="table table-dark text-center">
  <thead>
    <th>Id</th>
      <td>Titres</td>
      <td>Auteur</td>
      <td>Date de parussion</td>
      <td>Disponibilité</td>
  </thead>
  <tbody>
  <?php foreach($books as $book): ?>
    <tr>
      <th><?php echo $book->getId() ?></th>
      <td class="table-active"><?php echo $book->getTitle() ?></td>
      <td><?php echo $book->getWritter() ?></td>
      <td  class="table-active"><?php echo $book->getRelease_date() ?></td>
      <td><?php echo $book->getLoaning_status() ?></td>
      <td><a class="btn btn-danger" href="book.php?id=<?php echo $book->getId()?>" >Voir le livre</a>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>





<?php
    include "view/template/footer.php";
?>