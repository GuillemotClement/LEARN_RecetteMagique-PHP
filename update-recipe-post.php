<?php
require_once('databaseconnect.php');
require_once('Service/myFct.php');


$id = $_POST['id'];
$name = $_POST['name'];
$order = $_POST['order'];

$sql = "UPDATE recipes SET name_recipe = :title, order_recipe = :order WHERE id = :id";
$recipeStatement = $mysqlClient->prepare($sql);
$recipeStatement->execute(
    [
        'title'=>$name,
        'order'=>$order,
        'id'=>$id
    ]
    );
?>
<h1>Modification effectué</h1>
<h2><?= $name?></h2>
<p><?= $order?></p>
<a href="requette_recipes.php">Retour</a>