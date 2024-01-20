<?php 

require_once('databaseconnect.php');
require_once('Service/myFct.php');
$id = $_POST['id'];
// printr($_POST);die;
$sql = ('DELETE FROM recipes WHERE id = :id');
$deleteStatement = $mysqlClient->prepare($sql);
$deleteStatement->execute(['id'=>$id]);

header('Location: requette_recipes.php');
?>


