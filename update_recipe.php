<?php

require_once('databaseconnect.php');
require_once('Service/myFct.php');
$sqlQuery = 'SELECT * FROM recipes WHERE id = :id';

$recipeStatement = $mysqlClient->prepare($sqlQuery);
$recipeStatement->execute(
  ['id'=>$_GET['id']]
);
$recipe = $recipeStatement->fetch(PDO::FETCH_ASSOC);

require_once('head.php');
require_once('header.php');
// printr($recipe);die;
?>
<div class="container col-10">
  <form action="update-recipe-post.php" method="post" class="m-5">
      <h1 class="text-uppercase text-center">Information recette</h1>
      <div class="mb-3">
          <label for="id" class="form-label text-uppercase">id</label>
          <input type="text" class="form-control" id="id" value="<?= $recipe['id'];?>" name="id">
      </div>
      <div class="mb-3">
          <label for="name" class="form-label text-uppercase">nom recette</label>
          <input type="text" class="form-control" id="name" value="<?= $recipe['name_recipe'];?>" name="name">
      </div>
      <div class="mb-3">
          <label for="order" class="form-label text-uppercase">Consigne</label>
          <textarea id="order" cols="50" rows="5"  name="order" ><?= $recipe['order_recipe'];?></textarea>
      </div>
      <a href="requette_recipes.php" class="text-uppercase text-center btn bg-dark text-light">Retour</a>
      <input type="submit" value="Mettre à jour">
  </form>
</div>
