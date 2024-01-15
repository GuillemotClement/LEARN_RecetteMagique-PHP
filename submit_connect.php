<?php
require_once('variable.php');
$postData = $_POST;
$pseudo = $postData['pseudo'];
$pseudoFound = false;
$password = "";

if( (!isset($postData['pseudo'])) || $postData['pseudo'] == ''){
    echo "Erreur saisie pseudo vide.";
    //permet d'empêcher l'affichage du reste si le pseudo n'est pas valide
    return;
}

foreach($users as $user){
    if(in_array($pseudo, $user)){
        $pseudoFound = true;
        break;
    }
}
if(!$pseudoFound){
    echo "Pseudo Invalide";
    return;
}

foreach($users as $user){
    if(in_array($pseudo, $user)){
        $password = $user['password'];
        break;
    }
}
if($password !== $postData['password']){
    echo "Mot de passe invalide";
    return;
}

include_once('head.php');
?>

<body>
    <div class="container center text-center">
        <h1 class="uppercase">Bienvenue <?=$pseudo;?></h1>
        <p>Nous somme le <?= date('d\-m\-Y');?></p>
        <p>Il est <?= date('H\:i');?></p>
        <a href="connect_form.php" class="uppercase text-blue">Retour au formulaire</a>
    </div>
</body>
<?php 
include_once('footer.php');

?>