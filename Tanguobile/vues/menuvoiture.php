
                        
<?php 
include("./cnxDB.php");
if($_POST['ordre_alph']){
    $resultat = $cnx->query("SELECT nom_vo,marque_vo,km_vo,prix_vo FROM voiture ORDER BY marque_vo ASC;");
    $data =$resultat->FETCHALL();

}
else if($_POST['ordre_prix']){
$resultat = $cnx->query("SELECT nom_vo,marque_vo,km_vo,prix_vo FROM voiture ORDER BY prix_vo ASC;");
$data =$resultat->FETCHALL();
}
?>
                        
        <p>Trier par : </p>

        
                     
            <table id="voiture">
                <thead>
                    <tr>			
                        <th class="nom_vo">Modèle voiture</th>
                        <th class="marque_vo">Marque</th>
                        <th class="km_vo">Kilométrage</th>
                        <th class="prix_vo">Prix</th>
                        
                    </tr>
                </thead>
                
                <tbody>
               
                     <?php  foreach ($data as $lig) { 
                        echo "<tr><td>".$lig['nom_vo']."</td>"; 
                        echo "<td>".$lig['marque_vo']."</td>"; 
                        echo "<td>".$lig['km_vo']."</td>"; 
                        echo "<td>".$lig['prix_vo']."</td></tr>";}
                    
                   

                       
                       
?>
 </tbody>
</table> 
