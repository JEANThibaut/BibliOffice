<?php 
    include "view/template/header.php";
?>


<div class="w-75 m-auto my-3">
    <div class="card-header text-center my-3 ">
        <h2 ><?php echo $book->getTitle() ?></h2>
        <h3><?php echo $book->getWritter();?></h3>
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
        <div class="col card text-center py-2 mx-2 ">
            <p>Disponibilité : </p>
             <?php if($book->getLoaning_status()=="Indisponible"):?>
                <p class="text-danger"><?php echo $book->getLoaning_status();?></p>
             <?php elseif($book->getLoaning_status()=="Disponible"):?>
                <p class="text-success"><?php echo $book->getLoaning_status();?></p>
             <?php endif ?>
        </div>
        <?php if($customer):?>
            <a href="customer.php" class="col card text-center py-2 mx-3">
              <p>Emprunté par :  </br> <?php echo $customer->getFirstname()?> </br> <?php echo $customer->getLastname()?></p>
            </a>
        <?php else:?>
        <form action="" method= "POST">
            <div class="col card text-center my-3">
                <div>
                    <input type="submit" name ="delete" value="Supprimer le livre" class="btn btn-danger w-25 mx-5 my-3 "/>
                </div>
                <div>
                    <label for="account_id" class="form-label">Selectionner l'utilisateur</label>
                    <input type="text" name="account_id" id="account_id">
                    <input type="submit" name ="loaning" value="Attribuer le livre" class="btn btn-dark  w-25 mx-5 my-3 "/>
                </div>
            </div>
        </form>

        <?php endif;?>

    </div>
</div>




           

       
   
 




<?php
    include "view/template/footer.php";
?>