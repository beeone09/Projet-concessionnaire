<?php 
    include('./nav.php');
    include('./cnxDB.php');

    $id = $_GET['id'];
    
    $sql = 'SELECT * FROM voiture WHERE imma_vo = "'. $id .'";'; 
    $rqt = $cnx->query($sql);
    $data = $rqt->fetchAll();

    echo '<div class ="container_gallery1">';
       

    foreach($data as $ligne){
            echo '<div class = "carVente">';
              
                echo '<img class="ventediv" src="'. $ligne['chemin_vo'] .'">';

                echo'<div class = "caracVoaff">';
                    echo 'Plaque d\'immatriculation: '. $ligne['imma_vo'] .'<br>';
                    echo 'Voiture:'. $ligne['marque_vo'] .' '. $ligne['nom_vo'] .'<br>';
                    echo 'Kilométrage: '. $ligne['km_vo'] .'<br>';
                    echo 'Couleur: '. $ligne['couleur_vo'] .'<br>';
                    echo 'Prix: '. $ligne['prix_vo'] .'<br>';
                echo'</div>';
            echo '</div>';
       

    }
        echo '</div>';
    echo '</div>';

?>





<?php  
    include('./foot.php');
?>