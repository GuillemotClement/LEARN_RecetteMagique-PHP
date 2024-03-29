<?php
require_once('databaseconnect.php');
require_once('Service/myFct.php');

$queryRecipes = "SELECT id, name_recipe, author, order_recipe, date_creation_recipe, pic FROM recipes WHERE available = true";
$recipesStatement = $mysqlClient->prepare($queryRecipes);
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll(PDO::FETCH_ASSOC);

require_once('head.php');
require_once('header.php');
?>

<main>
    <h1 class="uppercase">Nos recettes</h1>
    <div class="ctn-card ">
        <?php foreach($recipes as $recipe): ?>
            <div class="card shadow">
                <img src="<?= $recipe['pic'];?>" alt="illustration de la recette" class="card-img-top">
                <div class="card-body">
                    <h2 class="card-title"><?= $recipe['name_recipe']; ?></h2>
                    <p class="card-text"><?= $recipe['order_recipe']; ?> </p>
                    <p class="card-text italic">Proposé par <span class="bold blue"><?= $recipe['author']; ?></span></p>
                    <p class="card-text fs-6">Le <span class="bold blue"><?= $recipe['date_creation_recipe']; ?></span></p>
                    <div class="ctn_btn">
                        <a href="affichage_recipe.php?id=<?php echo $recipe['id']?>" class="btn btn-sm bg-primary shadow text-light">Afficher</a>
                        <a  href="confirm_delette.php?id=<?= $recipe['id']?>" class="btn btn-sm bg-danger shadow text-light">Supprimer</a>
                        <a href="update_recipe.php?id=<?php echo $recipe['id']?>" class="btn btn-sm bg-success shadow text-light">Update</a>
                    </div>
                    
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<?php
require_once('footer.php');