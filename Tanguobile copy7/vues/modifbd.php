<?php
    session_start();
    include('./cnxDB.php');
    $ip = $_GET['idid'];

    $imma = $_POST['imma'];
    $nomima = $_POST['nomimage'];
    $nomvo = $_POST['nomvo'];
    $marque = $_POST['marque'];
    $km = $_POST['km'];
    $couleur = $_POST['couleur'];
    $prix = $_POST['prix'];

    $sql =' UPDATE voiture 
    SET imma_vo ="' . $imma .'",
    chemin_vo ="' . $nomima .'",
    nom_vo ="' . $nomvo .'",
    marque_vo ="' . $marque .'",
    km_vo ="' . $km .'",
    couleur_vo ="' . $couleur .'",
    prix_vo =' . $prix .'
    WHERE imma_vo = "' . $ip .'";';
    $res = $cnx->query($sql);
    $data = $res->rowcount();
    
    if($data == 1){
        
        header('Location: ./vente.php');
    }

    else{
        header('Location: ./vente.php');
    }

    
?>