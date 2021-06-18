
<?php 
    include "view/template/header.php";
?>


  <div class ="text-center">
    <h2> Liste des livres </h2>
    <table class="table w-75 mx-auto my-3">
      <thead>
        <th>Numéro</th>
          <td>Titres</td>
          <td>Auteur</td>
          <td>Date de parution</td>
          <td>Disponibilité</td>
          <td>Détails</td>
      </thead>
      <tbody>
      <?php foreach($books as $book): ?>
        <tr>
          <th><?php echo $book->getId() ?></th>
          <td class="table-active"><?php echo $book->getTitle() ?></td>
          <td><?php echo $book->getWritter() ?></td>
          <td  class="table-active"><?php echo $book->getRelease_date() ?></td>
          <td><?php echo $book->getLoaning_status() ?></td>
          <td><a class="btn btn-secondary" href="book.php?id=<?php echo $book->getId()?>" >Voir le livre</a>
        </tr>
        <?php endforeach;?>
      </tbody>
    </table>
  </div>




<?php
    include "view/template/footer.php";
?>