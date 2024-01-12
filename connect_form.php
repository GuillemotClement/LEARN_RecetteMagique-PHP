<?php
include_once('head.php');
?>
<main class="contact-form">
    <h2 class="text-center uppercase">Formulaire de connexion</h2>
    <form action="submit_connect.php" method="post" class="text-start">
        <div class="mb-3">
            <label for="pseudo" class="form-label text-start">Pseudo</label>
            <input type="text" class="form-control" id="pseudo" placeholder="@username" name="pseudo" autocomplete="nope">
            <label for="password" class="form-label text-start">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="*******" autocomplete="nope">
        </div>
        <button type="submit" class="btn btn-primary text-center uppercase">Se connecter</button>
    </form>
</main>





<?php 
include_once('footer.php');
?>