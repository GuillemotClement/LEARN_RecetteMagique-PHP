<?php 

require_once('databaseconnect.php');
require_once('Service/myFct.php');

$queryUsers = "SELECT first_name, last_name, pseudo, age, sexe, city, email, date_creation_user FROM users";
$usersStatement = $mysqlClient->prepare($queryUsers);
$usersStatement->execute();
$users = $usersStatement->fetchAll(PDO::FETCH_ASSOC);

require_once('head.php');
require_once('header.php');
?>

<main>
    <h1 class="text-center text-uppercase">liste utilisateur</h1>
    <table class="border shadow m-auto col-11">
        <thead class="bg-dark text-light">
            <tr>
                <th class="text-uppercase text-center border col-1">prénom</th>
                <th class="text-uppercase text-center border col-1">nom</th>
                <th class="text-uppercase text-center border col-2">pseudo</th>
                <th class="text-uppercase text-center borde col-1">age</th>
                <th class="text-uppercase text-center border col-1">sexe</th>
                <th class="text-uppercase text-center border col-1">ville</th>
                <th class="text-uppercase text-center border col-2">email</th>
                <th class="text-uppercase text-center border col-1">date de création</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user):?>
            <tr>
                <td class="text-center border"><?=$user['first_name'];?></td>
                <td class="text-center border text-uppercase"><?=$user['last_name'];?></td>
                <td class="text-center border"><?=$user['pseudo'];?></td>
                <td class="text-center border"><?=$user['age'];?></td>
                <td class="text-center border text-uppercase"><?=$user['sexe'];?></td>
                <td class="text-center border text-uppercase"><?=$user['city'];?></td>
                <td class="text-center border"><?=$user['email'];?></td>
                <td class="text-center border"><?=$user['date_creation_user'];?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</main>

<?php 
require_once('footer.php');