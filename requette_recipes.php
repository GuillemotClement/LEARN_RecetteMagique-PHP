<?php
require_once('databaseconnect.php');
require_once('Service/myFct.php');

$queryRecipes = "SELECT name_recipe, author, order_recipe, date_creation_recipe, pic FROM recipes WHERE available = true";
$recipesStatement = $mysqlClient->prepare($queryRecipes);
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll(PDO::FETCH_ASSOC);

require_once('head.php');
require_once('header.php');
?>

<main>



        
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
</main>









<?php
require_once('footer.php');