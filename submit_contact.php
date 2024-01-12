<?php
$postData = $_POST;

if(
    !isset($postData['email']) ||
    !filter_var($postData['email'], FILTER_VALIDATE_EMAIL) ||
    empty($postData['message']) ||
    trim($postData['message'] === '')
)
{
    echo "<h1>Erreur de saisis de données dans le formulaire de contact";
    return;
}

require_once('head.php');
?>

<div class="col-9 mx-auto text-center mt-5 p-5 border">
    <h1 class="text-uppercase">Recapitulatif de votre saisie</h1>
    <p>Votre email est : <span class="fw-bold"><?=htmlspecialchars($postData['email']);?></span></p>
    <p>Votre message est : <span class="fw-bold"><?=htmlspecialchars($postData['message']);?><span></p>
</div>

<?php 
require_once('footer.php');