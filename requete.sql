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

INSERT INTO users (
    first_name, 
    last_name, 
    pseudo, 
    age, 
    sexe,
    city,
    phone,
    email,
    password_user,
    date_creation_user
    )
VALUES 
("Julien", "Le Gall", "BreizhCoder", 34, "male", "Brest", "0298123456", "jlegall@salamon.com", "123456", "2021-09-25"),
("Solène", "Morvan", "QuimperQueen", 27, "female", "Quimper", "0298765432", "smorvan@ricord.com", "123456", "2023-07-17"),
("Mathis", "Bertrand", "RennesRover", 42, "male", "Rennes", "0299887766", "mbertrand@zgeg.com", "123456", "2020-10-21"),
("Elodie", "Tanguy", "VannesVoyager", 29, "female", "Vannes", "0297654321", "etanguy@proton.com", "123456", "2021-10-02"),
("Yannick", "Le Roux", "LorientLion", 38, "male", "Lorient", "0297532109", "yannus@gmail.com", "123456", "2024-01-10");
