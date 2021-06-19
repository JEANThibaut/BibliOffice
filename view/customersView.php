<?php 
    include "view/template/header.php";
?>

    <h1 class="text-center my-3">Listes des utilisateurs</h1>
    <table class="table w-75 mx-auto my-3 text-center">
      <thead>
        <th>Numéro</th>
          <td>Prénom</td>
          <td>Nom</td>
          <td>Date de naissance</td>
          <td>Détails</td>
      </thead>
      <tbody>
      <?php foreach($customers as $customer):?>
        <tr>
          <th><?php echo $customer->getId();?></th>
          <td class="table-active"><?php echo $customer->getFirstname();?></td>
          <td><?php echo $customer->getLastName();?></td>
          <td class="table-active w-25"><?php echo $customer->getBirth_date();?></td>
          <td><a class="btn btn-secondary" href="customer.php?id=<?php echo $customer->getId()?>">Voir l'utilisateur</a>
        </tr>
        <?php endforeach;?>
      </tbody>
    </table>
<?php
    include "view/template/footer.php";
?>