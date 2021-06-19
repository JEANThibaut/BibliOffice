<?php 
    include "view/template/header.php";
?>

    <h1 class="text-center my-5"><?php echo $customerAccount->getFirstName()?> <?php echo $customerAccount->getLastName()?></h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <p>Date de naissance: <?php echo $customerAccount->getBirth_date() ?></p>
                <p>Adresse mail: <?php echo $customerAccount->getMail() ?></p>
                <p>Numéro de téléphone: 0<?php echo $customerAccount->getPhone() ?></p>
                <p>Adresse: <?php echo $customerAccount->getPostal_code() ?> <?php echo $customerAccount->getCity() ?></p>
            </div>
            <?php foreach($customers as $customer):?>
                <div class="col text-center">
                    <h4><?php echo $customer["title"] ;?></h4>
                    <h5><?php echo $customer["writter"];?></h5>
                    <a class="btn btn-secondary my-2 m-auto w-50" href="book.php?id=<?php echo $customer["book_id"]?>" >Voir le livre</a>
                </div>
            <?php endforeach;?>
        </div>
    </div>


<?php
    include "view/template/footer.php";
?>