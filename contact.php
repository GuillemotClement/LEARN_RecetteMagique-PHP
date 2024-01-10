<?php
include_once('head.php');
?>
<main class="contact-form">
    <h2 class="text-center">Contactez nous</h2>
    <form action="submit_contact.php" method="get">
        <div class="mb-3">
            <label for="email" class="form-label text-start">Email</label>
            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label text-start">Saisir votre message</label>
            <textarea class="form-control" id="message" rows="3" name="message">Exprimez vous</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Soumettre</button>
    </form>
</main>





<?php 
include_once('footer.php');
?>