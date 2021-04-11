<?php
include('./cnxDB.php');

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$add = $_POST['addresse'];
$mail = $_POST['mail'];
$msg = $_POST['message'];

$sql = "INSERT INTO contact(nom_ctc, pnom_ctc, adresse_ctc,mail,msg_ctc) VALUES(\"$nom\",\"$prenom\",\"$add\",\"$mail\",\"$msg\");";
$res = $cnx->query($sql);
$data = $res->rowCount();
print_r($data);

if($data==1){
    header('Location: ./formulaire.php?msg=Message envoyé');
}
else{
    header('Location: ./formulaire.php?msg=Message non envoyé');
}
?>