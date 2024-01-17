CREATE DATABASE recette_magique;

USE recette_magique;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    first_name VARCHAR(100),
    last_name VARCHAR(100),
    pseudo VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    sexe VARCHAR(100),
    city VARCHAR(100),
    phone VARCHAR(100),
    email VARCHAR(100) NOT NULL,
    password_user VARCHAR(100) NOT NULL,
    date_creation_user DATE NOT NULL,
);

CREATE TABLE recipes (
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    name_recipe VARCHAR(100) NOT NULL,
    author VARCHAR(100) NOT NULL,
    order TEXT NOT NULL,
    date_creation_recipe DATE NOT NULL,
    pic VARCHAR(255),
    available BOOLEAN NOT NULL DEFAULT false
);

INSERT INTO users (first_name, last_name, pseudo, age, sexe,city,phone,email,password_user,date_creation_user)
VALUES 
("Julien", "Le Gall", "BreizhCoder", 34, "male", "Brest", "0298123456", "jlegall@salamon.com", "123456", "2021-09-25"),
("Solène", "Morvan", "QuimperQueen", 27, "female", "Quimper", "0298765432", "smorvan@ricord.com", "123456", "2023-07-17"),
("Mathis", "Bertrand", "RennesRover", 42, "male", "Rennes", "0299887766", "mbertrand@zgeg.com", "123456", "2020-10-21"),
("Elodie", "Tanguy", "VannesVoyager", 29, "female", "Vannes", "0297654321", "etanguy@proton.com", "123456", "2021-10-02"),
("Yannick", "Le Roux", "LorientLion", 38, "male", "Lorient", "0297532109", "yannus@gmail.com", "123456", "2024-01-10");

INSERT INTO recipes (name_recipe, author, order_recipe, date_creation_recipe, pic, available)
VALUES 
('Crêpes Bretonnes', "BreizhCoder", "Mélangez 250g de farine, 4 œufs, 500ml de lait, une pincée de sel. Laissez reposer 1h. Cuire à la poêle.", "2023-03-10 10:00:00", "ressource/recette_crepe.png", true),
('Soupe de Poissons', "QuimperQueen", "Faire revenir des oignons, ajouter poissons variés et bouillon. Cuire 25 min. Mixer et servir chaud.", "2023-04-24 14:30:00", "ressource/recette_soupe_poisson.png", true),
('Gâteau au Chocolat', "RennesRover", "Mélangez 200g de chocolat fondu, 100g de beurre, 150g de sucre, 3 œufs, 50g de farine. Cuire 30 min à 180°C.", "2023-05-15 18:45:00", "ressource/recette_gateau_chocolat.png", true),
('Tarte aux Pommes', "VannesVoyager", "Étalez une pâte brisée, disposez des tranches de pommes, saupoudrez de sucre et de cannelle. Cuire 40 min à 200°C.", "2023-06-02 08:20:00", "ressource/recette_tarte_au_pomme.png", true),
('Quiche Lorraine', "BreizhCoder", "Étalez une pâte feuilletée, ajoutez lardons et oignons revenus, verser un mélange d'œufs et de crème. Cuire 35 min à 180°C.", "202-07-22 12:00:00", "ressource/recette_quiche_lorraine.png", true);