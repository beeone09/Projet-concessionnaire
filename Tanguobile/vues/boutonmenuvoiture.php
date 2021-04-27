<?php

    include("./cnxDB.php");
    
    
    $resultat = $cnx->query("select nom_vo ,marque_vo, km_vo, prix_vo from voiture ");


$data =$resultat->FETCHALL();

 


     ?>  
    
        <html>
        <p>Trier par : </p>

        
        </html>             
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
                    
                   


$resultat->closeCursor();
$cnx = Null;                

                       
?>
                        <html><form name="Triagee" method="post" action="./menuvoitu.php">
                        <button type="submit" name="ordre_alph" value="1" class="button"> Tri alphabétique </button>
                        <button type="submit" name="ordre_prix" value="1" class="button"> Tri prix </button>
                        </form></html>
   </tbody>
</table>        