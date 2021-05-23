<?php 
    include('./nav.php');
    include('./cnxDB.php');

    $sql = "SELECT * FROM voiture;";
    $sql2 = "SELECT * from voiture where tendance like 'oui';";
    $rqt = $cnx->query($sql);
    $rqt2 = $cnx->query($sql2);

    $data = $rqt->fetchall();
    $data2 = $rqt2->fetchall();

    if ($_SESSION['type'] == 'Admin'){
    echo '<div class="modbut"><a class= "linkAjout" href="ajout.php"><button class="butmod"> Ajouter un Véhicule</button></a> </div>';
    }
?>

    <section class= "container1">      
        <h1 class="titre1_acc">NOS TENDANCES</h1>     
        <hr/>

        <div class= "buttonFiltre">
            <select id="filtreBut" name="button" type="input">
                <option type="text">Trier par : </option>
                <option value="">Nom (A-Z)</option>
                <option value="">Prix croissant</option>
                <option value="">Prix décroissant</option>
            </select>

            <button id="validOk" name="ok">OK</button>
            
        </div>


        
        <div class="container_image">
                
<?php
foreach($data2 as $ligne2)
echo '  <div class= "container_gallery">
                <a href="affvo.php?id=' . $ligne2['imma_vo'] .'">
                <div class="container_image">
                    <img class="car1" src="'.$ligne2['chemin_vo'] .'" alt="test1">
                </div>
                </a>
        </div>    
        '
?>
        </div>
    </section>

    <h1 class="titre1_acc">NOS VOITURES</h1>
        <hr/>
<?php
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
                    <a class = "linkModif" href="modif.php?id=' . $ligne['imma_vo'] .'"><button class="butmodif">Modifier</button></a>
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