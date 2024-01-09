<?php 
// On créer le tableau $users qui contient les utilisateurs inscrit du site.
$users = [
    [
        "first_name" => "Julien",
        "last_name" => "Le Gall",
        "pseudo" => "BreizhCoder",
        "age" => 34,
        "sexe" => "male",
        "city" => "Brest",
        "phone" => 0298123456,
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
        "phone" => 0298765432,
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
        "phone" => 0299887766,
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
        "phone" => 0297654321,
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
        "phone" => 0297532109,
        "password" => "",
    ],

    $recipes [
        [
            "name" => "Crêpes Bretonnes",
            "author" => "BreizhCoder",
            "order" => "Mélangez 250g de farine, 4 œufs, 500ml de lait, une pincée de sel. Laissez reposer 1h. Cuire à la poêle.",
            "date" => "2024-03-10 10:00:00",
            "available" => true,
        ],
        [
            "name" => "Soupe de Poissons",
            "author" => "QuimperQueen",
            "order" => "Faire revenir des oignons, ajouter poissons variés et bouillon. Cuire 25 min. Mixer et servir chaud.",
            "date" => " 2024-04-24 14:30:00",
            "available" => true,
        ],
        [
            "name" => "Gâteau au Chocolat",
            "author" => "RennesRover",
            "order" => "Mélangez 200g de chocolat fondu, 100g de beurre, 150g de sucre, 3 œufs, 50g de farine. Cuire 30 min à 180°C.",
            "date" => "2024-05-15 18:45:00",
            "available" => false,
        ],
        [
            "name" => "Tarte aux Pommes",
            "author" => "VannesVoyager",
            "order" => "Étalez une pâte brisée, disposez des tranches de pommes, saupoudrez de sucre et de cannelle. Cuire 40 min à 200°C.",
            "date" => "2024-06-02 08:20:00",
            "available" => true,
        ],
        [
            "name" => "Quiche Lorraine",
            "author" => "BreizhCoder",
            "order" => "Étalez une pâte feuilletée, ajoutez lardons et oignons revenus, verser un mélange d'œufs et de crème. Cuire 35 min à 180°C.",
            "date" => "2024-07-22 12:00:00",
            "available" => true,
        ]
    ]
];
?>