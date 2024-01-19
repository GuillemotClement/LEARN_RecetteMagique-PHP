<?php
require_once('databaseconnect.php');
require_once('Service/myFct.php');
$postData = $_POST;

$currentDateTime = date('Y-m-d H:i:s');
$queryRecipe = "INSERT INTO recipes (name_recipe, author, order_recipe, date_creation_recipe, available) VALUES (:name_recipe, :author, :order_recipe, :date_creation_recipe, :available)";

$recipeStatement = $mysqlClient->prepare($queryRecipe);
$recipeStatement->execute([
    'name_recipe'=>$postData['name'],
    'author'=>$postData['pseudo'],
    'order_recipe'=>$postData['order'],
    'date_creation_recipe'=>$currentDateTime,
    'available'=>true
    ]);
// ])

// reauette affichage liste recette
$queryListRecipe = "SELECT * FROM recipes";
$recipeList = $mysqlClient->prepare($queryListRecipe);
$recipeList->execute();
$recipes = $recipeList->fetchAll(PDO::FETCH_ASSOC);

require_once('head.php');
require_once('header.php');
?>

<main>
    <h1 class="text-center text-uppercase">liste recette</h1>
    <table class="border shadow m-auto col-11">
        <thead class="bg-dark text-light">
            <tr>
                <th class="text-uppercase text-center border col-1">id</th>
                <th class="text-uppercase text-center border col-1">nom</th>
                <th class="text-uppercase text-center border col-2">pseudo</th>
                <th class="text-uppercase text-center borde col-1">consigne</th>
                <th class="text-uppercase text-center border col-1">date creation</th>
                <th class="text-uppercase text-center border col-1">dispo</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($recipes as $recipe):?>
            <tr>
                <td class="text-center border"><?=$recipe['id'];?></td>
                <td class="text-center border"><?=$recipe['name_recipe'];?></td>
                <td class="text-center border"><?=$recipe['author'];?></td>
                <td class="text-center border"><?=$recipe['order_recipe'];?></td>
                <td class="text-center border"><?=$recipe['date_creation_recipe'];?></td>
                <td class="text-center border"><?=$recipe['available'];?></td>
                <td>
                    <a href="" class="btn">Afficher</a>
                    <a href="" class="btn">Supprimer</a>
                    <a href="" class="btn">Update</a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</main>

<?php 
require_once('footer.php');





