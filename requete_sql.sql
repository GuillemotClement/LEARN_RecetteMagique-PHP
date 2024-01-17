-- Création de la nouvelle database
CREATE DATABASE foodly;

CREATE TABLE aliment (
    id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    marque VARCHAR(100),
    sucre FLOAT,
    calories INTEGER NOT NULL,
    graisses FLOAT,
    proteines FLOAT,
    bio BOOLEAN DEFAULT false  
);

-- AJOUT DES DONNEES
INSERT INTO `utilisateur` (`nom`, `prenom`, `email`)
VALUES
('Doe', 'John', 'john@yahoo.fr'),
('Smith', 'Jane', 'jane@hotmail.com'),
('Dupont', 'Sebastien', 'sebastien@orange.fr'),
('Martin', 'Emilie', 'emilie@gmail.com');

INSERT INTO `aliment` (`nom`, `marque`, `sucre`, `calories`, `graisses`, `proteines`, `bio`)
VALUES
('poire', 'monoprix', 27.5, 134, 0.2, 1.1, FALSE),
('pomme', 'monoprix', 19.1, 72, 0.2, 0.4, FALSE),
('oeuf', 'carrefour', 0.6, 82, 5.8, 6.9, TRUE),
('lait d\'amande', 'bjorg', 4.5, 59, 3.9, 1.1, TRUE);
