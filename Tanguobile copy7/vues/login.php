<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../media/css/login.css">
    <title>Document</title>
</head>
<body>
    <?php 
        include('../vues/nav.php');
         $msg = $_GET['msg'];
    ?>

    <section class="container_cnx">
        <h1 class="titre1_cnx">Se connecter</h1>
        <h4 class="titre2_cnx">Veuillez vous identifier ou vous inscrire</h4>

        <input type='checkbox' id='form-switch'>
            <form id='login-form' action="../vues/authentification.php" method='POST'>
                <input name="usr" type="text" placeholder="Username" required>
                <input name="pwd" type="password" placeholder="Password" required>

                <div class="contain_buttonLog">
                    <div class="buttonLog">
                        <button id="button_LogAreg" name='submit' type='submit'>Se connecter</button>
                        <label for="form-switch"><span>S'inscrire</span></label>
                    </div>
                </div>
            </form>

            <form id='register-form' action="../vues/inscription.php" method='POST'>
                <input name="usr" type="text" placeholder="Username" required>
                <input name="mail" type="email" placeholder="Email" required>
                <input name="pwd" type="password" placeholder="Password" required>
                <input name="repwd" type="password" placeholder="Re password" required>

                <div class="contain_buttonLog">
                    <div class="buttonLog">
                        <button id="button_LogAreg" type='submit'>S'inscrire</button>
                        <label for="form-switch">Se connecter</label>
                    </div>
                </div>

            </form>

            <?php if ($msg == 'Connexion réussie !'){
                        echo "<p class='verte'>$msg</p>";
                    }

                    else if($msg == 'Vous êtes inscrit !'){
                        echo "<p class='verte'>$msg</p>";
                    }

                    else if($msg == NULL){
                        echo '';
                    }

                    else{
                        echo "<p class='rouge'>$msg</p>";  
                    }           

            ?>

    </section>

    <?php include('../vues/foot.php');?>
</body>
</html>