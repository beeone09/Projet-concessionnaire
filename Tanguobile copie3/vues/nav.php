<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../media/css/nav.css">
    <link rel="stylesheet" href="../media/css/footer.css">
    <link type="text/css" rel="stylesheet" href= "../media/css/accueil.css">
    <link rel="stylesheet" href="../media/css/login.css">
    <link rel="stylesheet" href="../media/css/mention.css">
    <link rel="stylesheet" href="../media/css/container_rgpd.css">
    <link rel="stylesheet" href="../media/css/formulaire.css">
    <link rel="stylesheet" href="../media/css/vente.css">
    
    <title>Nav</title>
</head>
<body>
    <header>
        <div class="logocar">
            <img class= "logo" src="../media/images/logo_tangue.png" alt="logo">
            <span class="titre_logo">TANGU'OBILE</span>
        </div>

        <nav>
            <div class="menuToggle">
                <span></span>
            </div>

            <div class="navigation hide">
                <a class="active jbzz" href="accueil.php">Accueil</a>
                <a class="jbzz" href="vente.php">Ventes</a>
                <a class="jbzz" href="a%20propos.php">À propos</a>
                <a class="jbzz" href="formulaire.php">Contact</a>
                <a class="jbzz" href="login.php">S'identifier</a>
                
                <?php 
                if($_SESSION['cnx'] == 'ok'){
                    echo "<div class='cnxuser jbzz'> <img class='log_user' src='../media/images/user.png'/>" . $_SESSION['nomusr'] . "
                    <a class='log-out' href='logout.php'>Déconnexion</a> </div>";
                    
                }
                ?> 
            </div>
        </nav>
        <script type="text/javascript" src="../script/menujava.js"></script>
</header>    
