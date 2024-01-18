<?php 
require_once('variable.php');
require_once('function.php');
require_once('head.php');
require_once('header.php');
?>

    <main>
        <a href="form_new_recipe.php" class="btn btn-md btn-primary shadow text-uppercase">Nouvelle recette</a>
        <h1 class="uppercase">Nos recettes</h1>
        <div class="ctn-card">
            <?php foreach(getRecipe($recipes) as $recipe): ?>
                <div class="card">
                    <img src="<?= $recipe['pic'];?>" alt="illustration de la recette" class="card-img-top">
                    <div class="card-body">
                        <h2 class="card-title"><?= $recipe['name']; ?></h2>
                        <p class="card-text"><?= $recipe['order']; ?> </p>
                        <p class="card-text italic">Proposé par <span class="bold blue"><?= $recipe['author']; ?></span></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    
    <?php require_once('footer.php');?>
    
