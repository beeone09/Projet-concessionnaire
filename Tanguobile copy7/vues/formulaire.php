<?php
 include('nav.php');
 
 $message1 =(empty($_GET['msg'] )) ? '' : $_GET['msg'] ;
?>




<div class="bloc1">

<form class="form" action='./verif.php' method='POST'>

    <h1 class="titre1_form">Nous contacter : </h1>

    <input type="text" name="nom" placeholder="Nom" required>
    <input type="text" name="prenom" placeholder="Prénom" required >
    <input type="text" name="addresse" placeholder="Adresse" required>
    <input type="email" name="mail" placeholder="e-mail" required>
    <textarea name="message" placeholder="Votre message" ></textarea>

    <div class="butest">
        <button class="but1" type="submit" name="submit">Envoyer le message</button>
    </div>
    

</form>
</div>
<div class="envoye"> <h3><?= $message1 ?> </h3></div>



<?php
include('foot.php');
?>

