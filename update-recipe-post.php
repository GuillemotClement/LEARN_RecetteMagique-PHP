<?php
require_once('databaseconnect.php');
require_once('Service/myFct.php');
$postData = $_POST;
printr($_POST);die;
// $sql = "UPDATE recipes SET title = :title, order_recipe = :order WHERE id = :id";
// $recipeStatement = $mysqlClient->prepare($sql);
// $recipeStatement->execute(
//     [
//         'title'=>$postData['']
//     ]
// )