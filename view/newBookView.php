<?php 
    include "view/template/header.php";
?>

<h1>Ajouter un nouveau livre</h1>
    <div class="form-control w-50 m-auto text-center">
        <form action="" method="POST">
            <label for="title" class="form-label">Titre: </label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Entrer le titre ici" required/>
            <label for="writter" class="form-label">Auteur: </label>
                <input type="text" name="writter" id="writter" class="form-control" placeholder="Entrer l'auteur ici" required/>
            <label for="release_date" class="form-label">Date de parution: </label>
                <input type="text" name="release_date" id="release_date" class="form-control" placeholder="Entrer la date de parution ici" required/> 
            <label for="category" class="form-label">Categorie: </label>
                <input type="text" name="category" id="category" class="form-control" placeholder="Entrer la catégorie ici" required/>  
            <label for="book_description" class="form-label">Description: </label>
                <input type="text" name="book_description" id="book_description" class="form-control" placeholder="Entrer la description ici" required/> 
            <label for="editor" class="form-label">Editeur: </label>
                <input type="text" name="editor" id="editor" class="form-control" placeholder="Entrer l'éditeur' ici" required/>  
            <input type="submit" value="Enregistrer le livre" class="btn btn-secondary my-2"/>
        </form>
    </div>

<?php
    include "view/template/footer.php";
?>