<?php 
    include('./nav.php');
    include('./cnxDB.php');

    $sql = "SELECT * FROM voiture;";
    $rqt = $cnx->query($sql);
    $data = $rqt->fetchall();

    foreach($data as $ligne){
        echo '<div class= "container_gallery"> <div> ';
            echo '<img  class="ventediv" src="' . $ligne['chemin_vo'] . '"> <br>';
    
            echo '<div class="caracvo">';
    
            echo 'Plaque d\'imatriculation: ' . $ligne['imma_vo'] . '<br>';
            echo 'Nom: ' . $ligne['nom_vo'] . '<br>';
            echo 'Marque: ' . $ligne['marque_vo'] . '<br>';
            echo 'Kilometrage: ' . $ligne['km_vo'] . '<br>';
            echo 'Couleur: ' . $ligne['couleur_vo'] . '<br>';
            echo 'Prix: ' . $ligne['prix_vo'] . '€';
    
    
            echo '</div>';
        echo '</div> </div>';
    
}
?>








<?php  
    include('./foot.php');
?>