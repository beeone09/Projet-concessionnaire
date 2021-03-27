<?php
session_start();
include('../vues/cnxDB.php');

//On recupère usr et mdp
$user = $_POST['usr'];
$pwd = $_POST['pwd'];

$rqt="SELECT mdpusr, nomusr FROM tbl_users WHERE nomusr LIKE '$user';";
$res = $cnx->query($rqt);
$data = $res->fetch();
$hash = $data['mdpusr'];
$nom = $data['nomusr'];

$_SESSION['nomusr'] = $user;



//On vérifie le password
if (password_verify($pwd, $hash) && $user == $nom){
    $_SESSION['cnx'] = 'ok';
    header('Location: ../vues/login.php?&msg=Connexion réussie !');
  
}

else{
    header('Location: ../vues/login.php?&msg= Mot de passe ou identifiant erroné !');
}


?>