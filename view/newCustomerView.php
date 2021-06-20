<?php 
    include "template/header.php";
?>



    <div class="container">
        <div class="row">
            <div class="text-center my-3">
                <h2 class="my-3" >Ajouter un nouvel utilisateur</h2>
                <form action="" method="POST" class="w-50 m-auto form-control ">
                    <div class="col-sm-10 col-md-8 my-2 m-auto">
                        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Prénom">
                    </div>
                    <div class="col-sm-10 col-md-8 my-2 m-auto">
                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Nom">
                    </div>
                    <div class="col-sm-10 col-md-8 my-2 m-auto">
                        <input type="text" class="form-control" name="birth_date" id="birth_date" placeholder="Date de naissance">
                    </div>
                    <div class="col-sm-10 col-md-8 my-2 m-auto">
                        <input type="text" class="form-control" name="postal_code" id="postal_code" placeholder="Code Postal">
                    </div>
                    <div class="col-sm-10 col-md-8 my-2 m-auto">
                        <input type="text" class="form-control" name="city" id="city" placeholder="Ville">
                    </div>
                    <div class="col-sm-10 col-md-8 my-2 m-auto">
                        <input type="number" class="form-control" name="phone" id="phone" placeholder="Téléphone">
                    </div>
                    <div class="col-sm-10 col-md-8 my-2 m-auto">
                        <input type="text" class="form-control" name="mail" id="mail" placeholder="Mail">
                    </div>
                    <input type="submit" class="btn btn-secondary my-2" value="Enregistrer">
                </form>  
            </div>  
        </div>
    </div>


<?php 
    include "template/footer.php";
?>