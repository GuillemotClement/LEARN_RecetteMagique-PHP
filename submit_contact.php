<?php
$postData = $_POST;
$pic = false;
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

if(isset($_FILES) && $_FILES['file']['error'] == 0){
    
    if($_FILES['file']['size'] > 2000000){
        echo "Le fichier est trop lourds";
        return;
    }

    $fileInfo = pathinfo($_FILES['file']['name']);
    $fileExtension = $fileInfo['extension'];
    $allowExtension = ['jpg', 'jpeg', 'gif', 'png', 'webp'];
    if(!in_array($fileExtension, $allowExtension)){
        echo "Extension de fichier non autorisé";
        return;
    }

    $path = "./uploads/";
    if(!is_dir($path)){
        echo "Le dossier de réception n'existe pas";
        return;
    }

    move_uploaded_file($_FILES['file']['tmp_name'], $path . basename($_FILES['file']['name']));

    $pic = true;
}





require_once('head.php');
?>

<div class="col-9 mx-auto text-center mt-5 p-5 border">
    <h1 class="text-uppercase">Recapitulatif de votre saisie</h1>
    <p>Votre email est : <span class="fw-bold"><?=htmlspecialchars($postData['email']);?></span></p>
    <p>Votre message est : <span class="fw-bold"><?=htmlspecialchars($postData['message']);?><span></p>
    <?php if($pic){
        echo '<p>Image reçus</p>';
    }else{
        echo "<p><b>Pas</b> d'image reçus</p>";
    }
    ?>
</div>

<?php 
require_once('footer.php');