<?php
    $host = 'localhost';
    $dbname = 'projvoit';
    $username = 'postgres';
    $password = 'btssio';
    $sgbd = 'pgsql';
    $port = 3306;

    
try{
    $cnx = new PDO('pgsql:host=localhost;dbname=projetconce', $username, $password);
    
    
    if($cnx){
        echo "Vous vous êtes connecté à la base de données $dbname avec succès! \n";

        $resultat = 'SELECT nomcond, pnomcond, villecond FROM conducteur;';
        foreach  ($cnx->query($resultat) as $row) {
            print $row['nomcond'] . "\t";
            print  $row['pnomcond'] . "\t";
            print $row['villecond'] . "\n";
      }
    }

}catch(PDOException $e){
    echo "Impossible de se connecter : ". $e->getMessage();
}
?>