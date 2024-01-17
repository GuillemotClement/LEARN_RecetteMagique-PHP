<?php

require_once('databaseconnect.php');

// recuperation des element de la table users;
$queryUser = "SELECT * FROM users";
$usersStatement = $mysqlClient->prepare($queryUser);
$usersStatement->execute();
$users = $usersStatement->fetchAll(PDO::FETCH_ASSOC);

// Recuperation des element de la table recipe
$queryRecipe = "SELECT * FROM recipes WHERE available = true";
$recipeStatement = $mysqlClient->prepare($queryRecipe);
$recipeStatement->execute();
$recipes = $recipeStatement->fetchAll(PDO::FETCH_ASSOC);

?>

<pre>
    <?php print_r($users);?>
</pre>
<pre>
    <?php print_r($recipes);?>
</pre>