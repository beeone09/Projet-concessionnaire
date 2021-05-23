<?php
    include('./nav.php');
    $message1 = $_GET['msg'];
?>

<div class="bloc1">

    <form class="form" action='./ajoutbd.php' method='POST'>

        <h1 class="titre1_form">Ajouter </h1>

        <input type="text" name="imma" placeholder="Plaque d'immatriculation" required>
        <input type="text" name="nomimage" placeholder="Nom Image" required >
        <input type="text" name="nomvo" placeholder="Nom voiture" required>
        <input type="text" name="marque" placeholder="Marque" required>
        <input type="text" name="km" placeholder="Kilometrage" required>
        <input type="text" name="couleur" placeholder="Couleur " required>
        <input type="text" name="prix" placeholder="Prix" required>
    

        <div class="divVal">
            <div class="buttonsub"> 
                <button class="but1" type="submit" name="submit">Valider</button>
                <a href="vente.php"><button class="but1">Annuler</button></a>
            </div>

            <div class="envoye"> <h3><?= $message1 ?> </h3></div>
        </div>

    </form>

    

</div>

<?php
    include('./foot.php');
?>