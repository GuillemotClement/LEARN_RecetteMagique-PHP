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
  <form action="" class="m-5">
      <h1 class="text-uppercase text-center">Information recette</h1>
      <div class="mb-3">
          <label for="name" class="form-label text-uppercase">nom recette</label>
          <input type="text" class="form-control" id="name" value="<?= $recipe['name_recipe'];?>" name="name" disabled>
      </div>
      <div class="mb-3">
          <label for="author" class="form-label text-uppercase">author</label>
          <input type="text" class="form-control" id="author" value="<?= $recipe['author'];?>" name="author"disabled>
      </div>
      <div class="mb-3">
          <label for="order" class="form-label text-uppercase">Consigne</label>
          <textarea name="order" id="order" cols="50" rows="5"  name="order" disabled><?= $recipe['order_recipe'];?></textarea>
      </div>
      <div class="mb-3">
          <label for="date_creation" class="form-label text-uppercase">date de creation</label>
          <input type="text" class="form-control" id="date_creation" value="<?= $recipe['date_creation_recipe'];?>" name="date_creation" disabled>
      </div>
      <div class="mb-3">
          <label for="available" class="form-label text-uppercase">disponible</label>
          <input type="text" class="form-control" id="available" value="<?= $recipe['available'];?>" name="available" disabled>
      </div>
      <a href="requette_recipes.php" class="text-uppercase text-center btn bg-dark text-light">Retour</a>
  </form>
</div>
