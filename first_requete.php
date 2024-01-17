<?php
try
{
    $connexion = new PDO("mysql:host=localhost;dbname=recette_magique;charset=utf8",'root','');
}
catch(Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}



?>

<pre>
    <?php print_r($users);?>
</pre>