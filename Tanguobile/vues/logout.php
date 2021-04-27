<?php

session_start();
session_destroy();
header('Location: ../vues/accueil.php?&msg= Vous êtes déconnecté !');

?>