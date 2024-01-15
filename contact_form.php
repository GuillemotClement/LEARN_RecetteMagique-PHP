<?php

require_once('head.php');

?>
<div class="center mt-5">
    <h2 class="text-uppercase text-center">Formulaire de contact</h2>
<form action="submit_contact.php" method="post" class="border mx-auto p-2 col-9 shadow" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" name="email" id="email" placeholder="example@mail.com" class="form-control">
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Saisir votre message</label>
        <textarea class="form-control" id="message" name="message" rows="3" placeholder="Blablabla"></textarea>
    </div>
    <div class="mb-3">
        <label for="file" class="form-label">Fichier</label>
        <input class="form-control" type="file" id="formFile" name="file">
    </div>
    <div class="col-4 mx-auto">
        <button class="btn btn-primary " type="submit">Soumission</button>
    </div>
</form>
</div>



<?php 
require_once('footer.php');

?>