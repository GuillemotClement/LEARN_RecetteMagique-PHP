<?php 
// function qui vérifie si une recette est valide. Celle ci récupère la valeur de available pour la recette.
function isAvailable(array $recipe) :bool
{
    if(array_key_exists('available', $recipe)){
        $isAvailable = $recipe['available']; //on affecte à la variable la valeur de la clé available true || false
    }else{
        $isAvailable = false;
    }
    return $isAvailable;
}

//fonction vient récupérer dans un tableau les recette available
function getRecipe(array $arrRecipes){
    $recipeAvailable = []; //on déclare un tableau vide qui viendras stocker les recettes valide
    foreach($arrRecipes as $recipe){ //on appelle la fonction qui vient vérifier si la recette est available
        if(isAvailable($recipe)){ 
            $recipeAvailable[] = $recipe; //on ajoute dans le tableau la recette si elle est valide
        }
    }
    return $recipeAvailable; //on returne le tableau des recettes valides
}

function redirectToUrl(string $url) :never
{
    header("Location: {$url}");
    exit;
}