<?php
$recipes = [
    [
        "name" => "Soupe de Poissons",
        "author" => "QuimperQueen",
        "order" => "Faire revenir des oignons, ajouter poissons variés et bouillon. Cuire 25 min. Mixer et servir chaud.",
        "date" => "2024-04-24 14:30:00",
        "pic" => "ressource/recette_soupe_poisson.png",
        "available" => false,
    ],
    [
        "name" => "Gâteau au Chocolat",
        "author" => "RennesRover",
        "order" => "Mélangez 200g de chocolat fondu, 100g de beurre, 150g de sucre, 3 œufs, 50g de farine. Cuire 30 min à 180°C.",
        "date" => "2024-05-15 18:45:00",
        "pic" => "ressource/recette_gateau_chocolat.png",
        "available" => false,
    ],
    [
        "name" => "Tarte aux Pommes",
        "author" => "VannesVoyager",
        "order" => "Étalez une pâte brisée, disposez des tranches de pommes, saupoudrez de sucre et de cannelle. Cuire 40 min à 200°C.",
        "date" => "2024-06-02 08:20:00",
        "pic" => "ressource/recette_tarte_au_pomme.png",
        "available" => true,
    ],
    [
        "name" => "Quiche Lorraine",
        "author" => "BreizhCoder",
        "order" => "Étalez une pâte feuilletée, ajoutez lardons et oignons revenus, verser un mélange d'œufs et de crème. Cuire 35 min à 180°C.",
        "date" => "2024-07-22 12:00:00",
        "pic" => "ressource/recette_quiche_lorraine.png",
        "available" => true,
    ],
];
$users = [
    [
        "first_name" => "Julien",
        "last_name" => "Le Gall",
        "pseudo" => "BreizhCoder",
        "age" => 34,
        "sexe" => "male",
        "city" => "Brest",
        "phone" => "0298123456",
        "email" => "jlegall@exemple.com",
        "password" => "",
    ],
    [
        "first_name" => "Solène",
        "last_name" => "Morvan",
        "pseudo" => "QuimperQueen",
        "age" => 27,
        "sexe" => "female",
        "city" => "Quimper",
        "phone" => "0298765432",
        "email" => "smorvan@exemple.com",
        "password" => "",
    ],
    [
        "first_name" => "Mathis",
        "last_name" => "Bertrand",
        "pseudo" => "RennesRover",
        "age" => 42,
        "sexe" => "male",
        "city" => "Rennes",
        "phone" => "0299887766",
        "email" => "mbertrand@exemple.com",
        "password" => "",
    ],
    [
        "first_name" => "Elodie",
        "last_name" => "Tanguy",
        "pseudo" => "VannesVoyager",
        "age" => 29,
        "sexe" => "female",
        "city" => "Vannes",
        "phone" => "0297654321",
        "email" => "etanguy@exemple.com",
        "password" => "",
    ],
    [
        "first_name" => "Yannick",
        "last_name" => "Le Roux",
        "pseudo" => "LorientLion",
        "age" => 38,
        "sexe" => "male",
        "city" => "Lorient",
        "phone" => "0297532109",
        "password" => "",
    ],
];








































// Fonction qui vérifie si une recette est disponible

// function isAvailable($recipe){
//     if($recipe['available']){
//         return "elle est valide";
//     }else{
//         return "elle est pas valide";
//     }
// }

// echo isAvailable($recipes[0]);

// $crepe_bretonne = [
//     "name" => "Crêpes Bretonnes",
//     "author" => "BreizhCoder",
//     "order" => "Mélangez 250g de farine, 4 œufs, 500ml de lait, une pincée de sel. Laissez reposer 1h. Cuire à la poêle.",
//     "date" => "2024-03-10 10:00:00",
//     "pic" => "ressource/recette_crepe.png",
//     "available" => true,
// ];
// //Cette fonction vérifie que la key existe, et affecte à la variable la valeur cette key.
// // Si la valeur est True, alors 1 sera affiché 
// //si valeur est false, alors rien ne s'affiche
// function isAvailable(array $recipe) :bool
// {
//     if(array_key_exists('available', $recipe)){
//         $isAvailable =  $recipe['available'];
//     }else{
//         $isAvailable =  false;
//     }
//     return $isAvailable;
// }
// var_dump(isAvailable($crepe_bretonne));

//Affichage des recettes si elle est available
// function getRecipes(array $recipes) : array
// {
//     $arrRecipes = [];

//     foreach($recipes as $recipe){
//         if(isAvailable($recipe)){
//             $arrRecipes[] = $recipe;
//         }
//     }
//     return $arrRecipes;
// }

// foreach(getRecipes($recipes) as $recipe){
//     echo $recipe['name'];
// }

