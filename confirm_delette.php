<?php
require_once('databaseconnect.php');
require_once('Service/myFct.php');
$sqlQuery = 'SELECT * FROM recipes WHERE id = :id';

$recipeStatement = $mysqlClient->prepare($sqlQuery);
$recipeStatement->execute(
  ['id'=>$_GET['id']]
);
$recipe = $recipeStatement->fetch(PDO::FETCH_ASSOC);
// printr($recipe);die;
require_once('head.php');
require_once('header.php');
require_once('Service/myFct.php');

// printr($recipe);die;
?>

<div class="container">
    <form action="delete_recipe.php" method="post">
    <div>
        <label for="id">ID</label>
        <input type="text" name="id" id="id" value="<?= $recipe['id']?>">
    </div>
    <div>
        <label for="name">Name</label>
        <input name="name" value="<?= $recipe['name_recipe']?>" id="name">
    </div>
    <input type="submit" value="Supprimer">
    </form>
</div>