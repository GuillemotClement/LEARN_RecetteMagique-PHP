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

$recipes = [
    [
        "name" => "Crêpes Bretonnes",
        "author" => "BreizhCoder",
        "order" => "Mélangez 250g de farine, 4 œufs, 500ml de lait, une pincée de sel. Laissez reposer 1h. Cuire à la poêle.",
        "date" => "2024-03-10 10:00:00",
        "pic" => "ressource/recette_crepe.png",
        "available" => false,
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
        "available" => true,
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- LIEN FONT AWASOME -->
    <script src="https://kit.fontawesome.com/974af3ed35.js" crossorigin="anonymous"></script>
    <!-- LIEN FAVICON -->
    <link rel="shortcut icon" href="ressource/favicon.ico"/>
    <link rel="stylesheet" href="style.css">
    <title>Recette Magique</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
            <div class="container-fluid">
                <a href="#" class="navbar-brand uppercase">Recette Magique</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </li> -->
                        <!-- <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li> -->
                    </ul>
                    <!-- <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
                </div>
            </div>
        </nav>
    </header>

    <main>
        <a href="test.php">Page de test des fonctions</a>
    <h1 class="uppercase">Nos recettes</h1>
    <div class="ctn-card">
        <?php foreach(getRecipe($recipes) as $recipe): ?>
            <div class="card">
                <img src="<?= $recipe['pic'];?>" alt="illustration de la recette" class="card-img-top">
                <div class="card-body">
                    <h2 class="card-title"><?= $recipe['name']; ?></h2>
                    <p class="card-text"><?= $recipe['order']; ?> </p>
                    <p class="card-text italic">Proposé par <span class="bold blue"><?= $recipe['author']; ?></span></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    
    </main>

    <footer class="bg-dark position-fixed bottom-0 start-0 end-0 text-center d-flex justify-content-around align-items-center">
        <p>Make by <span><i class="fa-solid fa-heart red"></i></span> by Clément Guillemot</p>
        <p>&copy; Copyright <?= date('Y'); ?></p>
    </footer>
</body>
</html>