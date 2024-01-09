<?php
$recipes = [
    [
        "name" => "Crêpes Bretonnes",
        "author" => "BreizhCoder",
        "order" => "Mélangez 250g de farine, 4 œufs, 500ml de lait, une pincée de sel. Laissez reposer 1h. Cuire à la poêle.",
        "date" => "2024-03-10 10:00:00",
        "pic" => "ressource/recette_crepe.png",
        "available" => true,
    ],
    [
        "name" => "Soupe de Poissons",
        "author" => "QuimperQueen",
        "order" => "Faire revenir des oignons, ajouter poissons variés et bouillon. Cuire 25 min. Mixer et servir chaud.",
        "date" => "2024-04-24 14:30:00",
        "pic" => "ressource/recette_soupe_poisson.png",
        "available" => true,
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
$counter = 0;
// for($i = 0; $i < count($recipes); $i++){
//     if(array_key_exists('available', $recipes[$i])){
//         echo "La clé existe \n";
//     }
// }
// array_key_exists('available', $recipes[$key]) &&
// foreach($recipes as $recipe){
//     if($recipe['available']){
//         echo "La clé est disponible";
//         $counter++;
//     }
// }
// echo $counter;

foreach($recipes as $key){
    if(array_key_exists("available", $key) && $key['available']){
        echo "La recette existe et elle est disponible";
    }
}