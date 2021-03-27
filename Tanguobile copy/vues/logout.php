<?php

session_start();
session_destroy();
header('Location: ../vues/login.php?&msg= Vous êtes déconnecté !');

?>