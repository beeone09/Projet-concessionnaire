<?php

//Cookies généré
$value = '1234';

setcookie("idusr", $value); //Ce que contient le cookie


if (isset( $value)){
   echo 'votre id est le : ' . $_COOKIE["idusr"];
}

else{
    echo 'n\'existe pas';
}


?>