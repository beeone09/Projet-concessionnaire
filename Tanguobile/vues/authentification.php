<?php
session_start();
include('../vues/cnxDB.php');


//On recupère usr et mdp
$user = $_POST['usr'];
$pwd = $_POST['pwd'];

$rqt="SELECT * FROM tbl_users WHERE nomusr LIKE '$user';";
$res = $cnx->query($rqt);
$data = $res->fetch();
$hash = $data['mdpusr'];



//On vérifie le password
if (password_verify($pwd, $hash)){
    $_SESSION['nomusr'] = $user;
    $_SESSION['type'] = $data['typeusr'];
    $_SESSION['cnx'] = 'ok';
    header('Location: ../vues/login.php?&msg=Connexion réussie !');
  
}

else{
    header('Location: ../vues/login.php?&msg= Mot de passe ou identifiant erroné !');
}


?>