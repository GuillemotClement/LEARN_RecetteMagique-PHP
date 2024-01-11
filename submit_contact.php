<?php
$postData = $_POST;

if(
    !isset($postData['email']) ||
    !filter_var($postData['email'], FILTER_VALIDATE_EMAIL) ||
    empty($postData['message']) ||
    trim($postData['message']) ===''
){
    echo 'Saisis invalide des données';
    return;
}

include_once("head.php");
?>

<body>
    <div class="container">
        <h1>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Rappel des vos information</h5>
                    <p class="card-text">Email :<?= $postData['email'];?></p>
                    <p class="card-text">Message :<?= $postData['message'];?></p>
                </div>
            </div>
        </h1>
    </div>
</body>
<?php 
include_once('footer.php');

?>