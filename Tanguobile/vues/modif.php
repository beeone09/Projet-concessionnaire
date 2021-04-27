<?php
    include('./nav.php');
    include('./cnxDB.php');
    $id = $_GET['id'];
    
    $sql = 'SELECT * FROM voiture WHERE imma_vo = "'. $id .'";'; 
    $rqt = $cnx->query($sql);
    $data = $rqt->fetchAll();

    foreach($data as $ligne){
    echo '
    <div class="bloc1">

<form class="form" action="./modifbd.php?idid=' . $id . '" method="POST">

    <h1 class="titre1_form">Modifier </h1>

    <input type="text" name="imma" value=" '. $ligne['imma_vo'] . '" required>
    <input type="text" name="nomimage" value=" '. $ligne['chemin_vo'] . '" required>
    <input type="text" name="nomvo" value=" '. $ligne['nom_vo'] . '" required>
    <input type="text" name="marque" value=" '. $ligne['marque_vo'] . '" required>
    <input type="text" name="km" value=" '. $ligne['km_vo'] . '" required>
    <input type="text" name="couleur" value=" '. $ligne['couleur_vo'] . '" required>
    <input type="text" name="prix" value=" '. $ligne['prix_vo'] . '" required>


    

    <div class="buttonsub"> 
            <button class="but1" type="submit" name="submit">Valider</button>
    </div>

</form>
    <div class="buttonannuler">
        <a href="vente.php"><button class="but1">Annuler</button></a>
    </div>
</div>
    ';
    }
?>






<?php
    include('./foot.php');
?>