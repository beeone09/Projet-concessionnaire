<?php 
    include('./nav.php');
    include('./cnxDB.php');

    $sql = "SELECT * FROM voiture;";
    $rqt = $cnx->query($sql);
    $data = $rqt->fetchall();

    if ($_SESSION['type'] == 'Admin'){
    echo '<div class="modbut"><a class= "linkAjout" href="ajout.php"><button class="butmod"> Ajouter un Véhicule</button></a> </div>';
    }

    echo '<div class= "container_gallery1">';
    echo '<div class= "container_gallery2">';


   
    foreach($data as $ligne){
        echo '<div class = "divModif">';
        echo '<a class = "linkVoaff" href="affvo.php?id=' . $ligne['imma_vo'] .'"><div class= "carVente">';
                echo '<img  class="ventediv" src="' . $ligne['chemin_vo'] . '"> <br>';

            echo '<div class="caracvo">';
                echo 'Plaque d\'imatriculation: ' . $ligne['imma_vo'] . '<br>';
                echo 'Nom: ' . $ligne['nom_vo'] . '<br>';
                echo 'Marque: ' . $ligne['marque_vo'] . '<br>';
                echo 'Kilometrage: ' . $ligne['km_vo'] . '<br>';
                echo 'Couleur: ' . $ligne['couleur_vo'] . '<br>';
                echo 'Prix: ' . $ligne['prix_vo'] . '€ ';
            echo '</div>';
        echo '</div> </a>';
        
        
        if ($_SESSION['type'] == 'Admin'){
            echo ' 
                <div class="butest2">
                    <a class = "linkModif" href="modif.php?id=' . $ligne['imma_vo'] .'"><button class="but1">Modifier</button></a>
                </div>';

                
            }

            echo '</div>';
       

    }
    echo '</div>';
    echo '</div>';


?>








<?php  
    include('./foot.php');
?>