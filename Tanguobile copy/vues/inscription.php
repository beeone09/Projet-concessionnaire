<?php
include('../vues/cnxDB.php');

$usr = $_POST['usr'];
$mail = $_POST['mail'];
$pwd = $_POST['pwd'];
$repwd = $_POST['repwd'];

$hash = password_hash($pwd, PASSWORD_BCRYPT);

$rqt = "SELECT COUNT(*) as nombre FROM tbl_users WHERE nomusr LIKE '$usr';";
$res = $cnx->query($rqt);
$data = $res->fetch();

if($pwd !=  $repwd){
    header('Location: ../vues/login.php?&msg=Erreur : Veuillez entrer un mot de passe identiques !');
}

else{
    if($data['nombre']==1){
        header('Location: ../vues/login.php?&msg=Erreur : Nom d \'utilisateur déjà pris !');
    }

    else{
        $rqt = "INSERT INTO tbl_users (nomusr, emailusr,mdpusr) VALUES ('$usr', '$mail', '$hash');"; 
        $res = $cnx->query($rqt);
        header('Location: ../vues/login.php?&msg=Vous êtes inscrit !');
    }
}


?>