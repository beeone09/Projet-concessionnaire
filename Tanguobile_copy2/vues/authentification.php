<?php
include('../vues/cnxDB.php');
session_start();

//On recupère usr et mdp
$user = $_POST['usr'];
$pwd = $_POST['pwd'];

$rqt="SELECT mdpusr FROM tbl_users WHERE nomusr LIKE '$user';";
$res = $cnx->query($rqt);
$data = $res->fetch();
$hash = $data['mdpusr'];
$_SESSION['nomusr'] = $user;



//On vérifie le password
if (password_verify($pwd, $hash)){
    header('Location: ../vues/login.php?&msg=Connexion réussie !');
  
}

else{
    header('Location: ../vues/login.php?&msg= Mot de passe ou identifiant erroné !');
}


?>