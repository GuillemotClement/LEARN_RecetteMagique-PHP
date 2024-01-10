<?php
include_once("head.php");

$getData = $_GET;

if(!isset($getDate['email']) && isset($getData['message'])){
    echo "<h1>Erreur</h1>";
    echo "<p>Saisis invalide";
}
include_once('footer.php');