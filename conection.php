<?php
try{
    $mysqlClient = new PDO('mysql:host=locahost;dbname=recette_magique;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur :' . $e->getMessage());
}

