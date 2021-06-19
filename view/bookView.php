<?php 
    include "view/template/header.php";
?>


<div class="w-75 m-auto ">
    <div class="card-header text-center my-3 ">
        <h2 ><?php echo $book->getTitle() ?></h2>
        <h3><?php echo $book->getWritter();?></h3>
    </div>
    <div class="container m-auto">
        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4 card text-center">
                <h4>Date de parution :</h4>
                 <?php echo $book->getRelease_date();?>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 card text-center">
                <h4>Catégorie :</h4>
                <?php echo $book->getCategory();?>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 card text-center">
                <h4>Editeur : </h4>
                 <?php echo $book->getEditor();?>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12 card text-center my-3">
            <h4>Résumé :</h4>
            <p class="mx-3"><?php echo $book->getBook_description();?></p>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 card text-center ">
            <h4>Disponibilité : </h4>
             <?php if($book->getLoaning_status()=="Indisponible"):?>
                <p class="text-danger"><?php echo $book->getLoaning_status();?></p>
             <?php elseif($book->getLoaning_status()=="Disponible"):?>
                <p class="text-success"><?php echo $book->getLoaning_status();?></p>
             <?php endif ?>
        </div>
        <?php if($customer):?>
            <div class="col-sm-12 col-md-6 col-lg-6 card text-center py-2"> 
                <h4>Emprunté par :  </h4> 
                <p><?php echo $customer->getFirstname()?> <?php echo $customer->getLastname()?></p>
                <form action="" method="POST">
                    <a class="btn btn-secondary" href="customer.php?id=<?php echo $customer->getId()?>">Voir l'utilisateur</a>
                    <input type="submit" name="return" value= "Rendre le livre" class="btn btn-secondary w-50 my-2  mx-5 "/>
                </form>
            </div>
        <?php else:?>
            <div class="col-sm-12 col-md-6 col-lg-6 card text-center ">
                <form action="" method= "POST">
                    <div>
                        <div>
                            <label for="account_id" class="form-label my-2">Séléctionner l'utilisateur</label>
                        </div>
                        <input type="text" name="account_id" id="account_id" class="my-2">
                        <input type="submit" name ="loaning" value="Attribuer le livre" class="btn btn-secondary my-2  mx-5 "/>
                        <input type="submit" name ="delete" value="Supprimer le livre" class="btn btn-danger my-2 mx-5 "/>
                    </div>
                </form>
            </div>
        <?php endif;?>
    </div>
</div>




           

       
   
 




<?php
    include "view/template/footer.php";
?>