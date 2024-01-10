<?php
include_once("head.php");
?>

    <main class="mx-auto p-2" style="border: 1px solid red;">
        <div class="card mx-auto p-2" style="width: 80%;height:auto">
            <h5 class="card-title">Rappel de vos identifiants</h5>
            <p class="card-text">Votre e-mail :<?= $_GET['email'];?></p>
            <p class="card-text">Votre message :<?= $_GET['message'];?></p>
        </div>
    </main>
    

<?php
include_once('footer.php');