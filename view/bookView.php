<?php 
    include "view/template/header.php";
?>


<div class="w-75 m-auto my-3">
    <div class="card-header text-center my-3 ">
        <h2 ><?php echo $book->getTitle() ?></h2>
        <h3>Auteur : <?php echo $book->getWritter();?></h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="col card text-center py-2">
                <p>Date de parution : </br><?php echo $book->getRelease_date();?></p>
            </div>
            <div class="col card text-center mx-2 py-2">
                <p>Catégorie : </br><?php echo $book->getCategory();?></p>
            </div>
            <div class="col card text-center py-2">
                <p>Editeur : </br> <?php echo $book->getEditor();?></p>
            </div>
        </div>
    </div>
    <div class="card text-center my-3">
            <p>Résumé : </br> <?php echo $book->getBook_description();?></p>
    </div>
    <div class="row">
        <div class="col card text-center py-2 mx-3">
            <p>Disponibilité : </p>
             <?php if($book->getLoaning_status()=="Indisponible"):?>
                <p class="text-danger"><?php echo $book->getLoaning_status();?></p>
             <?php elseif($book->getLoaning_status()=="Disponible"):?>
                <p class="text-success"><?php echo $book->getLoaning_status();?></p>
             <?php endif ?>
        </div>
        <?php if($customer):?>
            <a href="user.php" class="col card text-center py-2 mx-3">
              <p>Emprunté par :  </br> <?php echo $customer->getFirstname()?> </br> <?php echo $customer->getLastname()?></p>
            </a>
        <?php endif;?>

    </div>
</div>




           

       
   
 




<?php
    include "view/template/footer.php";
?>