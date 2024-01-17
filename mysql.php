<?php 

try{
    $mysqlClient = new PDO ('mysql:host=localhost;dbname=recette_magique;utf*', 'root', '');
}catch(Exception $e){
    die('Erreur : ' . $e->getMessage());
}

