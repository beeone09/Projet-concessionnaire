<?php
    session_start();
    include('./cnxDB.php');

    $imma = $_POST['imma'];
    $nomima = '../media/images/' . $_POST['nomimage'] . '.jpg';
    $nomvo = $_POST['nomvo'];
    $marque = $_POST['marque'];
    $km = $_POST['km'];
    $couleur = $_POST['couleur'];
    $prix = $_POST['prix'];

    $sql =" INSERT INTO voiture (imma_vo, chemin_vo, nom_vo, marque_vo, km_vo, couleur_vo, prix_vo)
    VALUES ('$imma', '$nomima', '$nomvo', '$marque', $km, '$couleur', $prix)";
    $res = $cnx->query($sql);
    $data = $res->rowCount();

    if($data == 1){
        
        header('Location: ./ajout.php?msg=Modifié');
    }

    else{
        header('Location: ./ajout.php?msg=Non modifié');
    }
?>