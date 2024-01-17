<?php
require_once('mysql.php');
try{
    $mysqlClient = new PDO("mysql:host=$host;dbname=$dbname;utf8", $user, $password);
}catch(Exception $e){
    die('Erreur ' . $e->getMessage());
}
