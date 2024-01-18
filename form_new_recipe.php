<?php   
require_once('head.php');
require_once('header.php');
?>

<main class="container">
    <form action="submit_new_recipes.php" method="post" class="border shadow p-3 rounded" enctype="multipart/form-data">
        <h2 class="text-uppercase m-3">Nouvelle recette</h2>
        <div class="mb-3">
            <label for="pseudo" class="form-label text-uppercase">Pseudo :</label>
            <input type="text" class="form-control" name="pseudo" id="pseudo">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label text-uppercase">Nom recette:</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="mb-3">
            <label for="order" class="form-label text-uppercase">Consigne :</label>
            <textarea name="order" id="order" cols="20" rows="5" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="pic" class="form-label text-uppercase">Image d'illustration</label>
            <input type="file" name="pic" id="pic" class="form-control">
        </div>
        <button type="submit" class="text-uppercase btn btn-primary shadow m-3">Creer</button>
    </form>
</main>





<?php 
require_once('footer.php');


// TODO creation du formulaire pour saisie des donnes de la recette
// TODO si user ne mets pas d'iamge cela mets une de base
// TODO faire une page de visu de la recette ajouter