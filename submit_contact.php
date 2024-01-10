<?php
include_once("head.php");

$getData = $_GET;

if( !isset($getDate['email']) )
    // || !filter_var($getData['email'], FILTER_VALIDATE_EMAIL)
    // || empty($getData['message']))
    // || trim($getData['message']) === '')
    {
        echo "<h1>Erreur</h1>";
        echo "<p>Saisis invalide";
    }
    else {
        echo print_r($getData);
    }
include_once('footer.php');